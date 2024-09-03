<div>
    {{-- Do your work, then step back. --}}
    <section class="w3l-aboutblock py-5">
        <div class="service-section py-5">
            <div class="container py-md-5 py-4">
                <div class="row align-items-center mb-2">
                   <div class="col-md-12 section-heading mt-md-0 mt-2">
                        <p class="text-justify">Ntact IT's experienced web design team creates visually stunning and highly functional websites tailored to your unique business needs. From initial consultation to launch, we handle every aspect of the web design process, delivering a final product that showcases your brand and captivates your audience. Our design approach focuses on creating a seamless user experience, optimizing for mobile responsiveness, and incorporating the latest web technologies. Whether you're looking to build a new website or refresh your existing online presence, our web design services will elevate your digital footprint and help you stand out in a competitive market.</p>
                        <p>
                            Explore our hosting and development packages tailored to meet your business needs.
                        </p>
                    </div>
                    <div class="col-md-6 section-heading">
                        <h3 class="small-title-2 mt-4 font-weight-bold">Hosting & Development Packages</h3>
                        <h5 class="title-style-2 mt-1">Choose Your Plan</h5>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <!-- Package 1 -->
                     
                    @foreach ($packages as $package)
                    <div class="col-lg-4 col-md-6 item">
                        <div class="card package-card position-relative">
                            <div class="card-header p-0 border-0">
                                <div class="package-storage">{{ $package->quantity }}&nbsp;GB</div> <!-- Storage amount in circle -->
                            </div>
                            <div class="card-body service-details">
                                <span class="label-style">{{ $package->category }}</span>
                                <a href="#" class="service-heading">UGX {{ number_format($package->amount) }}</a>
                                {{--<p class="package-amount">UGX {{ $package->amount }}</p>--}} <!-- Price in UGX -->
                                <p class="package-description">{{ $package->description }}</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-hdd mr-2 text-success"></i> Free Domain</li>
                                    <li><i class="fas fa-life-ring mr-2 text-success"></i> 24/7 Support</li>
                                    <li><i class="fas fa-lock mr-2 text-success"></i> SSL Certificate</li>
                                    <li><i class="fas fa-code mr-2 text-success"></i> Up to 5 Webpages</li>
                                </ul>
                                <button class="btn btn-orange add-to-cart-btn mt-3" wire:click="addToCart({{ $package->id }})">Add to Cart</button>
                                <a wire:navigate href="{{URL::signedRoute('Quotation',['quotationId' => $package->id])}}" class="btn btn-color1 mt-3">Get Quote</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Display the cart -->
            </div>
        </div>
    </section>
</div>
