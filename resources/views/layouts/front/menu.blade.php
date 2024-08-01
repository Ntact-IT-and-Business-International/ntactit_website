<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke">
                            
                
                <h1 class="navbar-brand d-flex align-items-center" wire:navigate href="/">
                    <a class="navbar-brand" wire:navigate href="{{('/')}}">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services <span class="caret"></span>
                            <!-- ▼ Arrow indicator -->
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" wire:navigate href="/service/web-design">Web Design</a>
                            <a class="dropdown-item" wire:navigate href="/service/application-development">Application Development</a>
                            <a class="dropdown-item" wire:navigate href="/service/bulk-sms">Bulk SMS</a>
                            <a class="dropdown-item" wire:navigate href="/service/enterprise-it">Enterprise I.T</a>
                            <a class="dropdown-item" wire:navigate href="/service/cybersecurity">CyberSecurity </a>
                            <a class="dropdown-item" wire:navigate href="/service/artificialphintelligence">Artificial Intelligence </a>
                            <a class="dropdown-item" wire:navigate href="/service/data_analytics">Data Analytics </a>
                            <a class="dropdown-item" wire:navigate href="/service/networking">Networking </a>
                            <a class="dropdown-item" wire:navigate href="/service/consultancy">I.T Consultancy </a>
                            <a class="dropdown-item" wire:navigate href="/service/digitalmarketing">Digital Marketing </a>
                            <a class="dropdown-item" wire:navigate href="/service/ussd">USSD Applications</a>
                            <a class="dropdown-item" wire:navigate href="/service/cctv">CCTV Camera Installations </a>
                        </div>
                        </li>

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Industries <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#" data-toggle="collapse" data-target="#educationCollapse" aria-expanded="false" aria-controls="educationCollapse" onclick="event.preventDefault(); event.stopPropagation(); $('#educationCollapse').collapse('toggle');">Education <span class="caret-right"></span></a>
                            <div class="collapse" id="educationCollapse">
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('School Management System') }}">School Management System</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('elearning') }}">E-learning Platforms</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('campusnetworking') }}">Campus WIFI & Networking</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('classroomtechnology') }}">Classroom Technology</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('supportandmaintainence') }}">I.T Support & Maintainence</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('digitalspecialisedcourses') }}">Digital Specialised Courses</a>
                            </div>
                            <a class="dropdown-item" href="#" data-toggle="collapse" data-target="#healthCollapse" aria-expanded="false" aria-controls="healthCollapse" onclick="event.preventDefault(); event.stopPropagation(); $('#healthCollapse').collapse('toggle');">Health <span class="caret-right"></span></a>
                            <div class="collapse" id="healthCollapse">
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('electronicmedicalrecords') }}">Electronic Medical Records</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('telemedicine') }}">Telemedicine Solutions</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('healthanalytics') }}">Health Analytics</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('healthcybersecurity') }}">Cybersecurity for Health</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('iot_enabledmedicaldevices') }}">IoT-enabled Medical Devices</a>
                            </div>
                            <a class="dropdown-item" href="#" data-toggle="collapse" data-target="#businessFinanceCollapse" aria-expanded="false" aria-controls="businessFinanceCollapse" onclick="event.preventDefault(); event.stopPropagation(); $('#businessFinanceCollapse').collapse('toggle');">Business & Finance <span class="caret-right"></span></a>
                            <div class="collapse" id="businessFinanceCollapse">
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('fintechSolutions') }}">Fintech Solutions</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('financialAnalytics') }}">Financial Analytics</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('blockchainFinance') }}">Blockchain for Finance</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('erpSystems') }}">ERP Systems</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('automatedTrading') }}">Automated Trading Platforms</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('mobileBanking') }}">Mobile Banking Solutions</a>
                            </div>
                            <a class="dropdown-item" href="#" data-toggle="collapse" data-target="#realEstateCollapse" aria-expanded="false" aria-controls="realEstateCollapse" onclick="event.preventDefault(); event.stopPropagation(); $('#realEstateCollapse').collapse('toggle');">Real Estate <span class="caret-right"></span></a>
                            <div class="collapse" id="realEstateCollapse">
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('propertyManagement') }}">Property Mgt Systems</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('virtualTours') }}">Virtual Tours & AR</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('realEstateAnalytics') }}">Real Estate Analytics</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('crmSolutions') }}">CRM Solutions</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('tenantPortals') }}">Tenant & Owner Portals</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('iotRealEstate') }}">IoT for Smart Buildings</a>
                            </div>

                            <a class="dropdown-item" href="#" data-toggle="collapse" data-target="#smartAgricultureCollapse" aria-expanded="false" aria-controls="smartAgricultureCollapse" onclick="event.preventDefault(); event.stopPropagation(); $('#smartAgricultureCollapse').collapse('toggle');">Smart Agriculture <span class="caret-right"></span></a>
                            <div class="collapse" id="smartAgricultureCollapse">
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('precisionFarming') }}">Precision Farming Solutions</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('droneTechnology') }}">Drone Technology</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('cropMonitoring') }}">Crop Monitoring Systems</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('smartIrrigation') }}">Smart Irrigation Systems</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('agriAnalytics') }}">Agricultural Analytics</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('livestockManagement') }}">Livestock Mgt Solutions</a>
                            </div>

                            <a class="dropdown-item" href="#" data-toggle="collapse" data-target="#securityCollapse" aria-expanded="false" aria-controls="securityCollapse" onclick="event.preventDefault(); event.stopPropagation(); $('#securityCollapse').collapse('toggle');">Security <span class="caret-right"></span></a>
                            <div class="collapse" id="securityCollapse">
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('cyberSecurity') }}">Cybersecurity Solutions</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('networkSecurity') }}">Network Security</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('physicalSecurity') }}">Physical Security Systems</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('securityConsulting') }}">Security Consulting</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('threatDetection') }}">Threat Detection & Response</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('identityManagement') }}">Identity & Access Mgt</a>
                            </div>

                            <a class="dropdown-item" href="#" data-toggle="collapse" data-target="#humanResourceCollapse" aria-expanded="false" aria-controls="humanResourceCollapse" onclick="event.preventDefault(); event.stopPropagation(); $('#humanResourceCollapse').collapse('toggle');">Human Resource <span class="caret-right"></span></a>
                            <div class="collapse" id="humanResourceCollapse">
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('hrManagement') }}">HR Management Systems</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('payrollSolutions') }}">Payroll Solutions</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('talentAcquisition') }}">Talent Acquisition Platforms</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('employeeEngagement') }}">Employee Engagement Tools</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('performanceManagement') }}">Performance Management</a>
                                <a class="dropdown-item sub-item" wire:navigate href="{{ route('trainingDevelopment') }}">Training & Development</a>
                            </div>
                            
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" wire:navigate href="/insight/insights" id="navbarDropdown" role="button">
                            Insights
                        </a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Company <span class="caret"></span>
                            <!-- ▼ Arrow indicator -->
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" wire:navigate href="/company/about">About Us</a>
                            <a class="dropdown-item" wire:navigate href="/company/careers">Careers</a>
                            <a class="dropdown-item" wire:navigate href="/company/csr">Corporate Social Responsibility</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/contact" id="navbarDropdown" role="button">
                            Contacts
                        </a>
                    </li>

              
                    <li class="nav-item">
                        <a wire:navigate href="{{ route('login')}}">Login</a>
                    </li>
                    <div class="search-right ml-lg-2">
                          @livewire('front.cart')
                          @if (session('msg'))
                                <div class="mt-2 font-medium text-sm text-green-600 msg-bg-success">
                                    {{ session('msg') }}
                                </div>
                            @endif
                    </div>
    
                    <!-- //search button -->
                    <!-- <li class="nav-item">
                        <a href="{{ url('/about') }}" class="text-white">Contact Us</a>

                    </li> -->
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