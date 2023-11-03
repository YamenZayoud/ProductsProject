<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'price',
        'discription',
        'category_id',
        'created_at',
        'updated_at'

    ];
    protected $hidden = ['created_at','updated_at' ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');

    }
    
        
    public function orders()

        {
            return $this->belongsToMany(Order::class, 'order_items');
        }

    
}
