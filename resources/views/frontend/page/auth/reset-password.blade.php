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

@extends('frontend.layout.auth-page-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
@section('content')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center mb-4">
        Reset Password
    </h2>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf
        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="input-field">
            <input type="email" id="email" name="email" value="{{ old('email') }}" required />
            <label>Enter email</label>
        </div>
        <span style="color: white;">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </span>

        <div class="input-field">
            <input type="password" id="password" name="password" value="{{ old('password') }}" required />
            <label>Enter password</label>
        </div>
        <span style="color: white;">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </span>

        <div class="input-field">
            <input type="password" id="password_confirmation" name="password_confirmation"
                value="{{ old('password_confirmation') }}" required />
            <label>Enter password confirmation</label>
        </div>
        <span style="color: white;">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </span>
        <button type="submit"> {{ __('Reset Password') }}</button>
    </form>
@endsection
