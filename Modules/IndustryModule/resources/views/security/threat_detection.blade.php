@extends('template')

@section('title', 'Threat Detection')

@section('content')

<!-- banner bottom section -->
<section class="w3l-aboutblock py-5">
    <div class="container py-md-5 py-sm-4">
        <div class="row">
            <div class="col-lg-6 content-image order-lg-first order-last">
                <a href="#image"><img src="assets/images/threat_detection.jpg" class="img-responsive" alt="threat-detection-photo"></a>
            </div>
            
            <div class="col-lg-6 about-right-faq align-self pl-lg-5">
                <h3 class="title-style">Threat Detection Solutions</h3>
                <p class="mt-2">Our Threat Detection solutions are designed to identify and address potential security threats before they escalate. We utilize advanced technologies to monitor, detect, and respond to suspicious activities.</p>
                <div class="mt-4 pt-md-2">
                    <div class="about-info-m d-flex">
                        <div class="icon-style-ab mr-4">
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="about-detail">
                            <h4>Features</h4>
                            <p><b>Real-Time Monitoring:</b> Continuously monitor systems and networks for suspicious activities.</p>
                            <br>
                            <p><b>Automated Alerts:</b> Receive automated alerts for potential threats and anomalies.</p>
                            <br>
                            <p><b>Incident Investigation:</b> Investigate and analyze detected threats to determine impact and response.</p>
                            <br>
                            <p><b>Threat Intelligence:</b> Utilize threat intelligence feeds to stay informed of emerging threats.</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

@endsection
