@props(['route'])

<a @class([
    'font-medium',
    'text-blue-500 sm:py-6 hover:text-blue-400' => request()->routeIs($route),
    'sm:py-6 text-gray-400 hover:text-gray-500' => !request()->routeIs($route),
]) href="{{ route(str_replace('*', 'index', $route)) }}" @if (request()->routeIs($route))
    aria-current="page"
    @endif>
    {{ $slot }}
</a>
