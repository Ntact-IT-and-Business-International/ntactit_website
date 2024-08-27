<div>
    {{-- Stop trying to control. --}}
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
                    <div class="row align-items-center m-l-0">
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
                            <button  class="btn btn-sm btn-outline-info mb-3" onclick="Livewire.dispatch('openModal', { component: 'admin.company-documents.add-document' })"><i class="feather icon-plus"></i> Add Company Document</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="report-table" class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" wire:click="sortBy('documents.id')" style="cursor: pointer;">#
                                        @include('partials._sort-icon',['field'=>'documents.id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('documents.document_name')" style="cursor: pointer;">Name of Document
                                        @include('partials._sort-icon',['field'=>'documents.document_name'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('documents.document')" style="cursor: pointer;">Document
                                        @include('partials._sort-icon',['field'=>'documents.document'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('documents.created_by')" style="cursor: pointer;">Created By
                                        @include('partials._sort-icon',['field'=>'documents.created_by'])
                                    </th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($documents as $i=>$document)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $document->document_name }}</td>
                                    <td><a href="{{ asset('storage/Documents/document/'.$document->document)}}" download style="color:red;"><i class="feather icon-download"></i> Download</a> | <a href="{{ asset('storage/Documents/document/'.$document->document)}}" target="_blank" style="color:blue;"><i class="fas fa-hand-point-right"></i> View</a></td>
                                    <td>{{ $document->creator->name }}</td>
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
                            Showing {{$documents->firstItem()}} to {{$documents->lastItem()}} out of {{$documents->total()}} items
                            </div>
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4 pull-right text-end">
                            {{$documents->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- customar project  end -->
    </div>
</div>
