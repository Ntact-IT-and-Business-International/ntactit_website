<?php

namespace App\Livewire\Admin\Client;

use LivewireUI\Modal\ModalComponent;
use Modules\BusinessDevelopment\App\Models\Client;
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
    public $items = [];
    public $business_status;
    public $registered_by;

    protected $rules = [
        'client_name' => 'required',
        'company' => 'required',
        'email' => 'required',
        'contact' => 'required',
        'address' => 'required',
        'items.*.quantity' => 'required|integer',
        'items.*.rate' => 'required|numeric',
        'items.*.amount' => 'required|numeric',
        'items.*.description' => 'required|string|max:255',
    ];

    protected $messages = [
        'client_name.required' => 'Name of Client is required',
        'company.required' => 'Company is required',
        'email.required' => 'Email is required',
        'contact.required' => 'Contact is required',
        'address.required' => 'Address is required',
        'items.*.quantity.required' => 'Quantity is required',
        'items.*.rate.required' => 'Rate is required',
        'items.*.amount.required' => 'Amount is required',
        'items.*.description.required' => 'Description is required',
    ];

    public function mount()
    {
        // Initialize with an empty item if items are not set yet
        if (empty($this->items)) {
            $this->items[] = $this->createEmptyItem();
        }
    }

    public function addItem()
    {
        $this->items[] = $this->createEmptyItem();
    }

    private function createEmptyItem()
    {
        return [
            'quantity' => '',
            'rate' => '',
            'amount' => '',
            'description' => '',
        ];
    }

    public function addClient()
    {
        $this->validate();

        $this->invoice_number = generateInvoiceNumber(Client::class);
        $this->customer_number = generateCustomerNumber(Client::class);

        // Process each item
        foreach ($this->items as $item) {
           $test =Client::createClient([
                'client_name' => $this->client_name,
                'company' => $this->company,
                'email' => $this->email,
                'contact' => $this->contact,
                'invoice_number' => $this->invoice_number,
                'address' => $this->address,
                'customer_number' => $this->customer_number,
                'quantity' => $item['quantity'],
                'description' => $item['description'],
                'rate' => $item['rate'],
                'amount' => $item['amount'],
                'business_status' => 'pending',
                'registered_by' => auth()->user()->id,
            ]);
           
        }
        // Reset the form fields and items array
        $this->reset([
            'client_name', 'company', 'email', 'contact', 'invoice_number',
            'address', 'customer_number', 'business_status', 'registered_by'
        ]);

        $this->items = [$this->createEmptyItem()]; // Reset items to a single empty item

        Session::flash('msg', 'Operation Successful');
        $this->dispatch('Client', 'refreshComponent');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.admin.client.add-client');
    }
}


