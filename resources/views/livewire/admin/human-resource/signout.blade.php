<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="signout">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group fill">
                            <label class="floating-label" for="TimeOut"><span class="text-danger">*</span> Enter Departure Time</label>
                            <input type="time" wire:model="time_out" class="form-control" id="Timeout" placeholder="">
                            @error('time_out') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group fill">
                            <label class="floating-label" for="Reason"><span class="text-danger">*</span> Reason</label>
                            <textarea type="time" wire:model="reason" class="form-control" id="Reason" rows="3" placeholder="Brief Notes if its not normal time"></textarea>
                            @error('reason') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-sm btn-primary">
                            <span wire:loading wire:target="signout"><i class="fa fa-spinner fa-spin"></i> Wait...it is submitting Now </span>
                            <span wire:loading.remove wire:target="signout">Submit</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
