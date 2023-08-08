<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'category_id',
        'brand_id',
        'unit',
        'minimum_purchase_qty',
        'maximum_purchase_qty',
        'refundable',
        'thumbnail_image',
        'unit_price',
        'discount ',
        'quantity ',
        'description',
        'refundable'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
