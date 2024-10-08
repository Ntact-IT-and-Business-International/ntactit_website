<?php

namespace App\Livewire\Admin\Finance;
use Modules\Finance\App\Services\ExpenseService;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class Expenses extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Expenses' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.finance.expenses',[
            'expenses'=>ExpenseService::getExpense($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
