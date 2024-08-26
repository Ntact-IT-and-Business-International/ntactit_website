<?php

namespace App\Livewire\Admin\AccountSetting;

use App\Models\Services\UserService;
use LivewireUI\Modal\ModalComponent;
use Session;

class AddUser extends ModalComponent
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $status;
     // Validate
     protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'password_confirmation' => 'required|same:password',
        'status' => 'required',
    ];

    // Customize validation error messages
    protected $messages = [
        'name.required' => 'Full Names is required',
        'email.required' => 'Email is required',
        'password.required' => 'Password is required',
        'password_confirmation.required' => 'Please confirm password',
        'status.required' => 'Status is required',
    ];
    public function addUser(){
        $this->validate();
        UserService::createUserAccount($this->name, $this->email, $this->status, $this->password);;
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('Users', 'refreshComponent');
        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.admin.account-setting.add-user');
    }
}
