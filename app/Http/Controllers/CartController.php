<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Order_details;
use App\Helper\Cart;
use Auth;

class CartController extends Controller
{
    public function add(Request $req, $id)
    {
        $product = Products::find($id);
        $quantity = $req->quantity;
        $attribute_size_id = $req->attribute_size_id;
        $attribute_color_id = $req->attribute_color_id;
        $cart = new Cart();
        $cart->add($product, $quantity, $attribute_size_id, $attribute_color_id);
        return redirect()->route('show_card');
    }
    public function show(Cart $cart)
    {
        // dd($cart->getItem());
        return view('user.cart', compact('cart'));
    }
    public function update(Request $req, $id)
    {
        $quantity = $req->quantity;
        $cart = new Cart();
        $cart->update($id, $quantity);
        return redirect()->back();
    }
    public function delete(Cart $cart, $id)
    {
        $cart->delete($id);
        return redirect()->back();
    }

    // ------ checkout ----------- //
    public function checkout()
    {
        if (Auth::check()) {
            return view('user.receipt');
        } else {
            return redirect()->route('login')->with('notification', 'Vui Lòng Đăng Nhập Để Tiếp Tục Mua Hàng');
        }
    }
    public function Postcheckout(Request $request, Cart $cart)
    {
        try {
            $total_qty = 0;
            $total_price = 0;
            foreach ($cart->getItem() as $key => $value) {
                $total_price = $cart->totalPrice_ship();
                $total_qty += $value['quantity'];
            }
            $order = Orders::create([
                'user_id' => Auth::user()->id,
                'name' => $request->full_name,
                "total_quantity" => $total_qty,
                "total_price" => $total_price,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'note' => $request->note
            ]);
            foreach ($cart->getItem() as $item) {
                $order_dt = Order_details::create([
                    'order_id' => $order->id,
                    'pro_id' => $item['id'],
                    'name' => $item['name'],
                    'quantity' => $item['quantity'],
                    'unit_price' => $item['quantity'] * $item['price'],
                    'size' => $item['attribute_size_id']
                ]);
            }
            $cart->remove();
            return redirect()->route('user.index')->with('notification', 'Cảm Ơn Bạn Đã Mua Hàng');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
