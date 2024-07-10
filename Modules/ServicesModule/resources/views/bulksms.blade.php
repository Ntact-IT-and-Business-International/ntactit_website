@extends('template')

@section('title', 'application')

@section('content')
   <!-- bulk sms-->
   <!-- banner bottom section -->
   <section class="w3l-aboutblock py-5">
    <div class="container py-md-5 py-sm-4">
        <div class="row">
            <div class="col-lg-6 content-image order-lg-first order-last">
                <a href="#image"><img src="assets/images/img2.jpg" class="img-responsive" alt="content-photo"></a>
            </div>
            <div class="col-lg-6 about-right-faq align-self pl-lg-5">
                <h3 class="title-style">Bulk SMS!</h3>
                <p class="mt-2">Bulk SMS services offered by NTACT IT typically provide businesses
                     and organizations with the ability to send large volumes of text messages to 
                     a vast audience efficiently. This service is often used for marketing, notifications, 
                     alerts,and other forms of communication that require reaching many recipients 
                     simultaneously
                </p>
                <div class="mt-4 pt-md-2">
                    <div class="about-info-m d-flex">
                        <div class="icon-style-ab mr-4">
                            <i class="fas fa-user-cog"></i>
                        </div>
                        <div class="about-detail">
                            <h4>Features</h4>
                            <p> <b>Mass Messaging:</b> The primary feature is the ability to send thousands or even millions of SMS messages at once. This is useful for marketing campaigns, event notifications, reminders, and more.</p>
                            <br>
                            <p> <b> API Integration: </b> bulk SMS services offer APIs that allow businesses to integrate SMS capabilities into their own software or systems. This can automate the sending process and integrate SMS functionalities into existing workflows.</p>
                             <br>
                            <p> <b>Personalization: </b> can be personalized with the recipient's name or other custom fields, making the communication more relevant and engaging.</p>
                           <br>
                            <p><b>Scheduling:</b> Users can schedule messages to be sent at a specific time and date, allowing for planned and timely communications.</p>
                           <br>
                            <p><b> Analytics and Reporting: </b> reports and analytics on the delivery and response rates of the messages can help businesses measure the effectiveness of their SMS campaigns.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //banner bottom section -->
<!-- //about section -->

@endsection
