<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;


class IndexController extends Controller
{

   public function Index()
   {
      return view('frontend.index');
   } // End Method 


   public function ProductDetails($id, $slug)
   {
       // Tìm sản phẩm theo ID và Slug
       $product = Product::where('id', $id)->where('product_slug', $slug)->first();

       if (!$product) {
           abort(404); // Nếu không tìm thấy sản phẩm, trả về lỗi 404
       }
      return view('frontend.product.product_details', compact('product'));
   } // End Method 


   public function VendorDetails($id)
   {

      return view('frontend.vendor.vendor_details');
   } // End Method 


   public function VendorAll()
   {

      return view('frontend.vendor.vendor_all');
   } // End Method 


   public function CatWiseProduct(Request $request, $id, $slug)
   {
      return view('frontend.product.category_view');
   } // End Method 



   public function ProductViewAjax($id)
   {
      //
   } // End Method 


   public function ProductSearch(Request $request)
   {
      return view('frontend.product.search');
   } // End Method 


   public function SearchProduct(Request $request)
   {
      return view('frontend.product.search_product');
   } // End Method 


}
