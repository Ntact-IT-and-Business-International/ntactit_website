<?php

namespace App\Livewire\Admin\Client;

use Livewire\Component;

class PrintQuotation extends Component
{
    public $client_id;
    
    public function mount($client_id)
    {
        $this->client_id =$client_id;
    }

    public function render()
    {
        return view('livewire.admin.client.print-quotation');
    }
}
