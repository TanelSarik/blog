@extends('partials.layout')
@section('title', 'Email Verification')
@section('content')
    <div class="card bg-base-300">
        <div class="card-body space-y-4">

            <p class="text-sm text-gray-500">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you?') }}
                {{ __('If you didn\'t receive the email, we will gladly send you another.') }}
            </p>

            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success shadow-sm">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <div class="flex items-center justify-between">
                <!-- Resend verification -->
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">
                        {{ __('Resend Verification Email') }}
                    </button>
                </form>

                <!-- Logout -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-ghost text-sm">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>

        </div>
    </div>
@endsection

