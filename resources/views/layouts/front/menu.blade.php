<style>
    /* Style for the main navbar item to be relative */
    .nav-item {
    position: relative;
    }
    /* Hide submenus by default */
    .dropdown-menu {
    display: none;
    position: absolute;
    left: 0;
    top: 100%;
    background-color: white; /* Adjust the background color */
    padding: 10px 0;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    z-index: 1000;
    transition: opacity 0.3s ease;
    }
    /* Show submenus on hover */
    .nav-item:hover > .dropdown-menu {
    display: block;
    opacity: 1;
    visibility: visible;
    }
    /* Style for the submenu items */
    .dropdown-item {
    padding: 10px 20px;
    white-space: nowrap;
    }
    /* Submenu inside dropdown items */
    .sub-item {
    padding-left: 30px; /* Indent sub-items */
    }
    /* Styles for the dropdown item */
.dropdown-item-wrapper {
    position: relative;
}

/* Initially hide submenus */
.dropdown-submenu {
    display: none;
    position: absolute;
    left: 100%;
    top: 0;
    background-color: #f8f9fa; /* Same as Bootstrap default dropdown background */
    border: 1px solid #ddd;
    min-width: 200px; /* Adjust width as needed */
    z-index: 1000;
    padding: 10px 0;
}

/* Show the submenu on hover */
.dropdown-item-wrapper:hover .dropdown-submenu {
    display: block;
}

/* Styling for the dropdown items */
.dropdown-item {
    position: relative;
    display: block;
    width: 100%;
    padding: 10px 20px;
    clear: both;
    font-weight: 400;
    color: #343a40;
    text-align: inherit;
    white-space: nowrap;
    background: none;
    border: 0;
    cursor: pointer;
}

/* Arrow indicating submenu presence */
.caret-right {
    float: right;
    margin-top: 4px;
    margin-right: 10px;
}

/* Sub-item styling for better visual separation */
.sub-item {
    padding: 8px 20px;
    font-size: 14px;
    color: #495057;
}

