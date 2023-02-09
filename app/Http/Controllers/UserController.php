<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        $Categories = Categories::all();
        $popular = Products::orderBy('id','ASC')->limit(4)->get();
        $newpro = Products::orderBy('id','DESC')->limit(8)->get();
        return view('user.index',compact('Categories','popular','newpro'));
    }

    //Show chi tiết sản phẩm
    public function product($id)
    {
        $prodetail = Products::find($id);
        
        return view('user.product_details',compact('prodetail'));
    }
    //Show các sản phẩm của Woman
    public function womanpro()
    {
        $products = Products::Where('type','1')->get();
        // dd($products);
        return view('user.product_woman',compact('products'));
    }
    public function search()
    {
        return view('user.search');
    }
    public function receipt()
    {
        return view('user.receipt');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request)
    {
        //
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
