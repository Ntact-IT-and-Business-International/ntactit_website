<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="addLeave">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group fill">
                            <label class="floating-label" for="DateIn"><span class="text-danger">*</span> Start Date</label>
                            <input type="date" wire:model="date_in" class="form-control" id="DateIn" placeholder="">
                            @error('date_in') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group fill">
                            <label class="floating-label" for="DateOut"><span class="text-danger">*</span> End Date</label>
                            <input type="date" wire:model="date_out" class="form-control" id="DateOut" placeholder="">
                            @error('date_out') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group fill">
                            <label class="floating-label" for="Reason"><span class="text-danger">*</span> Reason</label>
                            <textarea type="text" wire:model="reason" class="form-control" id="Reason" rows="3" placeholder="Brief Straight Reason"></textarea>
                            @error('reason') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-sm btn-primary">
                            <span wire:loading wire:target="addLeave"><i class="fa fa-spinner fa-spin"></i> Wait...it is submitting Now </span>
                            <span wire:loading.remove wire:target="addLeave">Submit</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
