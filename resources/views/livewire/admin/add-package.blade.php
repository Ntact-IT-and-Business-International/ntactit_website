<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="addService">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="floating-label" for="Name">Name of Service</label>
                            <select class="form-control" wire:model="service" id="NameOfService">
                                <option value="">Select Service</option>
                                @foreach($services as $service)
                                <option value="{{$service->id}}">{{$service->name_of_service}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group fill">
                            <label class="floating-label" for="Email">Category</label>
                            <input type="text" wire:model="category" class="form-control" id="Category" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group fill">
                            <label class="floating-label" for="Password">Size Or Quantity</label>
                            <input type="text" class="form-control" wire:model="quantity" id="Quantity" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="floating-label" for="Phone">Amount</label>
                            <input type="text" class="form-control" wire:model="amount" id="Amount" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="floating-label" for="Address">Description</label>
                            <textarea class="form-control" wire:model="description" id="Description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary">
                            <span wire:loading wire:target="addService"><i class="fa fa-spinner fa-spin"></i> </span>
                            <span wire:loading.remove wire:target="addService">Submit</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
