<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'pro_id', 'order_id', 'name', 'quantity', 'unit_price', 'size', 'status', 'created_at', 'updated_at'];
<<<<<<< HEAD


    public function pro()
    {
        return $this->belongsTo(Products::class);
=======
    public function product()
    {
        return $this->belongsTo(Product::class);
>>>>>>> f7e07087f3be252c225cdd12e9b3307deee2d3fa
    }
    public function order()
    {
        return $this->belongsTo(Orders::class);
    }
}
