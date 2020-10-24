@extends('layouts.master')

@section('content')
<main class="main">
            <div class="page-header page-header-bg" style="background-image: url('assets/images/banners/banner-top.jpg');">
                <div class="container">
                    <h1><span>SUCCESS WAY OF</span>OUR HISTORY</h1>
                </div><!-- End .container -->
            </div><!-- End .page-header -->

            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="about-section">
                <div class="container">
                    <h2 class="title">About Us</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                </div><!-- End .container -->
            </div><!-- End .about-section -->

            <div class="partners-container partners-container-alt">
                <div class="container">
                    <div class="partners-carousel owl-carousel owl-theme">
                        <a href="about.html#" class="partner">
                            <img src="assets/images/logos/1.png" alt="logo">
                        </a>
                        <a href="about.html#" class="partner">
                            <img src="assets/images/logos/2.png" alt="logo">
                        </a>
                        <a href="about.html#" class="partner">
                            <img src="assets/images/logos/3.png" alt="logo">
                        </a>
                        <a href="about.html#" class="partner">
                            <img src="assets/images/logos/4.png" alt="logo">
                        </a>
                        <a href="about.html#" class="partner">
                            <img src="assets/images/logos/5.png" alt="logo">
                        </a>
                        <a href="about.html#" class="partner">
                            <img src="assets/images/logos/2.png" alt="logo">
                        </a>
                        <a href="about.html#" class="partner">
                            <img src="assets/images/logos/1.png" alt="logo">
                        </a>
                    </div><!-- End .partners-carousel -->
                </div><!-- End .container -->
            </div><!-- End .partners-container -->

            <div class="team-section">
                <div class="container">
                    <h2 class="subtitle mb-3">
                        <span>Our Team</span>
                    </h2>

                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="member">
                                <img src="assets/images/team/member-1.jpg" alt="member">

                                <h3 class="member-title">JANE DOE</h3>
                            </div><!-- End .member -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="member">
                                <img src="assets/images/team/member-2.jpg" alt="member">

                                <h3 class="member-title">John DOE</h3>
                            </div><!-- End .member -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="member">
                                <img src="assets/images/team/member-3.jpg" alt="member">

                                <h3 class="member-title">John DOE</h3>
                            </div><!-- End .member -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="member">
                                <img src="assets/images/team/member-4.jpg" alt="member">

                                <h3 class="member-title">JANE DOE</h3>
                            </div><!-- End .member -->
                        </div><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .team-section -->
        </main>
@stop