<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="rejectRequisition">
                <div class="row">
                   
                    <div class="col-sm-12">
                        <div class="form-group fill">
                            <label class="floating-label" for="Reason"><span class="text-danger">*</span> Reason For Rejecting This Requisition</label>
                            <textarea type="text" class="form-control" wire:model="reason" id="reason" rows="4" placeholder=""></textarea>
                        </div>
                        @error('reason') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-sm btn-primary">
                        <span wire:loading wire:target="rejectRequisition"><i class="fa fa-spinner fa-spin"></i> Wait...it is submitting Now</span>
                        <span wire:loading.remove wire:target="rejectRequisition">Submit</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
