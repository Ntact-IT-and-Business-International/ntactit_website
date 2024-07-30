<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Modules\ServicesModule\Services\QuotationService;
use Session;

class Quotation extends Component
{
    public $quotationId;

    public $package_id;

    public $client_name;

    public $company;

    public $client_email;

    public $client_message;

    public $client_contact;

    public $status;

    // Validate
    protected $rules = [
        'package_id' => '',
        'client_name' => 'required',
        'company' => '',
        'client_email' => 'required',
        'client_message' => 'required',
        'client_contact' => 'required',
    ];

    // Customize validation error client_messages
    protected $client_messages = [
        'client_name.required' => 'Name is required',
        'client_email.required' => 'Email is required',
        'client_contact.required' => 'Contact is required',
        'client_message.required' => 'Message is required',
    ];
    public function mount($quotationId){
        $this->package_id =$quotationId;
    }
    public function addQuotationRequest(){
        $this->validate();
        $fields = [
            'package_id' => $this->package_id,
            'client_name' => $this->client_name,
            'company' => $this->company,
            'client_email' => $this->client_email,
            'client_contact' => $this->client_contact,
            'client_message' => $this->client_message,
            'status'   => 'pending',
        ];
         QuotationService::createQuotation($fields);
        session::flash('msg', 'Quotation Sent Succesful! Thank you for contacting us');
    }

    public function render()
    {
        return view('livewire.front.quotation');
    }
}
