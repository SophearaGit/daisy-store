{{-- <x-guest-layout>

    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center mb-4">
        Admin Reset Password
    </h2>

    <form method="POST" action="{{ route('admin.password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
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
                <h4 class="login-title">Reset Password</h4>
                <p class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Enter your email and new password below to reset your password.') }}
                </p>
                <form method="POST" action="{{ route('admin.password.store') }}">
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="login-input-group">
                        <input class="login-input" placeholder="Email" type="email" name="email"
                            value="{{ old('email', $request->email) }}" required autofocus>
                        <span class="text-danger">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </span>
                    </div>

                    <div class="login-input-group mt-4">
                        <input class="login-input" placeholder="Password" type="password" name="password" required
                            autocomplete="new-password">
                        <span class="text-danger">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </span>
                    </div>

                    <div class="login-input-group mt-4">
                        <input class="login-input" placeholder="Confirm Password" type="password"
                            name="password_confirmation" required autocomplete="new-password">
                        <span class="text-danger">
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </span>
                    </div>

                    <div class="login-btn-group mt-4">
                        <button class="login-btn" type="submit">
                            {{ __('Reset Password') }}
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
