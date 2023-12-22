<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts'; 
    //protected $primaryKey = 'cart_id';

    protected $fillable = [
        'order_id',
        'cart_id',
        'user_id',
        'item_id',
        'quantity',
        'amount',
        'feedback',
        'status',
    ];
    
}
