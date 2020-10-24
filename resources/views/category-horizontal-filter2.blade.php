@extends('layouts.master')

@section('content')
<main class="main">
    <div class="banner banner-cat" style="background-image: url('assets/images/banners/banner-top-2.jpg');">
        <div class="banner-content container">
            <h2 class="banner-subtitle">check out over <span>200+</span></h2>
            <h1 class="banner-title">
                INCREDIBLE deals
            </h1>
            <a href="category-horizontal-filter2.html#" class="btn btn-primary">Shop Now</a>
        </div><!-- End .banner-content -->
    </div><!-- End .banner -->
    
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="category-horizontal-filter2.html#">Men</a></li>
                <li class="breadcrumb-item active" aria-current="page">Accessories</li>
            </ol>
        </div><!-- End .container -->
    </nav>

    <div class="container products-body">
        <nav class="toolbox horizontal-filter filter-sorts">
            <div class="filter-toggle">
                <span>Filters:</span>
                <a href="category-horizontal-filter2.html#">&nbsp;</a>
            </div>

            <div class="sidebar-overlay"></div>
            <aside class="toolbox-left sidebar-shop mobile-sidebar">
                <div class="toolbox-item toolbox-sort select-custom">
                    <a class="sort-menu-trigger" href="category-horizontal-filter2.html#">Size</a>
                    <ul class="sort-list">
                        <li>Extra Large</li>
                        <li>Large</li>
                        <li>Medium</li>
                        <li>Small</li>
                    </ul>
                </div><!-- End .toolbox-item -->

                <div class="toolbox-item toolbox-sort select-custom">
                    <a class="sort-menu-trigger" href="category-horizontal-filter2.html#">Color</a>
                    <ul class="sort-list">
                        <li>Black</li>
                        <li>Blue</li>
                        <li>Brown</li>
                        <li>Green</li>
                        <li>Indigo</li>
                        <li>Light Blue</li>
                        <li>Red</li>
                        <li>Yellow</li>
                    </ul>
                </div><!-- End .toolbox-item -->

                <div class="toolbox-item toolbox-sort price-sort select-custom">
                    <a class="sort-menu-trigger" href="category-horizontal-filter2.html#">Price</a>
                    <form class="filter-price-form">
                        <div>Price: <span>$55.00</span> — <span>$111.00</span></div>
                        <label>Min price</label>
                        <input class="input-price" name="min_price"/>
                        <label>Max price</label>
                        <input class="input-price" name="max_price"/>
                        <div class="filter-price-action mt-0">
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                    </form>
                </div><!-- End .toolbox-item -->

            </aside><!-- End .toolbox-left -->

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
            </div><!-- End .toolbox-item -->

            <div class="toolbox-item ml-lg-auto">
                <div class="toolbox-item toolbox-show show-count">
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
            </div>
        </nav>
        
                <div class="row row-sm">
                    <div class="col-6 col-md-4 col-xl-3">
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
                                    <a href="category-horizontal-filter2.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                    </div><!-- End .col-xl-3 -->

                    <div class="col-6 col-md-4 col-xl-3">
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
                                    <a href="category-horizontal-filter2.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                    </div><!-- End .col-xl-3 -->

                    <div class="col-6 col-md-4 col-xl-3">
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
                                    <a href="category-horizontal-filter2.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                    </div><!-- End .col-xl-3 -->

                    <div class="col-6 col-md-4 col-xl-3">
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
                                    <a href="category-horizontal-filter2.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                    </div><!-- End .col-xl-3 -->

                    <div class="col-6 col-md-4 col-xl-3">
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
                                    <a href="category-horizontal-filter2.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                    </div><!-- End .col-xl-3 -->

                    <div class="col-6 col-md-4 col-xl-3">
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
                                    <a href="category-horizontal-filter2.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                    </div><!-- End .col-xl-3 -->

                    <div class="col-6 col-md-4 col-xl-3">
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
                                    <a href="category-horizontal-filter2.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                    </div><!-- End .col-xl-3 -->

                    <div class="col-6 col-md-4 col-xl-3">
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
                                    <a href="category-horizontal-filter2.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                    </div><!-- End .col-xl-3 -->

                    <div class="col-6 col-md-4 col-xl-3">
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
                                    <a href="category-horizontal-filter2.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                    </div><!-- End .col-xl-3 -->

                    <div class="col-6 col-md-4 col-xl-3">
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
                                    <a href="category-horizontal-filter2.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                    </div><!-- End .col-xl-3 -->

                    <div class="col-6 col-md-4 col-xl-3">
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
                                    <a href="category-horizontal-filter2.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                    </div><!-- End .col-xl-3 -->

                    <div class="col-6 col-md-4 col-xl-3">
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
                                    <a href="category-horizontal-filter2.html#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
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
                    <a class="page-link page-link-btn" href="category-horizontal-filter2.html#"><i class="icon-angle-left"></i></a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="category-horizontal-filter2.html#">1 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="category-horizontal-filter2.html#">2</a></li>
                <li class="page-item"><a class="page-link" href="category-horizontal-filter2.html#">3</a></li>
                <li class="page-item"><a class="page-link" href="category-horizontal-filter2.html#">4</a></li>
                <li class="page-item"><span>...</span></li>
                <li class="page-item"><a class="page-link" href="category-horizontal-filter2.html#">15</a></li>
                <li class="page-item">
                    <a class="page-link page-link-btn" href="category-horizontal-filter2.html#"><i class="icon-angle-right"></i></a>
                </li>
            </ul>
        </nav>
    </div><!-- End .container -->

    <div class="mb-5"></div><!-- margin -->
</main>
@stop