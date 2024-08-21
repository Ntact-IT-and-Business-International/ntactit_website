<?php

namespace App\Livewire\Admin\Finance;
use Modules\Finance\App\Services\PayrollService;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class Payroll extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Payroll' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.finance.payroll',[
            'payrolls' =>PayrollService::getPayroll($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
