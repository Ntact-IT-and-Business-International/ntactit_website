@extends('template')

@section('title', 'bulksms')

@section('content')
   <!-- bulk sms-->
   <!-- banner bottom section -->
   <section class="w3l-aboutblock py-2">
    <div class="service-section py-5">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center mb-2">
                <div class="col-md-12 section-heading mt-md-0 mt-0 text-justify">
                    <p>
                       Enhance your customer engagement and communication strategies with Ntact IT's reliable bulk SMS services. Our platform allows you to reach your target audience instantly with personalized text messages, whether you're running a marketing campaign, sending important notifications, or automating your internal communications. With features like scheduling, group targeting, and real-time reporting, our bulk SMS solution empowers you to effectively connect with your customers and stakeholders at scale.
                    </p>
                </div>
                <div class="col-md-6 section-heading">
                    <h3 class="small-title-2 mt-4 font-weight-bold">Bulk SMS Packages</h3>
                    <h5 class="title-style-2 mt-2">Choose Your Plan</h5>
                </div>
            </div>
            <div class="row justify-content-center mt-0">
                <!-- Package 1 -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="card package-card position-relative">
                        <div class="card-header p-0 border-0">
                            <!-- Price in Ugandan Shillings -->
                            <div class="package-storage">45/=</div> <!-- SMS amount in circle -->
                        </div>
                        <div class="card-body service-details">
                            <span class="label-style">Starter</span>
                            <a href="#" class="service-heading">Basic Plan</a>
                            <p class="package-amount">1 - 500,000 SMS</p> <!-- Price in UGX -->
                            <p class="package-description">Ideal for small businesses. Send up to 500,000 SMS.</p>
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
                            <div class="package-storage">40/=</div> <!-- SMS amount in circle -->
                        </div>
                        <div class="card-body service-details">
                            <span class="label-style label-style-2">Standard</span>
                            <a href="#" class="service-heading">Business Plan</a>
                            <p class="package-amount">500,001 - 1,000,000 SMS</p> <!-- Price in UGX -->
                            <p class="package-description">Suitable for growing businesses. Send up to 500,001 - 1,000,000 SMS.</p>
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
                            <div class="package-storage">30/=</div> <!-- SMS amount in circle -->
                        </div>
                        <div class="card-body service-details">
                            <span class="label-style label-style-3">Premium</span>
                            <a href="#" class="service-heading">Enterprise Plan</a>
                            <p class="package-amount">1,000,001 and Above SMS</p> <!-- Price in UGX -->
                            <p class="package-description">Advanced package. Send up to 1,000,001 and Above SMS.</p>
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
            <p class="font-weight-bold"><span style="color:red;">*</span> The SMS is 160 characters and any extra will be counted as more than one.</p>
            <p class="font-weight-bold"><span style="color:red;">*</span> Whitelisting fees are charged separately.</p>
        </div>
    </div>
    
</section>
<!-- //banner bottom section -->
<!-- //about section -->

@endsection
