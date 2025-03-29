@extends('frontend.master_dashboard')
@section('main')

@section('title')
Home Easy Multi Vendor Shop
@endsection

@include('frontend.home.home_slider')

<!--End hero slider-->
@include('frontend.home.home_features_category')

<!--End category slider-->
@include('frontend.home.home_banner')
<!--End banners-->


@include('frontend.home.home_new_product')

<!--Products Tabs-->



@include('frontend.home.home_features_product')


<!--End Best Sales-->
<!-- Fashion Category -->

<section class="product-tabs section-padding position-relative">
    <div class="container">
        <div class="section-title style-2 wow animate__animated animate__fadeIn">
            <h3>Fashion Category </h3>

        </div>
        <!--End nav-tabs-->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                <div class="row product-grid-4">
                    <div class="row product-grid-4">
                        @foreach (\App\Models\Product::whereIn('category_id', [4])->inRandomOrder()->limit(10)->get()
                        as $pd)
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn"
                                data-wow-delay=".1s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a
                                            href="{{ route('product.detail', ['id'=>$pd->id, 'slug'=>$pd->product_slug]) }}">
                                            <img class="default-img" src="{{ $pd->product_thumnail }}"
                                                alt="{{ $pd->product_name }}" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" id="{{ $pd->id }}"
                                            onclick="addToWishList(this.id)">
                                            <i class="fi-rs-heart"></i>
                                        </a>
                                        <a aria-label="Compare" class="action-btn" id="{{ $pd->id }}"
                                            onclick="addToCompare(this.id)">
                                            <i class="fi-rs-shuffle"></i>
                                        </a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal" id="{{ $pd->id }}"
                                            onclick="productView(this.id)">
                                            <i class="fi-rs-eye"></i>
                                        </a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        @if ($pd->discount_price && $pd->selling_price > $pd->discount_price)
                                        @php
                                        $discountPercent = round((($pd->selling_price - $pd->discount_price) /
                                        $pd->selling_price) * 100);
                                        @endphp
                                        <span class="hot">-{{ $discountPercent }} %</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <!-- ✅ Hiển thị tên danh mục động -->
                                    <div class="product-category">
                                        @php
                                        $category = \App\Models\Category::where('id', $pd->category_id)->first();
                                        @endphp

                                        <a
                                            href="{{ route('product.category', ['id' => $category->id, 'slug' => $category->category_slug]) }}">
                                            {{ $category->category_name }}
                                        </a>

                                    </div>

                                    <h2>
                                        <a
                                            href="{{ route('product.detail', ['id'=>$pd->id, 'slug'=>$pd->product_slug]) }}">
                                            {{ $pd->product_name }}
                                        </a>
                                    </h2>

                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block"></div>
                                        <span class="font-small ml-5 text-muted">({{ $pd->product_qty }})</span>
                                    </div>

                                    <div>
                                        <span class="font-small text-muted">By <a href="vendor-details-1.html"> @php
                                                $brand = \App\Models\Brand::find($pd->brand_id);
                                                @endphp
                                                @if ($brand)
                                                <span class="font-small text-muted"> <a
                                                        href="vendor-details-1.html">{{ $brand->brand_name }}</a></span>
                                                @endif</a></span>
                                    </div>

                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            @if ($pd->discount_price && $pd->selling_price > $pd->discount_price)
                                            <span>${{ number_format($pd->discount_price, 0, ',', '.') }}</span>
                                            <span
                                                class="old-price">${{ number_format($pd->selling_price, 0, ',', '.') }}</span>
                                            @else
                                            <span>${{ number_format($pd->selling_price, 0, ',', '.') }}</span>
                                            @endif
                                        </div>

                                        <div class="add-cart">
                                            <a class="add" href="shop-cart.html">
                                                <i class="fi-rs-shopping-cart mr-5"></i>Add
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>


                <!--End product-grid-4-->
            </div>


        </div>
        <!--End tab-content-->
    </div>


</section>
<!--End Fashion Category -->





