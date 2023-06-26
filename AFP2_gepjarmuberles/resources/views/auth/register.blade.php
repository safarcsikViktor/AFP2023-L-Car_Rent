@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 col-lg-5 mx-auto">
        <div class="card">
            <div class="card-body">
                <h4 class="display-4 mb-4">{{ __('Regisztráció') }}</h4>
                <form action="{{ route('auth.register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="mb-2" for="email_address">{{ __('Email cím') }}</label>
                        <input class="form-control {{ $errors->has('email_address') ? ' is-invalid' : '' }}"
                        type="text" name="email_address" value="{{ old('email_address') }}">
                        @if ($errors->has('email_address'))
                            <p class="invalid-feedback">{{ $errors->first('email_address') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="mb-2" for="user_name">{{ __('Felhasználónév') }}</label>
                        <input class="form-control {{ $errors->has('user_name') ? ' is-invalid' : '' }}"
                        type="text" name="user_name" value="{{ old('user_name') }}">
                        @if ($errors->has('user_name'))
                            <p class="invalid-feedback">{{ $errors->first('user_name') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="mb-2" for="pwd">{{ __('Jelszó') }}</label>
                        <input class="form-control {{ $errors->has('pwd') ? ' is-invalid' : '' }}"
                        type="password" name="pwd" value="{{ old('pwd') }}">
                        @if ($errors->has('pwd'))
                            <p class="invalid-feedback">{{ $errors->first('pwd') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="mb-2" for="password_confirmation">{{ __('Jelszó ismét') }}</label>
                        <input class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                        type="password" name="password_confirmation" value="{{ old('password_confirmation') }}">
                        @if ($errors->has('password_confirmation'))
                            <p class="invalid-feedback">{{ $errors->first('password_confirmation') }}</p>
                        @endif
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg">{{ __('Sign up') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
