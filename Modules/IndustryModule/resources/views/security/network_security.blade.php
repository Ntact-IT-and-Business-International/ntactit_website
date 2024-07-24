@extends('template')

@section('title', 'Network Security')

@section('content')

<!-- banner bottom section -->
<section class="w3l-aboutblock py-5">
    <div class="container py-md-5 py-sm-4">
        <div class="row">
            <div class="col-lg-6 content-image order-lg-first order-last">
                <a href="#image"><img src="assets/images/network_security.jpg" class="img-responsive" alt="network-security-photo"></a>
            </div>
            
            <div class="col-lg-6 about-right-faq align-self pl-lg-5">
                <h3 class="title-style">Network Security Solutions</h3>
                <p class="mt-2">Our Network Security solutions are crafted to safeguard your network infrastructure from threats and unauthorized access. We employ state-of-the-art technologies to ensure the integrity and security of your network.</p>
                <div class="mt-4 pt-md-2">
                    <div class="about-info-m d-flex">
                        <div class="icon-style-ab mr-4">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <div class="about-detail">
                            <h4>Features</h4>
                            <p><b>Firewalls:</b> Protect your network with robust firewall solutions.</p>
                            <br>
                            <p><b>Intrusion Detection Systems:</b> Monitor and respond to suspicious network activity.</p>
                            <br>
                            <p><b>VPNs:</b> Secure remote access to your network through virtual private networks.</p>
                            <br>
                            <p><b>Network Segmentation:</b> Isolate and protect different segments of your network.</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

@endsection
