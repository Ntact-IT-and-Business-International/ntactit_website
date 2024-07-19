<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke">
                            
                
                <h1 class="navbar-brand d-flex align-items-center" href="index.html">
                    <a class="navbar-brand" href="{{('/')}}">
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
                            <a class="dropdown-item" href="/service/web-design">Web Design</a>
                            <a class="dropdown-item" href="/service/application-development">Application Development</a>
                            <a class="dropdown-item" href="/service/bulk-sms">Bulk SMS</a>
                            <a class="dropdown-item" href="/service/enterprise-it">Enterprise I.T</a>
                            <a class="dropdown-item" href="/service/cybersecurity">CyberSecurity </a>
                            <a class="dropdown-item" href="/service/artificialphintelligence">Artificial Intelligence </a>
                            <a class="dropdown-item" href="/service/data_analytics">Data Analytics </a>
                            <a class="dropdown-item" href="/service/networking">Networking </a>
                            <a class="dropdown-item" href="/service/consultancy">I.T Consultancy </a>
                            <a class="dropdown-item" href="/service/digitalmarketing">Digital Marketing </a>
                            <a class="dropdown-item" href="/service/ussd">USSD Applications</a>
                            <a class="dropdown-item" href="/service/cctv">CCTV Camera Installations </a>
                        </div>
                        </li>

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Industries <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#" data-toggle="collapse" data-target="#educationCollapse" aria-expanded="false" aria-controls="educationCollapse" onclick="event.preventDefault(); event.stopPropagation(); $('#educationCollapse').collapse('toggle');">Education <span class="caret-right"></span></a>
                            <div class="collapse" id="educationCollapse">
                                <a class="dropdown-item sub-item" href="{{ route('School Management System') }}">School Management System</a>
                                <a class="dropdown-item sub-item" href="{{ route('elearning') }}">E-learning Platforms</a>
                                <a class="dropdown-item sub-item" href="{{ route('campusnetworking') }}">Campus WIFI & Networking</a>
                                <a class="dropdown-item sub-item" href="{{ route('classroomtechnology') }}">Classroom Technology</a>
                                <a class="dropdown-item sub-item" href="{{ route('supportandmaintainence') }}">I.T Support & Maintainence</a>
                                <a class="dropdown-item sub-item" href="{{ route('digitalspecialisedcourses') }}">Digital Specialised Courses</a>
                            </div>
                            <a class="dropdown-item" href="#" data-toggle="collapse" data-target="#healthCollapse" aria-expanded="false" aria-controls="healthCollapse" onclick="event.preventDefault(); event.stopPropagation(); $('#healthCollapse').collapse('toggle');">Health <span class="caret-right"></span></a>
                            <div class="collapse" id="healthCollapse">
                                <a class="dropdown-item sub-item" href="{{ route('electronicmedicalrecords') }}">Electronic Medical Records</a>
                                <a class="dropdown-item sub-item" href="{{ route('telemedicine') }}">Telemedicine Solutions</a>
                                <a class="dropdown-item sub-item" href="{{ route('healthanalytics') }}">Health Analytics</a>
                                <a class="dropdown-item sub-item" href="{{ route('healthcybersecurity') }}">Cybersecurity for Health</a>
                                <a class="dropdown-item sub-item" href="{{ route('iot_enabledmedicaldevices') }}">IoT-enabled Medical Devices</a>
                            </div>
                            <a class="dropdown-item" href="#" data-toggle="collapse" data-target="#businessFinanceCollapse" aria-expanded="false" aria-controls="businessFinanceCollapse" onclick="event.preventDefault(); event.stopPropagation(); $('#businessFinanceCollapse').collapse('toggle');">Business & Finance <span class="caret-right"></span></a>
                            <div class="collapse" id="businessFinanceCollapse">
                                <a class="dropdown-item sub-item" href="{{ route('fintechSolutions') }}">Fintech Solutions</a>
                                <a class="dropdown-item sub-item" href="{{ route('financialAnalytics') }}">Financial Analytics</a>
                                <a class="dropdown-item sub-item" href="{{ route('blockchainFinance') }}">Blockchain for Finance</a>
                                <a class="dropdown-item sub-item" href="{{ route('erpSystems') }}">ERP Systems</a>
                                <a class="dropdown-item sub-item" href="{{ route('automatedTrading') }}">Automated Trading Platforms</a>
                                <a class="dropdown-item sub-item" href="{{ route('mobileBanking') }}">Mobile Banking Solutions</a>
                            </div>
                            <a class="dropdown-item" href="#" data-toggle="collapse" data-target="#realEstateCollapse" aria-expanded="false" aria-controls="realEstateCollapse" onclick="event.preventDefault(); event.stopPropagation(); $('#realEstateCollapse').collapse('toggle');">Real Estate <span class="caret-right"></span></a>
                            <div class="collapse" id="realEstateCollapse">
                                <a class="dropdown-item sub-item" href="{{ route('propertyManagement') }}">Property Management Systems</a>
                                <a class="dropdown-item sub-item" href="{{ route('virtualTours') }}">Virtual Tours & AR</a>
                                <a class="dropdown-item sub-item" href="{{ route('realEstateAnalytics') }}">Real Estate Analytics</a>
                                <a class="dropdown-item sub-item" href="{{ route('crmSolutions') }}">CRM Solutions</a>
                                <a class="dropdown-item sub-item" href="{{ route('tenantPortals') }}">Tenant & Owner Portals</a>
                                <a class="dropdown-item sub-item" href="{{ route('iotRealEstate') }}">IoT for Smart Buildings</a>
                            </div>

                            <a class="dropdown-item" href="#" data-toggle="collapse" data-target="#smartAgricultureCollapse" aria-expanded="false" aria-controls="smartAgricultureCollapse" onclick="event.preventDefault(); event.stopPropagation(); $('#smartAgricultureCollapse').collapse('toggle');">Smart Agriculture <span class="caret-right"></span></a>
                            <div class="collapse" id="smartAgricultureCollapse">
                                <a class="dropdown-item sub-item" href="{{ route('precisionFarming') }}">Precision Farming Solutions</a>
                                <a class="dropdown-item sub-item" href="{{ route('droneTechnology') }}">Drone Technology</a>
                                <a class="dropdown-item sub-item" href="{{ route('cropMonitoring') }}">Crop Monitoring Systems</a>
                                <a class="dropdown-item sub-item" href="{{ route('smartIrrigation') }}">Smart Irrigation Systems</a>
                                <a class="dropdown-item sub-item" href="{{ route('agriAnalytics') }}">Agricultural Analytics</a>
                                <a class="dropdown-item sub-item" href="{{ route('livestockManagement') }}">Livestock Management Solutions</a>
                            </div>

                            <a class="dropdown-item" href="#" data-toggle="collapse" data-target="#securityCollapse" aria-expanded="false" aria-controls="securityCollapse" onclick="event.preventDefault(); event.stopPropagation(); $('#securityCollapse').collapse('toggle');">Security <span class="caret-right"></span></a>
                            <div class="collapse" id="securityCollapse">
                                <a class="dropdown-item sub-item" href="{{ route('cyberSecurity') }}">Cybersecurity Solutions</a>
                                <a class="dropdown-item sub-item" href="{{ route('networkSecurity') }}">Network Security</a>
                                <a class="dropdown-item sub-item" href="{{ route('physicalSecurity') }}">Physical Security Systems</a>
                                <a class="dropdown-item sub-item" href="{{ route('securityConsulting') }}">Security Consulting</a>
                                <a class="dropdown-item sub-item" href="{{ route('threatDetection') }}">Threat Detection & Response</a>
                                <a class="dropdown-item sub-item" href="{{ route('identityManagement') }}">Identity & Access Management</a>
                            </div>

                            <a class="dropdown-item" href="#" data-toggle="collapse" data-target="#humanResourceCollapse" aria-expanded="false" aria-controls="humanResourceCollapse" onclick="event.preventDefault(); event.stopPropagation(); $('#humanResourceCollapse').collapse('toggle');">Human Resource <span class="caret-right"></span></a>
                            <div class="collapse" id="humanResourceCollapse">
                                <a class="dropdown-item sub-item" href="{{ route('hrManagement') }}">HR Management Systems</a>
                                <a class="dropdown-item sub-item" href="{{ route('payrollSolutions') }}">Payroll Solutions</a>
                                <a class="dropdown-item sub-item" href="{{ route('talentAcquisition') }}">Talent Acquisition Platforms</a>
                                <a class="dropdown-item sub-item" href="{{ route('employeeEngagement') }}">Employee Engagement Tools</a>
                                <a class="dropdown-item sub-item" href="{{ route('performanceManagement') }}">Performance Management</a>
                                <a class="dropdown-item sub-item" href="{{ route('trainingDevelopment') }}">Training & Development</a>
                            </div>
                            
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/insight/insights" id="navbarDropdown" role="button">
                            Insights
                        </a>
                    </li>
                    

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Company <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#" data-toggle="collapse" data-target="#educationCollapse" aria-expanded="false" aria-controls="educationCollapse" onclick="event.preventDefault(); event.stopPropagation(); $('#educationCollapse').collapse('toggle');">Education <span class="caret-right"></span></a>
                            <div class="collapse" id="educationCollapse">
                                <a class="dropdown-item sub-item" href="#">School Management System</a>
                                <a class="dropdown-item sub-item" href="#">E-learning Platforms</a>
                                <a class="dropdown-item sub-item" href="#">Campus WIFI & Networking</a>
                                <a class="dropdown-item sub-item" href="#">Classroom Technology</a>
                                <a class="dropdown-item sub-item" href="#">I.T Support & Maintainence</a>
                                <a class="dropdown-item sub-item" href="#">Digital Specialised Courses</a>
                            </div>
                            <a class="dropdown-item" href="#" data-toggle="collapse" data-target="#healthCollapse" aria-expanded="false" aria-controls="healthCollapse" onclick="event.preventDefault(); event.stopPropagation(); $('#healthCollapse').collapse('toggle');">Health <span class="caret-right"></span></a>
                            <div class="collapse" id="healthCollapse">
                                <a class="dropdown-item sub-item" href="#">Electronic Medical Records</a>
                                <a class="dropdown-item sub-item" href="#">Telemedicine Solutions</a>
                                <a class="dropdown-item sub-item" href="#">Health Analytics</a>
                                <a class="dropdown-item sub-item" href="#">Cybersecurity for Health</a>
                                <a class="dropdown-item sub-item" href="#">IoT-enabled Medical Devices</a>
                            </div>
                            <a class="dropdown-item" href="#" data-toggle="collapse" data-target="#businessCollapse" aria-expanded="false" aria-controls="businessCollapse" onclick="event.preventDefault(); event.stopPropagation(); $('#businessCollapse').collapse('toggle');">Business <span class="caret-right"></span></a>
                            <div class="collapse" id="businessCollapse">
                                
                            </div>
                            <a class="dropdown-item" href="#" data-toggle="collapse" data-target="#educationCollapse" aria-expanded="false" aria-controls="educationCollapse" onclick="event.preventDefault(); event.stopPropagation(); $('#educationCollapse').collapse('toggle');">Smart Agriculture <span class="caret-right"></span></a>
                            <div class="collapse" id="educationCollapse">
                                
                            </div>
                            <a class="dropdown-item" href="#" data-toggle="collapse" data-target="#educationCollapse" aria-expanded="false" aria-controls="educationCollapse" onclick="event.preventDefault(); event.stopPropagation(); $('#educationCollapse').collapse('toggle');">Security <span class="caret-right"></span></a>
                            <div class="collapse" id="educationCollapse">
                                
                            </div>
                            <a class="dropdown-item" href="#" data-toggle="collapse" data-target="#educationCollapse" aria-expanded="false" aria-controls="educationCollapse" onclick="event.preventDefault(); event.stopPropagation(); $('#educationCollapse').collapse('toggle');">Construction <span class="caret-right"></span></a>
                            <div class="collapse" id="educationCollapse">
                                
                            </div>
                    
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/insight/insights" id="navbarDropdown" role="button">
                            Contacts
                        </a>
                    </li>

              
                    <li class="nav-item">
                        <a href="{{ route('login')}}l" class="btn btn-style mt-md-1 mt-2">Login</a>
                    </li>
                    <!-- search button   commented out
                    <div class="search-right ml-lg-3">
                        <form action="#search" method="GET" class="search-box position-relative">
                            <div class="input-search">
                                <input type="search" placeholder="Enter Keyword" name="search" required="required"
                                    autofocus="" class="search-popup">
                            </div>
                            <button type="submit" class="btn search-btn"><i class="fa fa-search"
                                    aria-hidden="true"></i></button>
                        </form>
                    </div>   -->
    
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