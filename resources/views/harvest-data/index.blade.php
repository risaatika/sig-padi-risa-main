<x-app-layout>
    <div class="bg-gradient-to-t from-blue-600/[.15] via-transparent h-auto 2xl:h-full">
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-12 mx-auto">
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden border border-gray-700 shadow-sm rounded-xl bg-slate-900">
                            <div
                                class="grid gap-3 px-6 py-4 border-b border-gray-700 md:flex md:justify-between md:items-center">
                                <div>
                                    <h2 class="text-xl font-semibold text-gray-200">
                                        {{ __('harvest_data.title') }}
                                    </h2>
                                    <p class="text-sm text-gray-400">
                                        {{ __('harvest_data.subtitle') }}
                                    </p>
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
                                                    {{ __('harvest_data.attribute.subdistrict') }}
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
                                    @php
                                        $rowNumber = $harvestData->firstItem();
                                    @endphp
                                    @forelse ($harvestData as $data)
                                        <tr>
                                            <td class="w-px h-px whitespace-nowrap">
                                                <div class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                    {{ $rowNumber }}.
                                                </div>
                                            </td>
                                            @php
                                                $rowNumber++;
                                            @endphp

                                            <td class="w-px h-px whitespace-nowrap">
                                                <div class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                    {{ $data->year }}
                                                </div>
                                            </td>

                                            <td class="w-px h-px whitespace-nowrap">
                                                <div class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                    {{ $data->subdistrict->name }}
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
                                        <span class="font-semibold text-gray-200">{{ $total }}</span>
                                        {{ __('table.total') }}
                                    </p>
                                </div>

                                <div>
                                    <div class="inline-flex gap-x-2">
                                        <a href="{{ $harvestData->onFirstPage() ? null : $harvestData->previousPageUrl() }}"
                                            class="inline-flex items-center justify-center gap-2 px-3 py-2 text-sm font-medium text-gray-700 align-middle transition-all bg-white border rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                            </svg>
                                            {{ __('table.prev') }}
                                        </a>
                                        <a href="{{ $harvestData->hasMorePages() ? $harvestData->nextPageUrl() : null }}"
                                            class="inline-flex items-center justify-center gap-2 px-3 py-2 text-sm font-medium text-gray-700 align-middle transition-all bg-white border rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                            {{ __('table.next') }}
                                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
