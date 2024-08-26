<?php

namespace App\Livewire\Admin\Finance;

use LivewireUI\Modal\ModalComponent;
use Modules\Finance\App\Services\FinanceFormService;
use App\Traits\saveToFinanceFolderFolder;
use Livewire\WithFileUploads;
use Session;

class AddFinanceForm extends ModalComponent
{
    use saveToFinanceFolderFolder,WithFileUploads;
    public $created_by;
    public $name_of_form;
    public $form;
     // Validate
     protected $rules = [
        'name_of_form' => 'required',
        'form' => 'required | mimes:pdf,doc,docx,xls,xlsx|max:1024',
        'created_by' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'name_of_form.required' => 'Name of Form is required',
        'form.required' => 'Form Document is required',
        'form.file' => 'Please upload a file',
        'form.max' => 'The file size must be less than 1MB',
    ];
    public function addFinanceForm(){
        $this->validate();

        $FinanceForm = $this->saveToFinanceForms('forms',$this->form);

        $fields = [
            'name_of_form' => $this->name_of_form,
            'form' => $FinanceForm,
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
