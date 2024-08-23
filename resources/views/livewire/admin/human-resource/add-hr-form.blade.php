<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="addHrForm">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group fill">
                            <label class="floating-label" for="NameOfForm"><span class="text-danger">*</span> Name Of Form</label>
                            <input type="text" wire:model="name_of_form" class="form-control" id="NameOfForm" placeholder="">
                            @error('name_of_form') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group fill">
                            <label class="floating-label" for="Form"><span class="text-danger">*</span> Upload Form</label>
                            <input type="file" wire:model="form" class="form-control" id="form" placeholder="">
                            <div wire:loading wire:target="form" style="color:blue;"><strong>Uploading Form, Please Wait...</strong></div>
                            @error('form') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-sm btn-primary">
                            <span wire:loading wire:target="addHrForm"><i class="fa fa-spinner fa-spin"></i> Wait...it is submitting Now </span>
                            <span wire:loading.remove wire:target="addHrForm">Submit</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
