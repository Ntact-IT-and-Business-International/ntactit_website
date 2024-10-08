<div>
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
                            <input type="text" wire:model.debounce.100ms="search" class="form-control form_2" placeholder="Search Here...">
                        </div>
                        <div class="col-sm-4 text-right">
                            <button class="btn btn-sm btn-outline-info" onclick="Livewire.dispatch('openModal', { component: 'admin.client.add-client' })"><i class="feather icon-plus"></i> Add Client</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="report-table" class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" wire:click="sortBy('clients.id')" style="cursor: pointer;">#
                                        @include('partials._sort-icon',['field'=>'clients.id'])
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
                                    <th scope="col" wire:click="sortBy('clients.email')" style="cursor: pointer;">Email
                                        @include('partials._sort-icon',['field'=>'clients.email'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('clients.address')" style="cursor: pointer;">Address
                                        @include('partials._sort-icon',['field'=>'clients.address'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('clients.contact')" style="cursor: pointer;">Contact
                                        @include('partials._sort-icon',['field'=>'clients.contact'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('clients.business_status')" style="cursor: pointer;">Status
                                        @include('partials._sort-icon',['field'=>'clients.business_status'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('clients.registered_by')" style="cursor: pointer;">Registered By
                                        @include('partials._sort-icon',['field'=>'clients.registered_by'])
                                    </th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $i => $client)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>{{ $client->client_name }}</td>
                                        <td>{{ $client->company }}</td>
                                        <td>{{ $client->customer_number }}</td>
                                        <td>{{ $client->email }}</td>
                                        <td>{{ $client->address }}</td>
                                        <td>{{ $client->contact }}</td>
                                        <td>{{ $client->business_status }}</td>
                                        <td>{{ $client->creator->name }}</td>
                                        <td>
                                            <a href="#!" class="btn btn-info btn-sm mb-2"><i class="feather icon-edit"></i>&nbsp;Edit</a>
                                            <a href="{{URL::signedRoute('Quotation Form',['client_id' => $client->id])}}" class="btn btn-warning btn-sm mb-2"><i class="feather icon-trash-2"></i>&nbsp;Quotation</a><br>
                                            <a href="{{URL::signedRoute('Invoice Form',['client_id' => $client->id])}}" class="btn btn-success btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Invoice</a>
                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete</a>
                                            <a href="/businessdevelopment/forward-quotation/{{$client->id}}" class="btn btn-default btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Forward</a>
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
