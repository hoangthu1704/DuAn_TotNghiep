<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon; //
use Carbon\Carbon; //
use Illuminate\Support\Facades\Session; //
use Gloudemans\Shoppingcart\Facades\Cart; //
class CartController extends Controller
{
    public function AddToCart(Request $request, $id)
    {

        //
    } // End Method


    public function AddToCartDetails(Request $request, $id)
    {
        //
    } // End Method


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
        return view('frontend.mycart.view_mycart');
    } // End Method


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



    public function CouponApply(Request $request){

        $coupon = Coupon::where('coupon_name',$request->coupon_name)->where('coupon_validity','>=',Carbon::now()->format('Y-m-d'))->first();

        if ($coupon) {
            Session::put('coupon',[
                'coupon_name' => $coupon->coupon_name,
                'coupon_discount' => $coupon->coupon_discount,
                'discount_amount' => round(Cart::total() * $coupon->coupon_discount/100),
                'total_amount' => round(Cart::total() - Cart::total() * $coupon->coupon_discount/100 )
            ]);

            return response()->json(array(
                'validity' => true,
                'success' => 'Coupon Applied Successfully'

            ));


        } else{
            return response()->json(['error' => 'Invalid Coupon']);
        }

    }// End Method


    public function CouponCalculation(){

        if (Session::has('coupon')) {

            return response()->json(array(
             'subtotal' => Cart::total(),
             'coupon_name' => session()->get('coupon')['coupon_name'],
             'coupon_discount' => session()->get('coupon')['coupon_discount'],
             'discount_amount' => session()->get('coupon')['discount_amount'],
             'total_amount' => session()->get('coupon')['total_amount'],
            ));
        }else{
            return response()->json(array(
                'total' => Cart::total(),
            ));
        }
    }// End Method

    public function CouponRemove(){

        Session::forget('coupon');
        return response()->json(['success' => 'Coupon Remove Successfully']);

    }// End Method


    public function CheckoutCreate()
    {

        //
    } // End Method


}
