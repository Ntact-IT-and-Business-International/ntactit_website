<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    
    <section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card shopping-cart" style="border-radius: 15px;">
          <div class="card-body">

            <div class="row">
              <div class="col-lg-6 px-5 py-4">

                <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Item(S) Selected</h3>

                <div class="d-flex align-items-center mb-5">
                  <div class="flex-grow-1 ms-3">
                   @foreach (session('cart') as $item)
                    <h5 class="text-primary">{{ $item['package']->category }} (x{{ $item['quantity'] }})</h5>
                    <h6 style="color: #9e9e9e;">UGX {{ number_format($item['amount'] * $item['quantity']) }}</h6>
                    <div class="d-flex align-items-center">
                      <p class="fw-bold mb-0 me-5 pe-3"></p>
                      <div class="def-number-input number-input safari_only">
                            <button data-mdb-button-init onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                class="minus" wire:click="updateQuantity({{ $item['package']->id }}, {{ $item['quantity'] - 1 }})"></button>
                            <input class="quantity fw-bold bg-body-tertiary text-body" min="0" name="quantity" value="{{ $item['quantity'] }}"
                                type="number" wire:change="updateQuantity({{ $item['package']->id }}, $event.target.value)">
                            <button data-mdb-button-init onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                class="plus" wire:click="updateQuantity({{ $item['package']->id }}, {{ $item['quantity'] + 1 }})"></button>
                        </div>
                    </div>
                    @endforeach
                  </div>
                </div>

                <hr class="mb-4" style="height: 2px; background-color: #1266f1; opacity: 1;">

                <div class="d-flex justify-content-between px-x">
                  <p class="fw-bold">Discount:</p>
                  <p class="fw-bold">95$</p>
                </div>
                <div class="d-flex justify-content-between p-2 mb-2 bg-primary">
                  <h5 class="fw-bold mb-0">Total:</h5>
                  <h5 class="fw-bold mb-0">UGX {{ number_format(getTotalAmount()) }}</h5>
                </div>

              </div>
              <div class="col-lg-6 px-5 py-4">

                <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Personal Info</h3>

                <form wire:submit.prevent="placeOrder"> 

                  <div data-mdb-input-init class="form-outline mb-5">
                    <input type="text" id="Contact" class="form-control form-control-lg"
                      placeholder="256XXXXXXXXX" wire:model="contact" minlength="10" maxlength="10" />
                    <label class="form-label" for="typeText">Phone Number</label>
                    @error('contact') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>

                  <div data-mdb-input-init class="form-outline mb-5">
                    <input type="text" id="OrderName"  wire:model="order_name" class="form-control form-control-lg"
                      Placeholder="John Smith" />
                    <label class="form-label" for="typeName">Your Name Or Company Name</label>
                    @error('order_name') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-5">
                      <div data-mdb-input-init class="form-outline">
                        <input type="email" id="typeExp" wire:model="order_email" class="form-control form-control-lg" placeholder="email"
                          id="email" />
                        <label class="form-label" for="typeExp">Email</label>
                        @error('order_email') <span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                    </div>
                    <div class="col-md-6 mb-5">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="typeText" wire:model="order_location" class="form-control form-control-lg"
                          placeholder="Location"/>
                        <label class="form-label" for="typeText">Location</label>
                        @error('order_location') <span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                    </div>
                  </div>

                  <button  type="submit" class="btn btn-primary btn-block btn-lg">
                    <span wire:loading wire:target="placeOrder"><i class="fa fa-spinner fa-spin"></i> </span>
                    <span wire:loading.remove wire:target="placeOrder">Place Order Now</span>
                   </button>

                </form>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
