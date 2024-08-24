<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="addQuotation">
                <div class="row m-2">
                    @foreach ($items as $index => $item)
                        <div class="col-sm-12">
                            <input type="hidden" wire:model="client_id" class="form-control" value="{{$client_id}}" placeholder="">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group fill">
                                        <label class="floating-label" for="quantity"> <span class="text-danger">*</span> Quantity</label>
                                        <input type="text" wire:model="items.{{ $index }}.quantity" class="form-control" placeholder="">
                                    </div>
                                    @error("items.{$index}.quantity") <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group fill">
                                        <label class="floating-label" for="rate"><span class="text-danger">*</span> Rate</label>
                                        <input type="number" class="form-control" wire:model="items.{{ $index }}.rate" placeholder="">
                                    </div>
                                    @error("items.{$index}.rate") <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="amount"><span class="text-danger">*</span> Amount</label>
                                        <input type="number" class="form-control" wire:model="items.{{ $index }}.amount" placeholder="">
                                    </div>
                                    @error("items.{$index}.amount") <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="floating-label" for="description"><span class="text-danger">*</span> Description</label>
                                    <textarea class="form-control" wire:model="items.{{ $index }}.description" rows="2" placeholder="summarized Description"></textarea>
                                </div>
                                @error("items.{$index}.description") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    @endforeach

                    <div class="col-sm-12 text-right">
                        <button type="button" wire:click.prevent="addItem" class="btn text-danger">
                            <i class="feather icon-plus"></i> Add Another Item
                        </button>
                    </div>
                </div>
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-primary">
                        <span wire:loading wire:target="addQuotation"><i class="fa fa-spinner fa-spin"></i> Wait...it is submitting Now</span>
                        <span wire:loading.remove wire:target="addQuotation">Submit</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
