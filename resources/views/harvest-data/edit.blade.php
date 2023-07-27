<x-app-layout>
    <div class="bg-gradient-to-t from-blue-600/[.15] via-transparent h-full">
        <div class="max-w-4xl px-4 py-10 mx-auto sm:px-6 lg:px-8 lg:py-14">
            <div class="p-4 border border-gray-700 shadow rounded-xl sm:p-7 bg-slate-900">
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-gray-200">
                        {{ __('harvest_data.title') . ' ' . __('subdistricts.title') . ' ' . $harvestData->subdistrict->name }}
                    </h2>
                </div>

                <form action="{{ route('harvest-data.update', $harvestData) }}" method="POST">
                    @method('put')
                    @csrf

                    <div class="grid grid-cols-12 gap-4 sm:gap-6">
                        <div class="col-span-3">
                            <label for="year" class="inline-block text-sm mt-2.5 text-gray-200">
                                {{ __('harvest_data.attribute.year') }}
                            </label>
                        </div>

                        <div class="col-span-9">
                            <input id="year" type="number" name="year" step="0.1"
                                class="block w-full px-3 py-2 text-sm text-gray-400 border-gray-700 rounded-lg shadow-sm pr-11 focus:border-blue-500 focus:ring-blue-500 bg-slate-900"
                                value="{{ old('year') ?? $harvestData->year }}" required>
                        </div>

                        <div class="col-span-3">
                            <label for="land-area" class="inline-block text-sm mt-2.5 text-gray-200">
                                {{ __('harvest_data.attribute.land_area') }}
                            </label>
                        </div>

                        <div class="col-span-9">
                            <input id="land-area" type="number" name="land_area" step="0.1"
                                class="block w-full px-3 py-2 text-sm text-gray-400 border-gray-700 rounded-lg shadow-sm pr-11 focus:border-blue-500 focus:ring-blue-500 bg-slate-900"
                                value="{{ old('land_area') ?? $harvestData->land_area }}" required>
                        </div>

                        <div class="col-span-3">
                            <label for="harvested-area" class="inline-block text-sm mt-2.5 text-gray-200">
                                {{ __('harvest_data.attribute.harvested_area') }}
                            </label>
                        </div>

                        <div class="col-span-9">
                            <input id="harvested-area" type="number" name="harvested_area" step="0.1"
                                class="block w-full px-3 py-2 text-sm text-gray-400 border-gray-700 rounded-lg shadow-sm pr-11 focus:border-blue-500 focus:ring-blue-500 bg-slate-900"
                                value="{{ old('harvested_area') ?? $harvestData->harvested_area }}" required>
                        </div>

                        <div class="col-span-3">
                            <label for="productivity" class="inline-block text-sm mt-2.5 text-gray-200">
                                {{ __('harvest_data.attribute.productivity') }}
                            </label>
                        </div>

                        <div class="col-span-9">
                            <input id="productivity" type="number" name="productivity" step="0.01"
                                class="block w-full px-3 py-2 text-sm text-gray-400 border-gray-700 rounded-lg shadow-sm pr-11 focus:border-blue-500 focus:ring-blue-500 bg-slate-900"
                                value="{{ old('productivity') ?? $harvestData->productivity }}" required>
                        </div>

                        <div class="col-span-3">
                            <label for="yield" class="inline-block text-sm mt-2.5 text-gray-200">
                                {{ __('harvest_data.attribute.yield') }}
                            </label>
                        </div>

                        <div class="col-span-9">
                            <input id="yield" type="number" name="yield" step="0.0001"
                                class="block w-full px-3 py-2 text-sm text-gray-400 border-gray-700 rounded-lg shadow-sm pr-11 focus:border-blue-500 focus:ring-blue-500 bg-slate-900"
                                value="{{ old('yield') ?? $harvestData->yield }}" required>
                        </div>
                    </div>

                    <div class="flex justify-end mt-5 gap-x-2">
                        <a href="{{ route('harvest-data.index') }}"
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
