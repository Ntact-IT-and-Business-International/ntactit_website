<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

@include('layouts.front.css')

<body>
    <!--header-->
    @include('layouts.front.menu')
    <!--//header-->
    <!-- banner section -->
    @include('layouts.front.slider')
    <!-- //banner section -->
    <section class="w3l-aboutblock py-1">
<div class="service-section py-5">
    <div class="container py-md-5 py-4">
        <div class="row align-items-center mb-5">
            <div class="col-md-6 section-heading">
                <h5 class="small-title-2">Ntact IT Insights</h5>
                <h3 class="title-style-2">
                    Latest Trends and Innovations</h3>
            </div>
            <div class="col-md-6 section-heading mt-md-0 mt-2">
                <p>
                    Stay updated with the latest trends, insights, and innovations in the tech world. Explore our expert analyses and in-depth articles to help your business stay ahead of the curve.
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 item">
                <div class="card">
                    <div class="card-header p-0 position-relative border-0">
                        <a href="insights.html">
                            <img class="d-block img-responsive" src="assets/images/insight1.jpg" alt="card-image">
                        </a>
                    </div>
                    <div class="card-body service-details">
                        <span class="label-style">Tech</span>
                        <a href="insights.html" class="service-heading">AI and Machine Learning</a>
                        <p>Discover how AI and machine learning are revolutionizing industries, enhancing business processes, and driving innovation.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative border-0">
                        <a href="insights.html">
                            <img class="d-block img-responsive" src="assets/images/insight2.jpg" alt="card-image">
                        </a>
                    </div>
                    <div class="card-body service-details">
                        <span class="label-style label-style-2">Business</span>
                        <a href="insights.html" class="service-heading">Cloud Computing</a>
                        <p>Explore the benefits of cloud computing for businesses, from scalability and cost-efficiency to enhanced security</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative border-0">
                        <a href="insights.html">
                            <img class="d-block img-responsive" src="assets/images/insight3.jpg" alt="card-image">
                        </a>
                    </div>
                    <div class="card-body service-details">
                        <span class="label-style label-style-3">Innovation</span>
                        <a href="insights.html" class="service-heading">IoT Solutions</a>
                        <p>Learn how IoT solutions are transforming industries by connecting devices, collecting data, and improving operational.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-2 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative border-0">
                        <a href="insights.html">
                            <img class="d-block img-responsive" src="assets/images/insight4.jpg" alt="card-image">
                        </a>
                    </div>
                    <div class="card-body service-details">
                        <span class="label-style label-style-4">Development</span>
                        <a href="insights.html" class="service-heading">Web Development Trends</a>
                        <p>Stay ahead in web development with insights into the latest trends, frameworks, and best practices shaping the industry.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-2 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative border-0">
                        <a href="insights.html">
                            <img class="d-block img-responsive" src="assets/images/insight5.jpg" alt="card-image">
                        </a>
                    </div>
                    <div class="card-body service-details">
                        <span class="label-style label-style-5">Security</span>
                        <a href="insights.html" class="service-heading">Cybersecurity</a>
                        <p>Understand the importance of cybersecurity measures to protect your business from threats and ensure data integrity.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-2 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative border-0">
                        <a href="insights.html">
                            <img class="d-block img-responsive" src="assets/images/insight6.jpg" alt="card-image">
                        </a>
                    </div>
                    <div class="card-body service-details">
                        <span class="label-style label-style-6">Future</span>
                        <a href="insights.html" class="service-heading">Blockchain Technology</a>
                        <p>Dive into the world of blockchain technology and explore its potential to disrupt traditional business models and processes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
    <!-- footer -->
   @include('layouts.front.footer')
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top --> 
    <!--
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    -->
    
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.js"></script>
    <!-- script for tesimonials carousel slider -->
    <script>
        $(document).ready(function () {
            $("#owl-demo2").owlCarousel({
                loop: true,
                nav: false,
                margin: 50,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    736: {
                        items: 1,
                        nav: false
                    },
                    991: {
                        items: 2,
                        margin: 30,
                        nav: false
                    },
                    1080: {
                        items: 3,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials carousel slider -->
    <!-- owl carousel -->

    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific popup -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
</body>

</html>