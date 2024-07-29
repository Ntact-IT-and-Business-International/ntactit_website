<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use Modules\ServicesModule\App\Models\Package;
use Modules\ServicesModule\App\Models\Service;
use Session;

class AddPackage extends ModalComponent
{
    public $created_by;
    public $service;
    public $category;
    public $quantity;
    public $amount;
    public $description;
     // Validate
     protected $rules = [
        'service' => 'required',
        'category' => 'required',
        'amount' => 'required',
        'quantity' => 'required',
        'description' => 'required',
        'created_by' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'service.required' => 'Category is required',
        'category.required' => 'Type is required',
        'amount.required' => 'Name of Item is required',
        'quantity.required' => 'Quantity is required',
        'description.required' => 'Description is required',
    ];
    public function addService(){
        $this->validate();
        $fields = [
            'service' => $this->service,
            'category' => $this->category,
            'amount' => $this->amount,
            'quantity' => $this->quantity,
            'description' => $this->description,
            'created_by' => auth()->user()->id,
        ];
        Package::createPackage($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('Package', 'refreshComponent');
        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.admin.add-package',[
            'services'=>$this->getService()
        ]);
    }
    
    /**
     * This function gets the services 
     */
    private function getService(){
        return Service::get();
    }
}
