<div>
    {{-- Do your work, then step back. --}}
    <section class="w3l-aboutblock py-5">
        <div class="service-section py-5">
            <div class="container py-md-5 py-4">
                <div class="row align-items-center mb-5">
                    <div class="col-md-6 section-heading">
                        <h5 class="small-title-2">Hosting & Development Packages</h5>
                        <h3 class="title-style-2">Choose Your Plan</h3>
                    </div>
                    <div class="col-md-6 section-heading mt-md-0 mt-2">
                        <p>
                            Explore our hosting and development packages tailored to meet your business needs.
                        </p>
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
