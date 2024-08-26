<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="addReport">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group fill">
                            <label class="floating-label" for="Department"><span class="text-danger">*</span> Name Of Department</label>
                            <select class="form-control" wire:model="department_id">
                              <option>Choose Department</option>
                              @foreach ($departments as $department)
                                  <option value="{{$department->id}}">{{$department->department}}</option>
                              @endforeach
                            </select>
                            @error('department_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group fill">
                            <label class="floating-label" for="Title">Report Title</label>
                            <input type="text" wire:model="report_heading" class="form-control" id="report_heading" placeholder="">
                        </div>
                        @error('report_heading') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group fill">
                            <label class="floating-label" for="Title">Date</label>
                            <input type="date" wire:model="date" class="form-control" id="date" placeholder="">
                        </div>
                        @error('date') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group fill">
                            <label class="floating-label" for="Report"><span class="text-danger">*</span> Upload Report</label>
                            <input type="file" wire:model="report" class="form-control" id="report" placeholder="">
                            <div wire:loading wire:target="report" style="color:blue;"><strong>Uploading Report, Please Wait...</strong></div>
                            @error('report') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-sm btn-primary">
                            <span wire:loading wire:target="addReport"><i class="fa fa-spinner fa-spin"></i> Wait...it is submitting Now </span>
                            <span wire:loading.remove wire:target="addReport">Submit</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
