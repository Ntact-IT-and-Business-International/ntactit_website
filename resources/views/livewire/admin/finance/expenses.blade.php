<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
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
                   @livewire('admin.finance.expenses-cards')
                    <div class="row align-expenses-center m-l-0">
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
                            <button  class="btn btn-sm btn-outline-info mb-3" onclick="Livewire.dispatch('openModal', { component: 'admin.finance.add-expenses' })"><i class="feather icon-plus"></i> Add Expenses</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="report-table" class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" wire:click="sortBy('expenses.id')" style="cursor: pointer;">#
                                        @include('partials._sort-icon',['field'=>'expenses.id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('expenses.received_by')" style="cursor: pointer;">Received By.
                                        @include('partials._sort-icon',['field'=>'expenses.received_by'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('expenses.item_id')" style="cursor: pointer;">Item
                                        @include('partials._sort-icon',['field'=>'expenses.item_id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('expenses.department_id')" style="cursor: pointer;">Department
                                        @include('partials._sort-icon',['field'=>'expenses.department_id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('expenses.date_of_expense')" style="cursor: pointer;">Date
                                        @include('partials._sort-icon',['field'=>'expenses.date_of_expense'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('expenses.quantity')" style="cursor: pointer;">Quantity
                                        @include('partials._sort-icon',['field'=>'expenses.quantity'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('expenses.unit_cost')" style="cursor: pointer;">Unit Cost
                                        @include('partials._sort-icon',['field'=>'expenses.unit_cost'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('expenses.amount')" style="cursor: pointer;">Amount
                                        @include('partials._sort-icon',['field'=>'expenses.amount'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('expenses.description')" style="cursor: pointer;">Descrption
                                        @include('partials._sort-icon',['field'=>'expenses.description'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('expenses.expense_status')" style="cursor: pointer;">Status
                                        @include('partials._sort-icon',['field'=>'expenses.expense_status'])
                                    </th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expenses as $i=>$expense)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $expense->creator->name }}</td> 
                                    <td>{{$expense->item->item}}</td>
                                    <td>{{$expense->department->department}}</td>
                                    <td>{{$expense->date_of_expense}}</td>
                                    <td>{{$expense->quantity}}</td>
                                    <td>Ugx: {{number_format($expense->unit_cost)}}</td>
                                    <td>Ugx: {{number_format($expense->quantity * $expense->unit_cost)}}</td>
                                    <td>{{$expense->description}}</td>
                                    <td class="capitalize demo-inline-spacing"><span class="badge badge-outline-success">{{$expense->expense_status}}<span></span></td>
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
                            Showing {{$expenses->firstItem()}} to {{$expenses->lastItem()}} out of {{$expenses->total()}} Items
                            </div>
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4 pull-right text-end">
                            {{$expenses->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- customar project  end -->
    </div>
</div>
