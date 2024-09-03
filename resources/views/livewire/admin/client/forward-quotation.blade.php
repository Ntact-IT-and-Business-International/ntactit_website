<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="forwardQuotation">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group fill">
                            <label class="floating-label" for="Employee"><span class="text-danger">*</span> Choose Person YouAre Forwarding To:</label>
                            <select class="form-control" wire:model="employee_id">
                              <option>Choose Person</option>
                              @foreach($employees as $employee)
                              <option value="{{$employee->id}}">{{$employee->name}}</option>
                              @endforeach
                            </select>
                            @error('employee_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group fill">
                            <label class="floating-label" for="Comment"><span class="text-danger">*</span> Comment</label>
                            <textarea type="text" wire:model="comment" class="form-control" id="comment" rows="2" placeholder=""></textarea>
                            @error('comment') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-sm btn-primary">
                            <span wire:loading wire:target="forwardQuotation"><i class="fa fa-spinner fa-spin"></i> Wait... it is submitting Now </span>
                            <span wire:loading.remove wire:target="forwardQuotation">Forward Quotation</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
