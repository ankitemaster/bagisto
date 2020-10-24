<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@index')->name('/');
Route::get('about-us','HomeController@aboutUs')->name('about-us');
Route::get('blog','HomeController@blog')->name('blog');
Route::get('cart','HomeController@cart')->name('cart');
Route::get('category-3col','HomeController@category3col')->name('category3col');
Route::get('category-5col','HomeController@category5col')->name('category5col');
Route::get('category-6col','HomeController@category6col')->name('category6col');
Route::get('category-7col','HomeController@category7col')->name('category7col');
Route::get('category-8col','HomeController@category8col')->name('category8col');
Route::get('category-banner-boxed-image','HomeController@categorybannerboxedimage')->name('category-banner-boxed-image');
Route::get('category-banner-boxed-slider','HomeController@categorybannerboxedslider')->name('category-banner-boxed-slider');
Route::get('category-flex-grid','HomeController@categoryflexgrid')->name('category-flex-grid');
Route::get('category-horizontal-filter1','HomeController@categoryhorizontalfilter1')->name('category-horizontal-filter1');
Route::get('category-horizontal-filter2','HomeController@categoryhorizontalfilter2')->name('category-horizontal-filter2');
Route::get('category-infinite-scroll','HomeController@categoryinfinitescroll')->name('category-infinite-scroll');
Route::get('category-list','HomeController@categorylist')->name('category-list');
Route::get('category-sidebar-right','HomeController@categorysidebarright')->name('category-sidebar-right');
Route::get('category','HomeController@category')->name('category');
Route::get('checkout-review','HomeController@checkoutreview')->name('checkout-review');
Route::get('checkout-shipping-2','HomeController@checkoutshipping2')->name('checkout-shipping-2');
Route::get('checkout-shipping','HomeController@checkoutshipping')->name('checkout-shipping');
Route::get('contact','HomeController@contact')->name('contact');
Route::get('dashboard','HomeController@dashboard')->name('dashboard');
Route::get('forgot-password','HomeController@forgotpassword')->name('forgot-password');
Route::get('my-account','HomeController@myaccount')->name('my-account');
Route::get('product-addcart-sticky','HomeController@productaddcartsticky')->name('product-addcart-sticky');
Route::get('product-extended-layout','HomeController@productextendedlayout')->name('product-extended-layout');
Route::get('product-full-width','HomeController@productfullwidth')->name('product-full-width');
Route::get('product-grid-layout','HomeController@productgridlayout')->name('product-grid-layout');
Route::get('product-sidebar-left','HomeController@productsidebarleft')->name('product-sidebar-left');
Route::get('product-simple','HomeController@productsimple')->name('product-simple');
Route::get('product-sticky-both','HomeController@productstickyboth')->name('product-sticky-both');
Route::get('product-sticky-info','HomeController@productstickyinfo')->name('product-sticky-info');
Route::get('product-sticky-tab','HomeController@productstickytab')->name('product-sticky-tab');
Route::get('product','HomeController@product')->name('product');
Route::get('single','HomeController@single')->name('single');