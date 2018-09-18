@extends('boyarcaviar::layouts.frontend')

@section('content')
<div class="d-flex flex-row bd-glow-more pt-4 pb-4 p-2">
    <div class="container frame-two">
        <div class="card text-white" style="background-color: black;">
        <div class="card-header text-center">{{ __('Verify Your Email Address') }}</div>
            <div class="card-body">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif
                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
            </div>
        </div>
    </div>
</div>
@endsection
