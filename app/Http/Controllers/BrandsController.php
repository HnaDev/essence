<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function brands()
    {
        return view('admin.pages.brands');
    }
    public function brands_add()
    {
        return view('admin.pages.brands_add');
    }
}
