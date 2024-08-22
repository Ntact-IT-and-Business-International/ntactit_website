<div>
    {{-- The best athlete wants his opponent at his best. --}}
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
                    <div class="row align-employees-center m-l-0">
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
                            <button  class="btn btn-sm btn-outline-info mb-3" onclick="Livewire.dispatch('openModal', { component: 'admin.human-resource.add-employee-record' })"><i class="feather icon-plus"></i> Add Employee</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="report-table" class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" wire:click="sortBy('employee_records.id')" style="cursor: pointer;">#
                                        @include('partials._sort-icon',['field'=>'employee_records.id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('employee_records.name')" style="cursor: pointer;">Name
                                        @include('partials._sort-icon',['field'=>'employee_records.name'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('employee_records.department_id')" style="cursor: pointer;">Department
                                        @include('partials._sort-icon',['field'=>'employee_records.department_id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('employee_records.position')" style="cursor: pointer;">position
                                        @include('partials._sort-icon',['field'=>'employee_records.position'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('employee_records.appointment_date')" style="cursor: pointer;">Appointment Date
                                        @include('partials._sort-icon',['field'=>'employee_records.appointment_date'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('employee_records.salary')" style="cursor: pointer;">Salary
                                        @include('partials._sort-icon',['field'=>'employee_records.salary'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('employee_records.employee_status')" style="cursor: pointer;">Status
                                        @include('partials._sort-icon',['field'=>'employee_records.employee_status'])
                                    </th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $i=>$employee)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $employee->employee->name }}</td>
                                    <td>{{ $employee->department->department }}</td>
                                    <td>{{ $employee->position }}</td>
                                    <td>{{ $employee->appointment_date }}</td>
                                    <td>{{ number_format($employee->salary) }}</td>
                                    <td>{{ $employee->employee_status }}</td>
                                    <td>
                                        <a href="#!" class="btn btn-success btn-sm"><i class="feather icon-eye"></i>&nbsp;View </a>
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
                            Showing {{$employees->firstItem()}} to {{$employees->lastItem()}} out of {{$employees->total()}} items
                            </div>
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4 pull-right text-end">
                            {{$employees->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- customar project  end -->
    </div>
</div>
