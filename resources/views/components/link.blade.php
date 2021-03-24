@props(['route'])

<a href="{{ route($route) }}">
    {{ $slot }}
</a>
