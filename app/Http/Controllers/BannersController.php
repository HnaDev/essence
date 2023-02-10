<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Requests\Banner\bannersRequest;
use App\Models\Banner;

class BannersController extends Controller
{
    public function banners()
    {
        return view('admin.pages.banners');
    }
    public function banners_add()
    {
        $Category = Categories::all();
        return view('admin.pages.banners_add', compact('Category'));
    }
    // create brands
    public function banners_create(bannersRequest $req)
    {
        if ($req->hasFile('banner_img')) {
            $file = $req->banner_img;
            // get name
            $file_name = $file->getClientOriginalName();
            // go to folder
            $file->move('image_banner', $file_name);
        } else {
            $file_name = '';
        }
        try {
            Banner::create([
                'name' => $req->name,
                'banner_img' => $file_name,
                'status' => $req->status,
                'category_id' => $req->category_id
            ]);
            return redirect()->route('admin.banners')->with('notification', 'Thêm mới thành công');
        } catch (\Throwable $th) {
            throw $th;
        }
        die("O");
    }

    // show brands
    // public function brands_update_show($id)
    // {
    //     $Brands = Brands::find($id);
    //     return view('admin.pages.brands_update_show',compact('Brands'));
    // }

    // // update brands
    // public function brands_update_update (Request $req ,$id)
    // {
    //     $Brands = Brands::find($id);
    //     if ($req->hasFile('logo')) {
    //         $file = $req->logo;
    //         // get name
    //         $file_name = $file->getClientOriginalName();
    //         // go to folder
    //         $file->move('image_brands', $file_name);
    //     } else {
    //         $file_name = $Brands->logo;
    //     }
    //     try {
    //         $Brands->update([
    //             'name' => $req->name,
    //             'logo' => $file_name,
    //             'status' => $req->status,
    //         ]);
    //         return redirect()->route('admin.brands')->with('notification', 'Cập nhật thành công');
    //     } catch (\Throwable $th) {
    //         //throw $th;
    //     }
    // }
    // // delete brands
    // public function brands_delete($id)
    // {
    //     $Brands = Brands::find($id)->delete();
    //     return redirect()->back()->with('notification','Xóa Thành Công');
    // }
}
