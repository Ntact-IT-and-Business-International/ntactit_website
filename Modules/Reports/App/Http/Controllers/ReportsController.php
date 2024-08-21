<?php

namespace Modules\Reports\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getReport()
    {
        return view('reports::index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reports::create');
    }

}
