@extends('frontend.layouts.app')
@section('content')
    {{-- <div class="hero overlay">
        <div class="img-bg rellax">
            <img src="images/hero_2.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-lg-6 mx-auto text-center">
                    <h1 class="heading" data-aos="fade-up">Contact</h1>
                    <p data-aos="fade-up">A small river named Duden flows by their place and supplies it with the necessary
                        regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                    </p>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="section">
        <div class="container">
            <div class="row justify-content-center mb-5 mt-2">
                <div class="col-md-12">
                    <div class="text-center">
                        <img src="{{ asset('assets/images/carousel/banner_1.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="0">

                    <h2 class="heading mb-5">Hubungi Kami</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-info">
                        <div class="open-hours mt-4">
                            <i class="icon-phone"></i>
                            <h4 class="mb-2">No Telepon:</h4>
                            <p>
                                {{ $contact->no_telepon }}
                            </p>
                        </div>
                        <div class="email mt-4">
                            <i class="icon-envelope"></i>
                            <h4 class="mb-2">Email:</h4>
                            <p>{{ $contact->email }}</p>
                        </div>
                        <div class="phone mt-4">
                            <i class="icon-whatsapp"></i>
                            <h4 class="mb-2">Whatsapp:</h4>
                            <p>{{ $contact->whatsapp }}</p>
                        </div>
                        <div class="phone mt-4">
                            <i class="icon-instagram"></i>
                            <h4 class="mb-2">Instagram:</h4>
                            <p>{{ $contact->instagram }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-info">
                        <div class="address mt-4">
                            <i class="icon-room"></i>
                            <h4 class="mb-2">Alamat:</h4>
                            <p>{{ $contact->alamat }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
