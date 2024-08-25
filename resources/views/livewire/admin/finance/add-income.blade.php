<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="addIncome">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group fill">
                            <label class="floating-label" for="Name"><span class="text-danger">*</span> Client</label>
                            <select class="form-control" wire:model="received_from">
                                <option>Choose Client</option>
                                @foreach($clients as $client)
                                 <option value="{{$client->client_id}}">{{$client->client->client_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('received_from') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group fill">
                            <label class="floating-label" for="InitialDeposit"> Initial Deposit</label>
                            <input type="number" class="form-control" wire:model="initial_deposit" id="initial_deposit" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group fill">
                            <label class="floating-label" for="ActualAmount"><span class="text-danger">*</span> Actual Amount</label>
                            <input type="number" class="form-control" wire:model="actual_amount" id="actual_amount" placeholder="">
                        </div>
                        @error('actual_amount') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group fill">
                            <label class="floating-label" for="Reason"><span class="text-danger">*</span> Reason</label>
                            <textarea type="text" class="form-control" wire:model="reason" id="reason" rows="3" placeholder=""></textarea>
                        </div>
                        @error('reason') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group fill">
                            <label class="floating-label" for="Status"> <span class="text-danger">*</span> Income Status</label>
                            <select class="form-control" wire:model="income_status">
                                <option>Choose Status</option>
                                <option value="cleared">Cleared</option>
                                <option value="pending">Pending Balance</option>
                            </select>
                        </div>
                        @error('income_status') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-sm btn-primary">
                        <span wire:loading wire:target="addIncome"><i class="fa fa-spinner fa-spin"></i> Wait...it is submitting Now</span>
                        <span wire:loading.remove wire:target="addIncome">Submit</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
