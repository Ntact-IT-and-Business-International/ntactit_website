<?php

namespace App\Livewire\Admin;

use LivewireUI\Modal\ModalComponent;
use Illuminate\Support\Facades\Session;
use Modules\ServicesModule\App\Models\Service;

class AddService extends ModalComponent
{
    public $created_by;
    public $name_of_service;
     // Validate
     protected $rules = [
        'name_of_service' => 'required |unique:services',
        'created_by' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'name_of_service.required' => 'Service is required',
    ];
    public function addService(){
        $this->validate();
        $fields = [
            'name_of_service' => $this->name_of_service,
            'created_by' => auth()->user()->id,
        ];
        Service::createService($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('Services', 'refreshComponent');
        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.admin.add-service');
    }
}
