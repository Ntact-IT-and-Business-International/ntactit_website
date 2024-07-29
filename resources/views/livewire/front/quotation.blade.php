<div>
    {{-- Success is as dangerous as failure. --}}
    <section class="w3l-contact-info-main py-2 btn-color1 m-1" id="contact">
        <div class="container py-md-5 py-2">
            <div class="contact-w3pvt-form mt-5 pt-lg-4">
            @if (session('msg'))
                <div class="mb-4 font-medium text-sm text-green-600 msg-bg-success">
                    {{ session('msg') }}
                </div>
            @endif
                <form wire:submit.prevent="sendMessage" class="w3layouts-contact-fm">
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
                            <div class="form-group mb-3">
                                <label for="w3lName">Your Name</label>
                                <input class="form-control" type="text" wire:model="contact_name" id="w3lName" placeholder="Full Names">
                                @error('contact_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="w3lSender">Company Or Organization</label>
                                <input class="form-control" type="email" wire:model="contact_email" id="3lSender" placeholder="Company Or Organization">
                                @error('contact_email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="w3lSubject">Email</label>
                                <input class="form-control" type="email" wire:model="contact_email" id="3lSender" placeholder="Email">
                                @error('contact_email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="w3lSubject">Phone Number</label>
                                <input class="form-control" type="text" wire:model="phone_number" id="w3">
                                @error('phone_number') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="w3lSubject">Description</label>
                                <textarea class="form-control" wire:model="message" id="w3lMessage" placeholder=""></textarea>
                                @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group-2 mb-2 text-center">
                                <button type="submit" class="btn btn-style">
                                    <span wire:loading wire:target="sendMessage"><i class="fa fa-spinner fa-spin"></i> </span>
                                    <span wire:loading.remove wire:target="sendMessage">Submit</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </section>
</div>
