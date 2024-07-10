@extends('template')

@section('title', 'Cyber Security')

@section('content')
   <!-- Cyber Security -->
   <!-- Banner bottom section -->
   <section class="w3l-aboutblock py-5">
       <div class="container py-md-5 py-sm-4">
           <div class="row">
               <div class="col-lg-6 content-image order-lg-first order-last">
                   <a href="#image"><img src="{{ asset('assets/images/blog6.jpg') }}" class="img-responsive" alt="content-photo"></a>
               </div>
               <div class="col-lg-6 about-right-faq align-self pl-lg-5">
                   <h3 class="title-style">Cyber Security</h3>
                   <p class="mt-2">Cyber security services offered by NTACT IT provide comprehensive protection against cyber threats and vulnerabilities. Our services include risk assessment, security audits, threat detection, incident response, and ongoing security management to safeguard your digital assets and maintain business continuity.</p>
                   <div class="mt-4 pt-md-2">
                       <div class="about-info-m d-flex">
                           <div class="icon-style-ab mr-4">
                               <i class="fas fa-shield-alt"></i>
                           </div>
                           <div class="about-detail">
                               <h4>Services Offered</h4>
                               <p><b>Risk Assessment:</b> Identifying and evaluating cyber security risks specific to your organization.</p>
                               <p><b>Security Audits:</b> Conducting thorough audits to assess the effectiveness of current security measures.</p>
                               <p><b>Threat Detection:</b> Implementing advanced tools and techniques to detect and respond to cyber threats in real-time.</p>
                               <p><b>Incident Response:</b> Developing and implementing strategies to mitigate and recover from cyber security incidents.</p>
                               <p><b>Security Management:</b> Providing ongoing monitoring, updates, and improvements to maintain robust cyber security defenses.</p>
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
