<?php

namespace App\Livewire\Admin\CompanyDocuments;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class Document extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Document' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.company-documents.document');
    }
}
