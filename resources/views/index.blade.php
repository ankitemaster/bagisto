@extends('layouts.master')

@section('content')
    <main class="main"> 
        <div class="home-top-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="banner banner-image">
                            <a href="index.html#">
                                <img src="assets/images/banners/banner-1.jpg" alt="banner">
                            </a>
                        </div><!-- End .banner -->
                    </div><!-- End .col-lg-5 -->

                    <div class="col-lg-7 top-banners">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="banner banner-image">
                                    <a href="index.html#">
                                        <img src="assets/images/banners/banner-2.jpg" alt="banner">
                                    </a>
                                </div><!-- End .banner -->

                                <div class="banner banner-image">
                                    <a href="index.html#">
                                        <img src="assets/images/banners/banner-3.jpg" alt="banner">
                                    </a>
                                </div><!-- End .banner -->
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-6">
                                <div class="banner banner-image">
                                    <a href="index.html#">
                                        <img src="assets/images/banners/banner-4.jpg" alt="banner">
                                    </a>
                                </div><!-- End .banner -->
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .col-lg-7 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .home-top-container -->

        <div class="container">
            <h2 class="subtitle">
                <span>Featured Products</span>
            </h2>
            
            <div class="featured-products owl-carousel owl-theme owl-nav-top">
                <div class="product-default">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/products/product-2.jpg">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
                        </h2>
                        <div class="price-box">
                            <span class="product-price">$32.00</span>
                        </div><!-- End .price-box -->
                        <div class="product-action">
                            <a href="index.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                        </div>
                    </div><!-- End .product-details -->
                </div>
                <div class="product-default">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/products/product-1.jpg">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
                        </h2>
                        <div class="price-box">
                            <span class="product-price">$32.00</span>
                        </div><!-- End .price-box -->
                        <div class="product-action">
                            <a href="index.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                        </div>
                    </div><!-- End .product-details -->
                </div>
                <div class="product-default">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/products/product-4.jpg">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
                        </h2>
                        <div class="price-box">
                            <span class="product-price">$32.00</span>
                        </div><!-- End .price-box -->
                        <div class="product-action">
                            <a href="index.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                        </div>
                    </div><!-- End .product-details -->
                </div>
                <div class="product-default">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/products/product-6.jpg">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
                        </h2>
                        <div class="price-box">
                            <span class="product-price">$32.00</span>
                        </div><!-- End .price-box -->
                        <div class="product-action">
                            <a href="index.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                        </div>
                    </div><!-- End .product-details -->
                </div>
                <div class="product-default">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/products/product-8.jpg">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
                        </h2>
                        <div class="price-box">
                            <span class="product-price">$32.00</span>
                        </div><!-- End .price-box -->
                        <div class="product-action">
                            <a href="index.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                        </div>
                    </div><!-- End .product-details -->
                </div>
            </div><!-- End .featured-products -->
        </div><!-- End .container -->

        <div class="mb-5"></div><!-- margin -->

        <div class="banners-section">
            <div class="container">
                <h2 class="subtitle text-center"><span>BROWSE OUR CATEGORIES</span></h2>
                <div class="cats-carousel owl-carousel owl-theme">
                    <div class="banner banner-image">
                        <a href="index.html#">
                            <img src="assets/images/banners/cats/banner-1.jpg" alt="banner">
                        </a>
                    </div><!-- End .banner -->

                    <div class="banner banner-image">
                        <a href="index.html#">
                            <img src="assets/images/banners/cats/banner-2.jpg" alt="banner">
                        </a>
                    </div><!-- End .banner -->

                    <div class="banner banner-image">
                        <a href="index.html#">
                            <img src="assets/images/banners/cats/banner-3.jpg" alt="banner">
                        </a>
                    </div><!-- End .banner -->

                    <div class="banner banner-image">
                        <a href="index.html#">
                            <img src="assets/images/banners/cats/banner-4.jpg" alt="banner">
                        </a>
                    </div><!-- End .banner -->

                    <div class="banner banner-image">
                        <a href="index.html#">
                            <img src="assets/images/banners/cats/banner-2.jpg" alt="banner">
                        </a>
                    </div><!-- End .banner -->
                </div><!-- End .cat-carousel -->
            </div><!-- End .container -->
        </div><!-- End .banners-section -->

        <div class="mb-5"></div><!-- margin -->

        <div class="container arrived-products">
            <h2 class="subtitle">
                <span>Just Arrived</span>
            </h2>

            <div class="row row-sm">

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon inner-icon-inline inner-btn">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-1.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                <a href="index.html#" class="btn-icon btn-icon-wish"><i class="icon-heart"></i></a>
                                <a href="ajax/product-quick-view.html" class="btn-icon btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                            </div>
                        </figure>
                        <div class="product-details text-center">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$15.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div><!-- End .col-xl-2 -->

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon inner-icon-inline inner-btn">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-2.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                <a href="index.html#" class="btn-icon btn-icon-wish"><i class="icon-heart"></i></a>
                                <a href="ajax/product-quick-view.html" class="btn-icon btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                            </div>
                        </figure>
                        <div class="product-details text-center">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$15.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div><!-- End .col-xl-2 -->

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon inner-icon-inline inner-btn">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-3.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                <a href="index.html#" class="btn-icon btn-icon-wish"><i class="icon-heart"></i></a>
                                <a href="ajax/product-quick-view.html" class="btn-icon btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                            </div>
                        </figure>
                        <div class="product-details text-center">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$15.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div><!-- End .col-xl-2 -->

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon inner-icon-inline inner-btn">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-4.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                <a href="index.html#" class="btn-icon btn-icon-wish"><i class="icon-heart"></i></a>
                                <a href="ajax/product-quick-view.html" class="btn-icon btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                            </div>
                        </figure>
                        <div class="product-details text-center">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$15.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div><!-- End .col-xl-2 -->

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon inner-icon-inline inner-btn">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-5.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                <a href="index.html#" class="btn-icon btn-icon-wish"><i class="icon-heart"></i></a>
                                <a href="ajax/product-quick-view.html" class="btn-icon btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                            </div>
                        </figure>
                        <div class="product-details text-center">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$15.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div><!-- End .col-xl-2 -->

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon inner-icon-inline inner-btn">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-6.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                <a href="index.html#" class="btn-icon btn-icon-wish"><i class="icon-heart"></i></a>
                                <a href="ajax/product-quick-view.html" class="btn-icon btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                            </div>
                        </figure>
                        <div class="product-details text-center">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$15.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div><!-- End .col-xl-2 -->

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon inner-icon-inline inner-btn">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-7.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                <a href="index.html#" class="btn-icon btn-icon-wish"><i class="icon-heart"></i></a>
                                <a href="ajax/product-quick-view.html" class="btn-icon btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                            </div>
                        </figure>
                        <div class="product-details text-center">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$15.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div><!-- End .col-xl-2 -->

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon inner-icon-inline inner-btn">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-8.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                <a href="index.html#" class="btn-icon btn-icon-wish"><i class="icon-heart"></i></a>
                                <a href="ajax/product-quick-view.html" class="btn-icon btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                            </div>
                        </figure>
                        <div class="product-details text-center">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$15.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div><!-- End .col-xl-2 -->

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon inner-icon-inline inner-btn">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-9.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                <a href="index.html#" class="btn-icon btn-icon-wish"><i class="icon-heart"></i></a>
                                <a href="ajax/product-quick-view.html" class="btn-icon btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                            </div>
                        </figure>
                        <div class="product-details text-center">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$15.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div><!-- End .col-xl-2 -->

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon inner-icon-inline inner-btn">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-10.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                <a href="index.html#" class="btn-icon btn-icon-wish"><i class="icon-heart"></i></a>
                                <a href="ajax/product-quick-view.html" class="btn-icon btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                            </div>
                        </figure>
                        <div class="product-details text-center">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$15.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div><!-- End .col-xl-2 -->

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon inner-icon-inline inner-btn">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-11.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                <a href="index.html#" class="btn-icon btn-icon-wish"><i class="icon-heart"></i></a>
                                <a href="ajax/product-quick-view.html" class="btn-icon btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                            </div>
                        </figure>
                        <div class="product-details text-center">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$15.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div><!-- End .col-xl-2 -->

                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon inner-icon-inline inner-btn">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-12.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                <a href="index.html#" class="btn-icon btn-icon-wish"><i class="icon-heart"></i></a>
                                <a href="ajax/product-quick-view.html" class="btn-icon btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                            </div>
                        </figure>
                        <div class="product-details text-center">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$15.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div><!-- End .col-xl-2 -->
            </div>
        </div><!-- End .container -->

        <div class="mb-5"></div><!-- margin -->
    

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="subtitle">
                        <span>Latest Blog Posts</span>
                    </h2>

                    <div class="blog-slider owl-carousel owl-theme">
                    <article class="entry">
                        <div class="entry-media">
                            <a href="single.html">
                                <img src="assets/images/blog/home/post-1.jpg" alt="Post">
                            </a>
                            <div class="entry-date">29<span>Now</span></div><!-- End .entry-date -->
                        </div><!-- End .entry-media -->

                        <div class="entry-body">
                            <h3 class="entry-title">
                                <a href="single.html">Fashion News</a>
                            </h3>
                            <div class="entry-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has...</p>

                                <a href="single.html" class="btn">Read More</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->

                    <article class="entry">
                        <div class="entry-media">
                            <a href="single.html">
                                <img src="assets/images/blog/home/post-2.jpg" alt="Post">
                            </a>
                            <div class="entry-date">30 <span>Now</span></div><!-- End .entry-date -->
                        </div><!-- End .entry-media -->

                        <div class="entry-body">
                            <h3 class="entry-title">
                                <a href="single.html">Fashion Trends</a>
                            </h3>
                            <div class="entry-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has...</p>

                                <a href="single.html" class="btn">Read More</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->

                    <article class="entry">
                        <div class="entry-media">
                            <a href="single.html">
                                <img src="assets/images/blog/home/post-1.jpg" alt="Post">
                            </a>
                            <div class="entry-date">28 <span>Now</span></div><!-- End .entry-date -->
                        </div><!-- End .entry-media -->

                        <div class="entry-body">
                            <h3 class="entry-title">
                                <a href="single.html">Women Fashion</a>
                            </h3>
                            <div class="entry-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has...</p>

                                <a href="single.html" class="btn">Read More</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                </div><!-- End .blog-carousel -->
                </div><!-- End .col-lg-6 -->

                <div class="col-lg-6">
                    <h2 class="subtitle">
                        <span>WHAT CLIENT'S SAY</span>
                    </h2>

                    <div class="testimonials-slider owl-carousel owl-theme">
                        <div class="testimonial">
                            <div class="testimonial-owner">
                                <figure>
                                    <img src="assets/images/clients/client1.png" alt="client">
                                </figure>

                                <div>
                                    <h4 class="testimonial-title">john Smith</h4>
                                    <span>Proto Co Ceo</span>
                                </div>
                            </div><!-- End .testimonial-owner -->

                            <blockquote>
                                <p>Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model. text, and a search.</p>
                            </blockquote>
                        </div><!-- End .testimonial -->

                        <div class="testimonial">
                            <div class="testimonial-owner">
                                <figure>
                                    <img src="assets/images/clients/client2.png" alt="client">
                                </figure>

                                <div>
                                    <h4 class="testimonial-title">Bob Smith</h4>
                                    <span>Proto Co Ceo</span>
                                </div>
                            </div><!-- End .testimonial-owner -->

                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mipsum dolor sit amet, consectetur elitad editors now use Lorem Ipsum as their default model. text, and a search.</p>
                            </blockquote>
                        </div><!-- End .testimonial -->
                    </div><!-- End .testimonials-slider -->
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="partners-container">
            <div class="container">
                <div class="partners-carousel owl-carousel owl-theme">
                    <a href="index.html#" class="partner">
                        <img src="assets/images/logos/1.png" alt="logo">
                    </a>
                    <a href="index.html#" class="partner">
                        <img src="assets/images/logos/2.png" alt="logo">
                    </a>
                    <a href="index.html#" class="partner">
                        <img src="assets/images/logos/3.png" alt="logo">
                    </a>
                    <a href="index.html#" class="partner">
                        <img src="assets/images/logos/4.png" alt="logo">
                    </a>
                    <a href="index.html#" class="partner">
                        <img src="assets/images/logos/5.png" alt="logo">
                    </a>
                    <a href="index.html#" class="partner">
                        <img src="assets/images/logos/2.png" alt="logo">
                    </a>
                    <a href="index.html#" class="partner">
                        <img src="assets/images/logos/1.png" alt="logo">
                    </a>
                </div><!-- End .partners-carousel -->
            </div><!-- End .container -->
        </div><!-- End .partners-container -->
    </main>
@stop