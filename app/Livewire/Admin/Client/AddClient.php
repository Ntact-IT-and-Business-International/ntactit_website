<?php

namespace App\Livewire\Admin\Client;

use LivewireUI\Modal\ModalComponent;
use Modules\BusinessDevelopment\App\Services\ClientService;
use Modules\BusinessDevelopment\App\Models\Client;
use Session;

class AddClient extends ModalComponent
{
    public $client_name;
    public $company;
    public $email;
    public $contact;
    public $address;
    public $customer_number;
    public $business_status;
    public $registered_by;

    protected $rules = [
        'client_name' => 'required',
        'company' => 'required',
        'email' => 'required|unique:clients',
        'contact' => 'required|unique:clients',
        'address' => 'required',
    ];

    protected $messages = [
        'client_name.required' => 'Name of Client is required',
        'company.required' => 'Company is required',
        'email.required' => 'Email is required',
        'contact.required' => 'Contact is required',
        'address.required' => 'Address is required',
    ];

    public function addClient()
    {
        $this->validate();
        $this->customer_number = generateCustomerNumber(Client::class);
        $fields = [
                'client_name' => $this->client_name,
                'company' => $this->company,
                'email' => $this->email,
                'contact' => $this->contact,
                'address' => $this->address,
                'customer_number' => $this->customer_number,
                'business_status' => 'pending',
                'registered_by' => auth()->user()->id,
        ];
        ClientService::createClient($fields);
        Session::flash('msg', 'Operation Successful');
        $this->dispatch('Client', 'refreshComponent');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.admin.client.add-client');
    }
}


