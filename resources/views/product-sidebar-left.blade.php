@extends('layouts.master')

@section('content')
<main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="product-sidebar-left.html#">Electronics</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Headsets</li>
                    </ol>
                </div><!-- End .container -->
            </nav>
            <div class="container">
                <div class="row">
                    <div class="sidebar-overlay"></div>
                    <div class="sidebar-toggle"><i class="icon-sliders"></i></div>
                    <aside class="sidebar-product col-lg-3 mobile-sidebar">
                        <div class="sidebar-wrapper">
                            <div class="widget widget-collapse">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="product-sidebar-left.html#widget-body-1" role="button" aria-expanded="true" aria-controls="widget-body-1">electronics</a>
                                </h3>

                                <div class="collapse show" id="widget-body-1">
                                    <div class="widget-body">
                                        <ul class="cat-list">
                                            <li><a href="product-sidebar-left.html#">Smart TVs</a></li>
                                            <li><a href="product-sidebar-left.html#">Cameras</a></li>
                                            <li><a href="product-sidebar-left.html#">Head Phones</a></li>
                                            <li><a href="product-sidebar-left.html#">Games</a></li>
                                        </ul>
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget widget-banner">
                                <div class="banner banner-image">
                                    <a href="product-sidebar-left.html#">
                                        <img src="assets/images/banners/banner-sidebar.jpg" alt="Banner Desc">
                                    </a>
                                </div><!-- End .banner -->
                            </div><!-- End .widget -->

                            <div class="widget widget-featured">
                                <h3 class="widget-title">Featured Products</h3>
                                
                                <div class="widget-body">
                                    <div class="owl-carousel widget-featured-products">
                                        <div class="featured-col">
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="assets/images/products/product-1.jpg">
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2 class="product-title">
                                                        <a href="product.html">Product Short Name</a>
                                                    </h2>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div><!-- End .price-box -->
                                                </div><!-- End .product-details -->
                                            </div>
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="assets/images/products/product-2.jpg">
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2 class="product-title">
                                                        <a href="product.html">Product Short Name</a>
                                                    </h2>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div><!-- End .price-box -->
                                                </div><!-- End .product-details -->
                                            </div>
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="assets/images/products/product-3.jpg">
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2 class="product-title">
                                                        <a href="product.html">Product Short Name</a>
                                                    </h2>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div><!-- End .price-box -->
                                                </div><!-- End .product-details -->
                                            </div>
                                        </div><!-- End .featured-col -->

                                        <div class="featured-col">
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="assets/images/products/product-4.jpg">
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2 class="product-title">
                                                        <a href="product.html">Product Short Name</a>
                                                    </h2>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div><!-- End .price-box -->
                                                </div><!-- End .product-details -->
                                            </div>
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="assets/images/products/product-5.jpg">
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2 class="product-title">
                                                        <a href="product.html">Product Short Name</a>
                                                    </h2>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div><!-- End .price-box -->
                                                </div><!-- End .product-details -->
                                            </div>
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="assets/images/products/product-6.jpg">
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2 class="product-title">
                                                        <a href="product.html">Product Short Name</a>
                                                    </h2>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div><!-- End .price-box -->
                                                </div><!-- End .product-details -->
                                            </div>
                                        </div><!-- End .featured-col -->
                                    </div><!-- End .widget-featured-slider -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .widget -->
                        </div>
                    </aside><!-- End .col-md-3 -->

                    <div class="col-lg-9">
                        <div class="product-single-container product-single-default">
                            <div class="row">
                                <div class="col-lg-7 col-md-6">
                                    <div class="product-single-gallery">
                                        <div class="product-slider-container product-item">
                                            <div class="product-single-carousel owl-carousel owl-theme">
                                                <div class="product-item">
                                                    <img class="product-single-image" src="assets/images/products/zoom/product-1.jpg" data-zoom-image="assets/images/products/zoom/product-1-big.jpg"/>
                                                </div>
                                                <div class="product-item">
                                                    <img class="product-single-image" src="assets/images/products/zoom/product-2.jpg" data-zoom-image="assets/images/products/zoom/product-2-big.jpg"/>
                                                </div>
                                                <div class="product-item">
                                                    <img class="product-single-image" src="assets/images/products/zoom/product-3.jpg" data-zoom-image="assets/images/products/zoom/product-3-big.jpg"/>
                                                </div>
                                                <div class="product-item">
                                                    <img class="product-single-image" src="assets/images/products/zoom/product-4.jpg" data-zoom-image="assets/images/products/zoom/product-4-big.jpg"/>
                                                </div>
                                            </div>
                                            <!-- End .product-single-carousel -->
                                            <span class="prod-full-screen">
                                                <i class="icon-plus"></i>
                                            </span>
                                        </div>
                                        <div class="prod-thumbnail row owl-dots" id='carousel-custom-dots'>
                                            <div class="col-3 owl-dot">
                                                <img src="assets/images/products/zoom/product-1.jpg"/>
                                            </div>
                                            <div class="col-3 owl-dot">
                                                <img src="assets/images/products/zoom/product-2.jpg"/>
                                            </div>
                                            <div class="col-3 owl-dot">
                                                <img src="assets/images/products/zoom/product-3.jpg"/>
                                            </div>
                                            <div class="col-3 owl-dot">
                                                <img src="assets/images/products/zoom/product-4.jpg"/>
                                            </div>
                                        </div>
                                    </div><!-- End .product-single-gallery -->
                                </div><!-- End .col-lg-7 -->

                                <div class="col-lg-5 col-md-6">
                                    <div class="product-single-details">
                                        <h1 class="product-title">Silver Porto Headset</h1>

                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->

                                            <a href="product-sidebar-left.html#" class="rating-link">( 6 Reviews )</a>
                                        </div><!-- End .product-container -->

                                        <div class="price-box">
                                            <span class="old-price">$81.00</span>
                                            <span class="product-price">$101.00</span>
                                        </div><!-- End .price-box -->

                                        <div class="product-desc">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.</p>
                                        </div><!-- End .product-desc -->

                                        <div class="product-filters-container">
                                            <div class="product-single-filter">
                                                <label>Colors:</label>
                                                <ul class="config-swatch-list">
                                                    <li class="active">
                                                        <a href="product-sidebar-left.html#" style="background-color: #6085a5;"></a>
                                                    </li>
                                                    <li>
                                                        <a href="product-sidebar-left.html#" style="background-color: #ab6e6e;"></a>
                                                    </li>
                                                    <li>
                                                        <a href="product-sidebar-left.html#" style="background-color: #b19970;"></a>
                                                    </li>
                                                    <li>
                                                        <a href="product-sidebar-left.html#" style="background-color: #11426b;"></a>
                                                    </li>
                                                </ul>
                                            </div><!-- End .product-single-filter -->
                                        </div><!-- End .product-filters-container -->

                                        <div class="product-action">
                                            <div class="product-single-qty">
                                                <input class="horizontal-quantity form-control" type="text">
                                            </div><!-- End .product-single-qty -->

                                            <a href="cart.html" class="paction add-cart" title="Add to Cart">
                                                <span>Add to Cart</span>
                                            </a>
                                        </div><!-- End .product-action -->

                                        <div class="product-single-share">
                                            <label>Share:</label>
                                            <!-- www.addthis.com share plugin-->
                                            <div class="addthis_inline_share_toolbox"></div>
                                        </div><!-- End .product single-share -->
                                    </div><!-- End .product-single-details -->
                                </div><!-- End .col-lg-5 -->
                            </div><!-- End .row -->
                        </div><!-- End .product-single-container -->

                        <div class="product-single-collapse" id="productAccordion">
                            <div class="product-collapse-panel">
                                <h3 class="product-collapse-title">
                                    <a data-toggle="collapse" href="product-sidebar-left.html#product-collapse-desc" role="button" aria-expanded="true" aria-controls="product-collapse-desc">Description</a>
                                </h3>

                                <div class="product-collapse-body collapse show" id="product-collapse-desc" data-parent="#productAccordion">
                                    <div class="collapse-body-wrapper">
                                        <div class="product-desc-content">
                                            <img src="assets/images/products/single/product-img.jpg" alt="image desc" class="float-right">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                                            <ul>
                                                <li><i class="icon-ok"></i>Any Product types that You want - Simple, Configurable</li>
                                                <li><i class="icon-ok"></i>Downloadable/Digital Products, Virtual Products</li>
                                                <li><i class="icon-ok"></i>Inventory Management with Backordered items</li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>

                                            <br>

                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="feature-box feature-box-simple text-center">
                                                        <i class="icon-star"></i>

                                                        <div class="feature-box-content">
                                                            <h3>Dedicated Service</h3>
                                                            <p>Consult our specialists for help with an order, customization, or design advice</p>
                                                        </div><!-- End .feature-box-content -->
                                                    </div><!-- End .feature-box -->
                                                </div><!-- End .col-md-4 -->
                                                
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="feature-box feature-box-simple text-center">
                                                        <i class="icon-reply"></i>

                                                        <div class="feature-box-content">
                                                            <h3>Free Returns</h3>
                                                            <p>We stand behind our goods and services and want you to be satisfied with them.</p>
                                                        </div><!-- End .feature-box-content -->
                                                    </div><!-- End .feature-box -->
                                                </div><!-- End .col-md-4 -->

                                                <div class="col-sm-6 col-md-4">
                                                    <div class="feature-box feature-box-simple text-center">
                                                        <i class="icon-paper-plane"></i>

                                                        <div class="feature-box-content">
                                                            <h3>International Shipping</h3>
                                                            <p>Currently over 50 countries qualify for express international shipping.</p>
                                                        </div><!-- End .feature-box-content -->
                                                    </div><!-- End .feature-box -->
                                                </div><!-- End .col-md-4 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .product-desc-content -->
                                    </div><!-- End .collapse-body-wrapper -->
                                </div><!-- End .product-collapse-body -->
                            </div><!-- End .product-collapse-panel -->

                            <div class="product-collapse-panel">
                                <h3 class="product-collapse-title">
                                    <a class="collapsed" data-toggle="collapse" href="product-sidebar-left.html#product-collapse-tags" role="button" aria-expanded="false" aria-controls="product-collapse-tags">Tags</a>
                                </h3>

                                <div class="product-collapse-body collapse" id="product-collapse-tags" data-parent="#productAccordion">
                                    <div class="collapse-body-wrapper">
                                        <div class="product-tags-content">
                                            <form action="#">
                                                <h4>Add Your Tags:</h4>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-sm" required>
                                                    <input type="submit" class="btn btn-primary" value="Add Tags">
                                                </div><!-- End .form-group -->
                                            </form>
                                            <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                        </div><!-- End .product-tags-content -->
                                    </div><!-- End .collapse-body-wrapper -->
                                </div><!-- End .product-collapse-body -->
                            </div><!-- End .product-collapse-panel -->

                            <div class="product-collapse-panel">
                                <h3 class="product-collapse-title">
                                    <a class="collapsed" data-toggle="collapse" href="product-sidebar-left.html#product-collapse-reviews" role="button" aria-expanded="false" aria-controls="product-collapse-reviews">Reviews</a>
                                </h3>

                                <div class="product-collapse-body collapse" id="product-collapse-reviews" data-parent="#productAccordion">
                                    <div class="collapse-body-wrapper">
                                        <div class="product-reviews-content">
                                            <div class="collateral-box">
                                                <ul>
                                                    <li>Be the first to review this product</li>
                                                </ul>
                                            </div><!-- End .collateral-box -->

                                            <div class="add-product-review">
                                                <h3 class="text-uppercase heading-text-color font-weight-semibold">WRITE YOUR OWN REVIEW</h3>
                                                <p>How do you rate this product? *</p>

                                                <form action="#">
                                                    <table class="ratings-table">
                                                        <thead>
                                                            <tr>
                                                                <th>&nbsp;</th>
                                                                <th>1 star</th>
                                                                <th>2 stars</th>
                                                                <th>3 stars</th>
                                                                <th>4 stars</th>
                                                                <th>5 stars</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Quality</td>
                                                                <td>
                                                                    <input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Value</td>
                                                                <td>
                                                                    <input type="radio" name="value[1]" id="Value_1" value="1" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="value[1]" id="Value_2" value="2" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="value[1]" id="Value_3" value="3" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="value[1]" id="Value_4" value="4" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="value[1]" id="Value_5" value="5" class="radio">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Price</td>
                                                                <td>
                                                                    <input type="radio" name="price[1]" id="Price_1" value="1" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="price[1]" id="Price_2" value="2" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="price[1]" id="Price_3" value="3" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="price[1]" id="Price_4" value="4" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="price[1]" id="Price_5" value="5" class="radio">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <div class="form-group">
                                                        <label>Nickname <span class="required">*</span></label>
                                                        <input type="text" class="form-control form-control-sm" required>
                                                    </div><!-- End .form-group -->
                                                    <div class="form-group">
                                                        <label>Summary of Your Review <span class="required">*</span></label>
                                                        <input type="text" class="form-control form-control-sm" required>
                                                    </div><!-- End .form-group -->
                                                    <div class="form-group mb-2">
                                                        <label>Review <span class="required">*</span></label>
                                                        <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                                    </div><!-- End .form-group -->

                                                    <input type="submit" class="btn btn-primary" value="Submit Review">
                                                </form>
                                            </div><!-- End .add-product-review -->
                                        </div><!-- End .product-reviews-content -->
                                    </div><!-- End .collapse-body-wrapper -->
                                </div><!-- End .product-collapse-body -->
                            </div><!-- End .product-collapse-panel -->
                        </div><!-- End .product-single-collapse -->
                        
                        <div class="featured-section pt-sm bg-white">
                            <h2 class="carousel-title">Featured Products</h2>
                    <div class="owl-carousel owl-theme owl-nav-top" data-toggle="owl" data-owl-options="{
                        'margin' : 20,
                        'items' : 2,
                        'responsive' : {
                            '768': {
                                'items': 3
                            },
                            '992': {
                                'items': 4
                            }
                        }
                    }" >
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
                                    <a href="product-sidebar-left.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                    <a href="product-sidebar-left.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                    <a href="product-sidebar-left.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                    <a href="product-sidebar-left.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                    <a href="product-sidebar-left.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                    </div><!-- End .featured-products -->
                        </div><!-- End .featured-section -->
                    </div><!-- End .col-lg-9 -->
                </div><!-- End .row -->

                <div class="mb-lg-4"></div><!-- margin -->
            </div><!-- End .container -->
        </main>
@stop