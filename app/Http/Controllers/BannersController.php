<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use Illuminate\Http\Request;

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
    public function brands_create(BrandsRequest $req)
    {
        if ($req->hasFile('logo')) {
            $file = $req->logo;
            // get name
            $file_name = $file->getClientOriginalName();
            // go to folder
            $file->move('image_brands', $file_name);
        } else {
            $file_name = '';
        }
        try {
            Brands::create([
                'name' => $req->name,
                'logo' => $file_name,
                'status' => $req->status,
            ]);
            return redirect()->route('admin.brands')->with('notification', 'Thêm mới thành công');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    // show brands
    public function brands_update_show($id)
    {
        $Brands = Brands::find($id);
        return view('admin.pages.brands_update_show',compact('Brands'));
    }

    // update brands
    public function brands_update_update (Request $req ,$id)
    {
        $Brands = Brands::find($id);
        if ($req->hasFile('logo')) {
            $file = $req->logo;
            // get name
            $file_name = $file->getClientOriginalName();
            // go to folder
            $file->move('image_brands', $file_name);
        } else {
            $file_name = $Brands->logo;
        }
        try {
            $Brands->update([
                'name' => $req->name,
                'logo' => $file_name,
                'status' => $req->status,
            ]);
            return redirect()->route('admin.brands')->with('notification', 'Cập nhật thành công');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    // delete brands
    public function brands_delete($id)
    {
        $Brands = Brands::find($id)->delete();
        return redirect()->back()->with('notification','Xóa Thành Công');
    }
}
