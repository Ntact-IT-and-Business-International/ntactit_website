@extends('template')

@section('title', 'ussd')

@section('content')
   <!-- bulk sms-->
   <!-- banner bottom section -->
   <section>
<!-- Hosting Packages Section -->
<div class="service-section py-5">
    <div class="container py-md-5 py-4">
        <div class="row align-items-center mb-5">
            <div class="col-md-6 section-heading">
                <h5 class="small-title-2">Hosting Packages</h5>
                <h3 class="title-style-2">Choose Your Plan</h3>
            </div>
            <div class="col-md-6 section-heading mt-md-0 mt-2">
                <p>
                    Explore our hosting packages tailored to meet your business needs.
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- Package 1 -->
            <div class="col-lg-4 col-md-6 item">
                <div class="card package-card">
                    <div class="card-header p-0 position-relative border-0">
                        <div class="package-storage">20GB</div> <!-- Storage amount in circle -->
                    </div>
                    <div class="card-body service-details">
                        <span class="label-style">Basic</span>
                        <a href="#" class="service-heading">Starter Plan</a>
                        <p class="package-amount">UGX 120,000/year</p> <!-- Price in UGX -->
                        <p class="package-description">Ideal for small businesses and startups with basic needs.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-hdd mr-2 text-success"></i> Free Domain</li>
                            <li><i class="fas fa-life-ring mr-2 text-success"></i> 24/7 Support</li>
                            <li><i class="fas fa-lock mr-2 text-success"></i> SSL Certificate</li>
                        </ul>
                        <button class="btn btn-success add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Package 2 -->
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="card package-card">
                    <div class="card-header p-0 position-relative border-0">
                        <div class="package-storage">40GB</div> <!-- Storage amount in circle -->
                    </div>
                    <div class="card-body service-details">
                        <span class="label-style label-style-2">Standard</span>
                        <a href="#" class="service-heading">Business Plan</a>
                        <p class="package-amount">UGX 180,000/year</p> <!-- Price in UGX -->
                        <p class="package-description">Suitable for growing businesses with moderate traffic.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-hdd mr-2 text-success"></i> Free Domain</li>
                            <li><i class="fas fa-life-ring mr-2 text-success"></i> 24/7 Support</li>
                            <li><i class="fas fa-lock mr-2 text-success"></i> SSL Certificate</li>
                        </ul>
                        <button class="btn btn-success add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Package 3 -->
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                <div class="card package-card">
                    <div class="card-header p-0 position-relative border-0">
                        <div class="package-storage">60GB</div> <!-- Storage amount in circle -->
                    </div>
                    <div class="card-body service-details">
                        <span class="label-style label-style-3">Premium</span>
                        <a href="#" class="service-heading">Pro Plan</a>
                        <p class="package-amount">UGX 250,000/year</p> <!-- Price in UGX -->
                        <p class="package-description">Advanced package for high-traffic websites.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-hdd mr-2 text-success"></i> Free Domain</li>
                            <li><i class="fas fa-life-ring mr-2 text-success"></i> 24/7 Support</li>
                            <li><i class="fas fa-lock mr-2 text-success"></i> SSL Certificate</li>
                        </ul>
                        <button class="btn btn-success add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</section>
<!-- //banner bottom section -->
<!-- //about section -->

@endsection