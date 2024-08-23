<div>
    {{-- The whole world belongs to you. --}}
    <div class="row">
        <!-- customar project  start -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    @if (session()->has('msg'))
                        <div class="alert alert-success">
                            {{ session('msg') }}
                        </div>
                    @endif
                    <div class="row align-attendances$attendances-center m-l-0">
                        <div class="col-sm-4">
                            <div class="is-invalid mb-4">
                                <select class="select2-demo form-control" wire:model='perPage'>
                                <option>10</option>
                                <option>20</option>
                                <option>30</option>
                                <option>40</option>
                                <option>50</option>
                                <option>60</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" wire:model.debounce.100ms="search" class="form-control form_2 mb-4"  placeholder="Search Here...">
                        </div>
                        <div class="col-sm-4 text-right">
                            <button  class="btn btn-sm btn-outline-info mb-3" onclick="Livewire.dispatch('openModal', { component: 'admin.human-resource.add-attendance' })"><i class="feather icon-unlock"></i> Sign In</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="report-table" class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" wire:click="sortBy('attendances.id')" style="cursor: pointer;">#
                                        @include('partials._sort-icon',['field'=>'attendances.id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('attendances.employee_id')" style="cursor: pointer;">Name
                                        @include('partials._sort-icon',['field'=>'attendances.employee_id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('attendances.time_in')" style="cursor: pointer;">Time In
                                        @include('partials._sort-icon',['field'=>'attendances.time_in'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('attendances.time_out')" style="cursor: pointer;">Time Out
                                        @include('partials._sort-icon',['field'=>'attendances.time_out'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('attendances.reason')" style="cursor: pointer;">Reason
                                        @include('partials._sort-icon',['field'=>'attendances.reason'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('attendances.created_at')" style="cursor: pointer;">Day
                                        @include('partials._sort-icon',['field'=>'attendances.created_at'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('attendances.created_at')" style="cursor: pointer;">Actual Time
                                        @include('partials._sort-icon',['field'=>'attendances.created_at'])
                                    </th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($attendances as $i=>$attendance)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $attendance->creator->name }}</td>
                                    <td>{{ $attendance->time_in }}</td>
                                    <td>{{ $attendance->time_out }}</td>
                                    <td>{{ $attendance->reason }}</td>
                                    <td>{{\Carbon\Carbon::parse($attendance->created_at)->format('l d F, Y')}}</td>
                                    <td>{{ $attendance->created_at }}</td>
                                    <td>
                                        <a href="{{URL::signedRoute('SignOut',['attendance_id' => $attendance->id])}}" class="btn btn-success btn-sm"><i class="feather icon-lock"></i>&nbsp;Sign Out </a>
                                        <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                        <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="row mb-2">
                            <div class="col-md-4">
                            Showing {{$attendances->firstItem()}} to {{$attendances->lastItem()}} out of {{$attendances->total()}} items
                            </div>
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4 pull-right text-end">
                            {{$attendances->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- customar project  end -->
    </div>
</div>
