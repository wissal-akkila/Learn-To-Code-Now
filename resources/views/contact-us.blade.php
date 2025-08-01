@extends('layouts.app')
@section('title', 'Contact Us')

@section('content')

<div class="container">
    <h1 class="text-center text-info fw-bold" >   <i class="bi bi-telephone-fill"></i>    Contact Us</h1>
    <p class="text-center">Want to know more? Or need assistance? Get in touch with us now! We love hearing from you and will be happy to help</p>
</div>
        <section class="container mt-5">
            <div class="row text-center gy-5">
                <div class="col-12 col-sm-6 col-md-4">
                    <img src="{{asset('images/locai-removebg-preview.png')}}" class="img-fluid hover-image mb-3" style="max-width: 220px;">
                    <h5 class="h5-contact">Location</h5>
                    <p class="hover-text">Gaza - Palestine</p>
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <img src="{{asset('images/contat-removebg-preview.png')}}" class="img-fluid hover-image mb-3" style="max-width: 220px;">
                    <h5 class="h5-contact">Phone</h5>
                    <p class="hover-text">+972598491190</p>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mx-auto">
                    <img src="{{asset('images/email-removebg-preview.png')}}" class="img-fluid hover-image mb-3" style="max-width: 220px;">
                    <h5 class="h5-contact">Email</h5>
                    <p class="hover-text">learntocodenow@gmail.com</p>
                </div>
            </div>
        </section>

        <div class="container">
            @if(session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <!-- نموذج الاتصال -->
        <div class="container py-5">
    <form id="contact-form" action="{{ route('contact.store') }}" method="POST">
        @csrf

        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <input type="text" name="first_name"
                    class="form-control contact input-field rounded @error('first_name') is-invalid @enderror"
                    placeholder="First Name" value="{{ old('first_name') }}" required>
                @error('first_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <input type="text" name="last_name"
                    class="form-control contact input-field rounded @error('last_name') is-invalid @enderror"
                    placeholder="Last Name" value="{{ old('last_name') }}" required>
                @error('last_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <input type="email" name="email"
                    class="form-control contact input-field rounded @error('email') is-invalid @enderror"
                    placeholder="Email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <input type="tel" name="phone"
                    class="form-control contact input-field rounded @error('phone') is-invalid @enderror"
                    placeholder="Phone" value="{{ old('phone') }}">
                @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-4">
            <textarea name="message" class="form-control input-field contact rounded @error('message') is-invalid @enderror"
                rows="4" placeholder="Message" required>{{ old('message') }}</textarea>
            @error('message')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-lg px-5 btn-outline-info"> <i class="bi bi-envelope-fill"></i>   Send</button>
        </div>
    </form>
            </div>
        </div>
@endsection