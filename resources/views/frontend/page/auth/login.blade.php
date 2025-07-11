{{-- <x-guest-layout>

    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center mb-4">
        Welcome back admin
    </h2>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('admin.login.store') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('admin.password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('admin.password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('frontend.layout.auth-page-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
@section('content')
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('login.store') }}">
            @csrf
            <h2>Login</h2>
            <div class="input-field">
                <input type="text" name="email" value="{{ old('email') }}" required />
                <label>Enter email</label>
            </div>
            <span class="text-danger">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </span>
            <div class="input-field">
                <input type="password" name="password" value="{{ old('password') }}" required />
                <label>Enter password</label>
            </div>
            <span class="text-danger">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </span>
            <div class="forget">
                <label for="remember_me">
                    <input type="checkbox" id="remember_me" />
                    <p>{{ __('Remember me') }}</p>
                </label>
                <a href="{{ route('password.request') }}">Forgot password?</a>
            </div>
            <button type="submit">{{ __('Log in') }}</button>
            <div class="Create-account">
                <p>Don't have an account? <a href="{{ route('register') }}">Create account</a></p>
            </div>
        </form>
@endsection
