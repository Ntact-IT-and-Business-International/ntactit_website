<?php

namespace App\Livewire\Admin\Item;

use LivewireUI\Modal\ModalComponent;
use Modules\Item\App\Services\ItemService;
use Session;

class AddItem extends ModalComponent
{
    public $created_by;
    public $item;
     // Validate
     protected $rules = [
        'item' => 'required',
        'created_by' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'item.required' => 'Item is required',
    ];
    public function addItem(){
        $this->validate();
        $fields = [
            'item' => $this->item,
            'created_by' => auth()->user()->id,
        ];
        ItemService::createItem($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('Item', 'refreshComponent');
        $this->closeModal();
    }
    
    public function render()
    {
        return view('livewire.admin.item.add-item');
    }
}
