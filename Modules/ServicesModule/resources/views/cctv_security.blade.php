@extends('template')

@section('title', 'CCTV Installation Service')

@section('content')
   <!-- CCTV Installation Service -->
   <!-- Banner bottom section -->
   <section class="w3l-aboutblock py-5">
       <div class="container py-md-5 py-sm-4">
           <div class="row">
               <div class="col-lg-6 content-image order-lg-first order-last">
                   <a href="#image"><img src="{{ asset('assets/images/blog6.jpg') }}" class="img-responsive" alt="content-photo"></a>
               </div>
               <div class="col-lg-6 about-right-faq align-self pl-lg-5">
                   <h3 class="title-style">CCTV Installation Service</h3>
                   <p class="mt-2">CCTV installation services offered by NTACT IT provide businesses and organizations with advanced surveillance solutions to enhance security and monitor activities. These services include the installation, configuration, and maintenance of CCTV systems tailored to specific security needs.</p>
                   <div class="mt-4 pt-md-2">
                       <div class="about-info-m d-flex">
                           <div class="icon-style-ab mr-4">
                               <i class="fas fa-video"></i>
                           </div>
                           <div class="about-detail">
                               <h4>Features</h4>
                               <p><b>High-Definition Surveillance:</b> Installation of high-definition cameras that provide clear and detailed video footage for accurate monitoring and recording.</p>
                               <br>
                               <p><b>Remote Access:</b> Enabling remote access to live and recorded footage through secure online platforms, allowing users to monitor their premises from anywhere.</p>
                               <br>
                               <p><b>Motion Detection:</b> Implementing motion detection technology to trigger alerts and recording when movement is detected in designated areas.</p>
                              <br>
                               <p><b>Night Vision:</b> Utilizing cameras with night vision capabilities to ensure round-the-clock surveillance even in low-light conditions.</p>
                               <br>
                               <p><b>Maintenance and Support:</b> Providing ongoing maintenance and support services to ensure the CCTV systems remain operational and effective.</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- //Banner bottom section -->
   <!-- //About section -->

@endsection
