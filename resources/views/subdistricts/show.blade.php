<x-app-layout>
    <div class="bg-gradient-to-t from-blue-600/[.15] via-transparent h-auto 2xl:h-full">
        <div class="max-w-4xl px-4 py-10 mx-auto sm:px-6 lg:px-8 lg:py-14">
            <div class="p-4 border border-gray-700 shadow rounded-xl sm:p-7 bg-slate-900">
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-gray-200">
                        {{ __('subdistricts.title') }}
                    </h2>
                </div>

                <div class="grid grid-cols-12 gap-4 sm:gap-6">
                    <div class="col-span-3">
                        <label for="name" class="inline-block text-sm mt-2.5 text-gray-200">
                            {{ __('subdistricts.attribute.name') }}
                        </label>
                    </div>

                    <div class="col-span-9">
                        <input id="name" type="text" name="name"
                            class="block w-full px-3 py-2 text-sm text-gray-400 border-gray-700 rounded-lg shadow-sm pr-11 focus:border-blue-500 focus:ring-blue-500 bg-slate-900"
                            value="{{ $subdistrict->name }}" readonly>
                    </div>
                </div>

                <div class="flex justify-end mt-5 gap-x-2">
                    <a href="{{ route('subdistricts.index') }}"
                        class="inline-flex items-center justify-center gap-2 px-3 py-2 text-sm font-medium text-gray-400 align-middle transition-all border border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 bg-slate-900 hover:bg-slate-800 hover:text-white focus:ring-offset-gray-800">
                        {{ __('buttons.back') }}
                    </a>
                    <a href="{{ route('subdistricts.edit', $subdistrict) }}"
                        class="inline-flex items-center justify-center gap-2 px-3 py-2 text-sm font-semibold text-white transition-all bg-blue-500 border border-transparent rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-800">
                        {{ __('buttons.edit') }}
                    </a>
                </div>
            </div>

            <div class="flex flex-col mt-8">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden border border-gray-700 shadow-sm rounded-xl bg-slate-900">
                            <div
                                class="grid gap-3 px-6 py-4 border-b border-gray-700 md:flex md:justify-between md:items-center">
                                <div>
                                    <h2 class="text-xl font-semibold text-gray-200">
                                        {{ __('harvest_data.title') . ' ' . __('subdistricts.title') . ' ' . $subdistrict->name }}
                                    </h2>
                                </div>

                                <div>
                                    <div class="inline-flex gap-x-2">
                                        <a class="inline-flex items-center justify-center gap-2 px-3 py-2 text-sm font-semibold text-white transition-all bg-blue-500 border border-transparent rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-800"
                                            href="{{ route('harvest-data.create') }}">
                                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" viewBox="0 0 16 16" fill="none">
                                                <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            {{ __('buttons.add') . ' ' . __('harvest_data.title') }}
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <table class="min-w-full divide-y divide-gray-700">
                                <thead class="bg-slate-800">
                                    <tr>
                                        <th scope="col" class="py-3 pl-6 pr-6 text-left">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold tracking-wide text-gray-200 uppercase">
                                                    {{ __('table.column.row_number') }}
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="py-3 pl-6 pr-6 text-left">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold tracking-wide text-gray-200 uppercase">
                                                    {{ __('harvest_data.attribute.year') }}
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-left">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold tracking-wide text-gray-200 uppercase">
                                                    {{ __('harvest_data.attribute.land_area') }}
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-left">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold tracking-wide text-gray-200 uppercase">
                                                    {{ __('harvest_data.attribute.harvested_area') }}
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-left">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold tracking-wide text-gray-200 uppercase">
                                                    {{ __('harvest_data.attribute.productivity') }}
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-left">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold tracking-wide text-gray-200 uppercase">
                                                    {{ __('harvest_data.attribute.yield') }}
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-right"></th>
                                    </tr>
                                </thead>

                                <tbody class="divide-y divide-gray-700">
                                    @forelse ($subdistrict->harvestData->sortBy('year') as $data)
                                        <tr>
                                            <td class="w-px h-px whitespace-nowrap">
                                                <div class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                    {{ $loop->iteration }}.
                                                </div>
                                            </td>

                                            <td class="w-px h-px whitespace-nowrap">
                                                <div class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                    {{ $data->year }}
                                                </div>
                                            </td>

                                            <td class="w-px h-px whitespace-nowrap">
                                                <div class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                    {{ $data->land_area }}
                                                </div>
                                            </td>

                                            <td class="w-px h-px whitespace-nowrap">
                                                <div class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                    {{ $data->harvested_area }}
                                                </div>
                                            </td>

                                            <td class="w-px h-px whitespace-nowrap">
                                                <div class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                    {{ $data->productivity }}
                                                </div>
                                            </td>

                                            <td class="w-px h-px whitespace-nowrap">
                                                <div class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                    {{ $data->yield }}
                                                </div>
                                            </td>

                                            <td class="w-px h-px whitespace-nowrap">
                                                <div class="px-6 py-1.5 inline-flex gap-x-2">
                                                    <a class="inline-flex items-center gap-x-1.5 text-sm text-blue-500 decoration-2 hover:underline font-medium"
                                                        href="{{ route('harvest-data.edit', $data) }}">
                                                        {{ __('buttons.edit') }}
                                                    </a>
                                                    <form action="{{ route('harvest-data.destroy', $data) }}"
                                                        method="POST">
                                                        @method('delete')
                                                        @csrf

                                                        <button type="submit"
                                                            class="inline-flex items-center gap-x-1.5 text-sm text-red-500 decoration-2 hover:underline font-medium">
                                                            {{ __('buttons.delete') }}
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="w-px h-px whitespace-nowrap">
                                                <div
                                                    class="block py-3 pl-6 pr-6 text-sm font-semibold text-center text-gray-200">
                                                    {{ __('harvest_data.empty_data') }}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div
                                class="grid gap-3 px-6 py-4 border-t border-gray-700 md:flex md:justify-between md:items-center">
                                <div>
                                    <p class="text-sm text-gray-400">
                                        <span
                                            class="font-semibold text-gray-200">{{ $subdistrict->harvestData->count() }}</span>
                                        {{ __('table.total') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
