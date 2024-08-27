<?php

namespace App\Livewire\Admin\NoticeBoard;
use Modules\NoticeBoard\App\Services\NoticeBoardService;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Livewire\WithPagination;

class NoticeBoard extends Component
{
    use WithPagination;

    protected $listeners = ['NoticeBoard' => '$refresh'];

    public $read_by;
    public $notice_board_id;

    public $noticeBoardId;

    public $perPage = 2;
    
     // Validate
     protected $rules = [
        'notice_board_id' => '',
        'read_by' => '',
    ];

    //over ridding sort by from the trait
    public $sortBy = '';
    public $search;

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.notice-board.notice-board',[
            'notices' =>NoticeBoardService::getNoticeBoard($this->search,'', 'desc', $this->perPage),
        ]);
    }

    public function markNoticeBoardAsRead($noticeId){
        $this->notice_board_id = $noticeId;
        $this->validate();
        $fields =[
            'notice_board_id' => $this->notice_board_id,
            'read_by' => auth()->user()->id,
        ];
        NoticeBoardService::createNoticeBoardRead($fields);
        Session::flash('msg','Thank You For Reading');
        $this->dispatch('NoticeBoard', 'refreshComponent');
    }
}
