{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('admin.password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email (Admin)')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('backend.layout.auth-page-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
@section('content')
    <section class="login-section">
        <div class="login-card">
            <div class="login-card-body">
                <h4 class="login-title">Forgot Your Password?</h4>
                <p class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </p>
                <!-- Session Status -->
                <span class="text-success">
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                </span>
                <form method="POST" action="{{ route('admin.password.email') }}">
                    @csrf
                    <div class="login-input-group">
                        <input class="login-input" placeholder="Email" type="email" name="email"
                            value="{{ old('email') }}" required autofocus>
                        <span class="text-danger">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </span>
                    </div>
                    <div class="login-btn-group mt-4">
                        <button class="login-btn" type="submit">
                            {{ __('Email Password Reset Link') }}
                        </button>
                    </div>
                    <div class="mt-4 text-center">
                        <a href="{{ route('admin.login') }}"
                            class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                            {{ __('Back to login') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
