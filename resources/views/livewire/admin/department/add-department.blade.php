<div>
    {{-- The whole world belongs to you. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="addDepartment">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group fill">
                            <label class="floating-label" for="Item"><span class="text-danger">*</span> Department</label>
                            <input type="text" wire:model="department" class="form-control" id="Item" placeholder="">
                            @error('department') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-sm btn-primary">
                            <span wire:loading wire:target="addDepartment"><i class="fa fa-spinner fa-spin"></i> Wait... it is submitting Now </span>
                            <span wire:loading.remove wire:target="addDepartment">Submit</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
