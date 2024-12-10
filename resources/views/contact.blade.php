@extends('layouts.app')

@section('content')
<div class="container contact">
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-xl-6 col-lg-8 col-md-12">
            <div class="row justify-content-center mobile">
                <div class="col-md-4 mt-5">
                    <img class="contact-img rounded" src="storage/images/model9.webp"> 
                </div>
                <div class="col-md-8 mt-5">
                    <h1>Contact Us</h1>
                    <form method="POST" action="https://formsubmit.co/admin@camswithbabes.com">
        
                        <div class="row mb-3">
                            <label for="name" class="col-md-12 col-form-label">{{ __('Name') }}</label>
        
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        
                        <div class="row mb-3">
                            <label for="email" class="col-md-12 col-form-label">{{ __('Email Address') }}</label>
        
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        
                        <div class="row mb-3">
                            <label for="email" class="col-md-12 col-form-label">{{ __('Email Address') }}</label>
        
                            <div class="col-md-12">
                                <textarea id="message" type="message" class="form-control @error('message') is-invalid @enderror" name="message" value="{{ old('message') }}" required autocomplete="message"></textarea>
        
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="">
                                    {{ __('Sumbit') }}
                                </button>
                            </div>
                        </div>
                        <hr></hr>
                        <div class="socialicon">
                            <a href="#" class=""><i class="fab fa-twitter-square" aria-hidden="true"></i>
                            </a>
                            <a href="#" class=""><i class="fab fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="#" class=""><i class="fab fa-facebook-square" aria-hidden="true"></i>
                            </a>
                        </div>
                    </form>
                    <h2>This website is operated by:</h2>
                    <p>CamsWithBabes("We"). We are a company incorporated and registered in Wyoming in United States.</p>
        
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
