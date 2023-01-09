<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categories;
use App\Models\Brands;
use App\Models\Attributes;
use App\Models\Promotions;
use App\Models\Product_images;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductsController extends Controller
{
    public function product()
    {
        $products = Products::all();
        return view('admin.pages.product', compact('products'));
    }
    public function product_add()
    {
        $category = Categories::all();
        $brand = Brands::all();
        $size = Attributes::where('name', 'size')->get();
        $color = Attributes::where('name', 'color')->get();
        $promotion = Promotions::all();
        return view('admin.pages.product_add', compact('category', 'brand', 'size', 'promotion', 'color'));
    }

    //Create
    public function product_create(CreateProductRequest $req)
    {
        if ($req->hasFile('image')) {
            $file = $req->image;
            $file_name = $file->getClientOriginalName();
            $file->move('upload.product', $file_name);
        }
        //Thêm mới sản phẩm
        $product = Products::create([
            'name' => $req->name,
            'price' => $req->price,
            'sale_price' => $req->sale_price,
            'description' => $req->description,
            'size_id' => $req->size_id,
            'color_id' => $req->color_id,
            'image' => $file_name,
            'status' => $req->status,
            'category_id' => $req->category_id,
            'brand_id' => $req->brand_id,
            'promotion_id' => $req->promotion_id,
            'origin' => $req->origin,
            'year' => $req->year,
            'stock' => $req->stock
        ]);
        if ($product) {
            if ($req->hasFile('images')) {
                $files = $req->images;

                foreach ($files as $key => $f) {
                    $file_name1 = $f->getClientOriginalName();
                    $f->move(public_path('upload.product'), $file_name1);
                    Product_images::create([
                        'product_id' => $product->id,
                        'image' => $file_name1
                    ]);
                }

            }
        }
        return redirect()->route('admin.product')->with('notification', 'Thêm mới thành công');

        // $file_name = $file->getClientOriginalName();
        // $file->move('upload.product',$file_name);
    }



    // $Products = Products::create($req->all());
    // if($Products){
    //     return redirect()->route('admin.product')->with('notification','Thêm Mới Thành Công');
    // }


    //Update_show
    public function product_update_show($id)
    {
        $category = Categories::all();
        $brand = Brands::all();
        $size = Attributes::where('name', 'size')->get();
        $color = Attributes::where('name', 'color')->get();
        $promotion = Promotions::all();
        $product = Products::find($id);
        $product_images = Product_images::where('product_id', $id)->get();
        return view('admin.pages.product_update_show', compact('product', 'product_images', 'category', 'brand', 'size', 'promotion', 'color'));

    }

    //Update
    public function product_update(UpdateProductRequest $req, $id)
    {

        $product_update = Products::find($id);
        if ($req->hasFile('image')) {
            $file = $req->image;
            $file_name = $file->getClientOriginalName();
            $file->move('upload.product', $file_name);
        } else {
            $file_name = $product_update->image;
        }
        //Sửa sản phẩm
        $product_update = products::where('id', $id)->update([
            'name' => $req->name,
            'price' => $req->price,
            'sale_price' => $req->sale_price,
            'description' => $req->description,
            'size_id' => $req->size_id,
            'color_id' => $req->color_id,
            'image' => $file_name,
            'status' => $req->status,
            'category_id' => $req->category_id,
            'brand_id' => $req->brand_id,
            'promotion_id' => $req->promotion_id,
            'origin' => $req->origin,
            'year' => $req->year,
            'stock' => $req->stock
        ]);

        if ($product_update) {
            $product_images_update = Product_images::find($id);
            if ($req->hasFile('images')) {
                $files = $req->images;
                foreach ($files as $key => $f) {
                    $file_name1 = $f->getClientOriginalName();
                    $f->move(public_path('upload.product'), $file_name1);
                    Product_images::update([
                        'product_id' => $product->id,
                        'image' => $file_name1
                    ]);
                }
                ;
            } else {
                $file_name1 = $product_images_update->image;
            }
        }
        return redirect()->route('admin.product')->with('notification', 'Cập nhật Thành Công');
    }


    // Delete
    public function product_delete($id)
    {
        $product_images = Product_images::where('product_id', $id)->delete();
        $Products = Products::find($id)->delete();
        return redirect()->back()->with('notification', 'Xóa Thành Công');
    }
}
// $product =Products::find($id);
// if($req->hasFile('image')){
//     $file = $req->image;
//     $file_name = $file->getClientOriginalName();
//     $file->move('upload.product',$file_name);
// } else{
//     $file_name = $product->image;
// }


// $product->update(
//     [
//         'name'=>$req->name,
//         'price'=>$req->price,
//         'sale_price'=>$req->sale_price,
//         'description'=>$req->description,
//         'size_id'=>$req->size_id,
//         'color_id'=>$req->color_id,
//         'image'=>$file_name,
//         'status'=>$req->status,
//         'category_id'=>$req->category_id,
//         'brand_id'=>$req->brand_id,
//         'promotion_id'=>$req->promotion_id,
//         'origin'=>$req->origin,
//         'year'=>$req->year,
//         'stock'=>$req->stock
//     ]);
