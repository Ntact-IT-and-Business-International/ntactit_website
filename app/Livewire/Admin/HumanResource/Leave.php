<?php

namespace App\Livewire\Admin\HumanResource;
use Modules\HumanResource\App\Services\LeaveService;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;
use Modules\HumanResource\App\Models\Leave as Leaves;
use Session;

class Leave extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Leave' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.human-resource.leave',[
            'leaves'=>LeaveService::getLeave($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
    public function approveLeave($LeaveId){
        Leaves::whereId($LeaveId)->update([
            'leave_status' => 'approved',
            'approved_by' =>auth()->user()->id,
        ]);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('Leave', 'refreshComponent');
    }
}
