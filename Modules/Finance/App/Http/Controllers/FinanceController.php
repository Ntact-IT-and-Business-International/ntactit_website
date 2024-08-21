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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('finance::create');
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
        return view('finance::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('finance::edit');
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
