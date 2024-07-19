@extends('template')

@section('title', 'Enterprise IT')

@section('content')
   <!-- Enterprise IT -->
   <!-- Banner bottom section -->
   <section class="w3l-aboutblock py-5">
       <div class="container py-md-5 py-sm-4">
           <div class="row">
               <div class="col-lg-6 content-image order-lg-first order-last">
                   <a href="#image"><img src="{{ asset('assets/images/blog6.jpg') }}" class="img-responsive" alt="content-photo"></a>
               </div>
               <div class="col-lg-6 about-right-faq align-self pl-lg-5">
                   <h3 class="title-style">Enterprise IT</h3>
                   <p class="mt-2">Enterprise IT services offered by NTACT IT provide comprehensive solutions to support large-scale organizations in managing their IT infrastructure and operations efficiently. Our services include network management, server administration, cloud solutions, cybersecurity, and IT consulting to ensure optimal performance and security.</p>
                   <div class="mt-4 pt-md-2">
                       <div class="about-info-m d-flex">
                           <div class="icon-style-ab mr-4">
                               <i class="fas fa-cogs"></i>
                           </div>
                           <div class="about-detail">
                               <h4>Services Offered</h4>
                               <p><b>Network Management:</b> Designing, implementing, and managing robust network infrastructures tailored to enterprise needs.</p>
                               <br>
                               <p><b>Server Administration:</b> Ensuring reliable and secure server operations, including maintenance, upgrades, and performance optimization.</p>
                              <br>
                               <p><b>Cloud Solutions:</b> Providing scalable and cost-effective cloud services, including migration, management, and optimization of cloud environments.</p>
                               <br>
                               <p><b>Cybersecurity:</b> Implementing advanced security measures and protocols to protect enterprise systems, data, and networks from cyber threats.</p>
                               <br>
                               <p><b>IT Consulting:</b> Offering strategic IT advice and consultancy to align technology investments with business objectives and drive digital transformation.</p>
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
