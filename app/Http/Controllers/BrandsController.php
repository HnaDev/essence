<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function brands()
    {
        $Brands = Brands::paginate(8);
        return view('admin.pages.brands', compact('Brands'));
    }
    public function brands_add()
    {

        return view('admin.pages.brands_add');
    }
}
