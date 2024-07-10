@extends('template')

@section('title', 'IT Consultancy')

@section('content')
   <!-- IT Consultancy -->
   <!-- Banner bottom section -->
   <section class="w3l-aboutblock py-5">
       <div class="container py-md-5 py-sm-4">
           <div class="row">
               <div class="col-lg-6 content-image order-lg-first order-last">
                   <a href="#image"><img src="{{ asset('assets/images/blog6.jpg') }}" class="img-responsive" alt="content-photo"></a>
               </div>
               <div class="col-lg-6 about-right-faq align-self pl-lg-5">
                   <h3 class="title-style">IT Consultancy</h3>
                   <p class="mt-2">IT consultancy services offered by NTACT IT provide businesses and organizations with strategic advice and expertise in leveraging information technology to achieve their objectives. These services include IT strategy development, technology implementation, system integration, and ongoing advisory support.</p>
                   <div class="mt-4 pt-md-2">
                       <div class="about-info-m d-flex">
                           <div class="icon-style-ab mr-4">
                               <i class="fas fa-laptop-code"></i>
                           </div>
                           <div class="about-detail">
                               <h4>Services Offered</h4>
                               <p><b>IT Strategy Development:</b> Crafting strategic plans aligned with business goals to maximize IT investments and drive growth.</p>
                               <p><b>Technology Implementation:</b> Implementing cutting-edge technologies tailored to enhance operational efficiency and business performance.</p>
                               <p><b>System Integration:</b> Integrating diverse IT systems and applications to streamline processes and improve collaboration.</p>
                               <p><b>Advisory Support:</b> Providing ongoing advisory services to navigate IT challenges, optimize resources, and mitigate risks.</p>
                               <p><b>Digital Transformation:</b> Guiding organizations through digital transformation initiatives to innovate and stay competitive in the digital age.</p>
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
