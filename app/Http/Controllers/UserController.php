<?php

namespace App\Http\Controllers;

use App\Helper\Cart;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;
use App\Models\Product_attrs;
use App\Models\Attributes;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Cart $cart)
    {
        $Categories = Categories::all();
        $popular = Products::orderBy('id','ASC')->limit(4)->get();
        $newpro = Products::orderBy('id','DESC')->limit(8)->get();
<<<<<<< HEAD
        return view('user.index',compact('Categories','popular','newpro'));
=======
        return view('user.index',compact('Categories','popular','newpro','cart'));
>>>>>>> 295101973918240179b13b0989d1b955b88e2445
    }
    public function product($id)
    {
        $prodetail = Products::find($id);
        return view('user.product_details',compact('prodetail'));
    }
    public function search()
    {
        return view('user.search');
    }
    public function OrderManagement()
    {
        return view('user.OrderManagement');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function shop()
    {
        return view('user.search');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
