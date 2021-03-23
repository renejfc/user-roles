@php
    $user = Auth::user();
@endphp

<nav {{ $attributes }}>
    @guest
        <x-link route="login">login</x-link>
        <x-link route="register">register</x-link>
    @endguest
    @auth
        <p>{{ $user->name }}</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">logout</button>
        </form>
    @endauth
</nav>