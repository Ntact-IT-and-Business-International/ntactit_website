<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="row">
        <div class="col-xl-4">

            <!-- Side info -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="media">
                        @foreach($employee_records as $record)
                        <img src="{{ asset('/storage/photo/photo/'.$record->photo) }}" style="border-radius:50%; width:100px; height:100px;" alt class="">
                        <div class="media-body pt-2 ml-3">
                            <h3 class="mb-2 font-weight-bold" style="font-size:18px;">{{$record->employee->name}}</h3>
                            <div class="text-muted small">{{$record->department->department}}</div>

                            <div class="mt-2">
                                <a href="javascript:void(0)" class="text-twitter">
                                    <span class="ion ion-logo-twitter"></span>
                                </a>
                                &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-facebook">
                                    <span class="ion ion-logo-facebook"></span>
                                </a>
                                &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-instagram">
                                    <span class="ion ion-logo-instagram"></span>
                                </a>
                            </div>

                            <div class="mt-3">
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm btn-round" style="text-transform:lowercase;">+&nbsp; {{ $record->employee->email}}</a> &nbsp;
                                <a href="javascript:void(0)" class="btn icon-btn btn-default btn-sm md-btn-flat btn-round">
                                    <span class="ion ion-md-mail"></span>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <hr class="border-light m-0">
                <div class="card-body">
                   @foreach($employee_records as $record)
                    <div class="mb-2">
                        <span class="font-weight-bold">Positon:</span>&nbsp; {{ $record->position}}
                    </div>
                    <div class="mb-2">
                        <span class="font-weight-bold">Appointment Date:</span>&nbsp;
                        <a href="javascript:void(0)" class="text-dark">{{ $record->appointment_date}}</a>
                    </div>
                    <div class="mb-2">
                        <span class="font-weight-bold">Phone Number:</span>&nbsp;
                        <a href="javascript:void(0)" class="text-dark">{{ $record->phone_number}}</a>
                    </div>
                    <div class='mb-4'>
                        <span class="font-weight-bold">Salary:</span>&nbsp; Ugx: {{ number_format($record->salary) }}
                    </div>
                    <div class="text-muted">
                    <span class="font-weight-bold">Register On:</span>&nbsp;
                    <a href="javascript:void(0)" class="text-dark">{{ $record->created_at }}</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col">

            <!-- Info -->
            <div class="card mb-4">
                @foreach($employee_records as $record)
                <div class="row no-gutters row-bordered ui-bordered text-center">
                    <a href="javascript:void(0)" class="d-flex col flex-column text-dark py-3">
                        <div class="font-weight-bold">{{ $record->account_number }}</div>
                        <div class="text-muted small">Account Number</div>
                    </a>
                    <a href="javascript:void(0)" class="d-flex col flex-column text-dark py-3">
                        <div class="font-weight-bold">{{ $record->bank_name }}</div>
                        <div class="text-muted small">Bank Name</div>
                    </a>
                    <a href="javascript:void(0)" class="d-flex col flex-column text-dark py-3">
                        <div class="font-weight-bold">{{ $record->tin_number }}</div>
                        <div class="text-muted small">Tin Number</div>
                    </a>
                    <a href="javascript:void(0)" class="d-flex col flex-column text-dark py-3">
                        <div class="font-weight-bold">{{ $record->nssf }}</div>
                        <div class="text-muted small">NSSF</div>
                    </a>
                    <a href="javascript:void(0)" class="d-flex col flex-column text-dark py-3">
                        <div class="font-weight-bold">{{ $record->employee_status }}</div>
                        <div class="text-muted small">Employee Status</div>
                    </a>
                </div>
                @endforeach
            </div>
            <!-- / Info -->

            <!-- Posts -->

            <div class="card mb-4">
                <div class="card-body">
                @foreach($employee_records as $record)
                    <p class="font-weight-bold">
                       JOB DESCRIPTION 
                    </p>
                    <p>
                    {{ $record->job_description }}
                    </p>
                    @endforeach
                    @foreach($employee_records as $record)
                    <div class="row no-gutters row-bordere ui-bordered text-center ml-1 mt-3">
                        <a href="javascript:void(0)" class="text-dark">
                            <div class="font-weight-bold"><a href="{{ asset('/storage/Cvs/appointment/'.$record->appointment_letter) }}" target="_blank"><i class="feather icon-file-text" style="font-size:50px; color:red;"></i><br>Appointment Letter</a></div>
                            
                        </a>
                        <a href="javascript:void(0)" class="d-flex col flex-column text-dark">
                            <div class="font-weight-bold"><a href="{{ asset('/storage/Contracts/contract/'.$record->contract) }}" target="_blank"><i class="feather icon-folder" style="font-size:50px; color:green;"></i></a><br>Contract</div>
                            
                        </a>
                        <a href="javascript:void(0)" class="d-flex col flex-column text-dark">
                            <div class="font-weight-bold"><a href="{{ asset('/storage/Cvs/cv/'.$record->curriculum_vitae) }}" target="_blank"><i class="feather icon-file-plus" style="font-size:50px; color:blue;"></i><br>Curriculum Vitae</a></div>
                            
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="card-footer">
                    <a href="javascript:void(0)" class="d-inline-block text-muted">
                        <small class="align-middle"><strong>123</strong> Likes</small>
                    </a>
                    <a href="javascript:void(0)" class="d-inline-block text-muted ml-3">
                        <small class="align-middle"><strong>12</strong> Comments</small>
                    </a>
                    <a href="javascript:void(0)" class="d-inline-block text-muted ml-3">
                        <i class="ion ion-md-share align-middle"></i>&nbsp;
                        <small class="align-middle">Repost</small>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
