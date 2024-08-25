<div>
    {{-- In work, do what you enjoy. --}}
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
                    <div class="row align-payrolls-center m-l-0">
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
                            <button  class="btn btn-sm btn-outline-info mb-3" onclick="Livewire.dispatch('openModal', { component: 'admin.finance.add-payroll' })"><i class="feather icon-plus"></i> Add Payroll</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="report-table" class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" wire:click="sortBy('payrolls.id')" style="cursor: pointer;">#
                                        @include('partials._sort-icon',['field'=>'payrolls.id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('payrolls.employee_id')" style="cursor: pointer;">Name
                                        @include('partials._sort-icon',['field'=>'payrolls.employee_id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('payrolls.employee_id')" style="cursor: pointer;">Account Number
                                        @include('partials._sort-icon',['field'=>'payrolls.employee_id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('payrolls.employee_id')" style="cursor: pointer;">Bank
                                        @include('partials._sort-icon',['field'=>'payrolls.employee_id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('payrolls.amount')" style="cursor: pointer;">Amount
                                        @include('partials._sort-icon',['field'=>'payrolls.amount'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('payrolls.month')" style="cursor: pointer;">Month
                                        @include('partials._sort-icon',['field'=>'payrolls.month'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('payrolls.payroll_status')" style="cursor: pointer;">Status
                                        @include('partials._sort-icon',['field'=>'payrolls.payroll_status'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('payrolls.created_by')" style="cursor: pointer;">Prepared By
                                        @include('partials._sort-icon',['field'=>'payrolls.created_by'])
                                    </th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payrolls as $i=>$payroll)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $payroll->name }}</td> 
                                    <td>{{$payroll->account_number}}</td>
                                    <td>{{$payroll->bank_name}}</td>
                                    <td>Ugx: {{number_format($payroll->amount)}}</td>
                                    <td>{{$payroll->month}}</td>
                                    <td class="capitalize demo-inline-spacing"><span class="badge badge-outline-success">{{$payroll->payroll_status}}<span></span></td>
                                    <td>{{$payroll->creator->name}}</td>
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
                            Showing {{$payrolls->firstItem()}} to {{$payrolls->lastItem()}} out of {{$payrolls->total()}} Items
                            </div>
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4 pull-right text-end">
                            {{$payrolls->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- customar project  end -->
    </div>
</div>
