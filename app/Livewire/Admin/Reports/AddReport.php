<?php

namespace App\Livewire\Admin\Reports;

use LivewireUI\Modal\ModalComponent;
use Modules\Reports\App\Services\ReportService;
use Illuminate\Support\Facades\Session;
use Modules\Department\App\Models\Department;
use App\Traits\saveToReportFolder;
use Livewire\WithFileUploads;

class AddReport extends ModalComponent
{
    use saveToReportFolder,WithFileUploads;
    public $employee_id;
    public $report_heading;
    public $department_id;
    public $date;
    public $report;
     // Validate
     protected $rules = [
        'report_heading' => 'required',
        'department_id' => 'required',
        'report' => 'required|mimes:pdf,doc,docx,xls,xlsx|max:1024',
        'date' => 'required',
        'employee_id' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'report_heading.required' => 'Title is required',
        'department_id.required' => 'Department is required',
        'report.required' => 'Report is required',
        'date.required' => 'Date is required',
    ];
    public function addReport(){
        $this->validate();

        $report = $this->saveToReports('report', $this->report);

        $fields = [
            'report_heading' => $this->report_heading,
            'department_id' => $this->department_id,
            'report' => $report,
            'date' => $this->date,
            'employee_id' => auth()->user()->id,
        ];
        ReportService::createReport($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('Package', 'refreshComponent');
        $this->closeModal();
    }
    
    public function render()
    {
        return view('livewire.admin.reports.add-report',[
            'departments'=>$this->getDepartment()
        ]);
    }
    private function getDepartment(){
        return Department::get();
    }
}
