<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="row">
        <!-- customar project  start -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center m-l-0 mb-4">
                        <div class="col-sm-4">
                            <div class="is-invalid">
                                <select class="select2-demo form-control" wire:model='perPage'>
                                    <option>10</option>
                                    <option>50</option>
                                    <option>100</option>
                                    <option>200</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">

                        </div>
                        <div class="col-sm-4 text-right">
                        <input wire:model.debounce.300ms="search" class="form-control" type="text" placeholder="Search" aria-label="Search">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="report-table" class="table table-bordered table-striped mb-0">
                            <thead>
                            <tr>
                                <th scope="col" wire:click="sortBy('customer_orders.id')" style="cursor: pointer;">#
                                    @include('partials._sort-icon',['field'=>'customer_orders.id'])
                                </th>
                                <th scope="col" wire:click="sortBy('order_name')"  style="cursor: pointer;">Name
                                    @include('partials._sort-icon',['field'=>'order_name'])   
                                </th>
                                <th scope="col" wire:click="sortBy('order_email')"  style="cursor: pointer;"> Email
                                    @include('partials._sort-icon',['field'=>'order_email'])   
                                </th>
                                <th scope="col" wire:click="sortBy('category')" style="cursor: pointer;"> Category
                                    @include('partials._sort-icon',['field'=>'category'])
                                </th>
                                <th scope="col" wire:click="sortBy('quantity')" style="cursor: pointer;"> Quantity
                                    @include('partials._sort-icon',['field'=>'quantity'])
                                </th>
                                <th scope="col" wire:click="sortBy('amount')" style="cursor: pointer;"> Amount
                                    @include('partials._sort-icon',['field'=>'amount'])
                                </th>
                                <th scope="col" wire:click="sortBy('order_location')" style="cursor: pointer;"> Location
                                    @include('partials._sort-icon',['field'=>'order_location'])
                                </th>
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $i=>$order)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $order->order_name }}</td>
                                    <td>{{ $order->order_email }}</td>
                                    <td>{{ $order->category }}</td>
                                    <td>{{ $order->quantity }}</td>
                                    <td>Ugx {{ number_format($order->amount) }}</td>
                                    <td>{{ $order->order_location }}</td>
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
            <div class="row">
                <div class="col-sm-6 mb-2">
                    Showing {{$orders->firstItem()}} to {{$orders->lastItem()}} out of {{$orders->total()}} items
                </div>
                <div class="text-right col-sm-6 mb-2">
                    {{$orders->links()}}
                </div>
            </div>
        </div>
        <!-- customar project  end -->
    </div>
</div>
