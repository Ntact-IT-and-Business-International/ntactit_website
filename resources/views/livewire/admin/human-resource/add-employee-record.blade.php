<div>
    {{-- Be like water. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="addEmployee">
                <div class="row">
                   <div class="col-sm-4">
                        <div class="form-group fill">
                            <label class="floating-label" for="Name"><span class="text-danger">*</span> Full Name</label>
                            <input type="text" class="form-control" wire:model="name" id="name" placeholder="">
                        </div>
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
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
                            <label class="floating-label" for="Contact"><span class="text-danger">*</span> Phone Number</label>
                            <input type="text" class="form-control" wire:model="phone_number" id="phone_number" placeholder="">
                        </div>
                        @error('phone_number') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="Name"><span class="text-danger">*</span> Department</label>
                            <select class="form-control" wire:model="department_id" id="DepartmentId">
                                <option value="">Select Department</option>
                                @foreach($departments as $department)
                                <option value="{{$department->id}}">{{$department->department}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('department_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group fill">
                            <label class="floating-label" for="Position"> <span class="text-danger">*</span> Position</label>
                            <input type="text" wire:model="position" class="form-control" id="position" placeholder="">
                        </div>
                        @error('position') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="CurriculumVitae"><span class="text-danger">*</span> Employment Status</label>
                            <select class="form-control" wire:model="employee_status" id="employee_status">
                                <option value="">Select Status</option>
                                <option value="permanent">Permanent</option>
                                <option value="contract">Contract</option>
                                <option value="part time">Part Time</option>
                            </select>
                        </div>
                        @error('employee_status') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group fill">
                            <label class="floating-label" for="AppointmentDate"><span class="text-danger">*</span> Appointment Date</label>
                            <input type="date" class="form-control" wire:model="appointment_date" id="appointment_date" placeholder="">
                        </div>
                        @error('appointment_date') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="floating-label" for="CurriculumVitae"><span class="text-danger">*</span> Curriculum Vitae</label>
                            <input type="file" class="form-control" wire:model="curriculum_vitae" id="curriculum_vitae" placeholder="">
                        </div>
                        @error('curriculum_vitae') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="floating-label" for="AccountNumber"><span class="text-danger">*</span> Account Number</label>
                            <input type="text" class="form-control" wire:model="account_number" id="account_number" placeholder="">
                        </div>
                        @error('account_number') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="floating-label" for="AppointmentLetter"><span class="text-danger">*</span> Appointment Letter</label>
                            <input type="file" class="form-control" wire:model="appointment_letter" id="appointment_letter" placeholder="">
                        </div>
                        @error('appointment_letter') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="floating-label" for="contract"> <span class="text-danger">*</span> Contract</label>
                            <input type="file" class="form-control" wire:model="contract" id="contract" placeholder="">
                        </div>
                        @error('contract') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="floating-label" for="salary"><span class="text-danger">*</span> Salary</label>
                            <input type="number" class="form-control" wire:model="salary" id="salary" placeholder="">
                        </div>
                        @error('salary') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="floating-label" for="TinNumber">Tin Number</label>
                            <input type="text" class="form-control" wire:model="tin_number" id="tin_number" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="floating-label" for="PassportPhoto"> <span class="text-danger">*</span> Passport Photo</label>
                            <input type="file" class="form-control" wire:model="photo" id="photo" placeholder="">
                        </div>
                        @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="floating-label" for="JobDescription"><span class="text-danger">*</span> Job Description</label>
                            <textarea class="form-control" wire:model="job_description" id="job_description" rows="2" placeholder="summarized Job description"></textarea>
                        </div>
                        @error('job_description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="NssfNumber">Nssf Number</label>
                            <input type="text" class="form-control" wire:model="nssf" id="nssf" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="password"> <span class="text-danger">*</span>Password</label>
                            <input type="password" class="form-control" wire:model="password" id="password" placeholder="">
                        </div>
                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="ConfirmPassword"><span class="text-danger">*</span> Confirm password</label>
                            <input type="password" class="form-control" wire:model="password_confirmation" id="password_confirmation" placeholder="">
                        </div>
                        @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-12 text center">
                        <button type="submit" class="btn btn-primary">
                            <span wire:loading wire:target="addEmployee"><i class="fa fa-spinner fa-spin"></i> Wait...it is submitting Now</span>
                            <span wire:loading.remove wire:target="addEmployee">Submit</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
