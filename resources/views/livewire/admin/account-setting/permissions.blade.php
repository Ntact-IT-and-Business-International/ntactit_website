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
                        
                        </div>
                        <div class="col-sm-4 text-right">
                           <input type="text" wire:model.debounce.100ms="search" class="form-control form_2 mb-4"  placeholder="Search Here...">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="report-table" class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" wire:click="sortBy('permissions.id')" style="cursor: pointer;">#
                                        @include('partials._sort-icon',['field'=>'permissions.id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('permissions.permission')" style="cursor: pointer;">Permission
                                        @include('partials._sort-icon',['field'=>'permissions.permission'])
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $i=>$permission)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>
                                    <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-label">{{ $permission->permission}}</span>
                                </label>
                                </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="row mb-2">
                            <div class="col-md-4">
                            Showing {{$permissions->firstItem()}} to {{$permissions->lastItem()}} out of {{$permissions->total()}} items
                            </div>
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4 pull-right text-end">
                            {{$permissions->links()}}
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

        </div>
    </div>
</div>
