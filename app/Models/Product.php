<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category ',
        'brand',
        'unit',
        'minimum_purchase_qty',
        'maximum_purchase_qty',
        'refundable',
        'thumbnail_image',
        'unit_price',
        'discount ',
        'quantity ',
        'description',
    ];
}
