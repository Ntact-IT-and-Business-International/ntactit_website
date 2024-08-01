@extends('template')

@section('title', 'Careers')

@section('content')
   <!-- Careers -->
   <!-- Mission and Vision Section -->
   <section class="w3l-aboutblock py-5">
       <div class="container py-lg-5 py-md-4 py-2">
           <div class="row">
               <div class="col-lg-12">
                   <h2 class="title-big">Join Our Team</h2>
                   <p class="mt-4">At Ntact It, we are always looking for talented individuals to join our team. Our mission is to innovate and deliver top-notch IT solutions, and we need passionate professionals to help us achieve this vision.</p>
               </div>
           </div>
       </div>
   </section>

   <!-- Careers Content Section -->
   <section class="w3l-aboutblock py-5">
       <div class="container py-lg-5 py-md-4 py-2">
           <div class="row">
               <div class="col-lg-6">
                   <h3>Why Work With Us?</h3>
                   <p class="mt-4">We offer a dynamic work environment, opportunities for growth, and the chance to work on exciting projects. Join us and be a part of a team that values innovation, collaboration, and excellence.</p>
               </div>
               <div class="col-lg-6">
                   <img src="{{ asset('assets/images/careers.jpg') }}" class="img-fluid" alt="Careers Image">
               </div>
           </div>
           <div class="row mt-5">
               <!-- Cards Section -->
               <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                   <div class="card package-card position-relative">
                       <div class="card-body service-details">
                           <h4 class="service-heading">Current Openings</h4>
                           <p class="package-description">Explore the latest job openings and find your next career opportunity with us.</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                   <div class="card package-card position-relative">
                       <div class="card-body service-details">
                           <h4 class="service-heading">Life at Ntact It</h4>
                           <p class="package-description">Get a glimpse of what it's like to work at Ntact It. Learn about our culture and work environment.</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                   <div class="card package-card position-relative">
                       <div class="card-body service-details">
                           <h4 class="service-heading">Employee Benefits</h4>
                           <p class="package-description">We offer competitive salaries, comprehensive benefits, and opportunities for professional development.</p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
@endsection
