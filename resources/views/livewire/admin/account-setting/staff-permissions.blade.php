<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="row">
        <div class="col-md-6 col-xl-4">

        <div class="card bg-primary mb-4">
            @foreach($employees as $employee)
            <div class="card-body text-center">
                <img src="{{ asset('/storage/photo/photo/'.$employee->photo) }}" style="border-radius:50%; width:100px; height:100px;margin-left:30%" alt class="">
                <h4 class="mt-2 font-weight-bold text-larger" style="font-size: 25px;;"> {{ $employee->employee->name }}</h4>
            </div>
            @endforeach
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
                        <input type="text" wire:model.debounce.100ms="search" class="form-control form_2 mb-4"  placeholder="Search Here...">
                        </div>
                        <div class="col-sm-4 text-right">
                            @foreach($employees as $employee)
                            <a href="/accountsetting/permissions/{{$employee->employee_id}}"  class="btn btn-sm btn-outline-info mb-2"><i class="feather icon-plus"></i> Add Permission (s)</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="report-table" class="table table- table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" wire:click="sortBy('employee_records.id')" style="cursor: pointer;">#
                                        @include('partials._sort-icon',['field'=>'employee_records.id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('employee_records.department_id')" style="cursor: pointer;">Permission
                                        @include('partials._sort-icon',['field'=>'employee_records.department_id'])
                                    </th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $i=>$user)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $user->department->department }}</td>
                                    <td>
                                        <a href="#!" class="btn btn-outline-warning"><i class="feather icon-plus"></i>&nbsp;Remove Permissions </a>
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
