<x-app-layout>
    <x-auth-card>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />
                <x-input id="name" class="" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="">
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="">
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" class="" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-input id="password_confirmation" class="" type="password" name="password_confirmation" required />
            </div>

            <div class="">
                <a class="" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="">{{ __('Register') }}</x-button>
            </div>
        </form>
    </x-auth-card>
</x-app-layout>
