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
                    <div class="row align-leaves-center m-l-0">
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
                            <button  class="btn btn-sm btn-outline-info mb-3" onclick="Livewire.dispatch('openModal', { component: 'admin.human-resource.add-leave' })"><i class="feather icon-plus"></i> Request For Leave</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="report-table" class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" wire:click="sortBy('leaves.id')" style="cursor: pointer;">#
                                        @include('partials._sort-icon',['field'=>'leaves.id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('leaves.name')" style="cursor: pointer;">Name
                                        @include('partials._sort-icon',['field'=>'leaves.name'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('leaves.date_in')" style="cursor: pointer;">Date in
                                        @include('partials._sort-icon',['field'=>'leaves.date_in'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('leaves.date_out')" style="cursor: pointer;">Date Out
                                        @include('partials._sort-icon',['field'=>'leaves.date_out'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('leaves.reason')" style="cursor: pointer;">Leave Reason
                                        @include('partials._sort-icon',['field'=>'leaves.reason'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('leaves.reason_for_rejection')" style="cursor: pointer;">Rejection Reason
                                        @include('partials._sort-icon',['field'=>'leaves.reason_for_rejection'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('leaves.leave_status')" style="cursor: pointer;">Status
                                        @include('partials._sort-icon',['field'=>'leaves.leave_status'])
                                    </th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($leaves as $i=>$leave)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $leave->creator->name }}</td>
                                    <td>{{ $leave->date_in }}</td>
                                    <td>{{ $leave->date_out }}</td>
                                    <td>{{ $leave->reason }}</td>
                                    <td>{{ $leave->reason_for_rejection }}</td>
                                    <td>{{ $leave->leave_status }}</td>
                                    <td>
                                        <a href="#!" class="btn btn-success btn-sm" wire:click="approveLeave({{ $leave->id }})"><i class="feather icon-check-circle"></i>&nbsp;Approve </a>
                                        <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                        <a href="{{URL::signedRoute('Reject Leave',['leave_id' => $leave->id])}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Reject </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="row mb-2">
                            <div class="col-md-4">
                            Showing {{$leaves->firstItem()}} to {{$leaves->lastItem()}} out of {{$leaves->total()}} items
                            </div>
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4 pull-right text-end">
                            {{$leaves->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- customar project  end -->
    </div>
</div>
