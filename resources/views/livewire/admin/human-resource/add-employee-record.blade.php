<div>
    {{-- Be like water. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="addEmployee">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group fill">
                            <label class="floating-label" for="Name"><span class="text-danger">*</span> Full Name</label>
                            <select class="form-control" wire:model="employee_id" id="employee_id">
                                <option>Choose Employee</option>
                                @foreach ($employees as $employee )
                                <option value="{{$employee->id}}">{{$employee->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('employee_id') <span class="text-danger">{{ $message }}</span> @enderror
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
                        <div class="form-group">
                            <label class="floating-label" for="NssfNumber">Nssf Number</label>
                            <input type="text" class="form-control" wire:model="nssf" id="nssf" placeholder="">
                        </div>
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
                            <label class="floating-label" for="CurriculumVitae"><span class="text-danger">*</span> Curriculum Vitae (File Less Than 1mb)</label>
                            <input type="file" class="form-control" wire:model="curriculum_vitae" id="curriculum_vitae" placeholder="">
                        </div>
                        @error('curriculum_vitae') <span class="text-danger">{{ $message }}</span> @enderror
                        <div wire:loading wire:target="curriculum_vitae" style="color:green;"><strong>Uploading CV, Please Wait...</strong></div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="AccountNumber"><span class="text-danger">*</span> Account Number</label>
                            <input type="text" class="form-control" wire:model="account_number" id="account_number" placeholder="">
                        </div>
                        @error('account_number') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="AccountNumber"><span class="text-danger">*</span> Bank Name</label>
                            <select class="form-control" wire:model="bank_name">
                                <option>Choose Bank</option>
                                <option value="Stanbic">Stanbic Bank</option>
                                <option value="Centenary">Centenary Bank</option>
                                <option value="Post">Post Bank</option>
                                <option value="Equity">Equity Bank</option>
                                <option value="DFCU">DFCU Bank</option>
                            </select>
                        </div>
                        @error('bank_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="salary"><span class="text-danger">*</span> Salary</label>
                            <input type="number" class="form-control" wire:model="salary" id="salary" placeholder="">
                        </div>
                        @error('salary') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="floating-label" for="AppointmentLetter"><span class="text-danger">*</span> Appointment Letter (File Less Than 1mb)</label>
                            <input type="file" class="form-control" wire:model="appointment_letter" id="appointment_letter" placeholder="">
                        </div>
                        @error('appointment_letter') <span class="text-danger">{{ $message }}</span> @enderror
                        <div wire:loading wire:target="appointment_letter" style="color:green;"><strong>Uploading Appointment, Please Wait...</strong></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="floating-label" for="contract"> <span class="text-danger">*</span> Contract (File Less Than 1mb)</label>
                            <input type="file" class="form-control" wire:model="contract" id="contract" placeholder="">
                        </div>
                        @error('contract') <span class="text-danger">{{ $message }}</span> @enderror
                        <div wire:loading wire:target="contract" style="color:green;"><strong>Uploading Contract, Please Wait...</strong></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="floating-label" for="TinNumber">Tin Number</label>
                            <input type="text" class="form-control" wire:model="tin_number" id="tin_number" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="floating-label" for="PassportPhoto"> <span class="text-danger">*</span> Passport Photo (File Less Than 1mb)</label>
                            <input type="file" class="form-control" wire:model="photo" id="photo" placeholder="">
                        </div>
                        @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
                        <div wire:loading wire:target="photo" style="color:green;"><strong>Uploading photo, Please Wait...</strong></div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="floating-label" for="JobDescription"><span class="text-danger">*</span> Job Description</label>
                            <textarea class="form-control" wire:model="job_description" id="job_description" rows="2" placeholder="summarized Job description"></textarea>
                        </div>
                        @error('job_description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-sm-12 text center">
                    <button type="submit" class="btn btn-primary">
                    <span wire:loading wire:target="addEmployee"><i class="fa fa-spinner fa-spin"></i> Wait...it is submitting Now</span>
                    <span wire:loading.remove wire:target="addEmployee">Submit</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>