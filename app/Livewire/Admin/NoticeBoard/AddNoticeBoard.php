<?php

namespace App\Livewire\Admin\NoticeBoard;

use LivewireUI\Modal\ModalComponent;
use Modules\NoticeBoard\App\Services\NoticeBoardService;
use Illuminate\Support\Facades\Session;

class AddNoticeBoard extends ModalComponent
{
    public $posted_by;
    public $title;
    public $body;
    public $notice_type;
     // Validate
     protected $rules = [
        'notice_type' => 'required',
        'title' => 'required',
        'body' => 'required',
        'posted_by' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'notice_type.required' => 'Noice Type is required',
        'title.required' => 'Title is required',
        'body.required' => 'Body is required',
    ];
    public function addNoticeBoard(){
        $this->validate();
        $fields = [
            'notice_type' => $this->notice_type,
            'title' => $this->title,
            'body' => $this->body,
            'posted_by' => auth()->user()->id,
        ];
        NoticeBoardService::createNoticeBoard($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('NoticeBoard', 'refreshComponent');
        $this->closeModal();
    }
    
    public function render()
    {
        return view('livewire.admin.notice-board.add-notice-board');
    }
}
