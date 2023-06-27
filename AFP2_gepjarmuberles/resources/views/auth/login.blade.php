@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 col-lg-5 mx-auto">
        <div class="card">
            <div class="card-body">
                <h4 class="display-4 mb-4">{{ __('Login') }}</h4>
                @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <form action="{{ route('auth.login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="mb-2" for="email">{{ __('Email cím') }}</label>
                        <input class="form-control" type="text" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="mb-2" for="password">{{ __('Jelszó') }}</label>
                        <input class="form-control" type="password" name="password">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="remember_me" name="remember_me">
                            <label class="form-check-label" for="remember_me">{{ __('Emlékezz rám') }}</label>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg">{{ __('Bejelentkezés') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

