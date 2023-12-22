<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items'; 
    //protected $primaryKey = 'item_id';

    protected $fillable = [
        'item_id',
        'name',
        'description',
        'image',
        'price',
        'discount',
    ];
}
