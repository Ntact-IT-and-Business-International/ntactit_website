@extends('template')

@section('title', 'About Us')

@section('content')
<section class="w3l-aboutblock py-5">
    <div class="container">
        <h2 class="mb-4">About Us</h2>
        <div class="row">
            <div class="col-lg-6">
                <h3>Mission</h3>
                <p>Our mission is to provide innovative solutions that enhance the digital experience of our clients.</p>
            </div>
            <div class="col-lg-6">
                <h3>Vision</h3>
                <p>We envision a world where technology seamlessly integrates into daily life, empowering individuals and businesses.</p>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 item">
                <div class="card">
                    <div class="card-header p-0 position-relative border-0">
                        <img class="d-block img-responsive" src="assets/images/s4.jpg" alt="Our History">
                    </div>
                    <div class="card-body service-details">
                        <span class="label-style">History</span>
                        <a href="#" class="service-heading">Our History</a>
                        <p>Learn about our journey and the milestones we've achieved over the years.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative border-0">
                        <img class="d-block img-responsive" src="assets/images/s5.jpg" alt="Our Team">
                    </div>
                    <div class="card-body service-details">
                        <span class="label-style label-style-2">Team</span>
                        <a href="#" class="service-heading">Our Team</a>
                        <p>Meet the passionate and dedicated individuals behind our success.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative border-0">
                        <img class="d-block img-responsive" src="assets/images/s2.jpg" alt="Our Values">
                    </div>
                    <div class="card-body service-details">
                        <span class="label-style label-style-3">Values</span>
                        <a href="#" class="service-heading">Our Values</a>
                        <p>Discover the core principles that guide our work and culture.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
