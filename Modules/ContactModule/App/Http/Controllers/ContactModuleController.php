<?php

namespace Modules\ContactModule\App\Http\Controllers;

use App\Http\Controllers\Controller;

class ContactModuleController extends Controller
{
    /**
     * Display a school management system.
     */
    public function contact()
    {
        return view('contactmodule::contact');
    }
   public function getContactMessages(){
       return view('contactmodule::messages');
   }
}
