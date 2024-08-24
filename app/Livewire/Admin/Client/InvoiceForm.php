<?php

namespace App\Livewire\Admin\Client;

use Livewire\Component;
use Modules\BusinessDevelopment\App\Models\BusinessDevelopmentDocument;
use Session;

class InvoiceForm extends Component
{
    public $client_id;
    public $status;
    public $invoice_number;
    public $document_type;
    public $items = [];
    public $business_status;
    public $registered_by;

    protected $rules = [
        'client_id' => '',
        'registered_by' => '',
        'document_type' => '',
        'invoice_number'=>'',
        'items.*.quantity' => 'required|integer',
        'items.*.rate' => 'required|numeric',
        'items.*.amount' => 'required|numeric',
        'items.*.description' => 'required|string|max:255',
    ];

    protected $messages = [
        'items.*.quantity.required' => 'Quantity is required',
        'items.*.rate.required' => 'Rate is required',
        'items.*.amount.required' => 'Amount is required',
        'items.*.description.required' => 'Description is required',
    ];

    public function mount($client_id)
    {
        // Initialize with an empty item if items are not set yet
        if (empty($this->items)) {
            $this->items[] = $this->createEmptyItem();
        }
        $this->client_id =$client_id;
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

    public function addQuotation()
    {
        $this->validate();

        $this->invoice_number = generateInvoiceNumber(BusinessDevelopmentDocument::class);

        // Process each item
        foreach ($this->items as $item) {
           BusinessDevelopmentDocument::createDocument([
                'client_id' => $this->client_id,
                'invoice_number' =>$this->invoice_number,
                'document_type' => 'invoice',
                'quantity' => $item['quantity'],
                'description' => $item['description'],
                'rate' => $item['rate'],
                'amount' => $item['amount'],
                'status' => 'pending',
                'registered_by' => auth()->user()->id,
            ]);
           
        }
        // Reset the form fields and items array
        $this->reset([
            'client_id','status', 'invoice_number', 'registered_by'
        ]);

        $this->items = [$this->createEmptyItem()]; // Reset items to a single empty item

        Session::flash('msg', 'Operation Successful');
        return redirect()->to('/businessdevelopment/client');
    }

    public function render()
    {
        return view('livewire.admin.client.invoice-form');
    }
}
