<nav x-data="{ open: false }" class="">
    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
        {{ __('home') }}
    </x-nav-link>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">{{ __('Log out') }}</button>
    </form>
</nav>