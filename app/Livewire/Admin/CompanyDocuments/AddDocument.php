<?php

namespace App\Livewire\Admin\CompanyDocuments;

use LivewireUI\Modal\ModalComponent;
use Modules\CompanyDocuments\App\Services\DocumentService;
use Session;

class AddDocument extends ModalComponent
{
    public $created_by;
    public $document_name;
    public $document;
     // Validate
     protected $rules = [
        'document_name' => 'required',
        'document' => 'required',
        'created_by' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'document_name.required' => 'Document Name is required',
        'document.required' => 'Document is required',
    ];
    public function addCompanyDocument(){
        $this->validate();
        $fields = [
            'document_name' => $this->document_name,
            'document' => $this->document,
            'created_by' => auth()->user()->id,
        ];
        DocumentService::createDocument($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('Document', 'refreshComponent');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.admin.company-documents.add-document');
    }
}
