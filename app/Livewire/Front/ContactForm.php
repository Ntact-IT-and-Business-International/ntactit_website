<?php

namespace App\Livewire\Front;
use Modules\ContactModule\Services\ContactService;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class ContactForm extends Component
{

    public $contact_name;

    public $contact_email;

    public $subject;

    public $phone_number;

    public $message;

    // Validate
    protected $rules = [
        'contact_name' => 'required',
        'contact_email' => 'required',
        'subject' => 'required',
        'phone_number' => 'required',
        'message' => 'required',
    ];

    // Customize validation error messages
    protected $messages = [
        'contact_name.required' => 'Name is required',
        'contact_email.required' => 'Email is required',
        'subject.required' => 'Subject is required',
        'phone_number.required' => 'Phone Number is required',
        'message.required' => 'Message is required',
    ];

   
    public function sendMessage(){
        $this->validate();
        $fields = [
            'contact_name' => $this->contact_name,
            'contact_email' => $this->contact_email,
            'subject' => $this->subject,
            'phone_number' => $this->phone_number,
            'message' => $this->message,
        ];
        ContactService::createContactMessage($fields);
        session::flash('msg', 'Message Sent Succesfully! Thank you for contacting us');
        $this->dispatch('ContactMessages', 'refreshComponent');
    }
    public function render()
    {
        return view('livewire.front.contact-form');
    }
}
