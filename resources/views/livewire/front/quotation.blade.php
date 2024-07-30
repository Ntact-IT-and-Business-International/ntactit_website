<div>
    {{-- Success is as dangerous as failure. --}}
    <section class="w3l-contact-info-main py-2 btn-color1 m-1" id="contact">
        <div class="container py-md-5 py-2">
            <div class="contact-w3pvt-form mt-5 pt-lg-4">
                <form wire:submit.prevent="addQuotationRequest" class="w3layouts-contact-fm">
                    <div class="row main-cont-sec">
                        <div class="col-md-6 left-cont-contact">
                            <h2 class="text-white">Book a Consultation</h2>
                            <p class="text-white">Schedule an appointment with us at your convenience. We shall contact you directly on the date and time of your choosing.</p>
                            <h2 class="text-white">Book a Consultation</h2>
                            <p class="text-white">Schedule an appointment with us at your convenience. We shall contact you directly on the date and time of your choosing.</p>
                            <h2 class="text-white">Book a Consultation</h2>
                            <p class="text-white">Schedule an appointment with us at your convenience. We shall contact you directly on the date and time of your choosing.</p>
                            <h2 class="text-white">Book a Consultation</h2>
                            <p class="text-white">Schedule an appointment with us at your convenience. We shall contact you directly on the date and time of your choosing.</p>
                            <h2 class="text-white">Book a Consultation</h2>
                            <p class="text-white">Schedule an appointment with us at your convenience. We shall contact you directly on the date and time of your choosing.</p>
                            <h2 class="text-white">Book a Consultation</h2>
                            <p class="text-white">Schedule an appointment with us at your convenience. We shall contact you directly on the date and time of your choosing.</p>
                            <h2 class="text-white">Book a Consultation</h2>
                            <p class="text-white">Schedule an appointment with us at your convenience. We shall contact you directly on the date and time of your choosing.</p>
                            <h2 class="text-white">Book a Consultation</h2>
                            <p class="text-white">Schedule an appointment with us at your convenience. We shall contact you directly on the date and time of your choosing.</p>
                        </div>
                        <div class="col-md-6 right-cont-contact" style="background-color:beige;">
                                <input class="form-control" type="hidden" wire:model="package_id" value="{{$quotationId}}" id="w3lName" placeholder="Full Names">
                                <div class="form-group mb-3">
                                    <label for="w3lName">Your Name</label>
                                    <input class="form-control" type="text" wire:model="client_name" id="w3lName" placeholder="Full Names">
                                    @error('client_name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="w3lSender">Company Or Organization</label>
                                    <input class="form-control" type="text" wire:model="company" id="3lSender" placeholder="Company Or Organization">
                                    @error('company') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="w3lSubject">Email</label>
                                    <input class="form-control" type="email" wire:model="client_email" id="3lSender" placeholder="Email">
                                    @error('client_email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="w3lSubject">Phone Number</label>
                                    <input class="form-control" type="text" wire:model="client_contact" id="w3">
                                    @error('client_contact') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="w3lSubject">Description</label>
                                    <textarea class="form-control" wire:model="client_message" id="w3lMessage" placeholder=""></textarea>
                                    @error('client_message') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            <div class="form-group-2 mb-2 text-center">
                                <button type="submit" class="btn btn-style">
                                    <span wire:loading wire:target="addQuotationRequest"><i class="fa fa-spinner fa-spin"></i> </span>
                                    <span wire:loading.remove wire:target="addQuotationRequest">Submit</span>
                                </button>
                            </div>
                            @if (session('msg'))
                                <div class="mt-2 font-medium text-sm text-green-600 msg-bg-success">
                                    {{ session('msg') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
