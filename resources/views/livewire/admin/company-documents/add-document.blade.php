<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="addCompanyDocument">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="floating-label" for="DocumentName">Name of Document</label>
                            <input type="text" wire:model="document_name" class="form-control" id="document_name" placeholder="">
                        </div>
                        @error('document_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group fill">
                            <label class="floating-label" for="Document">Document</label>
                            <input type="file" wire:model="document" class="form-control" id="document" placeholder="">
                            <div wire:loading wire:target="document" style="color:blue;"><strong>Uploading Report, Please Wait...</strong></div>
                        </div>
                        @error('document') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary">
                            <span wire:loading wire:target="addCompanyDocument"><i class="fa fa-spinner fa-spin"></i> Wait...it is submitting Now</span>
                            <span wire:loading.remove wire:target="addCompanyDocument">Submit</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
