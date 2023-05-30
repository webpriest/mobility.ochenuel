<div class="form-column col-md-12 col-sm-12">
    <div class="inner-column">
        <div class="contact-form">
            <div class="sec-title">
                <h2>Please fill the form below</h2>
            </div>

            @if(session()->has('success'))
                <p class="alert alert-success"><i class="icofont-check-circled"></i> You have been successfully registered.</p>
            @else
            <form wire:submit.prevent="store">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-8 col-sm-12 form-group">
                        <label for="sc_event_id">SUMCOURSE Edition</label>
                        <select wire:model.defer="sc_event_id" id="sc_event_id" required>
                            <option value="">Choose SUMCOURSE</option>
                            @if($sumcourses)
                                @foreach ($sumcourses as $sumcourse)
                                    <option value="{{ $sumcourse->id }}">{{ $sumcourse->theme }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                        <label for="title">Title (e.g Mr.)</label>
                        <input type="text" wire:model.defer="title" id="title" placeholder="Title" required>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                        <label for="title">First name</label>
                        <input type="text" wire:model.defer="firstname" id="firstname" placeholder="First name">
                        @error('firstname')
                            <small class="error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                        <label for="title">Middle name</label>
                        <input type="text" wire:model.defer="middlename" id="middlename" placeholder="Middle name">
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                        <label for="title">Last name</label>
                        <input type="text" wire:model.defer="lastname" id="lastname" placeholder="Last name" required>
                        @error('lastname')
                            <small class="error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-lg-7 col-md-7 col-sm-12 form-group">
                        <label for="title">E-mail</label>
                        <input type="email" wire:model.defer="email" id="email" placeholder="Email" required>
                        @error('email')
                            <small class="error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-12 form-group">
                        <label for="phone">Phone</label>
                        <input type="text" wire:model.defer="phone" id="phone" placeholder="Phone" maxlength="15" required>
                        @error('phone')
                            <small class="error">{{ $message }}</small>
                        @enderror
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <label for="address">Address</label>
                        <input type="text" wire:model.defer="address" id="address" placeholder="Your address" required>
                        @error('address')
                            <small class="error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                        <label for="city">City</label>
                        <input type="text" wire:model.defer="city" id="city" placeholder="City" required>
                        @error('city')
                            <small class="error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                        <label for="country_id">Country</label>
                        <select wire:model.defer="country_id" id="country_id" required>
                            <option value="">Select Country</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->country }}</option>
                            @endforeach
                        </select>
                        @error('country_id')
                            <small class="error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <label for="organisation">Organisation</label>
                        <input type="text" wire:model.defer="organisation" id="organisation" placeholder="Organisation" required>
                        @error('organisation')
                            <small class="error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <button class="theme-btn btn-style-one" type="submit"><span class="btn-title">Register</span></button>
                    </div>
                </div>
            </form>
            @endif
        </div>
    </div>
</div>