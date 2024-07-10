@extends('layouts.app')

@section('title', 'application')

@section('content')
<section class="w3l-aboutblock py-5">
    <div class="container py-md-5 py-sm-4">
        <div class="row">
            <div class="col-lg-6 content-image order-lg-first order-last">
                <a href="#image"><img src="assets/images/img2.jpg" class="img-responsive" alt="content-photo"></a>
            </div>
            <div class="col-lg-6 about-right-faq align-self pl-lg-5">
                <h3 class="title-style">Electronic Medical Records</h3>
                <p class="mt-2">NTACT IT provides robust Electronic Medical Records (EMR) solutions designed to streamline healthcare data management. Our EMR systems offer secure and efficient digital storage, retrieval, and sharing of patient information, enhancing healthcare delivery.</p>
                <div class="mt-4 pt-md-2">
                    <div class="about-info-m d-flex">
                        <div class="icon-style-ab mr-4">
                            <i class="fas fa-user-cog"></i>
                        </div>
                        <div class="about-detail">
                            <h4>Features</h4>
                            <p> <b>Secure Data Management:</b> Encrypted storage and strict access controls ensure patient data confidentiality and compliance with healthcare regulations.</p>
                            <br>
                            <p> <b>Efficient Workflow:</b> Streamlined processes for patient charting, prescriptions, and clinical documentation to improve operational efficiency.</p>
                            <br>
                            <p> <b>Interoperability:</b> Integration capabilities with other healthcare systems for seamless data exchange and collaboration among healthcare providers.</p>
                            <br>
                            <p><b>Customizable Templates:</b> Tailored templates and forms to accommodate various specialties and workflows, enhancing clinical decision-making.</p>
                            <br>
                            <p><b>Reporting and Analytics:</b> Comprehensive reporting tools and analytics dashboards for insights into patient outcomes, trends, and operational performance.</p>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
</section>



@endsection