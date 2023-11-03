<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use App\Models\SelectedItems;
use App\Models\OrderItem;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public $orderItem;

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function test($id)
    {
        if(view()->exists($id)){
            return view($id);
        }
        else
        {
            return view('404');
        }

     //   return view($id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.productsList', compact('products'));
    }

    public function UsersIndex()
    {
        $users = User::all();
        return view('products.usersList', compact('users'));
    }

    public function UserEdit($user)
    {
        $editUser = User::find($user);
        return view('products.userEdit', compact('editUser'));
    }

    public function UserUpdate(User $user, Request $request){

       
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
            'type' => 'required',]);
            
    
           $request->password = Hash::make($request->password);
           dd($request);
            
            $user->update($data);
          return redirect(route('usersList'));
        
    }

    public function userDelete($user)
    {   
       $deleteUser = User::find($user);
       $deleteUser->delete();
        return  redirect()->route('usersList');
    }
///////////////////////////////////////////////////////////////////////////////


    public function CategoryCreate(){


        return view('categories.create');
    }



    public function categoryStore(Request $request)
    {
        
            
        $data = $request->validate([

            'name' => 'required|string',
        
        ]);

         Category::create($data);

        return redirect()->route('products.index');
    }

    public function test1(Request $request)
    {
        
        
        $data = $request->validate([
            'product_id' => 'required|integer',
            'quantity' => 'required|integer',
          
       ]);
       
      

       $selectedItem = new SelectedItems();
       $selectedItem->product_id = $data['product_id'];
       $selectedItem->product_quantity = $data['quantity'];
       $selectedItem->user_id =auth()->user()->id;

       $selectedItem->save();

       
        return redirect()->route('products.index');
       
    }



    public function ShowSelectedItems(){

         
         $isEmpty = !DB::table('selected_items')->exists();

         if ($isEmpty) {
           
            return redirect()->route('products.index');

         } 
         
         
         else {
           
         
 
        $selectedItems = SelectedItems::all();

        for ($i=0; $i <count($selectedItems) ; $i++) { 
              $products_ids[$i] = $selectedItems[$i]->product_id;
            $quantities[$i]     = $selectedItems[$i]->product_quantity;
       }
        

     for ($i=0; $i <count($products_ids) ; $i++) { 
            $products[$i] = Product::find($products_ids[$i]);
        }
        $v=0;

        return view('products.ShowOrderItems' , compact(['quantities','products','v']));
        
    }
    }

    public function store()
    {  
        
        $selectedItems = SelectedItems::all();

            for ($i=0; $i <count($selectedItems) ; $i++) { 
                
                $products_ids[$i] = $selectedItems[$i]->product_id;
                $quantity[$i]     = $selectedItems[$i]->product_quantity;
            }   
       
            for ($i=0; $i <count($products_ids) ; $i++) { 
                $product[$i] = Product::find($products_ids[$i]);
            }

            $order = new Order();
            $order->user_id = auth()->user()->id;
            $order->total_price = 0;
            $order->save();

            $total_price = 0;

            for ($i=0; $i <count($products_ids) ; $i++) { 

                $product = Product::find($products_ids[$i]);

                $order_item = new OrderItem();
                $order_item->order_id = $order->id;
                $order_item->product_id = $products_ids[$i];
                $order_item->quantity = $quantity[$i];
                $order_item->price_per_item = $product->price;
                $order_item->price = $product->price*$quantity[$i];
                $order_item->save();


                $total_price +=$order_item->price;

            }
                 
        $order->total_price = $total_price ;
        $order->save();

       DB::table('selected_items')->truncate();

        
       return redirect()->route('products.index');
        
    }
    ///////////////////////////
    public function UserOrder(User $user){

       $orders = $user->orders;
       return $orders;





    }

    public function clearCart(){


        DB::table('selected_items')->truncate();



        return redirect()->route('products.index');
    }


    public function ShowUserOrders($user){

        $user = User::find($user);
        
       $orders =  $user->orders;

        return view('products.ShowOrders' , compact('orders'));
    }

    public function ShowOrderItems($order_id){

        $order = Order::find($order_id);
        
       $products =  $order->products;
       $Items =  OrderItem::where('order_id',$order_id)->get()->all();
       
       $quantities = array_column($Items, 'quantity');
       $v=1.1;
       

       return view('products.ShowOrderItems' , compact(['quantities','products','v']));
    }



    public function profile(){


        $users = User::get()->all();

        $i=0;
        $productQuantity  = 0;
        $TotalQuantity  = 0;
        

        foreach ($users as  $user) {
           
            $Orders    = $user->orders->where('status','accepted');
            
           // dd($acceptedOreders,$user);
            foreach ($Orders as  $order) {

                $Products = $order->products;
                
             //   dd($acceptedProducts);

                
                foreach ($Products as  $Product) {

                    $productQuantity = $Product->pivot->quantity;
                    $ArrOfProducts[$i] = [$Product,$productQuantity];

                    
                    $i++;
                    $TotalQuantity += $productQuantity;
                    
                }
            }
        } 

        $columnData = Order::pluck('total_price');
        $GrossSales = array_sum($columnData->all());
        $AllOreders = count(Order::get()->All());
        
       // dd($GrossSales);
       
        return view('products.profile' , compact('TotalQuantity' ,'AllOreders','GrossSales'));


    }

    public function ControlOrders(){

        $orders = Order::get();
        


        return view('products.controlOrders' , compact('orders'));


    }


}







