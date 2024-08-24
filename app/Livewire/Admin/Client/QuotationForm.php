<?php

namespace App\Livewire\Admin\Client;

use Livewire\Component;
use Modules\BusinessDevelopment\App\Models\BusinessDevelopmentDocument;
use Modules\ServicesModule\App\Models\Service;
use Session;

class QuotationForm extends Component
{
    public $client_id;
    public $invoice_number;
    public $status;
    public $document_type;
    public $items = [];
    public $business_status;
    public $registered_by;
    public $service_id;

    protected $rules = [
        'client_id' => '',
        'registered_by' => '',
        'document_type' => '',
        'service_id' => 'required',
        'items.*.quantity' => 'required|integer',
        'items.*.rate' => 'required|numeric',
        'items.*.amount' => 'required|numeric',
        'items.*.description' => 'required|string|max:255',
    ];

    protected $messages = [
        'service_id.required' => 'Service is required',
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
        // Process each item
        foreach ($this->items as $item) {
           BusinessDevelopmentDocument::createDocument([
                'client_id' => $this->client_id,
                'invoice_number' => $this->invoice_number,
                'document_type' => 'quotation',
                'service_id' =>$this->service_id,
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
            'client_id','status', 'registered_by'
        ]);

        $this->items = [$this->createEmptyItem()]; // Reset items to a single empty item

        Session::flash('msg', 'Operation Successful');
        return redirect()->to('/businessdevelopment/quotation');
    }


    public function render()
    {
        return view('livewire.admin.client.quotation-form',[
            'services' =>$this->getService()
        ]);
    }
    private function getService(){
        return Service::get();
    }
}
