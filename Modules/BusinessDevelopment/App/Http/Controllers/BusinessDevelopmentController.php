<?php

namespace Modules\BusinessDevelopment\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\BusinessDevelopment\App\Models\BusinessDevelopmentDocument;

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
    public function getQuotationInfo()
    {
        return view('businessdevelopment::quotation');
    }
    //This function prints clients quotation
    public function printQuotation($client_id){
        if (! request()->hasValidSignature()) {
            abort(401);
        }
        $quotations =BusinessDevelopmentDocument::with('creator','client')
        ->where('client_id',$client_id)
        ->where('status','pending')
        ->limit(1)
        ->get();
        return view('businessdevelopment::print_quotation',compact('client_id','quotations'));
    }

    public function getInvoiceInfo()
    {
        return view('businessdevelopment::invoice');
    }
    //This function prints clients quotation
    public function printInvoice($client_id){
        if (! request()->hasValidSignature()) {
            abort(401);
        }
        $invoices =BusinessDevelopmentDocument::with('creator','client')
        ->where('client_id',$client_id)
        ->where('status','pending')
        ->limit(1)
        ->get();
        return view('businessdevelopment::print_invoice',compact('client_id','invoices'));
    }
}
