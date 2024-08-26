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
                    <div class="row align-reports$reports-center m-l-0">
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
                            <button  class="btn btn-sm btn-outline-info mb-3" onclick="Livewire.dispatch('openModal', { component: 'admin.reports.add-report' })"><i class="feather icon-upload"></i> Add Report</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="report-table" class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" wire:click="sortBy('reports.id')" style="cursor: pointer;">#
                                        @include('partials._sort-icon',['field'=>'reports.id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('reports.report_heading')" style="cursor: pointer;">Title
                                        @include('partials._sort-icon',['field'=>'reports.report_heading'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('reports.department_id')" style="cursor: pointer;">Department
                                        @include('partials._sort-icon',['field'=>'reports.department_id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('reports.employee_id')" style="cursor: pointer;">Uploaded By
                                        @include('partials._sort-icon',['field'=>'reports.employee_id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('reports.date')" style="cursor: pointer;">Date Uploaded
                                        @include('partials._sort-icon',['field'=>'reports.date'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('reports.report')" style="cursor: pointer;">Report
                                        @include('partials._sort-icon',['field'=>'reports.report'])
                                    </th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reports as $i=>$report)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $report->report_heading }}</td>
                                    <td>{{ $report->department->department }}</td>
                                    <td>{{ $report->creator->name }}</td>
                                    <td>{{ $report->date }}</td>
                                    <td><a href="{{ asset('storage/Reports/report/'.$report->report)}}" download style="color:red;"><i class="feather icon-download"></i> Download</a> | <a href="{{ asset('storage/Reports/report/'.$report->report)}}" target="_blank" style="color:blue;"><i class="fas fa-hand-point-right"></i> View</a></td>
                                    
                                    <td>
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
                            Showing {{$reports->firstItem()}} to {{$reports->lastItem()}} out of {{$reports->total()}} items
                            </div>
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4 pull-right text-end">
                            {{$reports->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- customar project  end -->
    </div>
</div>
