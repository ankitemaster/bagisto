@extends('layouts.master')

@section('content')
<main class="main">
            <div class="banner banner-cat" style="background-image: url('assets/images/banners/banner-top-2.jpg');">
                <div class="banner-content container">
                    <h2 class="banner-subtitle">check out over <span>200+</span></h2>
                    <h1 class="banner-title">
                        INCREDIBLE deals
                    </h1>
                    <a href="category-6col.html#" class="btn btn-primary">Shop Now</a>
                </div><!-- End .banner-content -->
            </div><!-- End .banner -->
            
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="category-6col.html#">Men</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Accessories</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="container">
                <nav class="toolbox">
                    <div class="toolbox-left">
                        <div class="toolbox-item toolbox-sort">
                            <div class="select-custom">
                                <select name="orderby" class="form-control">
                                    <option value="menu_order" selected="selected">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </div><!-- End .select-custom -->

                            <a href="category-6col.html#" class="sorter-btn" title="Set Ascending Direction"><span class="sr-only">Set Ascending Direction</span></a>
                        </div><!-- End .toolbox-item -->
                    </div><!-- End .toolbox-left -->

                    <div class="toolbox-item toolbox-show">
                            <label>Showing 1–9 of 60 results</label>
                        </div><!-- End .toolbox-item -->

                    <div class="layout-modes">
                        <a href="category.html" class="layout-btn btn-grid active" title="Grid">
                            <i class="icon-mode-grid"></i>
                        </a>
                        <a href="category-list.html" class="layout-btn btn-list" title="List">
                            <i class="icon-mode-list"></i>
                        </a>
                    </div><!-- End .layout-modes -->
                </nav>

                        <div class="row row-sm">
                            <div class="col-6 col-md-4 col-xl-2">
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
                                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button> 
                                        </div>
                                    </div><!-- End .product-details -->
                                </div>
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-2">
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
                                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button> 
                                        </div>
                                    </div><!-- End .product-details -->
                                </div>
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-2">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-3.jpg">
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
                                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button> 
                                        </div>
                                    </div><!-- End .product-details -->
                                </div>
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-2">
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
                                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button> 
                                        </div>
                                    </div><!-- End .product-details -->
                                </div>
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-2">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-5.jpg">
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
                                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button> 
                                        </div>
                                    </div><!-- End .product-details -->
                                </div>
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-2">
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
                                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button> 
                                        </div>
                                    </div><!-- End .product-details -->
                                </div>
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-2">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-7.jpg">
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
                                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button> 
                                        </div>
                                    </div><!-- End .product-details -->
                                </div>
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-2">
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
                                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button> 
                                        </div>
                                    </div><!-- End .product-details -->
                                </div>
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-2">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-9.jpg">
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
                                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button> 
                                        </div>
                                    </div><!-- End .product-details -->
                                </div>
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-2">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-10.jpg">
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
                                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button> 
                                        </div>
                                    </div><!-- End .product-details -->
                                </div>
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-2">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-11.jpg">
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
                                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button> 
                                        </div>
                                    </div><!-- End .product-details -->
                                </div>
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-2">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-12.jpg">
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
                                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button> 
                                        </div>
                                    </div><!-- End .product-details -->
                                </div>
                            </div><!-- End .col-xl-3 -->
                        </div>

                <nav class="toolbox toolbox-pagination">
                    <div class="toolbox-item toolbox-show">
                        <label>Showing 1–9 of 60 results</label>
                    </div><!-- End .toolbox-item -->

                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link page-link-btn" href="category-6col.html#"><i class="icon-angle-left"></i></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="category-6col.html#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="category-6col.html#">2</a></li>
                        <li class="page-item"><a class="page-link" href="category-6col.html#">3</a></li>
                        <li class="page-item"><a class="page-link" href="category-6col.html#">4</a></li>
                        <li class="page-item"><span>...</span></li>
                        <li class="page-item"><a class="page-link" href="category-6col.html#">15</a></li>
                        <li class="page-item">
                            <a class="page-link page-link-btn" href="category-6col.html#"><i class="icon-angle-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div><!-- End .container -->

            <div class="mb-5"></div><!-- margin -->
        </main>
@stop