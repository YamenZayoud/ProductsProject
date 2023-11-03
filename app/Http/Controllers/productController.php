<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;


use Illuminate\Http\Request;

class productController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
         $products = Product::all();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            
        $data = $request->validate([
            'name' => 'required|string',
            'price' => 'required|decimal:0,4',
            'discription' => 'required',
            'category_id' => 'required',
            
        ]);
            
        $newProduct = Product::create($data);

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        
        $chosenProduct = Product::find($product);
        
       return view('products.show', compact('chosenProduct'));
     
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        $editProduct = Product::find($product);
        return view('products.edit', compact('editProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function update(Product $product, Request $request){

       
        $data = $request->validate([
            'name' => 'required|string',
            'price' => 'required|decimal:0,4',
            'discription' => 'required',
            'category_id' => 'required',
            
    ]);

           
            
            $product->update($data);
          return redirect(route('products.index'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {   
       $deleteProduct = Product::find($product);
       $deleteProduct->delete();
        return  redirect()->route('products.index');
    }


    public function ShowProducts($id){

        $category = Category::where('id',$id)->first();
       $products=  $category->products;
       
        return view('products.index', compact('products'));
    }


    public function ShowOrders(){

        $user =auth()->user();
       $orders =  $user->orders;

        return view('products.ShowOrders' , compact('orders'));
    }


    public function search(Request $request){

        $product = $request->query->get('Search');

        
        $product = Product::where('name', $product )->get();
        $chosenProduct = $product[0];
      
        
        return view('products.show', compact('chosenProduct'));




    }

    

    
}