<!-- SweetHome Category -->

<section class="product-tabs section-padding position-relative">
    <div class="container">
        <div class="section-title style-2 wow animate__animated animate__fadeIn">
            <h3>Sweet Home Category </h3>

        </div>
        <!--End nav-tabs-->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                <div class="row product-grid-4">
                    @foreach (\App\Models\Product::whereIn('category_id', [9])->inRandomOrder()->limit(10)->get()
                    as $pd)
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="{{ route('product.detail', ['id'=>$pd->id, 'slug'=>$pd->product_slug]) }}">
                                        <img class="default-img" src="{{ $pd->product_thumnail }}"
                                            alt="{{ $pd->product_name }}" />
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" id="{{ $pd->id }}"
                                        onclick="addToWishList(this.id)">
                                        <i class="fi-rs-heart"></i>
                                    </a>
                                    <a aria-label="Compare" class="action-btn" id="{{ $pd->id }}"
                                        onclick="addToCompare(this.id)">
                                        <i class="fi-rs-shuffle"></i>
                                    </a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                        data-bs-target="#quickViewModal" id="{{ $pd->id }}"
                                        onclick="productView(this.id)">
                                        <i class="fi-rs-eye"></i>
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    @if ($pd->discount_price && $pd->selling_price > $pd->discount_price)
                                    @php
                                    $discountPercent = round((($pd->selling_price - $pd->discount_price) /
                                    $pd->selling_price) * 100);
                                    @endphp
                                    <span class="hot">-{{ $discountPercent }} %</span>
                                    @endif
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <!-- ✅ Hiển thị tên danh mục động -->
                                <div class="product-category">
                                    @php
                                    $category = \App\Models\Category::where('id', $pd->category_id)->first();
                                    @endphp

                                    <a
                                        href="{{ route('product.category', ['id' => $category->id, 'slug' => $category->category_slug]) }}">
                                        {{ $category->category_name }}
                                    </a>
                                </div>

                                <h2>
                                    <a href="{{ route('product.detail', ['id'=>$pd->id, 'slug'=>$pd->product_slug]) }}">
                                        {{ $pd->product_name }}
                                    </a>
                                </h2>

                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block"></div>
                                    <span class="font-small ml-5 text-muted">({{ $pd->product_qty }})</span>
                                </div>

                                <div>
                                    <span class="font-small text-muted">By <a href="vendor-details-1.html"> @php
                                            $brand = \App\Models\Brand::find($pd->brand_id);
                                            @endphp
                                            @if ($brand)
                                            <span class="font-small text-muted"> <a
                                                    href="vendor-details-1.html">{{ $brand->brand_name }}</a></span>
                                            @endif</a></span>
                                </div>

                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        @if ($pd->discount_price && $pd->selling_price > $pd->discount_price)
                                        <span>${{ number_format($pd->discount_price, 0, ',', '.') }}</span>
                                        <span
                                            class="old-price">${{ number_format($pd->selling_price, 0, ',', '.') }}</span>
                                        @else
                                        <span>${{ number_format($pd->selling_price, 0, ',', '.') }}</span>
                                        @endif
                                    </div>

                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.html">
                                            <i class="fi-rs-shopping-cart mr-5"></i>Add
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!--End product-grid-4-->
            </div>


        </div>
        <!--End tab-content-->
    </div>


</section>
<!--End SweetHome Category -->









<!-- Mobile Category -->

