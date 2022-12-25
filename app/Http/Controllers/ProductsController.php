<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function product()
    {
        return view('admin.pages.product');
    }
    public function product_add()
    {
        return view('admin.pages.product_add');
    }
}
