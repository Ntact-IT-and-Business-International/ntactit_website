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
                    <div class="row align-quotations-center m-l-0">
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
                           
                        <div class="col-sm-4 text-right">
                            <input type="text" wire:model.debounce.100ms="search" class="form-control form_2 mb-4"  placeholder="Search Here...">
                        </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="report-table" class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" wire:click="sortBy('quotation_forwardeds.id')" style="cursor: pointer;">#
                                        @include('partials._sort-icon',['field'=>'quotation_forwardeds.id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('quotation_forwardeds.forwarded_by')" style="cursor: pointer;">Forwarded By
                                        @include('partials._sort-icon',['field'=>'quotation_forwardeds.forwarded_by'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('quotation_forwardeds.comment')" style="cursor: pointer;">Comment
                                        @include('partials._sort-icon',['field'=>'quotation_forwardeds.comment'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('quotation_forwardeds.created_at')" style="cursor: pointer;">Date & Time
                                        @include('partials._sort-icon',['field'=>'quotation_forwardeds.created_at'])
                                    </th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($quotations as $i=>$quotation)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $quotation->creator->name }}</td>
                                    <td>{{ $quotation->comment }}</td>
                                    <td>{{ $quotation->created_at }}</td>
                                    <td>
                                        <a href="{{URL::signedRoute('Quotation Form',['client_id' => $quotation->client_id])}}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Make Quotation </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="row mb-2">
                            <div class="col-md-4">
                            Showing {{$quotations->firstItem()}} to {{$quotations->lastItem()}} out of {{$quotations->total()}} items
                            </div>
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4 pull-right text-end">
                            {{$quotations->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- customar project  end -->
    </div>
</div>
