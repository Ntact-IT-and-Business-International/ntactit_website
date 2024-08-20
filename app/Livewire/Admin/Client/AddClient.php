<?php

namespace App\Livewire\Admin\Client;

use LivewireUI\Modal\ModalComponent;
use Modules\BusinessDevelopment\App\Services\ClientService;
use Session;

class AddClient extends ModalComponent
{
    public $client_name;
    public $company;
    public $email;
    public $contact;
    public $invoice_number;
    public $address;
    public $customer_number;
    public $quantity;
    public $description;
    public $rate;
    public $amount;
    public $business_status;
    public $registered_by;
     // Validate
     protected $rules = [
        'client_name' => 'required',
        'company' => 'required',
        'email' => 'required',
        'contact' => 'required',
        'invoice_number' => '',
        'address' => 'required',
        'customer_number' => '',
        'quantity' => 'required',
        'description' => 'required',
        'rate' => '',
        'amount' => '',
        'business_status' => '',
        'registered_by' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'client_name.required' => 'Name of Client is required',
        'company.required' => 'Company is required',
        'email.required' => 'Email is required',
        'contact.required' => 'Contact is required',
        'address.required' => 'Address is required',
        'quantity.required' => 'Quantity is required',
        'description.required' => 'Description is required',
    ];
    public function addClient(){
        $this->validate();
        $fields = [
            'client_name' => $this->client_name,
            'company' => $this->company,
            'email' => $this->email,
            'contact' => $this->contact,
            'invoice_number' => $this->invoice_number,
            'address' => $this->address,
            'customer_number' => $this->customer_number,
            'quantity' => $this->quantity,
            'description' => $this->description,
            'rate' => $this->rate,
            'amount' => $this->amount,
            'business_status' => 'pending',
            'registered_by' => auth()->user()->id,
        ];
        ClientService::createClient($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('Client', 'refreshComponent');
        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.admin.client.add-client');
    }
}
