<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable =[

    "order_code",
    "num_of_products",
    "customer",
    "area",
    "amount",
    "delivery_status",
    "payment_status",
    "order_time",
    "refund"
    ];
}