<section class="product-tabs section-padding position-relative">
    <div class="container">
        <div class="section-title style-2 wow animate__animated animate__fadeIn">
            <h3>Mobiles Category </h3>

        </div>
        <!--End nav-tabs-->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                <div class="row product-grid-4">

                    @foreach (\App\Models\Product::whereIn('category_id', [8])->inRandomOrder()->limit(10)->get()
                    as $pd)
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="{{ route('product.detail', ['id'=>$pd->id, 'slug'=>$pd->product_slug]) }}">
                                        <img class="default-img" src="{{ $pd->product_thumnail }}"
                                            alt="{{ $pd->product_name }}" />
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" id="{{ $pd->id }}"
                                        onclick="addToWishList(this.id)">
                                        <i class="fi-rs-heart"></i>
                                    </a>
                                    <a aria-label="Compare" class="action-btn" id="{{ $pd->id }}"
                                        onclick="addToCompare(this.id)">
                                        <i class="fi-rs-shuffle"></i>
                                    </a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                        data-bs-target="#quickViewModal" id="{{ $pd->id }}"
                                        onclick="productView(this.id)">
                                        <i class="fi-rs-eye"></i>
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    @if ($pd->discount_price && $pd->selling_price > $pd->discount_price)
                                    @php
                                    $discountPercent = round((($pd->selling_price - $pd->discount_price) /
                                    $pd->selling_price) * 100);
                                    @endphp
                                    <span class="hot">-{{ $discountPercent }} %</span>
                                    @endif
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <!-- ✅ Hiển thị tên danh mục động -->
                                <div class="product-category">
                                    @php
                                    $category = \App\Models\Category::where('id', $pd->category_id)->first();
                                    @endphp

                                    <a
                                        href="{{ route('product.category', ['id' => $category->id, 'slug' => $category->category_slug]) }}">
                                        {{ $category->category_name }}
                                    </a>
                                </div>

                                <h2>
                                    <a href="{{ route('product.detail', ['id'=>$pd->id, 'slug'=>$pd->product_slug]) }}">
                                        {{ $pd->product_name }}
                                    </a>
                                </h2>

                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block"></div>
                                    <span class="font-small ml-5 text-muted">({{ $pd->product_qty }})</span>
                                </div>

                                <div>
                                    <span class="font-small text-muted">By <a href="vendor-details-1.html"> @php
                                            $brand = \App\Models\Brand::find($pd->brand_id);
                                            @endphp
                                            @if ($brand)
                                            <span class="font-small text-muted"> <a
                                                    href="vendor-details-1.html">{{ $brand->brand_name }}</a></span>
                                            @endif</a></span>
                                </div>

                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        @if ($pd->discount_price && $pd->selling_price > $pd->discount_price)
                                        <span>${{ number_format($pd->discount_price, 0, ',', '.') }}</span>
                                        <span
                                            class="old-price">${{ number_format($pd->selling_price, 0, ',', '.') }}</span>
                                        @else
                                        <span>${{ number_format($pd->selling_price, 0, ',', '.') }}</span>
                                        @endif
                                    </div>

                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.html">
                                            <i class="fi-rs-shopping-cart mr-5"></i>Add
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div>
                <!--End product-grid-4-->
            </div>


        </div>
        <!--End tab-content-->
    </div>


</section>
<!--End Mobile Category -->






