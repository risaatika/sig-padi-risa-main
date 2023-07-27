<header
    class="z-50 flex flex-wrap w-full py-3 text-sm border-b border-gray-700 sm:justify-start sm:flex-nowrap sm:py-0 bg-slate-900">
    <nav class="relative w-full px-4 mx-auto max-w-7xl sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8"
        aria-label="Global">
        <div class="flex items-center justify-between">
            <a class="flex-none text-xl font-semibold text-white" href="{{ route('home') }}"
                aria-label="SIG Padi Aceh Utara">SIG Padi Aceh Utara</a>
            <div class="sm:hidden">
                <button type="button"
                    class="inline-flex items-center justify-center gap-2 p-2 text-sm font-medium text-gray-400 align-middle transition-all border border-gray-700 rounded-md shadow-sm hs-collapse-toggle focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 bg-slate-900 hover:bg-slate-800 hover:text-white focus:ring-offset-gray-800"
                    data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation"
                    aria-label="Toggle navigation">
                    <svg class="w-4 h-4 hs-collapse-open:hidden" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                    <svg class="hidden w-4 h-4 hs-collapse-open:block" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </button>
            </div>
        </div>
        <div id="navbar-collapse-with-animation"
            class="hidden overflow-hidden transition-all duration-300 hs-collapse basis-full grow sm:block">
            <nav
                class="flex flex-col mt-5 gap-y-4 gap-x-0 sm:flex-row sm:items-center sm:justify-end sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:pl-7">
                <x-nav-link route="home">
                    {{ __('nav.home') }}
                </x-nav-link>
                <x-nav-link route="harvest-data.*">
                    {{ __('nav.data') }}
                </x-nav-link>
                <x-nav-link route="subdistricts.*">
                    {{ __('nav.subdistrict') }}
                </x-nav-link>
                <x-nav-link route="result">
                    {{ __('nav.result') }}
                </x-nav-link>
                {{-- <a @class([
                    'font-medium',
                    'text-blue-500 sm:py-6 hover:text-blue-400' => request()->routeIs($route),
                    'sm:py-6 text-gray-400 hover:text-gray-500' => !request()->routeIs($route),
                ])
                    href="{{ route(str_replace('*', 'index', $route), isset($parameters) ? $parameters : []) }}"
                    @if (request()->routeIs($route))
                    aria-current="page"
                    @endif>
                    {{ $slot }}
                </a> --}}
                <div
                    class="hs-dropdown [--placement:top-right] [--strategy:static] sm:[--strategy:fixed] [--adaptive:none] sm:py-4">
                    <button type="button"
                        class="flex items-center w-full font-medium text-gray-400 hover:text-gray-500 ">
                        Map
                        <svg class="ml-2 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </button>

                    <div
                        class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-[401] sm:shadow-md rounded-lg p-2 bg-gray-800 sm:border border-gray-700 divide-gray-700 before:absolute top-full before:-top-5 before:left-0 before:w-full before:h-5">
                        <a class="flex flex-grow text-center items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-400 focus:ring-2 focus:ring-blue-500text-gray-400 hover:bg-gray-700 hover:text-gray-300"
                            href="{{ route('map', ['year' => 2018]) }}">
                            2018
                        </a>
                        <a class="flex flex-grow text-center items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-400 focus:ring-2 focus:ring-blue-500text-gray-400 hover:bg-gray-700 hover:text-gray-300"
                            href="{{ route('map', ['year' => 2019]) }}">
                            2019
                        </a>
                        <a class="flex flex-grow text-center items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-400 focus:ring-2 focus:ring-blue-500text-gray-400 hover:bg-gray-700 hover:text-gray-300"
                            href="{{ route('map', ['year' => 2020]) }}">
                            2020
                        </a>
                        <a class="flex flex-grow text-center items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-400 focus:ring-2 focus:ring-blue-500text-gray-400 hover:bg-gray-700 hover:text-gray-300"
                            href="{{ route('map', ['year' => 2021]) }}">
                            2021
                        </a>
                        <a class="flex flex-grow text-center items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-400 focus:ring-2 focus:ring-blue-500text-gray-400 hover:bg-gray-700 hover:text-gray-300"
                            href="{{ route('map', ['year' => 2022]) }}">
                            2022
                        </a>
                    </div>
                </div>

                @auth
                    <div
                        class="hs-dropdown [--placement:top-right] [--strategy:static] sm:[--strategy:fixed] [--adaptive:none] sm:py-4">
                        <button type="button"
                            class="flex items-center w-full font-medium text-gray-400 hover:text-gray-500 ">
                            {{ Auth::user()->name }}
                            <svg class="ml-2 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                            </svg>
                        </button>

                        <div
                            class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-[401] sm:shadow-md rounded-lg p-2 bg-gray-800 sm:border border-gray-700 divide-gray-700 before:absolute top-full before:-top-5 before:left-0 before:w-full before:h-5">
                            {{-- <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm focus:ring-2 focus:ring-blue-500 text-gray-400 hover:bg-gray-700 hover:text-gray-300"
                                href="#">
                                {{ __('Profile') }}
                            </a> --}}

                            {{-- <div class="my-1 border-t border-gray-600"></div> --}}

                            <form method="POST" action="{{ route('logout') }}" class="flex" x-data>
                                @csrf
                                <a class="flex flex-grow items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-400 focus:ring-2 focus:ring-blue-500text-gray-400 hover:bg-gray-700 hover:text-gray-300"
                                    href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('nav.logout') }}
                                </a>
                            </form>

                        </div>
                    </div>
                @endauth
                @guest
                    <a class="flex items-center font-medium text-gray-400 border-gray-700 gap-x-2 sm:border-l sm:border-gray-300 sm:my-6 sm:pl-6 hover:text-blue-500"
                        href="{{ route('login') }}">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        </svg>
                        {{ __('nav.login') }}
                    </a>
                @endguest
            </nav>
        </div>
    </nav>
</header>
