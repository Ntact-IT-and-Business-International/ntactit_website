@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="banner-19">
    <div class="banner-layer">
        <video autoplay muted loop id="myVideo">
            <source src="assets/videos/blue.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div class="main-content-top">
            <div class="container">
                <div class="main-content">
                    <!-- if logo is image enable this   
                    <a class="logo" href="index.html">
                        <img src="assets/images/logo1.png" alt="Your logo" title="Your logo" style="height:35px;" />
                    </a> -->
                    <h4>Inspiring Technology </h4>
                    <p class="mt-3">We execute your ideas from start to finish, we help you to quickly realise your
                        business goals through our cutting edge inovative solutions  </p>
                    <a href="about.html" class="btn btn-style mt-md-5 mt-4">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
