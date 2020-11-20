<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Webkul\Category\Repositories\CategoryRepository;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function aboutUs()
    {
        return view('about');
    }

    public function blog()
    {
        return view('blog');
    }
    
    public function cart()
    {
        return view('cart');
    }

    public function category3col()
    {
        return view('category-3col');
    }

    public function category5col()
    {
        return view('category-5col');
    }

    public function category6col()
    {
        return view('category-6col');
    }

    public function category7col()
    {
        return view('category-7col');
    }

    public function category8col()
    {
        return view('category-8col');
    }

    public function categorybannerboxedimage()
    {
        return view('category-banner-boxed-image');
    }

    public function categorybannerboxedslider()
    {
        return view('category-banner-boxed-slider');
    }

    public function categoryflexgrid()
    {
        return view('category-flex-grid');
    }

    public function categoryhorizontalfilter1()
    {
        return view('category-horizontal-filter1');
    }

    public function categoryhorizontalfilter2()
    {
        return view('category-horizontal-filter2');
    }

    public function categoryinfinitescroll()
    {
        return view('category-infinite-scroll');
    }

    public function categorylist()
    {
        return view('category-list');
    }

    public function categorysidebarright()
    {
        return view('category-sidebar-right');
    }

    public function category()
    {
        return view('category');
    }

    public function checkoutreview()
    {
        return view('checkout-review');
    }

    public function checkoutshipping2()
    {
        return view('checkout-shipping-2');
    }

    public function checkoutshipping()
    {
        return view('checkout-shipping');
    }

    public function contact()
    {
        return view('contact');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function forgotpassword()
    {
        return view('forgot-password');
    }

    public function myaccount()
    {
        return view('my-account');
    }

    public function productaddcartsticky()
    {
        return view('product-addcart-sticky');
    }

    public function productextendedlayout()
    {
        return view('product-extended-layout');
    }

    public function productfullwidth()
    {
        return view('product-full-width');
    }

    public function productgridlayout()
    {
        return view('product-grid-layout');
    }

    public function productsidebarleft()
    {
        return view('product-sidebar-left');
    }

    public function productsimple()
    {
        return view('product-simple');
    }

    public function productstickyboth()
    {
        return view('product-sticky-both');
    }

    public function productstickyinfo()
    {
        return view('product-sticky-info');
    }

    public function productstickytab()
    {
        return view('product-sticky-tab');
    }

    public function product()
    {
        return view('product');
    }

    public function single()
    {
        return view('single');
    }


    public function generate()
    {
        $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://apiv2.shiprocket.in/v1/external/auth/login",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS =>"{\n    \"email\": \"rathoreankit582@gmail.com\",\n    \"password\": \"Ankit@123#\"\n}",
            CURLOPT_HTTPHEADER => array(
              "Content-Type: application/json"
            ),
          ));
          $SR_login_Response = curl_exec($curl);
          curl_close($curl);
          $SR_login_Response_out = json_decode($SR_login_Response);

          print_r($SR_login_Response_out);die("dfjvnskvns");
          $token = $SR_login_Response_out->{'token'};

          
    }

    

    

    


    

    

    

    


    
    

    

    

    

    


    

    

    

    

    

    

    

    

    




    

    

    

    
}
