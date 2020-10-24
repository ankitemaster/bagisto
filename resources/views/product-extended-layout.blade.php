@extends('layouts.master')

@section('content')
<main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="product-extended-layout.html#">Electronics</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Headsets</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="product-single-container product-single-extended">
                <div class="container">
                    <div class="product-single-gallery product-item">
                        <div class="product-single-carousel owl-carousel owl-nav-simple">
                            <img class="product-single-image" src="assets/images/products/zoom/product-1.jpg" data-zoom-image="assets/images/products/zoom/product-1-big.jpg" alt="product"/>
                            <img class="product-single-image" src="assets/images/products/zoom/product-2.jpg" data-zoom-image="assets/images/products/zoom/product-2-big.jpg" alt="product"/>
                            <img class="product-single-image" src="assets/images/products/zoom/product-3.jpg" data-zoom-image="assets/images/products/zoom/product-3-big.jpg" alt="product"/>
                            <img class="product-single-image" src="assets/images/products/zoom/product-4.jpg" data-zoom-image="assets/images/products/zoom/product-4-big.jpg" alt="product"/>
                        </div><!-- End .product-single-carousel -->
                        <span class="prod-full-screen">
                            <i class="icon-plus"></i>
                        </span>
                    </div><!-- End .product-single-gallery -->
                    <div class="product-single-details">
                        <div class="product-single-header">
                            <div class="row">
                                <div class="col-xl-6">
                                    <h1 class="product-title">Porto Evolution Headset</h1>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->

                                        <a href="product-extended-layout.html#" class="rating-link">( 6 Reviews )</a>
                                    </div><!-- End .ratings-container -->

                                    <div class="price-box">
                                        <span class="product-price">$101.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .col-xl-6 -->

                                <div class="col-xl-6 single-header-right">
                                    <div class="product-single-share">
                                        <label>Share:</label>
                                        <!-- www.addthis.com share plugin-->
                                        <div class="addthis_inline_share_toolbox"></div>
                                    </div><!-- End .product single-share -->

                                    <div class="widget-area">
                                        <div class="widget widget-info">
                                            <ul>
                                                <li>
                                                    <i class="icon-shipping"></i>
                                                    <h4>FREE<br>SHIPPING</h4>
                                                </li>
                                                <li>
                                                    <i class="icon-us-dollar"></i>
                                                    <h4>100% MONEY<br>BACK GUARANTEE</h4>
                                                </li>
                                                <li>
                                                    <i class="icon-online-support"></i>
                                                    <h4>ONLINE<br>SUPPORT 24/7</h4>
                                                </li>
                                            </ul>
                                        </div><!-- End .widget -->
                                    </div><!-- End .widget-area -->
                                </div><!-- End .col-xl-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .product-single-header -->

                        <div class="product-desc">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonxcepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non... <a href="product-extended-layout.html#" class="view-more">(View More)</a></p>
                        </div><!-- End .product-desc -->

                        <div class="product-filters-container">
                            <div class="product-single-filter mb-2">
                                <label>Colors:</label>
                                <ul class="config-swatch-list">
                                    <li class="active">
                                        <a href="product-extended-layout.html#" style="background-color: #6085a5;"></a>
                                    </li>
                                    <li>
                                        <a href="product-extended-layout.html#" style="background-color: #ab6e6e;"></a>
                                    </li>
                                    <li>
                                        <a href="product-extended-layout.html#" style="background-color: #b19970;"></a>
                                    </li>
                                    <li>
                                        <a href="product-extended-layout.html#" style="background-color: #11426b;"></a>
                                    </li>
                                </ul>
                            </div><!-- End .product-single-filter -->

                            <div class="product-single-filter mb-2">
                                <label>Sizes:</label>
                                <ul class="config-size-list">
                                    <li class="active"><a href="product-extended-layout.html#">S</a></li>
                                    <li><a href="product-extended-layout.html#">M</a></li>
                                    <li><a href="product-extended-layout.html#">L</a></li>
                                    <li><a href="product-extended-layout.html#">XL</a></li>
                                </ul>
                            </div><!-- End .product-single-filter -->

                            <div class="product-action mb-2">
                                <div class="single-qty-wrapper mt-1">
                                    <label class="mb-1">QTY:</label>
                                    <div class="product-single-qty">
                                        <input class="horizontal-quantity form-control" type="text">
                                    </div><!-- End .product-single-qty -->
                                </div><!-- End .single-qty-wrapper -->

                                <a href="cart.html" class="paction add-cart mt-1" title="Add to Cart">
                                    <span>Add to Cart</span>
                                </a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product-filters-container -->
                    </div><!-- End .product-single-details -->
                </div><!-- End .container -->
            </div><!-- End .product-single-container -->

            <div class="product-single-row">
                <div class="single-row-entire" style="background-image: url('assets/images/products/single/extended/bg-1.jpg');"></div>
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-md-6 col-xl-5">
                            <h5>Enjoy the power</h5>
                            <h2>Start a revolution<br>right now.</h2>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in voluptate velit esse. </p>
                        </div><!-- End .col-xl-5 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .product-single-row -->

            <div class="product-single-row" >
                <div class="single-row-bg" style="background-image: url('assets/images/products/single/extended/bg-2.jpg');"></div><!-- End .single-row-bg -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xl-5">
                            <h5>Enjoy the silence</h5>
                            <h2>Acoustic Noise<br>Cancelling</h2>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in voluptate velit esse. </p>
                        </div><!-- End .col-xl-5 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .product-single-row -->

            <div class="product-single-row single-row-reverse" >
                <div class="single-row-bg" style="background-image: url('assets/images/products/single/extended/bg-3.jpg');"></div><!-- End .single-row-bg -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-6 col-xl-5 offset-xl-7">
                            <h5>Be Amazed</h5>
                            <h2>The most powerfull<br>headphone ever.</h2>
                            <ul>
                                <li><i class="icon-ok"></i>Any Product types that You want - Simple, Configurable</li>
                                <li><i class="icon-ok"></i>Downloadable/Digital Products, Virtual Products</li>
                                <li><i class="icon-ok"></i>Inventory Management with Backordered items</li>
                            </ul>
                        </div><!-- End .col-xl-5 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .product-single-row -->

            <div class="mb-5 mb-lg-6 mb-xl-7"></div><!-- margin -->

            <div class="container">
                <div class="product-single-tabs mb-6 mb-lg-7 mb-xl-8">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="product-extended-layout.html#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="product-extended-layout.html#product-tags-content" role="tab" aria-controls="product-tags-content" aria-selected="false">Tags</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="product-extended-layout.html#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                            <div class="product-desc-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                                <ul>
                                    <li><i class="icon-ok"></i>Any Product types that You want - Simple, Configurable</li>
                                    <li><i class="icon-ok"></i>Downloadable/Digital Products, Virtual Products</li>
                                    <li><i class="icon-ok"></i>Inventory Management with Backordered items</li>
                                </ul>
                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            </div><!-- End .product-desc-content -->
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-tags-content" role="tabpanel" aria-labelledby="product-tab-tags">
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
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
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
                        </div><!-- End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .product-single-tabs -->
            </div><!-- End .container -->

            <div class="product-single-video" style="background-image: url('assets/images/products/single/extended/bg-4.jpg');">
                <div class="container">
                    <h3>Concept Film</h3>
                    <a href="https://www.youtube.com/watch?v=Ph_VkTVmXh4" class="video-btn">
                        Watch <img src="assets/images/products/single/extended/icon-play.png" alt="play">
                    </a>
                </div><!-- End .container -->
            </div><!-- End .product-single-video -->

            <div class="featured-section">
                <div class="container">
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
                                    <a href="product-extended-layout.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                    <a href="product-extended-layout.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                    <a href="product-extended-layout.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                    <a href="product-extended-layout.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                    <a href="product-extended-layout.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                    </div><!-- End .featured-products -->
                </div><!-- End .container -->
            </div><!-- End .featured-section -->
        </main>
@stop