<?php

namespace App\Livewire\Admin\CompanyDocuments;

use LivewireUI\Modal\ModalComponent;
use Modules\CompanyDocuments\App\Services\DocumentService;
use Illuminate\Support\Facades\Session;
use App\Traits\saveToDocumentFolder;
use Livewire\WithFileUploads;

class AddDocument extends ModalComponent
{
    use saveToDocumentFolder,WithFileUploads;

    public $created_by;
    public $document_name;
    public $document;
     // Validate
     protected $rules = [
        'document_name' => 'required',
        'document' => 'required | mimes:pdf,doc,docx,xls,xlsx|max:1024',
        'created_by' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'document_name.required' => 'Document Name is required',
        'document.required' => 'Document is required',
        'document.file' => 'Please upload a file',
        'document.max' => 'The file size must be less than 1MB',
    ];
    public function addCompanyDocument(){
        $this->validate();
        $Document = $this->saveToDocuments('document',$this->document);

        $fields = [
            'document_name' => $this->document_name,
            'document' => $Document,
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
