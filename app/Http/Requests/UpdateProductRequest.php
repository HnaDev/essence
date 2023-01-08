<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            // 'name'=>'required|min:3',
            // 'price'=>'required|numeric',
            // // 'image'=> 'mimes:jpg,bmp,png',
            // 'category_id'=>'same:null',
            // 'brand_id'=>'same:null',
            // 'color_id'=>'required',
            // 'size_id'=>'required',
            // 'year'=>'required',
            // 'stock'=>'required',
            // 'origin'=>'required',
            // 'status'=>'required',
            // 'description'=>'required'
=======
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'image' => 'required|mimes:jpg,bmp,png',
            'category_id' => 'required',
            'brand_id' => 'required',
            'color_id' => 'required',
            'size_id' => 'required',
            'year' => 'required',
            'stock' => 'required',
            'origin' => 'required',
            'status' => 'required',
            'description' => 'required'
>>>>>>> 8176c4a371794fe8a9d3b9431b3e988c6332ec66
        ];
    }
    public function messages()
    {
        return [
<<<<<<< HEAD
            // 'name.required'=>'Tên sản phẩm không được để rỗng',
            // 'name.min'=>'Tên sản phẩm phải nhiều hơn 3 ký tự',
            // 'price.required'=>'Giá sản phẩm không được để rỗng',
            // 'price.numeric'=>'Giá sản phẩm phải là dữ liệu số',
            // 'image.required'=> 'Chưa chọn ảnh',
            // 'image.mimes'=> 'Ảnh chưa đúng định dạng',
            // 'category_id.same'=>'Chưa chọn danh mục',
            // 'brand_id.same'=>'Chưa chọn thương hiệu',
            // 'color_id.required'=>'Chưa chọn màu',
            // 'size_id.required'=>'Chưa chọn kích thước',
            // 'year.required'=>'Chưa nhập năm sản xuất',
            // 'stock.required'=>'Chưa nhập tồn kho',
            // 'origin.required'=>'Chưa nhập xuất xứ',
            // 'status.required'=>'Chưa chọn trạng thái',
            // 'description.required'=>'Chưa nhập mô tả'
=======
            'name.required' => 'Tên sản phẩm không được để rỗng',
            'name.min' => 'Tên sản phẩm phải nhiều hơn 3 ký tự',
            'price.required' => 'Giá sản phẩm không được để rỗng',
            'price.numeric' => 'Giá sản phẩm phải là dữ liệu số',
            'image.required' => 'Chưa chọn ảnh',
            'image.mimes' => 'Ảnh chưa đúng định dạng',
            'category_id.required' => 'Chưa chọn danh mục',
            'brand_id.required' => 'Chưa chọn thương hiệu',
            'color_id.required' => 'Chưa chọn màu',
            'size_id.required' => 'Chưa chọn kích thước',
            'year.required' => 'Chưa nhập năm sản xuất',
            'stock.required' => 'Chưa nhập tồn kho',
            'origin.required' => 'Chưa nhập xuất xứ',
            'status.required' => 'Chưa chọn trạng thái',
            'description.required' => 'Chưa nhập mô tả'
>>>>>>> 8176c4a371794fe8a9d3b9431b3e988c6332ec66
        ];
    }
}
