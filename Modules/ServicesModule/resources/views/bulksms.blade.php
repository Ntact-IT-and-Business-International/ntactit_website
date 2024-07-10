@extends('template')

@section('title', 'bulksms')

@section('content')
   <!-- bulk sms-->
   <!-- banner bottom section -->
   <section class="w3l-aboutblock py-5">
    <div class="service-section py-5">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center mb-5">
                <div class="col-md-6 section-heading">
                    <h5 class="small-title-2">Bulk SMS Packages</h5>
                    <h3 class="title-style-2">Choose Your Plan</h3>
                </div>
                <div class="col-md-6 section-heading mt-md-0 mt-2">
                    <p>
                        Explore our bulk SMS packages tailored to meet your communication needs.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- Package 1 -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="card package-card position-relative">
                        <div class="card-header p-0 border-0">
                            <!-- Price in Ugandan Shillings -->
                            <div class="package-storage">75/-</div> <!-- SMS amount in circle -->
                        </div>
                        <div class="card-body service-details">
                            <span class="label-style">Starter</span>
                            <a href="#" class="service-heading">Basic Plan</a>
                            <p class="package-amount">1000 SMS</p> <!-- Price in UGX -->
                            <p class="package-description">Ideal for small businesses. Send up to 1000 SMS messages.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-mobile-alt mr-2 text-success"></i> SMS Delivery</li>
                                <li><i class="fas fa-users mr-2 text-success"></i> Contact Management</li>
                                <li><i class="fas fa-chart-line mr-2 text-success"></i> Basic Analytics</li>
                                <li><i class="fas fa-phone mr-2 text-success"></i> Dedicated Support</li>
                            </ul>
                            <button class="btn btn-success add-to-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Package 2 -->
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="card package-card position-relative">
                        <div class="card-header p-0 border-0">
                            <div class="package-storage">50/-</div> <!-- SMS amount in circle -->
                        </div>
                        <div class="card-body service-details">
                            <span class="label-style label-style-2">Standard</span>
                            <a href="#" class="service-heading">Business Plan</a>
                            <p class="package-amount">2000 SMS</p> <!-- Price in UGX -->
                            <p class="package-description">Suitable for growing businesses. Send up to 5000 SMS messages.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-mobile-alt mr-2 text-success"></i> SMS Delivery</li>
                                <li><i class="fas fa-users mr-2 text-success"></i> Contact Management</li>
                                <li><i class="fas fa-chart-line mr-2 text-success"></i> Advanced Analytics</li>
                                <li><i class="fas fa-phone mr-2 text-success"></i> Dedicated Support</li>
                            </ul>
                            <button class="btn btn-success add-to-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Package 3 -->
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="card package-card position-relative">
                        <div class="card-header p-0 border-0">
    <!-- Price in Ugandan Shillings -->
                            <div class="package-storage">25/-</div> <!-- SMS amount in circle -->
                        </div>
                        <div class="card-body service-details">
                            <span class="label-style label-style-3">Premium</span>
                            <a href="#" class="service-heading">Enterprise Plan</a>
                            <p class="package-amount">10000 SMS</p> <!-- Price in UGX -->
                            <p class="package-description">Advanced package. Send up to 10,000 SMS messages.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-mobile-alt mr-2 text-success"></i> SMS Delivery</li>
                                <li><i class="fas fa-users mr-2 text-success"></i> Contact Management</li>
                                <li><i class="fas fa-chart-line mr-2 text-success"></i> Detailed Analytics</li>
                                <li><i class="fas fa-phone mr-2 text-success"></i> Dedicated Support</li>
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
