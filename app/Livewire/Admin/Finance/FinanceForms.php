<?php

namespace App\Livewire\Admin\Finance;
use Modules\Finance\App\Services\FinanceFormService;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class FinanceForms extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['FinanceForms' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.finance.finance-forms',[
            'finances_forms' =>FinanceFormService::getFinanceForm($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
