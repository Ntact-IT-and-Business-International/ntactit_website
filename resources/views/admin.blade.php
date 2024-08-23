<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
@include('layouts.css')

<body>
    @include('layouts.preloader')

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
            <a href="/dashboard" class="app-brand-text demo sidenav-text text-large font-weight-normal ml-2">NTACTIT</a>
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
        @include('layouts.navbar')
        <!-- [ Layout navbar ( Header ) ] End -->

        <!-- [ Layout content ] Start -->
        <div class="layout-content">

            <!-- [ content ] Start -->
            <div class="container-fluid flex-grow-1 container-p-y">
                @include('layouts.breadcrumb')
                @yield('content')
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
    <!-- Core scripts -->
    @include('layouts.javascript')

</body>

</html>
