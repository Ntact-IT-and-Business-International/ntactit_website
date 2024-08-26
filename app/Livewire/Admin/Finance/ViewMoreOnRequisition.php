<?php

namespace App\Livewire\Admin\Finance;

use Livewire\Component;
use Modules\Finance\App\Services\RequisitionService;

class ViewMoreOnRequisition extends Component
{
    public $requisition_id;

    public function mount($requisition_id){
        $this->requisition_id =$requisition_id;
    }

    public function render()
    {
        return view('livewire.admin.finance.view-more-on-requisition',[
            'requisition_deails'=>RequisitionService::getMoreRequisitionDetails($this->requisition_id)
        ]);
    }
}
