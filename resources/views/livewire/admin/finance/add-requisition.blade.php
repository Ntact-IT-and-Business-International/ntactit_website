<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="addRequisition">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group fill">
                            <label class="floating-label" for="Department"><span class="text-danger">*</span> Department</label>
                            <select class="form-control" wire:model="department_id">
                                <option>Choose Department</option>
                                @foreach($departments as $department)
                                 <option value="{{$department->id}}">{{$department->department}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('department_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group fill">
                            <label class="floating-label" for="Item"><span class="text-danger">*</span> Item</label>
                            <select class="form-control" wire:model="item_id">
                                <option>Choose Item</option>
                                @foreach($items as $item)
                                 <option value="{{$item->id}}">{{$item->item}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('item_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group fill">
                            <label class="floating-label" for="Date"><span class="text-danger">*</span> Date</label>
                            <input type="date" class="form-control" wire:model="date" id="date" placeholder="">
                        </div>
                        @error('date') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group fill">
                            <label class="floating-label" for="Reason"><span class="text-danger">*</span> Work Order</label>
                            <input type="text" class="form-control" wire:model="work_order" id="work_order"  placeholder="">
                        </div>
                        @error('work_order') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group fill">
                            <label class="floating-label" for="Quantity"><span class="text-danger">*</span> Quantity</label>
                            <input type="number" class="form-control" wire:model="quantity" id="quantity"  placeholder="">
                        </div>
                        @error('quantity') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group fill">
                            <label class="floating-label" for="UnitCost"><span class="text-danger">*</span> Unit Cost</label>
                            <input type="number" class="form-control" wire:model="unit_cost" id="unit_cost"  placeholder="">
                        </div>
                        @error('unit_cost') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group fill">
                            <label class="floating-label" for="Description"><span class="text-danger">*</span> Description</label>
                            <textarea type="text" class="form-control" wire:model="description" id="description"  rows="3"></textarea>
                        </div>
                        @error('unit_cost') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-sm btn-primary">
                        <span wire:loading wire:target="addRequisition"><i class="fa fa-spinner fa-spin"></i> Wait...it is submitting Now</span>
                        <span wire:loading.remove wire:target="addRequisition">Submit</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
