<?php

namespace App\Livewire\Admin\HumanResource;

use Livewire\Component;
use Modules\HumanResource\App\Services\HrFormService;

class AddHrForm extends Component
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
        'form.required' => 'Form is required',
    ];
    public function addHrForm(){
        $this->validate();
        $fields = [
            'name_of_form' => $this->name_of_form,
            'form' => $this->form,
            'created_by' => auth()->user()->id,
        ];
        HrFormService::createHrForm($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('Department', 'refreshComponent');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.admin.human-resource.add-hr-form');
    }
}
