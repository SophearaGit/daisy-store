@extends('backend.layout.auth-page-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
@section('content')
    <section class="login-section">
        <div class="login-card">
            <div class="login-card-body">
                {{-- <h4 class="login-title">Admin Login</h4> --}}
                <form method="POST" action="{{ route('admin.login.store') }}">
                    @csrf
                    <div class="login-input-group">
                        <input class="login-input" placeholder="Email" type="text" name="email" value="{{ old('email') }}"
                            required autofocus>
                        <span class="text-danger">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </span>
                    </div>
                    <div class="login-input-group" style="position: relative;">
                        <input class="login-input" placeholder="Password" type="password" name="password"
                            value="{{ old('password') }}" required id="password-input">
                        <button type="button" onclick="togglePasswordVisibility()" tabindex="-1"
                            style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); background: none; border: none; padding: 0; cursor: pointer;">
                            <span id="eye-icon">
                                <i class="icon material-icons md-visibility"></i>
                            </span>
                            <script>
                                function togglePasswordVisibility() {
                                    const input = document.getElementById('password-input');
                                    const icon = document.getElementById('eye-icon');
                                    if (input.type === 'password') {
                                        input.type = 'text';
                                        icon.innerHTML = `
                                        <i class="icon material-icons md-visibility_off"></i>
                                        `;
                                    } else {
                                        input.type = 'password';
                                        icon.innerHTML = `
                                        <i class="icon material-icons md-visibility"></i>
                                        `;
                                    }
                                }
                            </script>
                        </button>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="login-options">
                        @if (Route::has('admin.password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                href="{{ route('admin.password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        <label for="remember_me" class="login-remember">
                            <input id="remember_me" type="checkbox"
                                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                name="remember">
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <div class="login-btn-group">
                        <button class="login-btn" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
