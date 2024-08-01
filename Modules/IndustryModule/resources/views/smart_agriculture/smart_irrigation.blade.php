@extends('template')

@section('title', 'Smart Irrigation Systems')

@section('content')

<!-- banner bottom section -->
<section class="w3l-aboutblock py-5">
    <div class="container py-md-5 py-sm-4">
        <div class="row">
            <div class="col-lg-6 content-image order-lg-first order-last">
                <a href="#image"><img src="assets/images/smart_irrigation.jpg" class="img-responsive" alt="smart-irrigation-photo"></a>
            </div>
            
            <div class="col-lg-6 about-right-faq align-self pl-lg-5">
                <h3 class="title-style">Smart Irrigation Systems</h3>
                <p class="mt-2">Our Smart Irrigation Systems optimize water usage by integrating weather data, soil moisture levels, and crop requirements. This approach helps conserve water, reduce costs, and enhance crop growth.</p>
                <div class="mt-4 pt-md-2">
                    <div class="about-info-m d-flex">
                        <div class="icon-style-ab mr-4">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <div class="about-detail">
                            <h4>Features</h4>
                            <p><b>Automated Scheduling:</b> Set irrigation schedules based on weather forecasts and soil conditions.</p>
                            <br>
                            <p><b>Soil Moisture Sensors:</b> Monitor soil moisture levels to ensure optimal watering.</p>
                            <br>
                            <p><b>Weather Integration:</b> Adjust irrigation based on real-time weather data.</p>
                            <br>
                            <p><b>Water Conservation:</b> Reduce water waste through efficient irrigation practices.</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

@endsection
