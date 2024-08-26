<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="addUser">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group fill">
                            <label class="floating-label" for="Name"><span class="text-danger">*</span> Name of Employee</label>
                             <input type="text" class="form-control" wire:model="name" id="name" placeholder="">
                        </div>
                        @error('employee_record_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group fill">
                            <label class="floating-label" for="Email"> Email</label>
                            <input type="email" class="form-control" wire:model="email" id="email" placeholder="">
                        </div>
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group fill">
                            <label class="floating-label" for="Password"><span class="text-danger">*</span> Password</label>
                              <input type="password" class="form-control" wire:model="password" id="password" placeholder="">
                        </div>
                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group fill">
                            <label class="floating-label" for="PasswordConfirmation"><span class="text-danger">*</span> Confirm Password</label>
                              <input type="password" class="form-control" wire:model="password_confirmation" id="password_confirmation" placeholder="">
                        </div>
                        @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group fill">
                            <label class="floating-label" for="Status"> User Type</label>
                            <select class="form-control" wire:model="status">
                                <option>Choose Type</option>
                                <option value="employee">Employee</option>
                                <option value="Director">Director</option>
                            </select>
                        </div>
                        @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-sm btn-primary">
                        <span wire:loading wire:target="addUser"><i class="fa fa-spinner fa-spin"></i> Wait...it is submitting Now</span>
                        <span wire:loading.remove wire:target="addUser">Submit</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
