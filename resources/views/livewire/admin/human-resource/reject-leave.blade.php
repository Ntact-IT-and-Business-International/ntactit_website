<div>
    {{-- Be like water. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="rejectLeave">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group fill">
                            <label class="floating-label" for="ReasonForRejection"><span class="text-danger">*</span> Reason For Rejecting Requested Leave</label>
                            <textarea type="text" wire:model="reason_for_rejection" class="form-control" id="reason_for_rejection" rows="3" placeholder="Briefly State clearly why Leave is Rejected"></textarea>
                            @error('reason_for_rejection') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-sm btn-primary">
                            <span wire:loading wire:target="rejectLeave"><i class="fa fa-spinner fa-spin"></i> Wait...it is submitting Now </span>
                            <span wire:loading.remove wire:target="rejectLeave">Submit</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
