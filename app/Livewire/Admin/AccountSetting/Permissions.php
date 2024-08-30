<?php

namespace App\Livewire\Admin\AccountSetting;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;
use Modules\AccountSetting\App\Services\PermissionService;
use Modules\HumanResource\App\Models\EmployeeRecord;
use Illuminate\Support\Facades\Session;
use Modules\AccountSetting\App\Models\AssignedPermission;

class Permissions extends Component
{
    use WithPagination, WithSorting;
    public $employee_id;

    protected $listeners = ['Permissions' => '$refresh'];

    public $user_id;
    public $permission_id;
    public $created_by;
     // Validate
     protected $rules = [
        'user_id' => 'required',
        'permission_id' => 'required',
        'created_by' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'user_id.required' => 'User Name is required',
        'permission_id.required' => 'Permission is required',
    ];


    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';
    
    public function mount($employee_id){
        $this->employee_id =$employee_id;
    }
    public function AssignStaffPermission($employee_id){
        $this->validate();

        $permissions = $request->user_permisions;
            foreach($permissions as $permission){
                if(AssignedPermission::where('user_id',$employee_id)->where('permission_id',$permission)->exists()){
                    continue;
                }
                else{
                    AssignedPermission::create(array(
                        'user_id' => $employee_id,
                        'permission_id' => $permission,
                        'created_by'     => Auth::user()->id
                    ));
                }
            }
            Session::flash('msg', 'Operation Succesful');
    }

    public function render()
    {
        
        return view('livewire.admin.account-setting.permissions',[
            'permissions' =>PermissionService::getPermission($this->search, $this->sortBy, $this->sortDirection, $this->perPage),
            'employees'=>$this->getEmployee()
        ]);
    }
    private function getEmployee(){
        return EmployeeRecord::with('department','employee')->whereEmployeeId($this->employee_id)->get();
    }
}