<?php

namespace App\Livewire\Admin\NoticeBoard;
use Modules\NoticeBoard\App\Services\NoticeBoardService;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class NoticeBoard extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['NoticeBoard' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.notice-board.notice-board',[
            'notices' =>NoticeBoardService::getNoticeBoard($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
