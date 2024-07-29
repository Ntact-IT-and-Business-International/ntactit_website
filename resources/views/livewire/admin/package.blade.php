<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="row">
        <!-- customar project  start -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center m-l-0">
                        <div class="col-sm-4">
                            <div class="is-invalid">
                                <select class="select2-demo form-control">
                                    <option value="1">One</option>
                                    <option value="2" selected>Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">

                        </div>
                        <div class="col-sm-4 text-right">
                            <button  class="btn btn-sm btn-outline-info mb-3" onclick="Livewire.dispatch('openModal', { component: 'admin.add-package' })"><i class="feather icon-plus"></i> Add Service</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="report-table" class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Service</th>
                                    <th>Category</th>
                                    <th>Quantity</th>
                                    <th>Amount</th>
                                    <th width="50%">Description</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($packages as $i=>$package)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $package->services->name_of_service }}</td>
                                    <td>{{ $package->category }}</td>
                                    <td>{{ $package->quantity }}</td>
                                    <td>{{ $package->amount }}</td>
                                    <td>{{ $package->description }}</td>
                                    <td>
                                        <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                        <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- customar project  end -->
    </div>
</div>
