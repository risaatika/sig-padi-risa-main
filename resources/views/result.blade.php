<x-app-layout>
    <div class="bg-gradient-to-t from-blue-600/[.15] via-transparent h-auto">
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="flex flex-col mb-6">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden border border-gray-700 shadow-sm rounded-xl bg-slate-900">
                            <table class="min-w-full divide-y divide-gray-700">
                                <thead class="bg-slate-800">
                                    <tr>
                                        <th></th>

                                        @foreach ($attributes as $attribute)
                                            <th scope="col" class="px-6 py-3 text-left">
                                                <div class="flex items-center gap-x-2">
                                                    <span
                                                        class="text-xs font-semibold tracking-wide text-gray-200 uppercase">
                                                        {{ __("harvest_data.attribute.$attribute") }}
                                                    </span>
                                                </div>
                                            </th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-700">
                                    <tr>
                                        <td class="w-px h-px whitespace-nowrap bg-slate-800">
                                            <div class="py-3 pl-6 pr-6 text-sm font-semibold text-center text-gray-200">
                                                {{ __('result.mean') }}
                                            </div>
                                        </td>

                                        @foreach ($attributes as $attribute)
                                            <td class="w-px h-px whitespace-nowrap">
                                                <div class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                    {{ $meanData[$attribute] }}
                                                </div>
                                            </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td class="w-px h-px whitespace-nowrap bg-slate-800">
                                            <div class="py-3 pl-6 pr-6 text-sm font-semibold text-center text-gray-200">
                                                {{ __('result.standard_deviation') }}
                                            </div>
                                        </td>

                                        @foreach ($attributes as $attribute)
                                            <td class="w-px h-px whitespace-nowrap">
                                                <div class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                    {{ $standardDeviationData[$attribute] }}
                                                </div>
                                            </td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            @foreach ($normalizedData->pluck('year')->unique() as $year)
                <div class="flex flex-col mb-6">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div class="overflow-hidden border border-gray-700 shadow-sm rounded-xl bg-slate-900">
                                <div
                                    class="grid gap-3 px-6 py-4 border-b border-gray-700 md:flex md:justify-between md:items-center">
                                    <div>
                                        <h2 class="text-xl font-semibold text-gray-200">
                                            {{ __('result.z_score') . ' ' . __('harvest_data.attribute.year') . ' ' . $year }}
                                        </h2>
                                        <p class="text-sm text-gray-400">
                                            {{ __('result.z_score_description') }}
                                        </p>
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

                                            <th scope="col" class="px-6 py-3 text-left">
                                                <div class="flex items-center gap-x-2">
                                                    <span
                                                        class="text-xs font-semibold tracking-wide text-gray-200 uppercase">
                                                        {{ __('harvest_data.attribute.subdistrict') }}
                                                    </span>
                                                </div>
                                            </th>

                                            @foreach ($attributes as $attribute)
                                                <th scope="col" class="px-6 py-3 text-left">
                                                    <div class="flex items-center gap-x-2">
                                                        <span
                                                            class="text-xs font-semibold tracking-wide text-gray-200 uppercase">
                                                            {{ __("harvest_data.attribute.$attribute") }}
                                                        </span>
                                                    </div>
                                                </th>
                                            @endforeach
                                        </tr>
                                    </thead>

                                    <tbody class="divide-y divide-gray-700">
                                        @forelse ($normalizedData->where('year', $year) as $data)
                                            <tr>
                                                <td class="w-px h-px whitespace-nowrap">
                                                    <div class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                        {{ $data->id }}.
                                                    </div>
                                                </td>

                                                <td class="w-px h-px whitespace-nowrap">
                                                    <div class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                        {{ $data->subdistrict->name }}
                                                    </div>
                                                </td>

                                                @foreach ($attributes as $attribute)
                                                    <td class="w-px h-px whitespace-nowrap">
                                                        <div class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                            {{ $data[$attribute] }}
                                                        </div>
                                                    </td>
                                                @endforeach
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="{{ 3 + count($attributes) }}"
                                                    class="w-px h-px whitespace-nowrap">
                                                    <div
                                                        class="block py-3 pl-6 pr-6 text-sm font-semibold text-center text-gray-200">
                                                        {{ __('harvest_data.empty_data') }}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach



            <div class="flex flex-col mb-6">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden border border-gray-700 shadow-sm rounded-xl bg-slate-900">
                            <div
                                class="grid gap-3 px-6 py-4 border-b border-gray-700 md:flex md:justify-between md:items-center">
                                <div>
                                    <h2 class="text-xl font-semibold text-gray-200">
                                        {{ __('result.initial_cluster') }}
                                    </h2>
                                    <p class="text-sm text-gray-400">
                                        {{ __('result.initial_cluster_description') }}
                                    </p>
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

                                        @foreach ($attributes as $attribute)
                                            <th scope="col" class="px-6 py-3 text-left">
                                                <div class="flex items-center gap-x-2">
                                                    <span
                                                        class="text-xs font-semibold tracking-wide text-gray-200 uppercase">
                                                        {{ __("harvest_data.attribute.$attribute") }}
                                                    </span>
                                                </div>
                                            </th>
                                        @endforeach
                                    </tr>
                                </thead>

                                <tbody class="divide-y divide-gray-700">
                                    @forelse ($initialClusterData as $data)
                                        <tr>
                                            <td class="w-px h-px whitespace-nowrap">
                                                <div class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                    {{ $data->number }}.
                                                </div>
                                            </td>

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

                                            @foreach ($attributes as $attribute)
                                                <td class="w-px h-px whitespace-nowrap">
                                                    <div class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                        {{ $data[$attribute] }}
                                                    </div>
                                                </td>
                                            @endforeach
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="w-px h-px whitespace-nowrap">
                                                <div
                                                    class="block py-3 pl-6 pr-6 text-sm font-semibold text-center text-gray-200">
                                                    {{ __('harvest_data.empty_data') }}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            @foreach ($kMeansData as $i => $kMeans)
                @foreach ($normalizedData->pluck('year')->unique() as $year)
                    <div class="flex flex-col mb-6">
                        <div class="-m-1.5 overflow-x-auto">
                            <div class="p-1.5 min-w-full inline-block align-middle">
                                <div class="overflow-hidden border border-gray-700 shadow-sm rounded-xl bg-slate-900">
                                    <div
                                        class="grid gap-3 px-6 py-4 border-b border-gray-700 md:flex md:justify-between md:items-center">
                                        <div>
                                            <h2 class="text-xl font-semibold text-gray-200">
                                                {{ __('harvest_data.attribute.year') . ' ' . $year }}
                                            </h2>
                                            <p class="text-sm text-gray-400">
                                                {{ __('result.iteration', ['number' => $i + 1]) }}
                                            </p>
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

                                                <th scope="col" colspan="6" class="py-3 pl-6 pr-6 text-left">
                                                    <div class="flex items-center gap-x-2">
                                                        <span
                                                            class="text-xs font-semibold tracking-wide text-gray-200 uppercase">
                                                            {{ __('result.column.cluster_distance') . ' ' . __('result.iteration', ['number' => $i + 1]) }}
                                                        </span>
                                                    </div>
                                                </th>

                                                <th scope="col" class="px-6 py-3 text-left">
                                                    <div class="flex items-center gap-x-2">
                                                        <span
                                                            class="text-xs font-semibold tracking-wide text-gray-200 uppercase">
                                                            {{ __('result.column.closest_cluster') }}
                                                        </span>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody class="divide-y divide-gray-700">
                                            @forelse ($kMeans['distance']->where('year', $year) as $data)
                                                <tr>
                                                    <td class="w-px h-px whitespace-nowrap">
                                                        <div
                                                            class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                            {{ $data->id }}.
                                                        </div>
                                                    </td>

                                                    <td class="w-px h-px whitespace-nowrap">
                                                        <div
                                                            class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                            d{{ $data->id }}
                                                        </div>
                                                    </td>

                                                    <td class="w-px h-px whitespace-nowrap">
                                                        <div
                                                            class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                            {{ $data['C1'] }}
                                                        </div>
                                                    </td>

                                                    <td class="w-px h-px whitespace-nowrap">
                                                        <div
                                                            class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                            e{{ $data->id }}
                                                        </div>
                                                    </td>

                                                    <td class="w-px h-px whitespace-nowrap">
                                                        <div
                                                            class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                            {{ $data['C2'] }}
                                                        </div>
                                                    </td>

                                                    <td class="w-px h-px whitespace-nowrap">
                                                        <div
                                                            class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                            f{{ $data->id }}
                                                        </div>
                                                    </td>

                                                    <td class="w-px h-px whitespace-nowrap">
                                                        <div
                                                            class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                            {{ $data['C3'] }}
                                                        </div>
                                                    </td>

                                                    <td class="w-px h-px whitespace-nowrap">
                                                        <div
                                                            class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                            {{ $data['closest_cluster'] }}
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="7" class="w-px h-px whitespace-nowrap">
                                                        <div
                                                            class="block py-3 pl-6 pr-6 text-sm font-semibold text-center text-gray-200">
                                                            {{ __('harvest_data.empty_data') }}
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


                <div class="flex flex-col mb-6">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div class="overflow-hidden border border-gray-700 shadow-sm rounded-xl bg-slate-900">
                                <table class="min-w-full divide-y divide-gray-700">
                                    <thead class="bg-slate-800">
                                        <tr>
                                            <th scope="col" colspan="6" class="py-3 pl-6 pr-6 text-left">
                                                <div class="flex items-center gap-x-2">
                                                    <span
                                                        class="text-xs font-semibold tracking-wide text-gray-200 uppercase">
                                                        {{ __('result.column.calculate_means') . ' ' . __('result.iteration', ['number' => $i + 1]) }}
                                                    </span>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody class="divide-y divide-gray-700">
                                        @forelse ($kMeans['means'] as $meansData)
                                            <tr>
                                                @foreach ($meansData as $i => $data)
                                                    <td class="w-px h-px whitespace-nowrap">
                                                        <div
                                                            class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                            {{ $i }},{{ $loop->parent->iteration }}
                                                        </div>
                                                    </td>

                                                    <td class="w-px h-px whitespace-nowrap">
                                                        <div
                                                            class="py-3 pl-6 pr-6 text-sm font-semibold text-gray-200">
                                                            {{ $data }}
                                                        </div>
                                                    </td>
                                                @endforeach
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="w-px h-px whitespace-nowrap">
                                                    <div
                                                        class="block py-3 pl-6 pr-6 text-sm font-semibold text-center text-gray-200">
                                                        {{ __('harvest-data.empty') }}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
