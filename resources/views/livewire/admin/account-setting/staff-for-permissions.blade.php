<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="row">
        <div class="col-md-6 col-xl-4">

        <div class="card bg-pattern-3-dark mb-4">
            <div class="card-body text-center">
                <i class="fas fa-user-tie bg-dark ui-rounded-icon"></i>
                <h4 class="mt-2 font-weight-bold"> What You Assign Staff Is What Is Able To See</h4>
            </div>
        </div>

        </div>
        <div class="col-md-6 col-xl-8">

            <div class="card text-center mb-3">
                <div class="card-body">
                @if (session()->has('msg'))
                        <div class="alert alert-success">
                            {{ session('msg') }}
                        </div>
                    @endif
                    <div class="row align-employee_records-center m-l-0">
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
                            
                        </div>
                        <div class="col-sm-4 text-right">
                           <input type="text" wire:model.debounce.100ms="search" class="form-control form_2 mb-4"  placeholder="Search Here...">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="report-table" class="table table- table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" wire:click="sortBy('employee_records.id')" style="cursor: pointer;">#
                                        @include('partials._sort-icon',['field'=>'employee_records.id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('employee_records.employee_id')" style="cursor: pointer;">Employee
                                        @include('partials._sort-icon',['field'=>'employee_records.employee_id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('employee_records.department_id')" style="cursor: pointer;">Department
                                        @include('partials._sort-icon',['field'=>'employee_records.department_id'])
                                    </th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $i=>$user)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $user->employee->name }}</td>
                                    <td>{{ $user->department->department }}</td>
                                    <td>
                                        <a href="/accountsetting/assign-or-remove-permission/{{$user->employee_id}}" class="btn btn-outline-primary"><i class="feather icon-plus"></i>&nbsp;Assign OR Remove Permissions </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="row mb-2">
                            <div class="col-md-4">
                            Showing {{$users->firstItem()}} to {{$users->lastItem()}} out of {{$users->total()}} items
                            </div>
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4 pull-right text-end">
                            {{$users->links()}}
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

        </div>
    </div>
</div>
