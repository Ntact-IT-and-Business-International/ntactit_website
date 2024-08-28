<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="row">
        <!-- customar project  start -->
        <div class="col-xl-12">
            <div class="card">
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
                            <input type="text" wire:model.debounce.300ms="search" class="form-control form_2 mb-4"  placeholder="Search Here...">
                        </div>
                        <div class="col-sm-4 text-right">
                            <button  class="btn btn-sm btn-outline-info mt-3 mr-2" onclick="Livewire.dispatch('openModal', { component: 'admin.add-service' })"><i class="feather icon-plus"></i> Add Service</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="report-table" class="table table-bordered table-striped mb-0">
                            <thead>
                            <tr>
                                <th scope="col" wire:click="sortBy('services.id')" style="cursor: pointer;">#
                                    @include('partials._sort-icon',['field'=>'services.id'])
                                </th>
                                <th scope="col" wire:click="sortBy('services.name_of_service')"  style="cursor: pointer;">Service
                                    @include('partials._sort-icon',['field'=>'services.name_of_service'])   
                                </th>
                                <th scope="col" wire:click="sortBy('services.created_by')"  style="cursor: pointer;"> Created By
                                    @include('partials._sort-icon',['field'=>'services.created_by'])   
                                </th>
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $i=>$service)
                                <tr>
                                    <td>{{$i + 1}}</td>
                                    <td>{{ $service->name_of_service }}</td>
                                    <td>{{ $service->creator->name }}</td>
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
                            Showing {{$services->firstItem()}} to {{$services->lastItem()}} out of {{$services->total()}} Items
                            </div>
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4 pull-right text-end">
                            {{$services->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- customar project  end -->
    </div>
</div>
