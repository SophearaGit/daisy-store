{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('frontend.layout.auth-page-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
@section('content')
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h2>Register</h2>
            <div class="input-field">
                <input type="text" name="name" value="{{ old('name') }}" required />
                <label>Enter name</label>
            </div>
            <span class="text-danger">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </span>

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

            <div class="input-field">
                <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" required />
                <label>Enter confirm password</label>
            </div>
            <span class="text-danger">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </span>
            <button type="submit"> {{ __('Register') }}</button>
            <div class="Create-account">
                <p>{{ __('Already registered?') }} <a href="{{ route('login') }}">Login account</a></p>
            </div>
        </form>
@endsection
