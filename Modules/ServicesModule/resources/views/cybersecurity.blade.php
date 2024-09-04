@extends('template')

@section('title', 'Cyber Security')

@section('content')
   <!-- Cyber Security -->
   <!-- Banner bottom section -->
   <section class="w3l-aboutblock py-5">
       <div class="container py-md-5 py-sm-4">
        <div class="row mb-4">
            <h3 class="title-style">Cyber Security</h3>
            <p class="mt-2">In today's digital landscape, robust cyber security is essential for safeguarding your business. Ntact IT's comprehensive security services provide multi-layered protection against a wide range of threats, from malware and phishing attacks to data breaches and unauthorized access. Our team of cybersecurity experts will work with you to assess your risk profile, implement industry-leading security solutions, and develop a tailored incident response plan to ensure your critical systems and sensitive information remain secure.</p>
        </div>
           <div class="row">
               <div class="col-lg-6 content-image order-lg-first order-last">
                   <a href="#image"><img src="{{ asset('assets/images/cyber.jpg') }}" class="img-responsive" alt="content-photo"></a>
               </div>
               <div class="col-lg-6 about-right-faq align-self pl-lg-5">
                   <div class="mt-4 pt-md-2">
                       <div class="about-info-m d-flex">
                           <div class="icon-style-ab mr-4">
                               <i class="fas fa-shield-alt"></i>
                           </div>
                           <div class="about-detail">
                               <h4>Services Offered</h4>
                               <p><b>Risk Assessment:</b> Identifying and evaluating cyber security risks specific to your organization.</p>
                               <br>
                               <p><b>Security Audits:</b> Conducting thorough audits to assess the effectiveness of current security measures.</p>
                               <br>
                               <p><b>Threat Detection:</b> Implementing advanced tools and techniques to detect and respond to cyber threats in real-time.</p>
                               <br>
                               <p><b>Incident Response:</b> Developing and implementing strategies to mitigate and recover from cyber security incidents.</p>
                               <br>
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
