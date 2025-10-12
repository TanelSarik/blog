@extends('partials.layout')
@section('title', 'Reset Password')
@section('content')
    <div class="card bg-base-300">
        <div class="card-body">
            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{ __('Email') }}</legend>
                    <input type="email" name="email"
                           value="{{ old('email', $request->email) }}"
                           required autofocus autocomplete="username"
                           class="input w-full @error('email') input-error @enderror"
                           placeholder="email@example.com" />
                    @error('email')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <!-- Password -->
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{ __('Password') }}</legend>
                    <input type="password" name="password" required autocomplete="new-password"
                           class="input w-full @error('password') input-error @enderror"
                           placeholder="New Password" />
                    @error('password')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <!-- Confirm Password -->
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{ __('Confirm Password') }}</legend>
                    <input type="password" name="password_confirmation" required autocomplete="new-password"
                           class="input w-full @error('password_confirmation') input-error @enderror"
                           placeholder="Repeat New Password" />
                    @error('password_confirmation')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

