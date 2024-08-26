<?php

namespace App\Livewire\Admin\AccountSetting;
use App\Models\Services\UserService;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Users' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.account-setting.users',[
            'users'=>UserService::getUser($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
