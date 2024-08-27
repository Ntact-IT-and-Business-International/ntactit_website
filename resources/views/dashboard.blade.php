<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
<head>
    <title>Ntactit | {{ Request()->route()->getName() }}</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description"
        content="Empire is one of the unique admin template built on top of Bootstrap 4 framework. It is easy to customize, flexible code styles, well tested, modern & responsive are the topmost key factors of Empire Dashboard Template" />
    <meta name="keywords" content="bootstrap admin template, dashboard template, backend panel, bootstrap 4, backend template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard">
    <meta name="author" content="Codedthemes" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/ntact.png')}}">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/ionicons.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/linearicons.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/open-iconic.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/feather.css')}}">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap-material.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/shreerang-material.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/uikit.css')}}">

    <!-- Libs -->
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/flot/flot.css')}}">

</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
            <div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">
                <!-- Brand demo -->
                <div class="app-brand demo">
                    {{--<span class="app-brand-logo demo">
                        <img src="{{ asset('assets/images/ntact.png')}}" style="height:50px;" alt="Brand Logo" class="img-fluid ml-1">
                    </span>
                    --}}
                    <a href="/dashboard" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Ntactit</a>
                    <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
                        <i class="ion ion-md-menu align-middle"></i>
                    </a>
                </div>
                <div class="sidenav-divider mt-0"></div>

                <!-- Links -->
                @include('layouts.sidebar')
            </div>
            <!-- [ Layout sidenav ] End -->
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-dark container-p-x" id="layout-navbar">

                    <!-- Brand demo -->
                    <a href="index.html" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
                        {{--<span class="app-brand-logo demo">
                            <img src="{{ asset('admin/assets/img/logo-dark.png')}}" alt="Brand Logo" class="img-fluid">
                        </span>
                        --}}
                        <span class="app-brand-text demo font-weight-normal ml-2">Ntactit</span>
                    </a>

                    <!-- Sidenav toggle -->
                    <div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
                        <a class="nav-item nav-link px-0 mr-lg-4" href="javascript:">
                            <i class="ion ion-md-menu text-large align-middle"></i>
                        </a>
                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="navbar-collapse collapse" id="layout-navbar-collapse">
                        <!-- Divider -->
                        <hr class="d-lg-none w-100 my-2">

                        <div class="navbar-nav align-items-lg-center">
                            <!-- Search -->
                            <label class="nav-item navbar-text navbar-search-box p-0 active">
                                <i class="feather icon-search navbar-icon align-middle"></i>
                                <span class="navbar-search-input pl-2">
                                    <input type="text" class="form-control navbar-text mx-2" placeholder="Search...">
                                </span>
                            </label>
                        </div>

                        <div class="navbar-nav align-items-lg-center ml-auto">
                            <div class="demo-navbar-notifications nav-item dropdown mr-lg-3">
                                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                                    <i class="feather icon-bell navbar-icon align-middle"></i>
                                    <span class="badge badge-danger badge-dot indicator"></span>
                                    <span class="d-lg-none align-middle">&nbsp; Notifications</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="bg-primary text-center text-white font-weight-bold p-3">
                                        4 New Notifications
                                    </div>
                                    <div class="list-group list-group-flush">
                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <div class="ui-icon ui-icon-sm feather icon-home bg-secondary border-0 text-white"></div>
                                            <div class="media-body line-height-condenced ml-3">
                                                <div class="text-dark">Login from 192.168.1.1</div>
                                                <div class="text-light small mt-1">
                                                    Aliquam ex eros, imperdiet vulputate hendrerit et.
                                                </div>
                                                <div class="text-light small mt-1">12h ago</div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <div class="ui-icon ui-icon-sm feather icon-user-plus bg-primary border-0 text-white"></div>
                                            <div class="media-body line-height-condenced ml-3">
                                                <div class="text-dark">You have
                                                    <strong>4</strong> new followers</div>
                                                <div class="text-light small mt-1">
                                                    Phasellus nunc nisl, posuere cursus pretium nec, dictum vehicula tellus.
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <div class="ui-icon ui-icon-sm feather icon-power bg-danger border-0 text-white"></div>
                                            <div class="media-body line-height-condenced ml-3">
                                                <div class="text-dark">Server restarted</div>
                                                <div class="text-light small mt-1">
                                                    19h ago
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <div class="ui-icon ui-icon-sm feather icon-alert-triangle bg-warning border-0 text-dark"></div>
                                            <div class="media-body line-height-condenced ml-3">
                                                <div class="text-dark">99% server load</div>
                                                <div class="text-light small mt-1">
                                                    Etiam nec fringilla magna. Donec mi metus.
                                                </div>
                                                <div class="text-light small mt-1">
                                                    20h ago
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all notifications</a>
                                </div>
                            </div>

                            <div class="demo-navbar-messages nav-item dropdown mr-lg-3">
                                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                                    <i class="feather icon-mail navbar-icon align-middle"></i>
                                    <span class="badge badge-success badge-dot indicator"></span>
                                    <span class="d-lg-none align-middle">&nbsp; Messages</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="bg-primary text-center text-white font-weight-bold p-3">
                                        4 New Messages
                                    </div>
                                    <div class="list-group list-group-flush">
                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <img src="{{ asset('admin/assets/img/avatars/6-small.png')}}" class="d-block ui-w-40 rounded-circle" alt>
                                            <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">Lorem ipsum dolor consectetuer elit.</div>
                                                <div class="text-light small mt-1">
                                                    Josephin Doe &nbsp;·&nbsp; 58m ago
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <img src="{{ asset('admin/assets/img/avatars/4-small.png')}}" class="d-block ui-w-40 rounded-circle" alt>
                                            <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet, consectetuer.</div>
                                                <div class="text-light small mt-1">
                                                    Lary Doe &nbsp;·&nbsp; 1h ago
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <img src="{{ asset('admin/assets/img/avatars/5-small.png')}}" class="d-block ui-w-40 rounded-circle" alt>
                                            <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet elit.</div>
                                                <div class="text-light small mt-1">
                                                    Alice &nbsp;·&nbsp; 2h ago
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <img src="{{ asset('admin/assets/img/avatars/11-small.png')}}" class="d-block ui-w-40 rounded-circle" alt>
                                            <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet consectetuer amet elit dolor sit.</div>
                                                <div class="text-light small mt-1">
                                                    Suzen &nbsp;·&nbsp; 5h ago
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all messages</a>
                                </div>
                            </div>

                            <!-- Divider -->
                            <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
                            <div class="demo-navbar-user nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                    <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                                        <img src="{{ asset('assets/images/ntact.png')}}" alt class="d-block ui-w-30 rounded-circle">
                                        <span class="px-1 mr-lg-2 ml-2 ml-lg-0">{{ auth()->user()->name }}</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:" class="dropdown-item">
                                        <i class="feather icon-user text-muted"></i> &nbsp; My profile</a>
                                    <a href="javascript:" class="dropdown-item">
                                        <i class="feather icon-mail text-muted"></i> &nbsp; Messages</a>
                                    <a href="javascript:" class="dropdown-item">
                                        <i class="feather icon-settings text-muted"></i> &nbsp; Account settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="/logout" class="dropdown-item">
                                        <i class="feather icon-power text-danger"></i> &nbsp; Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- [ Layout navbar ( Header ) ] End -->

                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item font-weight-bold"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Main</li>
                            </ol>
                        </div>
                        <div class="row">
                            <!-- 1st row Start -->
                              <!-- Staustic card 8 Start -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-pattern-3-dark mb-4">
                                    <div class="card-body text-center">
                                        <i class="feather icon-mail bg-primary ui-rounded-icon"></i>
                                        <h4 class="mt-2"><span class="text-primary">8.62k</span> Subscribers</h4>
                                        <button class="btn btn-primary btn-sm btn-round">Manage List</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-pattern-3-dark mb-4">
                                    <div class="card-body text-center">
                                        <i class="feather icon-twitter bg-success ui-rounded-icon"></i>
                                        <h4 class="mt-2"><span class="text-success">+40</span> Followers</h4>
                                        <button class="btn btn-success btn-sm btn-round">Check them out</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-pattern-3-dark mb-4">
                                    <div class="card-body text-center">
                                        <i class="feather icon-briefcase bg-danger ui-rounded-icon"></i>
                                        <h4 class="mt-2">Business Plan</h4>
                                        <button class="btn btn-danger btn-sm btn-round">Upgrade to VIP</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-pattern-3-dark mb-4">
                                    <div class="card-body text-center">
                                        <i class="feather icon-shopping-cart bg-warning ui-rounded-icon"></i>
                                        <h4 class="mt-2"><span class="text-warning">10%</span> New Orders</h4>
                                        <button class="btn btn-warning btn-sm btn-round text-white">Update Now</button>
                                    </div>
                                </div>
                            </div>
                            <!-- 1st row Start -->
                        </div>
                        <div class="row"> 
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <canvas id="chart-graph" height="250" style="width:100%;" class="chartjs-demo"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <canvas id="chart-bars" height="250" style="width:100%;" class="chartjs-demo"></canvas>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <canvas id="chart-pie" height="250" style="width:100%;" class="chartjs-demo"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <canvas id="chart-pie2" height="250" style="width:100%;" class="chartjs-demo"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ content ] End -->

                    <!-- [ Layout footer ] Start -->
                   @include('layouts.footer')
                    <!-- [ Layout footer ] End -->
                </div>
                <!-- [ Layout content ] Start -->
            </div>
            <!-- [ Layout container ] End -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper] End -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCente" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="modal-content">
                    <div class="modal-body pb-1">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="text-center">
                            <h3 class="mt-3">Welcome To <span class="text-primary">Empire</span><sup>v1.0.1</sup></h3>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="50000">
                                <div class="row align-items-center">
                                    <div class="col-md-6 text-center">
                                        <img src="{{ asset('admin/assets/img/pages/welcome.png')}}" class="img-fluid my-4" alt="images">
                                    </div>
                                    <div class="col-md-6">
                                        <p class="f-16"><strong>Empire Admin v1.0.1</strong> will come with new prebuild mini admins.</p>
                                        <p class="f-16"> it include <strong>8+ New Admin Panels</strong> like</p>
                                        <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i>Hospital</p>
                                        <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i>Project & CRM</p>
                                        <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i>Membership</p>
                                        <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i>Helpdesk</p>
                                        <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i>School</p>
                                        <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i>SIS</p>
                                        <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i>Crypto</p>
                                        <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i>E-Commerce</p>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-9">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-interval="50000">
                                <img src="{{ asset('admin/assets/img/pages/admin.png')}}" class="img-fluid mt-0" alt="images">
                            </div>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" style="transform:rotate(180deg);margin-bottom:-1px">
                        <path class="elementor-shape-fill" fill="#2c3134" opacity="0.33"
                            d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z">
                        </path>
                        <path class="elementor-shape-fill" fill="#2c3134" opacity="0.66"
                            d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
                        <path class="elementor-shape-fill" fill="#2c3134" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z">
                        </path>
                    </svg>
                    <div class="modal-body text-center py-4" style="background:#2c3134">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
                        </ol>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="ml-2">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="mr-2">Next</span>
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Core scripts -->
    <script src="{{ asset('admin/assets/js/pace.js')}}"></script>
    <script src="{{ asset('admin/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/popper/popper.js')}}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.js')}}"></script>
    <script src="{{ asset('admin/assets/js/sidenav.js')}}"></script>
    <script src="{{ asset('admin/assets/js/layout-helpers.js')}}"></script>
    <script src="{{ asset('admin/assets/js/material-ripple.js')}}"></script>

    <!-- Libs -->
    <script src="{{ asset('admin/assets/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/eve/eve.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/flot/flot.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/flot/curvedLines.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/chart-am4/core.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/chart-am4/charts.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/chart-am4/animated.js')}}"></script>

    <!-- Demo -->
    <script src="{{ asset('admin/assets/js/demo.js')}}"></script>
    <script src="{{ asset('admin/assets/js/analytics.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/chartjs/chartjs.js')}}"></script>
    <script src="{{ asset('admin/assets/js/pages/charts_chartjs.js')}}"></script>
    <script>

        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        function checkCookie() {
            var ticks = getCookie("modelopen");
            if (ticks != "") {
                ticks++;
                setCookie("modelopen", ticks, 1);
                if (ticks == "2" || ticks == "1" || ticks == "0") {
                    $('#exampleModalCenter').modal();
                }
            } else {
                // user = prompt("Please enter your name:", "");
                $('#exampleModalCenter').modal();
                ticks = 1;
                setCookie("modelopen", ticks, 1);
            }
        }
    </script>
    <script src="{{ asset('admin/assets/js/pages/dashboards_index.js')}}"></script>

</body>

</html>
