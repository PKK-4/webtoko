@extends('layouts.app')

@section('content')
    <!-- banner area start -->
    <div class="banner-area">
        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="single-banner">
                    <a href="#"><img src="assets/img/banner/1.jpg" alt="" class="img-fluid"></a>
                    <div class="banner-content banner-content-style1">
                        <h2>BLUE <br> <span>Glasses</span></h2>
                        <p class="text-white">Lorem Ipsum is simply dummy text of the printing.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner">
                    <a href="#"><img src="assets/img/banner/2.jpg" alt="" class="img-fluid"></a>
                    <div class="banner-content banner-content-style2">
                        <span>-  Up to  -</span>
                        <h2>30% off</h2>
                        <p>Black Friday Discount</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner">
                    <a href="#"><img src="assets/img/banner/3.jpg" alt="" class="img-fluid"></a>
                    <div class="banner-content banner-content-style2">
                        <h2>Trand <br>2018.</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->

    <!-- product area start -->
    <div class="product-area pt-115 pb-120">
        <div class="pl-100 pr-100">
            <div class="container-fluid">
                <div class="section-title text-center mb-60">
                    <h2>New Arrivals</h2>
                </div>
                <div class="product-style">
                    <div class="arrival-active owl-carousel">

                        @foreach($trending as $item)
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{ url('products/'. $item->img_barang) }}" alt="">
                                </a>
                                <span>hot</span>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#detail{{$item->id}}" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4 class="text-truncate"><a href="product-details.html"> {{ $item->nama_barang }} </a></h4>
                                <span>@currency($item->harga)</span>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product area end -->
    <!-- banner area two start -->
    <div class="banner-area-two">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner-wrapper mrgn-r-4">
                        <a href="#"><img src="assets/img/banner/4.jpg" alt=""></a>
                        <div class="banner-wrapper-content">
                            <h3>20% <br><span>off</span></h3>
                            <h2><span>Trending</span> <br>Fashion <br>2022...</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="row no-gutters">
                        <div class="col-lg-12">
                            <div class="banner-wrapper mrgn-b-4">
                                <a href="#"><img src="assets/img/banner/5.jpg" alt=""></a>
                                <div class="banner-wrapper-content2">
                                    <h3>Winter <br>Collection.</h3>
                                    <a href="#">shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="banner-wrapper mrgn-r-4">
                                        <a href="#"><img src="assets/img/banner/6.jpg" alt=""></a>
                                        <div class="banner-wrapper-content3">
                                            <h3><span>new</span> <br>fashion</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="banner-wrapper">
                                        <a href="#"><img src="assets/img/banner/7.jpg" alt=""></a>
                                        <div class="banner-wrapper-content4">
                                            <h4 class="text-white">25 December.</h4>
                                            <h2>Gift Shop</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area two end -->
    <!-- all products area start -->
    <div class="all-products-area pt-115 pb-50">
        <div class="pl-100 pr-100">
            <div class="container-fluid">
                <div class="section-title text-center mb-60">
                    <h2>All Products</h2>
                </div>
                <div class="product-style">
                    <div class="product-tab-list text-center mb-95 nav product-menu-mrg" role="tablist">
                        <a class="active" href="#home1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                            <h4>all </h4>
                        </a>
                        <a href="#home2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                            <h4>woman </h4>
                        </a>
                        <a href="#home3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                            <h4>man</h4>
                        </a>
                        <a href="#home4" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home4">
                            <h4>ACCESSORIES</h4>
                        </a>
                        <a href="#home5" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home5">
                            <h4>kids</h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="home1" role="tabpanel">
                            <div class="custom-row">
                                @foreach($barang as $item)
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{ url('products/'. $item->img_barang) }}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#detail{{$item->id}}" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html" class="text-truncate">{{$item->nama_barang}}</a></h4>
                                            <span>@currency($item->harga)</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>




                        <div class="tab-pane fade" id="home2" role="tabpanel">
                            <div class="custom-row">
                                @foreach($barang as $item)
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{ url('products/'. $item->img_barang) }}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#detail{{$item->id}}" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html" class="text-truncate">{{$item->nama_barang}}</a></h4>
                                            <span>@currency($item->harga)</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>


                        <div class="tab-pane fade" id="home3" role="tabpanel">
                            <div class="custom-row">
                                @foreach($barang as $item)
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{ url('products/'. $item->img_barang) }}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#detail{{$item->id}}" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html" class="text-truncate">{{$item->nama_barang}}</a></h4>
                                            <span>@currency($item->harga)</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id="home4" role="tabpanel">
                            <div class="custom-row">
                                @foreach($barang as $item)
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{ url('products/'. $item->img_barang) }}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#detail{{$item->id}}" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html" class="text-truncate">{{$item->nama_barang}}</a></h4>
                                            <span>@currency($item->harga)</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>


                        <div class="tab-pane fade" id="home5" role="tabpanel">
                            <div class="custom-row">
                                @foreach($barang as $item)
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{ url('products/'. $item->img_barang) }}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#detail{{$item->id}}" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html" class="text-truncate">{{$item->nama_barang}}</a></h4>
                                            <span>@currency($item->harga)</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- all products area end -->
    <!-- brand logo area start -->
    <div class="brand-logo-area pl-100 pr-100">
        <div class="ptb-135 gray-bg">
            <div class="brand-logo-active owl-carousel">
                <div class="single-brand">
                    <img src="assets/img/brand-logo/1.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/2.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/1.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/3.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/4.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/5.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/6.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- brand logo area end -->
    <!-- banner3 area start -->
    <div class="banner-area3 pt-120 pb-115">
        <div class="pl-100 pr-100">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-12 col-lg-4 col-xl-4">
                        <div class="banner-wrapper mrgn-negative">
                            <a href="#"><img src="assets/img/banner/8.jpg" alt=""></a>
                            <div class="banner-wrapper2-content">
                                <h3 class="text-warning">Speatial </h3>
                                <h2 class="text-warning">Style</h2>
                                <span class="text-warning">Start from $299.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8 col-xl-8">
                        <div class="row no-gutters banner-mrg">
                            <div class="col-md-6">
                                <div class="banner-wrapper mrgn-b-5 mrgn-r-5 ">
                                    <img src="assets/img/banner/9.jpg" alt="">
                                    <div class="banner-wrapper3-content banner-text-color">
                                        <a href="#" class="text-white">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner-wrapper mrgn-b-5">
                                    <img src="assets/img/banner/10.jpg" alt="">
                                    <div class="banner-wrapper3-content banner-text-color" >
                                        <a href="#" class="text-white">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner-wrapper mrgn-r-5">
                                    <img src="assets/img/banner/11.jpg" class="img-fluid" alt="">
                                    <div class="banner-wrapper3-content banner-text-color">
                                        <a href="#" class="text-white">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner-wrapper">
                                    <img src="assets/img/banner/12.jpg" alt="">
                                    <div class="banner-wrapper3-content banner-text-color">
                                        <a href="#" class="text-white">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner3 area end -->
    <!-- insta feed start -->
    <div class="insta-feed ptb-120  gray-bg">
        <div class="pl-185 pr-185">
            <div class="section-title-2 text-center mb-50">
                <h2>Insta Feed</h2>
                <h4>Follow us on intagram. <span>@budget.loww</span></h4>
            </div>
            <div class="instafeed-wrapper">
                <div class="instafeed-active owl-carousel">
                    <div class="instafeed-img">
                        <img src="assets/img/instra/1.jpg" alt="">
                    </div>
                    <div class="instafeed-img">
                        <img src="assets/img/instra/2.jpg" alt="">
                    </div>
                    <div class="instafeed-img">
                        <img src="assets/img/instra/3.jpg" alt="">
                    </div>
                    <div class="instafeed-img">
                        <img src="assets/img/instra/4.jpg" alt="">
                    </div>
                    <div class="instafeed-img">
                        <img src="assets/img/instra/5.jpg" alt="">
                    </div>
                    <div class="instafeed-img">
                        <img src="assets/img/instra/2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- insta feed end -->

    @foreach($barang as $item)
    <!-- modal -->
    <div class="modal fade" id="detail{{$item->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="pe-7s-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog modal-quickview-width" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="qwick-view-left">
                        <div class="quick-view-learg-img">
                            <div class="quick-view-tab-content tab-content">
                                <img src="{{ url('products/'. $item->img_barang) }}" class="img-fluid" alt="">
                                {{-- <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                    <img src="assets/img/quick-view/l1.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal2" role="tabpanel">
                                    <img src="assets/img/quick-view/l2.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal3" role="tabpanel">
                                    <img src="assets/img/quick-view/l3.jpg" alt="">
                                </div> --}}
                            </div>
                        </div>
                        {{-- <div class="quick-view-list nav" role="tablist">
                            <a class="active" href="#modal1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                                <img src="assets/img/quick-view/s1.jpg" alt="">
                            </a>
                            <a href="#modal2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                                <img src="assets/img/quick-view/s2.jpg" alt="">
                            </a>
                            <a href="#modal3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                                <img src="assets/img/quick-view/s3.jpg" alt="">
                            </a>
                        </div> --}}
                    </div>
                    <div class="qwick-view-right">
                        <div class="qwick-view-content" style="overflow-y: scroll; width: 100%; height: 300px;">
                            <h3>{{$item->nama_barang}}</h3>
                            <div class="price">
                                <span class="new">@currency($item->harga)</span>
                                {{-- <span class="old">$120.00  </span> --}}
                            </div>
                            <div class="rating-number">
                                <div class="quick-view-rating">
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                                <div class="quick-view-number">
                                    <span>2 Ratting (S)</span>
                                </div>
                            </div>

                            <span style="font-size: 18px; font-weight: 500; color: black;"><b>Spesifikasi</b></span>
                            <p>{{$item->spesifikasi}}</p>

                            <span style="font-size: 18px; font-weight: 500; color: black;"><b>Keunggulan</b></span>
                            <p>{{$item->keunggulan}}</p>

                            <span style="font-size: 18px; font-weight: 500; color: black;"><b>Lainnya</b></span>
                            <p>{{$item->lainnya}}</p>

                            <div class="quickview-plus-minus">
                                <div class="quickview-btn-cart" style="margin-left: -10px;">
                                    <a class="btn-hover-black" href="#">Beli Sekarang</a>
                                </div>
                                <div class="quickview-btn-wishlist">
                                    <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection










