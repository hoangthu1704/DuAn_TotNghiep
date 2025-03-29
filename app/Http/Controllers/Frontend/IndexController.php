<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class IndexController extends Controller
{

   public function Index()
   {
      $categories = Category::all();
      $banners = Banner::all();
      $products = Product::inRandomOrder()->limit(10)->get();
      return view('frontend.index', compact('categories', 'banners', 'products'));
   } // End Method 

   // product detail
   public function ProductDetails($id, $slug)
   {
      $categories = Category::all();
      $product = Product::find($id);

      $products = Product::where('category_id', $product->category_id)->take(4)->get();

      return view('frontend.product.product_details', compact('categories', 'product', 'products'));
   } // End Method 


   public function VendorDetails($id)
   {

      return view('frontend.vendor.vendor_details');
   } // End Method 


   public function VendorAll()
   {

      return view('frontend.vendor.vendor_all');
   } // End Method 

   // product category
   public function CatWiseProduct(Request $request, $id, $slug)
   {
      $sortOrder = $request->input('sort', 'asc'); // Sắp xếp mặc định tăng dần
      $selectedLimit = $request->input('limit', 15); // Lấy giới hạn từ request
      $page = (int) $request->input('page', 1); // Lấy số trang hiện tại

      // Nếu "All" được chọn, ta đặt limit rất lớn để lấy hết sản phẩm nhưng vẫn phân trang
      if ($selectedLimit === 'all') {
         $selectedLimit = PHP_INT_MAX; // Lấy toàn bộ sản phẩm nhưng vẫn chia trang
      } else {
         $selectedLimit = (int) $selectedLimit; // Ép kiểu về số nguyên
         if ($selectedLimit <= 0) {
            $selectedLimit = 15; // Mặc định là 15
         }
      }

      // Lấy danh sách danh mục và tên danh mục hiện tại
      $categories = Category::all();
      $category_name = Category::where('id', $id)->value('category_name');

      // Lấy danh sách sản phẩm theo danh mục
      $query = Product::where('category_id', $id);

      // Kiểm tra và áp dụng sắp xếp theo giá
      if (in_array($sortOrder, ['asc', 'desc'])) {
         $query->orderByRaw("CAST(IFNULL(discount_price, 0) AS UNSIGNED) $sortOrder");
      }

      // Tổng số sản phẩm trong danh mục
      $product_category_number = $query->count();

      // Tránh lỗi nếu không có sản phẩm
      if ($product_category_number == 0) {
         return view('frontend.product.category_view', compact(
            'categories',
            'category_name',
            'product_category_number'
         ));
      }

      // Nếu giới hạn là 1, thì chỉ hiển thị đúng 1 sản phẩm và không hiện trang khác
      if ($selectedLimit == 1) {
         $product_category = $query->paginate(1)->appends(['sort' => $sortOrder, 'limit' => $selectedLimit]);
         $total_pages = 1; // Chỉ có 1 trang duy nhất
      } else {
         $limit = 15; // Luôn hiển thị 15 sản phẩm mỗi trang
         $product_category = $query->paginate($limit)->appends(['sort' => $sortOrder, 'limit' => $selectedLimit]);
         $total_pages = $product_category->lastPage();
      }

      return view('frontend.product.category_view', compact(
         'categories',
         'product_category',
         'category_name',
         'product_category_number',
         'total_pages'
      ));
   }





   // End Method 



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
