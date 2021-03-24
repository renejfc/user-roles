@php
    $user = Auth::user();
    $route = Route::currentRouteName();
@endphp

<nav {{ $attributes }}>
    @guest
        @switch($route)
            @case('register')
            <x-link route="home">go back</x-link>
            <x-link route="login">login</x-link>
                @break
            @case('login')
            <x-link route="register">register</x-link>
            <x-link route="home">go back</x-link>
                @break
            @default
            <x-link route="register">register</x-link>
            <x-link route="login">login</x-link>
        @endswitch
    @endguest
    @auth
        <p>{{ $user->name }}</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">logout</button>
        </form>
    @endauth
</nav>