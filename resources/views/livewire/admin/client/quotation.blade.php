<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    @if (session()->has('msg'))
                        <div class="alert alert-success">
                            {{ session('msg') }}
                        </div>
                    @endif
                    <div class="row align-items-center m-l-0 mb-3">
                        <div class="col-sm-4">
                            <select class="select2-demo form-control" wire:model='perPage'>
                                <option>10</option>
                                <option>20</option>
                                <option>30</option>
                                <option>40</option>
                                <option>50</option>
                                <option>60</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                           
                        </div>
                        <div class="col-sm-4 text-right">
                           <input type="text" wire:model.debounce.100ms="search" class="form-control form_2" placeholder="Search Here...">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="report-table" class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" wire:click="sortBy('business_development_documents.id')" style="cursor: pointer;">#
                                        @include('partials._sort-icon',['field'=>'business_development_documents.id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('clients.client_name')" style="cursor: pointer;">Name
                                        @include('partials._sort-icon',['field'=>'clients.client_name'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('clients.company')" style="cursor: pointer;">Company
                                        @include('partials._sort-icon',['field'=>'clients.company'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('clients.customer_number')" style="cursor: pointer;">Customer Number
                                        @include('partials._sort-icon',['field'=>'clients.customer_number'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('clients.business_status')" style="cursor: pointer;">Status
                                        @include('partials._sort-icon',['field'=>'clients.business_status'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('business_development_documents.id')" style="cursor: pointer;">Product Summary
                                        @include('partials._sort-icon',['field'=>'business_development_documents.id'])
                                    </th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $i => $client)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>{{ $client->client->client_name }}</td>
                                        <td>{{ $client->client->company }}</td>
                                        <td>{{ $client->client->customer_number }}</td>
                                        <td>{{ $client->status }}</td>
                                        <td>
                                            @php
                                               $item_details =Modules\BusinessDevelopment\App\Models\BusinessDevelopmentDocument::where('client_id',$client->client_id)->where('status','pending')->get();
                                               $total_amount =Modules\BusinessDevelopment\App\Models\BusinessDevelopmentDocument::where('client_id',$client->client_id)->where('status','pending')->sum('amount');
                                            @endphp
                                            <table class="table table-sm table-bordered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Quantity</th>
                                                        <th>Rate</th>
                                                        <th>Amount</th>
                                                        <th>Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($item_details as $i=>$detail)
                                                        <tr>
                                                            <td>{{ $i + 1 }}</td>
                                                            <td>{{ $detail->quantity }}</td>
                                                            <td>{{ number_format($detail->rate) }}</td>
                                                            <td>{{ number_format($detail->amount) }}</td>
                                                            <td>{{ Str::limit($detail->description, 15, '...') }}</td>
                                                        </tr>
                                                    @endforeach
                                                    <tr class="font-weight-bold text-right">
                                                    <td colspan="4">SUBTOTAL</td>
                                                    <td> UGx: {{ number_format($total_amount) }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td>
                                            <a href="#!" class="btn btn-info btn-sm mb-2"><i class="feather icon-edit"></i>&nbsp;Edit</a>
                                            <a href="{{URL::signedRoute('Print Quotation',['client_id' => $detail->client_id])}}" class="btn btn-warning btn-sm mb-2"><i class="feather icon-trash-2"></i>&nbsp;Print</a><br>
                                            <a href="/businessdevelopment/change-status/{{$client->id}}" class="btn btn-success btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Status</a>
                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="row mb-2">
                            <div class="col-md-4">
                                Showing {{ $clients->firstItem() }} to {{ $clients->lastItem() }} out of {{ $clients->total() }} items
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4 pull-right text-end">
                                {{ $clients->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
