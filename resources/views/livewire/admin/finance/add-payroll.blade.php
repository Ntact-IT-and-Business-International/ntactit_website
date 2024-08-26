<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="addPayroll">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group fill">
                            <label class="floating-label" for="Name"><span class="text-danger">*</span> Name of Employee</label>
                            <select class="form-control" wire:model="employee_record_id">
                                <option>Choose Employee</option>
                                @foreach($employees as $employee)
                                 <option value="{{$employee->employee_id}}">{{$employee->employee->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('employee_record_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group fill">
                            <label class="floating-label" for="Item"> Amount</label>
                            <input type="number" class="form-control" wire:model="amount" id="amount" placeholder="">
                        </div>
                        @error('amount') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group fill">
                            <label class="floating-label" for="Month"><span class="text-danger">*</span> Month</label>
                              <input type="month" class="form-control" wire:model="month" id="month" placeholder="">
                        </div>
                        @error('month') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group fill">
                            <label class="floating-label" for="Status"> Payroll  Status</label>
                            <select class="form-control" wire:model="payroll_status">
                                <option>Choose Status</option>
                                <option value="cleared">Cleared</option>
                                <option value="pending balance">Pending Balance</option>
                                <option value="not paid">Not Paid</option>
                            </select>
                        </div>
                        @error('payroll_status') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-sm btn-primary">
                        <span wire:loading wire:target="addPayroll"><i class="fa fa-spinner fa-spin"></i> Wait...it is submitting Now</span>
                        <span wire:loading.remove wire:target="addPayroll">Submit</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
