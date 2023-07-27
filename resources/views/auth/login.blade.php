<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex items-center h-full font-sans antialiased text-gray-100 bg-slate-900">
    <div class="w-full max-w-md p-6 mx-auto">
        <main class="bg-gray-800 border border-gray-700 shadow-sm sm:mt-7 rounded-xl p-7">
            <header class="text-center">
                <h1 class="block text-2xl font-bold text-white">{{ __('auth.login') }}</h1>
                @if (session('status'))
                    <p class="mt-2 text-sm text-green-400">
                        {{ session('status') }}
                    </p>
                @endif
            </header>
            <form method="POST" action="{{ route('login') }}" class="mt-5">
                @csrf
                <div class="grid gap-y-4">
                    <div>
                        <label for="username" class="block mb-2 text-sm">
                            {{ __('auth.username') }} </label>
                        <input type="text" id="username" name="email"
                            class="w-full px-4 py-3 text-sm text-gray-400 bg-gray-800 border-gray-700 rounded-md focus:border-blue-500 focus:ring-blue-500"
                            required>
                    </div>

                    <div>
                        <label for="password" class="block mb-2 text-sm">{{ __('auth.password') }}</label>
                        <input type="password" id="password" name="password"
                            class="w-full px-4 py-3 text-sm text-gray-400 bg-gray-800 border-gray-700 rounded-md focus:border-blue-500 focus:ring-blue-500"
                            required>
                    </div>

                    @error('email')
                        <p class="mt-2 text-xs text-red-400">
                            {{ __('auth.failed') }}</p>
                    @enderror

                    <button type="submit"
                        class="inline-flex items-center justify-center gap-2 px-4 py-3 text-sm font-semibold text-white transition-all bg-blue-500 border border-transparent rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-800">{{ __('auth.login') }}</button>
                </div>
            </form>
        </main>
    </div>
</body>

</html>
