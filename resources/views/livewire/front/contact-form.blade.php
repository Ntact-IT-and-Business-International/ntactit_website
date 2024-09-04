<div>
    {{-- In work, do what you enjoy. --}}
    <section class="w3l-contact-info-main py-5" id="contact">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center mb-5">
                <div class="col-md-6 section-heading">
                    <h5 class="small-title-2">Write Message</h5>
                    <h3 class="title-style-2">Get in Touch</h3>
                </div>
                <div class="col-md-6 section-heading mt-md-0 mt-2">
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit accusantium doloremque,
                        eaque ipsa quae ab illo inventore.Sed ut perspiciatis unde omnis iste natus error sit.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-address p-4">
                        <div class="contact-icon d-flex align-items-center">
                            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                            <div class="ml-3">
                                <h5 class="contact-text">Visit Us:</h5>
                                <p>5th Avenue, London</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="contact-address p-4">
                        <div class="contact-icon d-flex align-items-center">
                            <i class="fas fa-phone-alt" aria-hidden="true"></i>
                            <div class="ml-3">
                                <h5 class="contact-text">Call Us:</h5>
                                <a href="tel:+12 23456790">+12 23456790</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="contact-address p-4">
                        <div class="contact-icon d-flex align-items-center">
                            <i class="fas fa-envelope-open-text" aria-hidden="true"></i>
                            <div class="ml-3">
                                <h5 class="contact-text">Mail Us:</h5>
                                <a href="mailto:info@example.com"> info@example.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-w3pvt-form mt-5 pt-lg-4">
            @if (session('msg'))
                <div class="mb-4 font-medium text-sm text-green-600 msg-bg-success">
                    {{ session('msg') }}
                </div>
            @endif
                <form wire:submit.prevent="sendMessage" class="w3layouts-contact-fm">
                    <div class="row main-cont-sec">
                        <div class="col-md-6 left-cont-contact">
                            <div class="form-group mb-3">
                                <label for="w3lName">Your Name</label>
                                <input class="form-control" type="text" wire:model="contact_name" id="w3lName" placeholder="Full Names">
                                @error('contact_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="w3lSender">Your Email</label>
                                <input class="form-control" type="email" wire:model="contact_email" id="3lSender" placeholder="Email">
                                @error('contact_email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="w3lSubject">Subject</label>
                                <select class="form-control" type="text" wire:model="subject" id="w3">
                                    <option>Select Subject</option>
                                    <option value="web design">Web Design</option>
                                    <option value="app development">Aplication Development</option>
                                    <option value="bulk sms">Bulk SMS</option>
                                    <option value="others">Others</option>
                                </select>
                                @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="w3lSubject">Phone Number</label>
                                <input class="form-control" type="text" wire:model="phone_number" id="w3">
                                @error('phone_number') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6 right-cont-contact">
                            <div class="form-group">
                                <label for="w3lSubject">Write Message</label>
                                <textarea class="form-control" wire:model="message" id="w3lMessage" placeholder=""></textarea>
                                @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    {{--<div class="form-group-2 mt-3 text-right">
                        <button type="submit" class="btn btn-style">
                            <span wire:loading wire:target="sendMessage"><i class="fa fa-spinner fa-spin"></i> </span>
                            <span wire:loading.remove wire:target="sendMessage">Submit</span>
                        </button>--}}
                        <button class="g-recaptcha" 
                            data-sitekey="6LfwiDYqAAAAAOm9_jpgdbWk5FYXOBD_4duQt9Fw" 
                            data-callback='onSubmit' 
                            data-action='submit'>Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
    function onSubmit(token) {
        document.getElementById("demo-form").submit();
    }
    </script>
</div>
