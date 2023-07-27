<x-app-layout>
    <div class="bg-gradient-to-t from-blue-600/[.15] via-transparent h-full">
        <div class="max-w-4xl px-4 py-10 mx-auto sm:px-6 lg:px-8 lg:py-14">
            <div class="p-4 border border-gray-700 shadow rounded-xl sm:p-7 bg-slate-900">
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-gray-200">
                        {{ __('subdistricts.title') }}
                    </h2>
                    <p class="text-sm text-gray-400">
                        {{ __('subdistricts.edit_description', ['name' => $subdistrict->name]) }}
                    </p>
                </div>

                <form action="{{ route('subdistricts.update', $subdistrict) }}" method="POST">
                    @method('put')
                    @csrf

                    <div class="grid grid-cols-12 gap-4 sm:gap-6">
                        <div class="col-span-3">
                            <label for="name" class="inline-block text-sm mt-2.5 text-gray-200">
                                {{ __('subdistricts.attribute.name') }}
                            </label>
                        </div>

                        <div class="col-span-9">
                            <input id="name" type="text" name="name"
                                class="block w-full px-3 py-2 text-sm text-gray-400 border-gray-700 rounded-lg shadow-sm pr-11 focus:border-blue-500 focus:ring-blue-500 bg-slate-900"
                                value="{{ $subdistrict->name }}" required>
                        </div>
                    </div>

                    <div class="flex justify-end mt-5 gap-x-2">
                        <a href="{{ route('subdistricts.show', $subdistrict) }}"
                            class="inline-flex items-center justify-center gap-2 px-3 py-2 text-sm font-medium text-gray-400 align-middle transition-all border border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 bg-slate-900 hover:bg-slate-800 hover:text-white focus:ring-offset-gray-800">
                            {{ __('buttons.cancel') }}
                        </a>
                        <button type="submit"
                            class="inline-flex items-center justify-center gap-2 px-3 py-2 text-sm font-semibold text-white transition-all bg-blue-500 border border-transparent rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-800">
                            {{ __('buttons.save') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
