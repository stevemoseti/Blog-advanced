@extends('layouts.log')
@section('content')
                    <div class="row mx-5">
						<h2>Log In</h2>
					</div>
                    
					<div class="row">
						<form method="POST" action="{{ route('login') }}" class="form-group">
                        @csrf
							<div class="row">
								<input type="email" name="email" id="email" class="form__input form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
							<div class="row">
								<input  type="password" name="password" id="password" class="form__input form-control  @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="current-password">
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="form-check ">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                            </div>
							<div class="row">
								<input type="submit" value="{{ __('Login') }}" class="btn">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
							</div>
						</form>
					</div>
					<div class="row">
                        <p>Don't have an account? <a href="{{ route('register') }}">Register Here</a></p>
					</div>

@endsection