@extends('template')

@section('title', 'Data Analytics')

@section('content')
   <!-- Data Analytics -->
   <!-- Banner bottom section -->
   <section class="w3l-aboutblock py-5">
       <div class="container py-md-5 py-sm-4">
           <div class="row">
               <div class="col-lg-6 content-image order-lg-first order-last">
                   <a href="#image"><img src="{{ asset('assets/images/blog6.jpg') }}" class="img-responsive" alt="content-photo"></a>
               </div>
               <div class="col-lg-6 about-right-faq align-self pl-lg-5">
                   <h3 class="title-style">Data Analytics</h3>
                   <p class="mt-2">Data analytics services offered by NTACT IT empower businesses to derive valuable insights from their data. Our services include data collection, analysis, visualization, and interpretation to support informed decision-making and drive business growth.</p>
                   <div class="mt-4 pt-md-2">
                       <div class="about-info-m d-flex">
                           <div class="icon-style-ab mr-4">
                               <i class="fas fa-chart-bar"></i>
                           </div>
                           <div class="about-detail">
                               <h4>Services Offered</h4>
                               <p><b>Data Collection:</b> Gathering and consolidating data from various sources, ensuring accuracy and completeness.</p>
                              <br>
                               <p><b>Data Analysis:</b> Applying advanced analytical techniques to uncover patterns, trends, and correlations within the data.</p>
                              <br>
                               <p><b>Data Visualization:</b> Presenting data insights through visualizations and dashboards for easy understanding and actionable insights.</p>
                               <br>
                               <p><b>Interpretation and Reporting:</b> Interpreting analysis results and generating comprehensive reports to guide strategic decisions.</p>
                               <br>
                               <p><b>Business Intelligence:</b> Leveraging data analytics to enhance operational efficiency, optimize processes, and gain competitive advantages.</p>
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
