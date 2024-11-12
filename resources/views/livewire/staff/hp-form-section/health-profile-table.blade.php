    <div class="space-y-6 w-full">
        <div class="p-4 bg-white block sm:flex items-center justify-between dark:bg-gray-800">
            <div class="w-full mb-1">
                <div class="mb-4">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Consultations</h1>
                </div>
                <div class="sm:flex">
                    <form class="max-w-md w-full">
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="number" id="default-search" wire:model.live.debounce.500ms='search'
                                class=" block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search Student by ID" required />
                            <button type="submit"
                                class="hover:bg-blue-800 text-white absolute end-2.5 bottom-2.5 bg-blue-700  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="items-center px-4 justify-between lg:flex">
            <div class="mb-4 lg:mb-0">
                <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Vital Check Creation</h3>
                <span class="text-base font-normal text-gray-500 dark:text-gray-400">Click the "Create Form" to start
                    creating Vital Check forms for a student</span>
            </div>
        </div>
        {{-- table --}}
        <div class="flex flex-col">
            <div class="overflow-x-auto rounded-lg">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    @foreach ($headers as $header)
                                        <th scope="col"
                                            class="p-3 border text-gray-900 font-bold text-sm dark:border-gray-700 text-left uppercase dark:text-gray-400">
                                            {{ $header }}

                                        </th>
                                    @endforeach


                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                @forelse ($datas as $data)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700" wire:key="{{ $data->id }}">
                                        <td class="flex items-center p-4 space-x-6 whitespace-nowrap">
                                            <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                                <div class="text-base text-gray-900 dark:text-white">
                                                    {{ $data->patient_id }}
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                            {{ $data->patient->full_name }}
                                        </td>
                                        <td
                                            class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                            {{ $data->patient->age }}
                                        </td>
                                        <td
                                            class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                            {{ $data->patient->gender }}
                                        </td>
                                        <td
                                            class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                            {{ $data->patient->year_level ?? '3rd year' }}
                                        </td>
                                        <td
                                            class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                            {{ $data->patient->department ?? 'CITC' }}
                                        </td>
                                        <td
                                            class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                            {{ $data->primary_diagnosis }}
                                        </td>
                                        <td class="p-4 border whitespace-nowrap dark:text-white">
                                            <span
                                                class="p-4 space-x-2 text-sm text-gray-500 whitespace-nowrap dark:text-white">
                                                {{ $data->status }}
                                            </span>
                                        </td>
                                        <td
                                            class="p-4 space-x-2 text-sm text-gray-500 whitespace-nowrap dark:text-white">
                                                <a href="/health-profile/create-form-1/{{ $data->patient_id }}"
                                                    class="hover:bg-blue-800 text-white bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    Create Form
                                                </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" rowspan="10"
                                            class="text-center py-40 text-xl font-semibold">
                                            No patient with that matching ID available
                                        </td>
                                    </tr>
                                @endforelse


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="sticky bottom-0 right-0 items-center justify-between w-full p-4 bg-white border-t border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            {{ $datas->links() }}
        </div>

    </div>
