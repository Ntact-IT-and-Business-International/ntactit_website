<?php

namespace Modules\Finance\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FinanceController extends Controller
{
    /**
     * Display a expenses.
     */
    public function getExpenses()
    {
        return view('finance::expenses');
    }
     /**
     * Display a finance forms.
     */
    public function getFinanceForms()
    {
        return view('finance::finance_form');
    }
     /**
     * Display a income.
     */
    public function getIncome()
    {
        return view('finance::income');
    }
     /**
     * Display a payroll.
     */
    public function getPayroll()
    {
        return view('finance::payroll');
    }

     /**
     * Display a requisition.
     */
    public function getRequisition()
    {
        return view('finance::requisition');
    }

    /**
     * Show the more on the requisition.
     */
    public function getViewMore($requisition_id)
    {
        return view('finance::view_more',compact('requisition_id'));
    }
     /**
     * Show forward requisition form.
     */
    public function forwardRequisition($requisition_id)
    {
        return view('finance::forward_requisition',compact('requisition_id'));
    }
     /**
     * Show reject requisition form.
     */
    public function rejectRequisition($requisition_id)
    {
        return view('finance::reject_requisition',compact('requisition_id'));
    }

}
