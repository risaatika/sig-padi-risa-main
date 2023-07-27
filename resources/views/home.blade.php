<x-app-layout>
    <div class="bg-gradient-to-t from-blue-600/[.15] via-transparent h-full">
        <div
            class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-24 space-y-8 h-full flex justify-center flex-col pb-48">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="block text-4xl font-medium text-gray-200 sm:text-5xl md:text-6xl lg:text-7xl">
                    {{ __('home.title') }}
                </h1>
            </div>

            <div class="max-w-5xl mx-auto text-center">
                <p class="text-lg text-gray-400">
                    {{ __('home.description') }}
                </p>
            </div>

            <div class="grid justify-center w-full gap-3 mt-7 sm:inline-flex">
                <a class="inline-flex items-center justify-center px-4 py-3 text-sm font-medium text-center text-white transition bg-blue-600 border border-transparent rounded-md gap-x-3 hover:bg-blue-700 lg:text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white dark:focus:ring-offset-gray-800"
                    href="{{ route('result') }}">
                    {{ __('home.view_result') }}
                    <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </a>
                <a class="inline-flex justify-center items-center gap-x-3.5 text-sm lg:text-base text-center border hover:border-gray-300 shadow-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:border-gray-800 dark:hover:border-gray-600 dark:shadow-slate-700/[.7] dark:text-white dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800"
                    href="{{ route('harvest-data.index') }}">
                    {{ __('home.view_data') }}
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
