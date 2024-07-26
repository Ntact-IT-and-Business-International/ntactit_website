<?php

namespace Modules\ServicesModule\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ServicesModuleController extends Controller
{
    /**
     * Display service web design view.
     */
    public function webDesign()
    {
        return view('servicesmodule::webdesign');
    }
    /* Display service application Development view.
    */
    public function applicationDevelopment()
    {
        return view('servicesmodule::applicationdevelopment');
    }
    /* Display service bulk sms view.
    */
    public function bulkSMS()
    {
        return view('servicesmodule::bulksms');
    }
    /* Display service enterprise it view.
    */
    public function enterpriseIt()
    {
        return view('servicesmodule::enterprise');
    }
    /* Display service cybersecurity view.
    */
    public function cybersecurity()
    {
        return view('servicesmodule::cybersecurity');
    }
    /* Display service artificial intellignce view.
    */
    public function artificailIntelligence()
    {
    return view('servicesmodule::artificial_intelligence');
    }
    /* Display service dataAnaylsis view.
    */
    public function data_analytics()
    {
    return view('servicesmodule::data_analytics');
    }

    /* Display service cctv_security view.
    */
    public function cctv()
    {
        return view('servicesmodule::cctv_security');
    }

    /* Display service networking view.
    */
    public function networking()
    {
        return view('servicesmodule::networking');
    }

    /* Display service ussd view.
    */
    public function ussd()
    {
        return view('servicesmodule::ussd');
    }

    /* Display service digital marketing view.
    */
    public function digitalmarketing()
    {
        return view('servicesmodule::digitalmarketing');
    }

    /* Display it consultancy view.
    */
    public function consultancy()
    {
        return view('servicesmodule::consultancy');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servicesmodule::create');
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
        return view('servicesmodule::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('servicesmodule::edit');
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
    /**
     * This function gets admin services
     */
    public function services(){
        return view('servicesmodule::services');
    }
}
