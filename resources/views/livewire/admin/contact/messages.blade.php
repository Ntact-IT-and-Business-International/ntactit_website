<div>
    {{-- The best athlete wants his opponent at his best. --}}
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
                            
                        </div>
                        <div class="col-sm-4 text-right">
                        <input type="text" wire:model.debounce.300ms="search" class="form-control form_2 mb-4"  placeholder="Search Here...">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="report-table" class="table table-bordered table-striped mb-0">
                            <thead>
                            <tr>
                                <th scope="col" wire:click="sortBy('contact_messages.id')" style="cursor: pointer;">#
                                    @include('partials._sort-icon',['field'=>'contact_messages.id'])
                                </th>
                                <th scope="col" wire:click="sortBy('contact_messages.contact_name')"  style="cursor: pointer;">Service
                                    @include('partials._sort-icon',['field'=>'contact_messages.contact_name'])   
                                </th>
                                <th scope="col" wire:click="sortBy('contact_messages.contact_email')"  style="cursor: pointer;"> Email
                                    @include('partials._sort-icon',['field'=>'contact_messages.contact_email'])   
                                </th>
                                <th scope="col" wire:click="sortBy('contact_messages.subject')"  style="cursor: pointer;"> Subject
                                    @include('partials._sort-icon',['field'=>'contact_messages.subject'])   
                                </th>
                                <th scope="col" wire:click="sortBy('contact_messages.phone_number')"  style="cursor: pointer;"> Phone Number
                                    @include('partials._sort-icon',['field'=>'contact_messages.phone_number'])   
                                </th>
                                <th scope="col" wire:click="sortBy('contact_messages.message')"  style="cursor: pointer;"> Message
                                    @include('partials._sort-icon',['field'=>'contact_messages.message'])   
                                </th>
                                <th scope="col" wire:click="sortBy('contact_messages.created_at')"  style="cursor: pointer;"> Received At
                                    @include('partials._sort-icon',['field'=>'contact_messages.created_at'])   
                                </th>
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($messages as $i=>$message)
                                <tr>
                                    <td>{{$i + 1}}</td>
                                    <td>{{ $message->contact_name }}</td>
                                    <td>{{ $message->contact_email}}</td>
                                    <td>{{ $message->subject}}</td>
                                    <td>{{ $message->phone_number}}</td>
                                    <td>{{ $message->message}}</td>
                                    <td>{{ $message->created_at}}</td>
                                    <td>
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
                            Showing {{$messages->firstItem()}} to {{$messages->lastItem()}} out of {{$messages->total()}} Items
                            </div>
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4 pull-right text-end">
                            {{$messages->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- customar project  end -->
    </div>
</div>
