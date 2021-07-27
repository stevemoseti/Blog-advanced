@extends('layouts.log')

@section('content')
<div class="row">
                    <div class="row mx-5">
						<h2>Reset Password</h2>
					</div>
                  <div class="row">
                       @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  </div>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Email Address" class="form-control form__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" row">
                                <button type="submit" class="btn">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                        </div>
                    </form>
</div>
            <div class="row p-2">
                <p>Login here?<a href="{{ route('login') }}">Login</a></p>
			</div>

@endsection