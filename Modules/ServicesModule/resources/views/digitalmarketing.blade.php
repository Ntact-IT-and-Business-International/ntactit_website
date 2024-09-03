@extends('template')

@section('title', 'Digital Marketing')

@section('content')
   <!-- Digital Marketing -->
   <!-- Banner bottom section -->
   <section class="w3l-aboutblock py-2">
       <div class="container py-md-5 py-sm-4">
        <div class="row mb-4">
            <h3 class="title-style">Digital Marketing</h3>
            <p class="mt-2">Digital marketing services offered by NTACT IT help businesses enhance their online presence, reach their target audience, and achieve marketing goals effectively. Our services include SEO, PPC advertising, social media marketing, content strategy, and analytics to drive brand awareness and customer engagement.</p>
        </div>
           <div class="row">
               <div class="col-lg-6 content-image order-lg-first order-last">
                   <a href="#image"><img src="{{ asset('assets/images/digital.webp') }}" class="img-responsive" alt="content-photo"></a>
               </div>
               <div class="col-lg-6 about-right-faq align-self pl-lg-5">
                  
                   <div class="mt-4 pt-md-2">
                       <div class="about-info-m d-flex">
                           <div class="icon-style-ab mr-4">
                               <i class="fas fa-globe"></i>
                           </div>
                           <div class="about-detail">
                               <h4>Services Offered</h4>
                               <p><b>Search Engine Optimization (SEO):</b> Optimizing websites to improve search engine rankings and increase organic traffic.</p>
                               <br>
                               <p><b>Pay-Per-Click (PPC) Advertising:</b> Managing PPC campaigns on platforms like Google Ads to drive targeted traffic and conversions.</p>
                               <br>
                               <p><b>Social Media Marketing:</b> Creating and managing social media campaigns to build brand awareness and engage with audiences.</p>
                               <br>
                               <p><b>Content Strategy:</b> Developing content plans and strategies to attract, educate, and convert prospects into customers.</p>
                               <br>
                               <p><b>Analytics and Reporting:</b> Monitoring campaign performance, analyzing data, and providing actionable insights for continuous improvement.</p>
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
