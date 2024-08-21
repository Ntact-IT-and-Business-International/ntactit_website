<?php

namespace App\Livewire\Admin\HumanResource;
use Modules\HumanResource\App\Services\AttendanceService;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class Attendance extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Attendance' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.human-resource.attendance',[
            'attendances'=>AttendanceService::getAttendance($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
