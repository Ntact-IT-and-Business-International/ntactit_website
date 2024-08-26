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
                    <div class="row align-requisitions-center m-l-0">
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
                            <button  class="btn btn-sm btn-outline-info mb-3" onclick="Livewire.dispatch('openModal', { component: 'admin.finance.add-requisition' })"><i class="feather icon-plus"></i> Make Request</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="report-table" class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" wire:click="sortBy('requisitions.id')" style="cursor: pointer;">#
                                        @include('partials._sort-icon',['field'=>'requisitions.id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('requisitions.requested_by')" style="cursor: pointer;">Name
                                        @include('partials._sort-icon',['field'=>'requisitions.requested_by'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('requisitions.item_id')" style="cursor: pointer;">Item
                                        @include('partials._sort-icon',['field'=>'requisitions.item_id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('requisitions.date')" style="cursor: pointer;">Date
                                        @include('partials._sort-icon',['field'=>'requisitions.date'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('requisitions.quantity')" style="cursor: pointer;">Qty
                                        @include('partials._sort-icon',['field'=>'requisitions.quantity'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('requisitions.unit_cost')" style="cursor: pointer;">Unit Cost
                                        @include('partials._sort-icon',['field'=>'requisitions.unit_cost'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('requisitions.amount')" style="cursor: pointer;">Amount
                                        @include('partials._sort-icon',['field'=>'requisitions.amount'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('requisitions.request_status')" style="cursor: pointer;">Status
                                        @include('partials._sort-icon',['field'=>'requisitions.request_status'])
                                    </th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($requisitions as $i=>$requisition)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $requisition->creator->name }}</td> 
                                    <td>{{$requisition->item->item}}</td>
                                    <td>{{$requisition->date}}</td>
                                    <td>{{$requisition->quantity}}</td>
                                    <td>Ugx: {{number_format($requisition->unit_cost)}}</td>
                                    <td>Ugx: {{number_format($requisition->amount)}}</td>
                                    <td class="capitalize demo-inline-spacing"><span class="badge badge-outline-success">{{$requisition->request_status}}<span></span></td>
                                    <td>
                                        <a href="/finance/edit/{{$requisition->id}}" class="btn btn-info btn-sm mb-1"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                        <a href="/finance/view-more/{{$requisition->id}}" class="btn btn-default btn-sm mb-1"><i class="feather icon-eye"></i>&nbsp;View More </a>
                                        <a href="/finance/forward/{{$requisition->id}}" class="btn btn-secondary btn-sm mb-1"><i class="feather icon-share-2"></i>&nbsp;Forward </a>
                                        <br>
                                        <a href="#!" wire:click="approveRequisition( {{ $requisition->id }})" class="btn btn-success btn-sm"><i class="feather icon-check-circle"></i>&nbsp;Approve </a>
                                        <a href="/finance/reject/{{$requisition->id}}" class="btn btn-warning btn-sm"><i class="feather icon-x-square"></i>&nbsp;Reject </a>
                                        <a href="/finance/delete/{{$requisition->id}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="row mb-2">
                            <div class="col-md-4">
                            Showing {{$requisitions->firstItem()}} to {{$requisitions->lastItem()}} out of {{$requisitions->total()}} Items
                            </div>
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4 pull-right text-end">
                            {{$requisitions->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- customar project  end -->
    </div>
</div>
