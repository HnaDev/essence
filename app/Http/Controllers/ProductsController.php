<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Categories;
use App\Models\Brands;
use App\Models\Attributes;
use App\Models\Promotions;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductsController extends Controller
{
    public function product()
    {
        $products = Products::all();
        return view('admin.pages.product',compact('products'));
    }
    public function product_add()
    {  
        $category = Categories::all();
        $brand = Brands::all();
        $size = Attributes::where('type','size')->get();
        $color = Attributes::where('type','color')->get();
        $promotion = Promotions::all();
        return view('admin.pages.product_add',compact('category','brand','size','promotion','color'));
    }

    //Create
    public function product_create(CreateProductRequest $req)
    {
        
        if($req->hasFile('image')){
        $file = $req->image;
        $file_name = $file->getClientOriginalName();
        $file->move('upload.product',$file_name);
        } else{
            $file_name = '';
        }
        try {
            Products::create([
                'name'=>$req->name,
                'price'=>$req->price,
                'sale_price'=>$req->sale_price,
                'description'=>$req->description,
                'size_id'=>$req->size_id,
                'color_id'=>$req->color_id,
                'image'=>$file_name,
                'status'=>$req->status,
                'category_id'=>$req->category_id,
                'brand_id'=>$req->brand_id,
                'promotion_id'=>$req->promotion_id,
                'origin'=>$req->origin,
                'year'=>$req->year,
                'stock'=>$req->stock
            ]);
            return redirect()->route('admin.product')->with('success','Thêm mới thành công');
        } catch (\Throwable $th) {
            //throw $th;
        }
        // $Products = Products::create($req->all());
        // if($Products){
        //     return redirect()->route('admin.product')->with('notification','Thêm Mới Thành Công');
        // }
    }

    //Update_show
    public function product_update_show($id)
    {
        $category = Categories::all();
        $brand = Brands::all();
        $size = Attributes::where('type','size')->get();
        $color = Attributes::where('type','color')->get();
        $promotion = Promotions::all();
        $product = Products::find($id);

        return view('admin.pages.product_update_show',compact('product','category','brand','size','promotion','color'));
    
    }

    //Update
    public function product_update(UpdateProductRequest $req, $id)
    {   
        $product =Products::find($id);
        if($req->hasFile('image')){
            $file = $req->image;
            $file_name = $file->getClientOriginalName();
            $file->move('upload.product',$file_name);
        } else{
            $file_name = $product->image;
        }

        
        $product->update(
            [
                'name'=>$req->name,
                'price'=>$req->price,
                'sale_price'=>$req->sale_price,
                'description'=>$req->description,
                'size_id'=>$req->size_id,
                'color_id'=>$req->color_id,
                'image'=>$file_name,
                'status'=>$req->status,
                'category_id'=>$req->category_id,
                'brand_id'=>$req->brand_id,
                'promotion_id'=>$req->promotion_id,
                'origin'=>$req->origin,
                'year'=>$req->year,
                'stock'=>$req->stock
            ]);
            return redirect()->route('admin.product')->with('notification','Cập nhật Thành Công');
    }

    // Delete
    public function product_delete($id)
    {
        $Products = Products::find($id)->delete();
        return redirect()->back()->with('notification','Xóa Thành Công');
    }
}
