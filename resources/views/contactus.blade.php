<h2 id="list-item-6" class="skill-Heading py-4">Contact Us
    <hr class="head-line">
</h2>

<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="row contact-col p-2">
                <div class="col-1">
                    <i class="fa-solid fa-phone contact-icon"></i>
                </div>
                <div class="col-3">
                    <p for="" class="form-label px-3 contact-heading">Phone :</p>
                </div>
                <div class="col-8 contact-text">
                    +91-8340554348
                </div>
            </div>

            <div class="row contact-col p-2">
                <div class="col-1">
                    <i class="fa-solid fa-envelope contact-icon"></i>
                </div>
                <div class="col-3">
                    <p for="" class="form-label px-3 contact-heading">Email :</p>
                </div>
                <div class="col-8 contact-text">
                    manishsingh25061997@gmail.com
                </div>
            </div>

            <div class="row contact-col p-2">
                <div class="col-1">
                    <i class="fa-solid fa-location-dot contact-icon"></i>
                </div>
                <div class="col-3">
                    <p for="" class="form-label px-3 contact-heading">Address :</p>
                </div>
                <div class="col-8 contact-text">
                    Bariyatu Ranchi Jharkhand .
                </div>
            </div>
            <br>
            <div class="col-12">
                <div style="position: relative; width: 100%; padding-bottom: 54%; height: 0; overflow: hidden;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3661.8583085976065!2d85.35634547506248!3d23.393342602390724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e15999d4696f%3A0xcea13f4d38b42876!2sJoda%20Talab%20Rd%2C%20Ranchi%2C%20Jharkhand%20834009!5e0!3m2!1sen!2sin!4v1734962648552!5m2!1sen!2sin"
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
        <div class="col-6 shadow px-3 py-5">
            <form action="{{ route('sendEmail') }}" method="POST">
                @csrf
                <div class="row pb-3">
                    <div class="col">
                        <label for="" class="form-label">Your Name</label>
                        <input type="text" name="Name" value="{{ old('Name') }}"
                            class="form-control @error('Name') is-invalid @enderror" aria-label="Your name">
                        @error('Name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="" class="form-label">Your Email</label>
                        <input type="text" name="Email" value="{{ old('Email') }}"
                            class="form-control @error('Email') is-invalid @enderror" aria-label="Your Email">
                        @error('Email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Subject</label>
                    <input type="text" name="Subject" value="{{ old('Subject') }}"
                        class="form-control @error('Subject') is-invalid @enderror">
                    @error('Subject')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Message</label>
                    <textarea name="Message" value="{{ old('Message') }}" cols="30" rows="4"
                        class="form-control @error('Message') is-invalid @enderror"></textarea>
                    @error('Message')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-outline-info offset-4">Send Message</button>

            </form>
        </div>
        @include('layout.footer')
    </div>
</div>
