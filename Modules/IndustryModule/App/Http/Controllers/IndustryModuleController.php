<?php

namespace Modules\IndustryModule\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IndustryModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('industrymodule::index');
    }


    /**
     * Display a school management system.
     */
    public function schoolmanagementsystem()
    {
        return view('industrymodule::education.schoolmanagementsytem');
    }

    /**
     * Display a e-learning.
     */
    public function elearning()
    {
        return view('industrymodule::education.elearning');
    }

    /**
     * Display a campus wifi and networking.
     */
    public function campusnetworking()
    {
        return view('industrymodule::education.campusnetworking');
    }

    /**
     * Display a school classroom technology
     */
    public function classroomtechnology()
    {
        return view('industrymodule::education.classroomtechnology');
    }
    
    /**
     * Display a digital specialised coursse
     */
    public function digitalspecialisedcourses()
    {
        return view('industrymodule::education.digitalspecialisedcourses');
    }

    /**
     * Display a support and Maintainence
     */
    public function supportandmaintainence()
    {
        return view('industrymodule::education.supportandmaintainence');
    }

    /**
     * Display a cybersecurity in health.
     */
    public function healthcybersecurity()
    {
        return view('industrymodule::health.cybersecurity');
    }

    /**
     * Display electronic medical records.
     */
    public function electronicmedicalrecords()
    {
        return view('industrymodule::health.electronicmedicalrecords');
    }/**
     * Display a iot_enabled medical devices.
     */
    public function iot_enabledmedicaldevices()
    {
        return view('industrymodule::health.iot_enabledmedicaldevices');
    }

    /**
     * Display a telemedicine.
     */
    public function telemedicine()
    {
        return view('industrymodule::health.telemedicine');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('industrymodule::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('industrymodule::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('industrymodule::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
