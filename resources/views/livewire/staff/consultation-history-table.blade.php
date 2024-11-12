    <div class="space-y-6 w-full">
        <div class="items-center px-4 justify-between lg:flex">
            <div class="mb-4 lg:mb-0">
                <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Consultations History</h3>
                <span class="text-base font-normal text-gray-500 dark:text-gray-400">View here the recent consultations
                    made in the clinic</span>
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
                                                    {{ $data->patient->patient_id }}
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
                                            {{ $data->patient->year_level }}
                                        </td>
                                        <td
                                            class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                            {{ $data->patient->department }}
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
