<?php

namespace App\Livewire\Admin\HumanResource;

use LivewireUI\Modal\ModalComponent;
use Modules\HumanResource\App\Services\HrFormService;
use App\Traits\saveToHrFolderFolder;
use Livewire\WithFileUploads;
use Session;

class AddHrForm extends ModalComponent
{
    use saveToHrFolderFolder,WithFileUploads;
    public $created_by;
    public $name_of_form;
    public $form;
     // Validate
     protected $rules = [
        'name_of_form' => 'required',
        'form' => 'required|mimes:pdf,doc,docx,xls,xlsx|max:1024',
        'created_by' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'name_of_form.required' => 'Name of Form is required',
        'form.required' => 'Form is required',
        'form.file' => 'Please upload a file',
        'form.max' => 'The file size must be less than 1MB',
    ];
    public function addHrForm(){
        $this->validate();
        $hrForm = $this->saveToHrForms('forms',$this->form);
        $fields = [
            'name_of_form' => $this->name_of_form,
            'form' => $hrForm,
            'created_by' => auth()->user()->id,
        ];
        HrFormService::createHrForm($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('HrForm', 'refreshComponent');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.admin.human-resource.add-hr-form');
    }
}
