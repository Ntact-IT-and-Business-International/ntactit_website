<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="addService">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group fill">
                            <label class="floating-label" for="NameOfService">Name of Service</label>
                            <input type="text" wire:model="name_of_service" class="form-control" id="name_of_service" placeholder="">
                        </div>
                          @error('name_of_service') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary">
                            <span wire:loading wire:target="addService"><i class="fa fa-spinner fa-spin"></i> Wait while its Saving ...</span>
                            <span wire:loading.remove wire:target="addService">Submit</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
