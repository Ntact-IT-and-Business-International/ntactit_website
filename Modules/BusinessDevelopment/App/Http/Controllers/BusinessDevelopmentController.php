<?php

namespace Modules\BusinessDevelopment\App\Http\Controllers;

use App\Http\Controllers\Controller;

class BusinessDevelopmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getClient()
    {
        return view('businessdevelopment::index');
    }
    public function getQuotation($client_id)
    {
        if (! request()->hasValidSignature()) {
            abort(401);
        }
        return view('businessdevelopment::quotation_form',compact('client_id'));
    }

    public function getInvoice($client_id)
    {
        if (! request()->hasValidSignature()) {
            abort(401);
        }
        return view('businessdevelopment::invoice_form',compact('client_id'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function getDocument($document_type)
    {
        if (! request()->hasValidSignature()) {
            abort(401);
        }
        return view('businessdevelopment::document', compact('document_type'));
    }

}
