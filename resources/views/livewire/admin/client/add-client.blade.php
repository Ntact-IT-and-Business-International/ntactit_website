<div>
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="addClient">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group fill">
                            <label class="floating-label" for="Name"><span class="text-danger">*</span> Full Name</label>
                            <input type="text" class="form-control" wire:model="client_name" id="client_name" placeholder="">
                        </div>
                        @error('client_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group fill">
                            <label class="floating-label" for="Email"><span class="text-danger">*</span> Email</label>
                            <input type="email" class="form-control" wire:model="email" id="email" placeholder="">
                        </div>
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group fill">
                            <label class="floating-label" for="Company"><span class="text-danger">*</span> Company OR Organization</label>
                            <input type="text" class="form-control" wire:model="company" id="phone_number" placeholder="">
                        </div>
                        @error('company') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group fill">
                            <label class="floating-label" for="Contact"><span class="text-danger">*</span> Contact</label>
                            <input type="text" class="form-control" wire:model="contact" id="contact" placeholder="">
                        </div>
                        @error('contact') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group fill">
                            <label class="floating-label" for="address"> <span class="text-danger">*</span> Address</label>
                            <input type="text" wire:model="address" class="form-control" id="address" placeholder="">
                        </div>
                        @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-primary">
                        <span wire:loading wire:target="addClient"><i class="fa fa-spinner fa-spin"></i> Wait...it is submitting Now</span>
                        <span wire:loading.remove wire:target="addClient">Submit</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
