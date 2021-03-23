<x-app-layout>
    <x-auth-card>
        <!-- Session Status -->
        <x-auth-session-status class="" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <div>
                <x-label for="name" :value="__('Name')" />
                <x-input id="name" class="" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" class="" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="">
                <label for="remember_me" class="">
                    <input id="remember_me" type="checkbox" class="rounded" name="remember">
                    <span class="">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="">
                @if (Route::has('password.request'))
                    <a class="" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <x-button class="">{{ __('Log in') }}</x-button>
            </div>
        </form>
    </x-auth-card>
</x-app-layout>
