@extends('layouts.log')

@section('content')
                    <div class="row mx-5">
						<h2 >Register</h2>
					</div>
            <div class="row">
                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                                <input id="name" type="text" placeholder="Name" class="form-control form__input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="row">
                          
                                <input id="email" type="email" placeholder="Email" class="form-control form__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="row">
                            
                                <input id="password" type="password" class="form-control form__input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="row">
                                <input id="password-confirm" type="password" class="form-control form__input" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        </div>

                        <div class="row ">
                                <button type="submit" class="btn">
                                    {{ __('Register') }}
                                </button>
                        </div>
                    </form>
            </div>
            <div class="row">
                        <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
			</div>

@endsection
