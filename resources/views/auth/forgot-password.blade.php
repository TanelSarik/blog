@extends('partials.layout')
@section('title', 'Forgot Password')
@section('content')
    <div class="card bg-base-300">
        <div class="card-body">
            <p class="text-sm text-gray-500 mb-4">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </p>

            <!-- Session Status -->
            @if (session('status'))
                <div class="alert alert-success mb-4">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{ __('Email') }}</legend>
                    <input id="email" name="email" type="email" required autofocus
                           value="{{ old('email') }}"
                           class="input w-full @error('email') input-error @enderror"
                           placeholder="email@example.com" />
                    @error('email')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <div class="form-control mt-6">
                    <button type="submit" class="btn btn-primary w-full">
                        {{ __('Email Password Reset Link') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

