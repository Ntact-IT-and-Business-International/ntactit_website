<div>
    {{-- Stop trying to control. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="forwardRequisition">
                <div class="row">
                   
                    <div class="col-sm-12">
                        <div class="form-group fill">
                            <label class="floating-label" for="Comment"><span class="text-danger">*</span> Comment</label>
                            <textarea type="text" class="form-control" wire:model="comment" id="comment" rows="4" placeholder=""></textarea>
                        </div>
                        @error('comment') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-sm btn-primary">
                        <span wire:loading wire:target="forwardRequisition"><i class="fa fa-spinner fa-spin"></i> Wait...it is submitting Now</span>
                        <span wire:loading.remove wire:target="forwardRequisition">Submit</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
