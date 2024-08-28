<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
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
                                    <th scope="col" wire:click="sortBy('quotation_requests.id')" style="cursor: pointer;">#
                                        @include('partials._sort-icon',['field'=>'clients.id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('quotation_requests.client_name')" style="cursor: pointer;">Name
                                        @include('partials._sort-icon',['field'=>'clients.client_name'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('quotation_requests.company')" style="cursor: pointer;">Company
                                        @include('partials._sort-icon',['field'=>'quotation_requests.company'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('quotation_requests.package_id')" style="cursor: pointer;">Package
                                        @include('partials._sort-icon',['field'=>'quotation_requests.package_id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('quotation_requests.client_email')" style="cursor: pointer;">Email
                                        @include('partials._sort-icon',['field'=>'quotation_requests.client_email'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('quotation_requests.client_contact')" style="cursor: pointer;">Contact
                                        @include('partials._sort-icon',['field'=>'quotation_requests.client_contact'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('quotation_requests.client_message')" style="cursor: pointer;">Message
                                        @include('partials._sort-icon',['field'=>'quotation_requests.client_message'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('quotation_requests.status')" style="cursor: pointer;">Status
                                        @include('partials._sort-icon',['field'=>'quotation_requests.status'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('quotation_requests.created_at')" style="cursor: pointer;">Date
                                        @include('partials._sort-icon',['field'=>'quotation_requests.created_at'])
                                    </th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($requests as $i => $request)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>{{ $request->client_name }}</td>
                                        <td>{{ $request->company }}</td>
                                        <td>{{ $request->package->category }}</td>
                                        <td>{{ $request->client_email }}</td>
                                        <td>{{ $request->client_contact }}</td>
                                        <td>{{ $request->client_message }}</td>
                                        <td>{{ $request->status }}</td>
                                        <td>{{ $request->created_at }}</td>
                                        <td>
                                            <a href="#!" wire:click="changeStatus({{ $request->id }})" class="btn btn-primary btn-sm mb-2"><i class="feather icon-check-circle"></i>&nbsp;Update Status</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="row mb-2">
                            <div class="col-md-4">
                                Showing {{ $requests->firstItem() }} to {{ $requests->lastItem() }} out of {{ $requests->total() }} items
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4 pull-right text-end">
                                {{ $requests->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
