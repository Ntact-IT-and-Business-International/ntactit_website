<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="addExpenditure">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group fill">
                            <label class="floating-label" for="Name"><span class="text-danger">*</span> Client</label>
                            <select class="form-control" wire:model="received_by">
                                <option>Choose Employee</option>
                                @foreach($employees as $employee)
                                 <option value="{{$employee->id}}">{{$employee->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('received_by') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group fill">
                            <label class="floating-label" for="Item"> Item</label>
                                <select class="form-control" wire:model="item_id">
                                    <option>Choose Item</option>
                                    @foreach($items as $item)
                                    <option value="{{$item->id}}">{{$item->item}}</option>
                                    @endforeach
                                </select>
                        </div>
                        @error('item_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group fill">
                            <label class="floating-label" for="DepartmentId"><span class="text-danger">*</span> Department</label>
                                <select class="form-control" wire:model="department_id">
                                    <option>Choose Department</option>
                                    @foreach($departments as $department)
                                    <option value="{{$department->id}}">{{$department->department}}</option>
                                    @endforeach
                                </select>
                        </div>
                        @error('department_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group fill">
                            <label class="floating-label" for="Quantity"> Quantity</label>
                            <input type="number" class="form-control" wire:model="quantity" id="quantity" placeholder="">
                        </div>
                        @error('quantity') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group fill">
                            <label class="floating-label" for="UnitCost"> Unit Cost</label>
                            <input type="number" class="form-control" wire:model="unit_cost" id="unit_cost" placeholder="">
                        </div>
                        @error('unit_cost') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group fill">
                            <label class="floating-label" for="InitialDeposit"> Date</label>
                            <input type="date" class="form-control" wire:model="date_of_expense" id="date_of_expense" placeholder="">
                        </div>
                        @error('date_of_expense') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group fill">
                            <label class="floating-label" for="Description"><span class="text-danger">*</span> Description</label>
                            <textarea type="text" class="form-control" wire:model="description" id="description" rows="3" placeholder=""></textarea>
                        </div>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group fill">
                            <label class="floating-label" for="Status"> <span class="text-danger">*</span> Expenditure Status</label>
                            <select class="form-control" wire:model="expense_status">
                                <option>Choose Status</option>
                                <option value="bought">Bought</option>
                                <option value="not bought">Not Bought</option>
                            </select>
                        </div>
                        @error('expense_status') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-sm btn-primary">
                        <span wire:loading wire:target="addExpenditure"><i class="fa fa-spinner fa-spin"></i> Wait...it is submitting Now</span>
                        <span wire:loading.remove wire:target="addExpenditure">Submit</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
