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
        return view('servicesmodule::index');
    }
    /* Display service application Development view.
    */
    public function applicationDevelopment()
    {
        return view('servicesmodule::application_development');
    }
    /* Display service bulk sms view.
    */
    public function bulkSMS()
    {
        return view('servicesmodule::bulk_sms');
    }
    /* Display service enterprise it view.
    */
    public function enterpriseIt()
    {
        return view('servicesmodule::enterprise_it');
    }
    /* Display service portal view.
    */
    public function portal()
    {
        return view('servicesmodule::portal');
    }
    /* Display service artificial intellignce view.
    */
    public function artificailIntelligence()
    {
    return view('servicesmodule::artificial_intellignce');
    }
    /* Display service dataAnaylsis view.
    */
    public function dataAnaylsis()
    {
    return view('servicesmodule::data_analysis');
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
}
