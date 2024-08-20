<?php

namespace App\Livewire\Admin\Finance;

use LivewireUI\Modal\ModalComponent;
use Modules\Finance\App\Services\FinanceFormService;
use Session;

class AddFinanceForm extends ModalComponent
{
    public $created_by;
    public $name_of_form;
    public $form;
     // Validate
     protected $rules = [
        'name_of_form' => 'required',
        'form' => 'required',
        'created_by' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'name_of_form.required' => 'Name of Form is required',
        'form.required' => 'Form Document is required',
    ];
    public function addFinanceForm(){
        $this->validate();
        $fields = [
            'name_of_form' => $this->name_of_form,
            'form' => $this->form,
            'created_by' => auth()->user()->id,
        ];
        FinanceFormService::createFinanceForm($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('FinanceForms', 'refreshComponent');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.admin.finance.add-finance-form');
    }
}
