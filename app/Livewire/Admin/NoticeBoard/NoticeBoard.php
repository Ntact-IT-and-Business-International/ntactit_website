<?php

namespace App\Livewire\Admin\NoticeBoard;
use Modules\NoticeBoard\App\Services\NoticeBoardService;

use Livewire\Component;
use App\Traits\WithSorting;
use Illuminate\Support\Facades\Session;
use Livewire\WithPagination;

class NoticeBoard extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['NoticeBoard' => '$refresh'];

    public $read_by;
    public $notice_board_id;

    public $noticeBoardId;

     // Validate
     protected $rules = [
        'notice_board_id' => '',
        'read_by' => '',
    ];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.admin.notice-board.notice-board',[
            'notices' =>NoticeBoardService::getNoticeBoard($this->search, $this->sortBy, $this->sortDirection, $this->perPage),
        ]);
    }

    public function markNoticeBoardAsRead(){
        $this->validate();
        $fields =[
            'notice_board_id' => getNoticeBoardId(2),
            'read_by' => auth()->user()->id,
        ];
        NoticeBoardService::createNoticeBoardRead($fields);
        Session::flash('msg','Thank You For Reading');
        $this->dispatch('NoticeBoard', 'refreshComponent');
    }
}
