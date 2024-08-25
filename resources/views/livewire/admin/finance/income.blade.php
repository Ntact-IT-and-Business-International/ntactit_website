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
                    <div class="row align-incomes-center m-l-0">
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
                            <button  class="btn btn-sm btn-outline-info mb-3" onclick="Livewire.dispatch('openModal', { component: 'admin.finance.add-income' })"><i class="feather icon-plus"></i> Add Income</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="report-table" class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" wire:click="sortBy('incomes.id')" style="cursor: pointer;">#
                                        @include('partials._sort-icon',['field'=>'incomes.id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('incomes.invoice_id')" style="cursor: pointer;">Invoice No.
                                        @include('partials._sort-icon',['field'=>'incomes.invoice_id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('incomes.received_from')" style="cursor: pointer;">Client
                                        @include('partials._sort-icon',['field'=>'incomes.received_from'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('incomes.reason')" style="cursor: pointer;">Reason
                                        @include('partials._sort-icon',['field'=>'incomes.reason'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('incomes.initial_deposit')" style="cursor: pointer;">Deposit
                                        @include('partials._sort-icon',['field'=>'incomes.initial_deposit'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('incomes.actual_amount')" style="cursor: pointer;">Amount
                                        @include('partials._sort-icon',['field'=>'incomes.actual_amount'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('incomes.actual_amount')" style="cursor: pointer;">Balance
                                        @include('partials._sort-icon',['field'=>'incomes.actual_amount'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('incomes.income_status')" style="cursor: pointer;">Status
                                        @include('partials._sort-icon',['field'=>'incomes.income_status'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('incomes.entered_by')" style="cursor: pointer;">Received By
                                        @include('partials._sort-icon',['field'=>'incomes.entered_by'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('incomes.created_at')" style="cursor: pointer;">Date
                                        @include('partials._sort-icon',['field'=>'incomes.created_at'])
                                    </th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($incomes as $i=>$income)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $income->invoice_number }}</td> 
                                    <td>{{$income->client->client_name}}</td>
                                    <td>{{$income->reason}}</td>
                                    <td>Ugx: {{ number_format($income->initial_deposit)}}</td>
                                    <td>Ugx: {{number_format($income->actual_amount)}}</td>
                                    <td>Ugx: {{ number_format($income->actual_amount - $income->initial_deposit) }}</td>
                                    <td>{{$income->income_status}}</td>
                                    <td>{{ $income->creator->name }}</td>
                                    <td>{{$income->created_at}}</td>
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
                            Showing {{$incomes->firstItem()}} to {{$incomes->lastItem()}} out of {{$incomes->total()}} items
                            </div>
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4 pull-right text-end">
                            {{$incomes->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- customar project  end -->
    </div>
</div>
