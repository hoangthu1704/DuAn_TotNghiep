<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class WishlistController extends Controller
{
    public function AddToWishList(Request $request, $product_id)
    {
        if (!Auth::check()) {
            return response()->json(['status' => 'error', 'message' => 'Bạn phải đăng nhập!'], 401);
        }

        $user_id = Auth::id();
        $product = Product::find($product_id);

        if (!$product) {
            return response()->json(['error' => 'Sản phẩm không tồn tại!'], 404);
        }

        $exists = Wishlist::where('user_id', $user_id)
            ->where('product_id', $product_id)
            ->exists();

        if ($exists) {
            return response()->json(['error' => 'Sản phẩm đã có trong danh sách yêu thích!'], 409);
        }

        // Thêm vào wishlist
        Wishlist::create([
            'user_id' => $user_id,
            'product_id' => $product_id,
        ]);

        return response()->json(['success' => 'Sản phẩm đã được thêm vào danh sách yêu thích!'], 200);
    }//end method



    public function AllWishlist()
    {

        return view('frontend.wishlist.view_wishlist');
    } // End Method 


    public function GetWishlistProduct()
    {

        // 

    } // End Method


    public function WishlistRemove($id)
    {
        // 
    } // End Method


}