<section class="section-padding mb-30">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 wow animate__animated animate__fadeInUp"
                data-wow-delay="0">
                <h4 class="section-title style-1 mb-30 animated animated"> Hot Deals </h4>
                <div class="product-list-small animated animated">
                    <!-- start hot deals -->
                    @php
                    use App\Models\Product;
                    $products = Product::where('status', 1)->inRandomOrder()->take(3)->get();
                    $products_hot = Product::where('status', 0)->inRandomOrder()->take(3)->get();
                    @endphp
                    @foreach ($products as $pd)
                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href="{{ route('product.detail', ['id'=>$pd->id, 'slug'=>$pd->product_slug]) }}">
                                <img src="{{$pd->product_thumnail}}" alt="Infinix Hot 12 Play" />
                            </a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="{{ route('product.detail', ['id'=>$pd->id, 'slug'=>$pd->product_slug]) }}">
                                    {{$pd->product_name}} </a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                @if ($pd->discount_price && $pd->selling_price > $pd->discount_price)
                                <span>${{ number_format($pd->discount_price, 0, ',', '.') }}</span>
                                <span class="old-price">${{ number_format($pd->selling_price, 0, ',', '.') }}</span>
                                @else
                                <span>${{ number_format($pd->selling_price, 0, ',', '.') }}</span>
                                @endif
                            </div>
                        </div>
                    </article>
                    @endforeach
                    <!-- end hot deals -->


                </div>
            </div>




            <div class="col-xl-3 col-lg-4 col-md-6 mb-md-0 wow animate__animated animate__fadeInUp"
                data-wow-delay=".1s">
                <h4 class="section-title style-1 mb-30 animated animated"> Special Offer </h4>
                <div class="product-list-small animated animated">
                    <!-- start hot deals -->

                    @foreach ($products_hot as $pd)
                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href="{{ route('product.detail', ['id'=>$pd->id, 'slug'=>$pd->product_slug]) }}">
                                <img src="{{$pd->product_thumnail}}" alt="Infinix Hot 12 Play" />
                            </a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="{{ route('product.detail', ['id'=>$pd->id, 'slug'=>$pd->product_slug]) }}">
                                    {{$pd->product_name}} </a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                @if ($pd->discount_price && $pd->selling_price > $pd->discount_price)
                                <span>${{ number_format($pd->discount_price, 0, ',', '.') }}</span>
                                <span class="old-price">${{ number_format($pd->selling_price, 0, ',', '.') }}</span>
                                @else
                                <span>${{ number_format($pd->selling_price, 0, ',', '.') }}</span>
                                @endif
                            </div>
                        </div>
                    </article>
                    @endforeach
                    <!-- end hot deals -->

                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-lg-block wow animate__animated animate__fadeInUp"
                data-wow-delay=".2s">
                <h4 class="section-title style-1 mb-30 animated animated">Recently added</h4>
                <div class="product-list-small animated animated">



                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"><img
                                    src="https://digi-poly.id.vn/upload/products/thambnail/1740391924552351.webp"
                                    alt="" /></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"> APPLE iPhone
                                    13 (Pink, 128 GB) </a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>$1000</span>
                                <span class="old-price">$1200</span>
                            </div>
                        </div>
                    </article>

                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"><img
                                    src="https://digi-poly.id.vn/upload/products/thambnail/1740391863075855.webp"
                                    alt="" /></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"> SAMSUNG Galaxy
                                    F13 </a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>$500</span>

                            </div>

                        </div>
                    </article>

                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"><img
                                    src="https://digi-poly.id.vn/upload/products/thambnail/1740391793359745.webp"
                                    alt="" /></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"> SAMSUNG Galaxy
                                    F22 </a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>$1000</span>
                                <span class="old-price">$1200</span>
                            </div>
                        </div>
                    </article>



                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-xl-block wow animate__animated animate__fadeInUp"
                data-wow-delay=".3s">
                <h4 class="section-title style-1 mb-30 animated animated"> Special Deals </h4>
                <div class="product-list-small animated animated">



                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"><img
                                    src="https://digi-poly.id.vn/upload/products/thambnail/1740391997743770.webp"
                                    alt="" /></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"> APPLE iPhone
                                    13 (Starlight, 128 GB) </a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>$1000</span>
                                <span class="old-price">$1100</span>
                            </div>
                        </div>
                    </article>

                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"><img
                                    src="https://digi-poly.id.vn/upload/products/thambnail/1740391924552351.webp"
                                    alt="" /></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"> APPLE iPhone
                                    13 (Pink, 128 GB </a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>$1000</span>
                                <span class="old-price">$1200</span>
                            </div>
                        </div>
                    </article>

                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"><img
                                    src="https://digi-poly.id.vn/upload/products/thambnail/1740391863075855.webp"
                                    alt="" /></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"> SAMSUNG Galaxy
                                    F13 </a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>$500</span>

                            </div>

                        </div>
                    </article>




                </div>
            </div>
        </div>
    </div>
</section>
<!--End 4 columns-->




<!--Vendor List -->

@include('frontend.home.home_vendor_list')

<!--End Vendor List -->

@endsection