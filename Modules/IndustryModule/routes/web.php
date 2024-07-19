<?php

use Illuminate\Support\Facades\Route;
use Modules\IndustryModule\App\Http\Controllers\IndustryModuleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([], function () {
    Route::resource('industrymodule', IndustryModuleController::class)->names('industrymodule');

    // Education routes
    Route::get('/elearning', 'IndustryModuleController@elearning')->name('elearning');
    Route::get('/campusnetworking', 'IndustryModuleController@campusnetworking')->name('campusnetworking');
    Route::get('/classroomtechnology', 'IndustryModuleController@classroomtechnology')->name('classroomtechnology');
    Route::get('/digitalspecialisedcourses', 'IndustryModuleController@digitalspecialisedcourses')->name('digitalspecialisedcourses');
    Route::get('/schoolmanagementsystem', 'IndustryModuleController@schoolmanagementsystem')->name('School Management System');
    Route::get('/supportandmaintainence', 'IndustryModuleController@supportandmaintainence')->name('supportandmaintainence');

    // Health routes
    Route::get('/healthcybersecurity', 'IndustryModuleController@healthcybersecurity')->name('healthcybersecurity');
    Route::get('/electronicmedicalrecords', 'IndustryModuleController@electronicmedicalrecords')->name('electronicmedicalrecords');
    Route::get('/iot_enabledmedicaldevices', 'IndustryModuleController@iot_enabledmedicaldevices')->name('iot_enabledmedicaldevices');
    Route::get('/telemedicine', 'IndustryModuleController@telemedicine')->name('telemedicine');
    Route::get('/healthanalytics', 'IndustryModuleController@healthanalytics')->name('healthanalytics');

    Route::get('/fintech-solutions', 'IndustryModuleController@fintechSolutions')->name('fintechSolutions');
    Route::get('/financial-analytics', 'IndustryModuleController@financialAnalytics')->name('financialAnalytics');
    Route::get('/blockchain-finance', 'IndustryModuleController@blockchainFinance')->name('blockchainFinance');
    Route::get('/erp-systems', 'IndustryModuleController@erpSystems')->name('erpSystems');
    Route::get('/automated-trading', 'IndustryModuleController@automatedTrading')->name('automatedTrading');
    Route::get('/mobile-banking', 'IndustryModuleController@mobileBanking')->name('mobileBanking');

    Route::get('/property-management', 'IndustryModuleController@propertyManagement')->name('propertyManagement');
    Route::get('/virtual-tours', 'IndustryModuleController@virtualTours')->name('virtualTours');
    Route::get('/real-estate-analytics', 'IndustryModuleController@realEstateAnalytics')->name('realEstateAnalytics');
    Route::get('/crm-solutions', 'IndustryModuleController@crmSolutions')->name('crmSolutions');
    Route::get('/tenant-portals', 'IndustryModuleController@tenantPortals')->name('tenantPortals');
    Route::get('/iot-real-estate', 'IndustryModuleController@iotRealEstate')->name('iotRealEstate');

    Route::get('/precision-farming', 'IndustryModuleController@precisionFarming')->name('precisionFarming');
    Route::get('/drone-technology', 'IndustryModuleController@droneTechnology')->name('droneTechnology');
    Route::get('/crop-monitoring', 'IndustryModuleController@cropMonitoring')->name('cropMonitoring');
    Route::get('/smart-irrigation', 'IndustryModuleController@smartIrrigation')->name('smartIrrigation');
    Route::get('/agri-analytics', 'IndustryModuleController@agriAnalytics')->name('agriAnalytics');
    Route::get('/livestock-management', 'IndustryModuleController@livestockManagement')->name('livestockManagement');

    Route::get('/cyber-security', 'IndustryModuleController@cyberSecurity')->name('cyberSecurity');
    Route::get('/network-security', 'IndustryModuleController@networkSecurity')->name('networkSecurity');
    Route::get('/physical-security', 'IndustryModuleController@physicalSecurity')->name('physicalSecurity');
    Route::get('/security-consulting', 'IndustryModuleController@securityConsulting')->name('securityConsulting');
    Route::get('/threat-detection', 'IndustryModuleController@threatDetection')->name('threatDetection');
    Route::get('/identity-management', 'IndustryModuleController@identityManagement')->name('identityManagement');

    Route::get('/hr-management', 'IndustryModuleController@hrManagement')->name('hrManagement');
    Route::get('/payroll-solutions', 'IndustryModuleController@payrollSolutions')->name('payrollSolutions');
    Route::get('/talent-acquisition', 'IndustryModuleController@talentAcquisition')->name('talentAcquisition');
    Route::get('/employee-engagement', 'IndustryModuleController@employeeEngagement')->name('employeeEngagement');
    Route::get('/performance-management', 'IndustryModuleController@performanceManagement')->name('performanceManagement');
    Route::get('/training-development', 'IndustryModuleController@trainingDevelopment')->name('trainingDevelopment');
    
    
    
    

});
