<?php

namespace App\Livewire\Admin\Contact;

use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;
use Modules\ContactModule\Services\ContactService;

class Messages extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Messages' => '$refresh'];
     
    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.contact.messages',[
            'messages'=>ContactService::getContactMessage($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