</style>
<header id="site-header" class="fixed-top"  styl="background-color:#ffffff; color:#000000;">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke">
            <h1 class="navbar-brand d-flex align-items-center"  href="/">
                <a class="navbar-brand"  href="{{('/')}}">
                <img src="{{ asset('assets/images/ntact.png')}}" alt="Ntact it" title="Ntact it" style="height:65px;" />
                </a> 
                <!-- <span class="lostyle-1"style="color: white;">TACT-IT</span> -->
            </h1>
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
            <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services <span class="caret"></span>
                            <!-- ▼ Arrow indicator -->
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item"  href="/service/web-design">Web Design</a>
                            <a class="dropdown-item"  href="/service/application-development">Application Development</a>
                            <a class="dropdown-item"  href="/service/bulk-sms">Bulk SMS</a>
                            <a class="dropdown-item"  href="/service/data_analytics">Data Analytics </a>
                            <a class="dropdown-item"  href="/service/networking">Networking </a>
                            <a class="dropdown-item"  href="/service/consultancy">I.T Consultancy </a>
                            <a class="dropdown-item"  href="/service/digital-marketing">Digital Marketing </a>
                            <a class="dropdown-item"  href="/service/ussd">USSD Applications</a>
                            <a class="dropdown-item"  href="/service/cctv">CCTV Camera Installations </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Industries <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" style="width:170%" aria-labelledby="navbarDropdown">
                            <div class="dropdown-item-wrapper">
                                <a class="dropdown-item" href="#">Education <span class="caret-right"></span></a>
                                <div class="dropdown-submenu">
                                    <a class="dropdown-item sub-item" href="{{ route('School Management System') }}">School Management System</a>
                                    <a class="dropdown-item sub-item" href="{{ route('elearning') }}">E-learning Platforms</a>
                                    <a class="dropdown-item sub-item" href="{{ route('campusnetworking') }}">Campus WIFI & Networking</a>
                                    <a class="dropdown-item sub-item" href="{{ route('classroomtechnology') }}">Classroom Technology</a>
                                    <a class="dropdown-item sub-item" href="{{ route('supportandmaintainence') }}">I.T Support & Maintainence</a>
                                    <a class="dropdown-item sub-item" href="{{ route('digitalspecialisedcourses') }}">Digital Specialised Courses</a>
                                </div>
                            </div>
                            <div class="dropdown-item-wrapper">
                                <a class="dropdown-item" href="#">Health <span class="caret-right"></span></a>
                                <div class="dropdown-submenu">
                                    <a class="dropdown-item sub-item"  href="{{ route('electronicmedicalrecords') }}">Electronic Medical Records</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('telemedicine') }}">Telemedicine Solutions</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('healthanalytics') }}">Health Analytics</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('healthcybersecurity') }}">Cybersecurity for Health</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('iot_enabledmedicaldevices') }}">IoT-enabled Medical Devices</a>
                                </div>
                            </div>
                            <div class="dropdown-item-wrapper">
                                <a class="dropdown-item" href="#">Business & Finance <span class="caret-right"></span></a>
                                <div class="dropdown-submenu">
                                    <a class="dropdown-item sub-item"  href="{{ route('fintechSolutions') }}">Fintech Solutions</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('financialAnalytics') }}">Financial Analytics</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('blockchainFinance') }}">Blockchain for Finance</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('erpSystems') }}">ERP Systems</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('automatedTrading') }}">Automated Trading Platforms</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('mobileBanking') }}">Mobile Banking Solutions</a>
                                </div>
                            </div>
                            <div class="dropdown-item-wrapper">
                                <a class="dropdown-item" href="#">Real Estate <span class="caret-right"></span></a>
                                <div class="dropdown-submenu">
                                    <a class="dropdown-item sub-item"  href="{{ route('propertyManagement') }}">Property Mgt Systems</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('virtualTours') }}">Virtual Tours & AR</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('realEstateAnalytics') }}">Real Estate Analytics</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('crmSolutions') }}">CRM Solutions</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('tenantPortals') }}">Tenant & Owner Portals</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('iotRealEstate') }}">IoT for Smart Buildings</a>
                                </div>
                            </div>
                            <div class="dropdown-item-wrapper">
                                <a class="dropdown-item" href="#">Smart Agriculture <span class="caret-right"></span></a>
                                <div class="dropdown-submenu">
                                    <a class="dropdown-item sub-item"  href="{{ route('precisionFarming') }}">Precision Farming Solutions</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('droneTechnology') }}">Drone Technology</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('cropMonitoring') }}">Crop Monitoring Systems</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('smartIrrigation') }}">Smart Irrigation Systems</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('agriAnalytics') }}">Agricultural Analytics</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('livestockManagement') }}">Livestock Mgt Solutions</a>
                                </div>
                            </div>
                            <div class="dropdown-item-wrapper">
                                <a class="dropdown-item" href="#"> Security <span class="caret-right"></span></a>
                                <div class="dropdown-submenu">
                                    <a class="dropdown-item sub-item"  href="{{ route('cyberSecurity') }}">Cybersecurity Solutions</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('networkSecurity') }}">Network Security</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('physicalSecurity') }}">Physical Security Systems</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('securityConsulting') }}">Security Consulting</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('threatDetection') }}">Threat Detection & Response</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('identityManagement') }}">Identity & Access Mgt</a>
                                </div>
                            </div>
                            <div class="dropdown-item-wrapper">
                                <a class="dropdown-item" href="#">Human Resource <span class="caret-right"></span></a>
                                <div class="dropdown-submenu">
                                    <a class="dropdown-item sub-item"  href="{{ route('hrManagement') }}">HR Management Systems</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('payrollSolutions') }}">Payroll Solutions</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('talentAcquisition') }}">Talent Acquisition Platforms</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('employeeEngagement') }}">Employee Engagement Tools</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('performanceManagement') }}">Performance Management</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('trainingDevelopment') }}">Training & Development</a>
                                </div>
                            </div>
                            <div class="dropdown-item-wrapper">
                                <a class="dropdown-item" href="#">Weather<span class="caret-right"></span></a>
                                <div class="dropdown-submenu">
                                    <a class="dropdown-item sub-item"  href="{{ route('hrManagement') }}">HR Management Systems</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('payrollSolutions') }}">Payroll Solutions</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('talentAcquisition') }}">Talent Acquisition Platforms</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('employeeEngagement') }}">Employee Engagement Tools</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('performanceManagement') }}">Performance Management</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('trainingDevelopment') }}">Training & Development</a>
                                </div>
                            </div>
                            <div class="dropdown-item-wrapper">
                                <a class="dropdown-item" href="#">Climate Changes<span class="caret-right"></span></a>
                                <div class="dropdown-submenu">
                                    <a class="dropdown-item sub-item"  href="{{ route('hrManagement') }}">HR Management Systems</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('payrollSolutions') }}">Payroll Solutions</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('talentAcquisition') }}">Talent Acquisition Platforms</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('employeeEngagement') }}">Employee Engagement Tools</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('performanceManagement') }}">Performance Management</a>
                                    <a class="dropdown-item sub-item"  href="{{ route('trainingDevelopment') }}">Training & Development</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="/insight/insights" id="navbarDropdown" role="button">
                        Products
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Business <span class="caret"></span>
                            <!-- ▼ Arrow indicator -->
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item"  href="/businessdevelopment/partners">Partnerships</a>
                            <a class="dropdown-item"  href="/businessdevelopment/get-dealerships">Dealership</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Company <span class="caret"></span>
                            <!-- ▼ Arrow indicator -->
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item"  href="/contact">Contact Us</a>
                            <a class="dropdown-item"  href="/company/about">About Us</a>
                            <a class="dropdown-item"  href="/company/careers">Careers</a>
                            <a class="dropdown-item"  href="/company/events-and-news">Events & News</a>
                            <a class="dropdown-item"  href="/company/csr">Corporate Social Responsibility</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Enterprise I.T <span class="caret"></span>
                            <!-- ▼ Arrow indicator -->
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item"  href="/service/enterprise-it">Network Management</a>
                            <a class="dropdown-item"  href="/company/about">Server Adminstration</a>
                            <a class="dropdown-item"  href="/company/careers">Clouds Solutions</a>
                            <a class="dropdown-item"  href="/service/cybersecurity">CyberSecurity </a>
                            <a class="dropdown-item"  href="/service/artificialphintelligence">Artificial Intelligence </a>
                        </div>
                    </li>
                    <div class="search-right ml-lg-2">
                        @livewire('front.cart')
                        @if (session('msg'))
                        <div class="mt-2 font-medium text-sm text-green-600 msg-bg-success">
                            {{ session('msg') }}
                        </div>
                        @endif
                    </div>
                </ul>
            </div>
            <!-- toggle switch for light and dark theme -->
            <!-- 
                <div class="cont-ser-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
                </div>
                -->
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>
<script>
    $(document).ready(function(){
    // This will toggle the collapse on hover
    $('.dropdown-item').hover(
        function() {
            var target = $(this).data('target');
            $(target).collapse('show');
        }, 
        function() {
            var target = $(this).data('target');
            $(target).collapse('hide');
        }
    );
    });
    
</script>