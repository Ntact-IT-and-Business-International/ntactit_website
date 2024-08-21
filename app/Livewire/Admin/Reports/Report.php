<?php

namespace App\Livewire\Admin\Reports;
use Modules\Reports\App\Services\ReportService;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class Report extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Report' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.reports.report',[
            'reports' =>ReportService::getReport($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
