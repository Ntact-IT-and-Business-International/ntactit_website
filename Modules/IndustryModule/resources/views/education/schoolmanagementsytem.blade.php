@extends('layouts.app')

@section('title', 'application')

@section('content')
 
 
 <!-- banner bottom section -->
 <section class="w3l-aboutblock py-5">
    <div class="container py-md-5 py-sm-4">
        <div class="row">
            <div class="col-lg-6 content-image order-lg-first order-last">
                <a href="#image"><img src="assets/images/img2.jpg" class="img-responsive" alt="content-photo"></a>
            </div>
            
            <div class="col-lg-6 about-right-faq align-self pl-lg-5">
                <h3 class="title-style">School Management System</h3>
                <p class="mt-2">A School Management System provided by NTACT IT offers comprehensive solutions tailored for educational institutions. It enables efficient management of administrative tasks, academic processes, and communication within schools. This system enhances productivity and transparency, streamlining operations from student enrollment to alumni management.</p>
                <div class="mt-4 pt-md-2">
                    <div class="about-info-m d-flex">
                        <div class="icon-style-ab mr-4">
                            <i class="fas fa-user-cog"></i>
                        </div>
                        <div class="about-detail">
                            <h4>Features</h4>
                            <p> <b>Administrative Tools:</b> Includes features for managing student records, attendance tracking, staff management, and timetable scheduling.</p>
                            <br>
                            <p> <b>Communication:</b> Facilitates communication between teachers, students, and parents through integrated messaging and notification systems.</p>
                            <br>
                            <p> <b>E-learning Integration: </b> Supports online learning with tools for course management, online assignments, and virtual classrooms.</p>
                            <br>
                            <p><b>Finance Management:</b> Manages fees collection, payroll processing, budgeting, and financial reporting.</p>
                            <br>
                            <p><b> Reporting and Analytics: </b> Provides insights through analytics on student performance, attendance trends, and administrative efficiency.</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>


@endsection