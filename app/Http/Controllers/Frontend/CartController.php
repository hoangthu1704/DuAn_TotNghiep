<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function AddToCart(Request $request, $id)
    {

        // 
    } // End Method


    public function AddToCartDetails(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        Cart::add([
            'id' => $id,
            'name' => $product->product_name,
            'qty' => $request->quantity ?? 1,
            'price' => $product->selling_price,
            'weight' => 0,
            'options' => [
                'image' => $product->image
            ]
        ]);

        return response()->json([
            'success' => 'Sản phẩm đã được thêm vào giỏ hàng!'
        ]);// End Method
    }




    public function AddMiniCart()
    {

        // 
    } // End Method



    public function RemoveMiniCart($rowId)
    {
        // 
    } // End Method


    public function MyCart()
    {
        // $cart = session()->get('cart', []);
        $carts = Cart::content();
        // dd($cart); // Kiểm tra dữ liệu giỏ hàng
        return view('frontend.mycart.view_mycart', compact('carts'));
    } // End Method

    //update cart
    public function UpdateCart($id, $change)
    {

    }//end method


    public function GetCartProduct()
    {

        // 
    } // End Method


    public function CartRemove($rowId)
    {
        // 
    } // End Method


    public function CartDecrement($rowId)
    {

        // 
    } // End Method


    public function CartIncrement($rowId)
    {

        // 
    } // End Method



    public function CouponApply(Request $request)
    {

        // 
    } // End Method


    public function CouponCalculation()
    {

        // 
    } // End Method

    public function CouponRemove()
    {

        // 
    } // End Method


    public function CheckoutCreate()
    {

        // 
    } // End Method


}
