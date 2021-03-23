<x-app-layout>
    <x-auth-card>
        <div class="">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" class="" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="">
                <x-button>{{ __('Confirm') }}</x-button>
            </div>
        </form>
    </x-auth-card>
</x-app-layout>
