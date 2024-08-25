<div>
    {{-- Do your work, then step back. --}}
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
                    <div class="row align-finance_forms$finance_forms-center m-l-0">
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
                            <button  class="btn btn-sm btn-outline-info mb-3" onclick="Livewire.dispatch('openModal', { component: 'admin.finance.add-finance-form' })"><i class="feather icon-upload"></i> Upload Finance Form</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="report-table" class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" wire:click="sortBy('finance_forms.id')" style="cursor: pointer;">#
                                        @include('partials._sort-icon',['field'=>'finance_forms.id'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('finance_forms.name_of_form')" style="cursor: pointer;">Name
                                        @include('partials._sort-icon',['field'=>'finance_forms.name_of_form'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('finance_forms.form')" style="cursor: pointer;">Form
                                        @include('partials._sort-icon',['field'=>'finance_forms.form'])
                                    </th>
                                    <th scope="col" wire:click="sortBy('finance_forms.created_by')" style="cursor: pointer;">Uploaded By
                                        @include('partials._sort-icon',['field'=>'finance_forms.created_by'])
                                    </th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($finances_forms as $i=>$form)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $form->name_of_form }}</td>
                                    <td><a href="{{ asset('storage/FinanceForms/forms/'.$form->form)}}" download style="color:red;"><i class="feather icon-download"></i> Download</a> | <a href="{{ asset('storage/HrForms/forms/'.$form->form)}}" target="_blank" style="color:blue;"><i class="fas fa-hand-point-right"></i> View</a></td>
                                    <td>{{ $form->creator->name }}</td>
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
                            Showing {{$finances_forms->firstItem()}} to {{$finances_forms->lastItem()}} out of {{$finances_forms->total()}} items
                            </div>
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4 pull-right text-end">
                            {{$finances_forms->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- customar project  end -->
    </div>
</div>
