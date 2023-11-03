<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_price',
        'status'
    ];


    public function products()

        {
          
            return $this->belongsToMany(Product::class, 'order_items')->withPivot('quantity');
        }


       
        public function quantities()
        {
            return $this->hasMany(OrderItem::class);
        }
}
