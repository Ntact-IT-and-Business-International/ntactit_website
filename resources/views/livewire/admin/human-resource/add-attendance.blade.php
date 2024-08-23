<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="addAttendance">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group fill">
                            <label class="floating-label" for="Item"><span class="text-danger">*</span> Enter Arrival Time</label>
                            <input type="time" wire:model="time_in" class="form-control" id="TimeIn" placeholder="">
                            @error('time_in') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-sm btn-primary">
                            <span wire:loading wire:target="addAttendance"><i class="fa fa-spinner fa-spin"></i> Wait...it is submitting Now </span>
                            <span wire:loading.remove wire:target="addAttendance">Submit</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
