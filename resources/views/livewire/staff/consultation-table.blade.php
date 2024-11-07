    <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 dark:bg-gray-800">
        <div
            class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <div class="w-full mb-1">
                <div class="mb-4">
                    <nav class="flex mb-5" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                            <li class="inline-flex items-center">
                                <a href="#"
                                    class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                                    <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                        </path>
                                    </svg>
                                    Home
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500"
                                        aria-current="page">Consultations</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">All Patients</h1>
                </div>
                <div class="sm:flex">
                    <div
                        class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">
                        <label for="Patients-search" class="sr-only">Search</label>
                        <div class="relative mt-1 lg:w-64 xl:w-96">
                            <input type="text" name="email" id="Patients-search" wire:model='search'
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Search for Patients by ID">
                        </div>
                    </div>
                    <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                        <button type="button" data-modal-target="find-user-modal" data-modal-toggle="find-user-modal"
                            class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Create Vital Form
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card header -->
        <div class="items-center justify-between lg:flex p-4">
            <div class="mb-4 lg:mb-0">
                <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Consultation History</h3>
                <span class="text-base font-normal text-gray-500 dark:text-gray-400">This is a list of the latest
                    consultations made in
                    the clinic</span>
            </div>
        </div>
        {{-- table --}}
        <div class="flex flex-col p-4">
            <div class="overflow-x-auto rounded-lg">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    @foreach ($headers as $header)
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
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
                                                    {{ $data->patient_id }}</div>
                                            </div>
                                        </td>
                                        <td
                                            class="max-w-sm p-4 overflow-hidden text-base font-normal truncate xl:max-w-xs dark:text-gray-400">
                                            {{ $data->patient_name }}</td>
                                        <td
                                            class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $data->age }}</td>
                                        <td
                                            class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $data->gender }}</td>
                                        <td
                                            class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $data->year_level }}

                                        </td>
                                        <td class="p-4 space-x-2 whitespace-nowrap dark:text-white">
                                            {{ $data->department }}
                                        </td>
                                        <td class="p-4 space-x-2 whitespace-nowrap dark:text-white">
                                            {{ $data->primary_diagnosis }}
                                        </td>
                                        <td class="p-4 whitespace-nowrap dark:text-white">
                                            <span
                                                class="text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 {{ $this->getStatusColor($data->status) }}">{{ $data->status }}</span>
                                        </td>
                                        <td class="p-4 space-x-2 whitespace-nowrap dark:text-white">
                                            {{ \Carbon\Carbon::parse($data->date)->format('F j, Y') }}
                                        </td>
                                        <td class="p-4 space-x-2 whitespace-nowrap dark:text-white">
                                            {{ \Carbon\Carbon::parse($data->time)->format('g:i A') }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" rowspan="10" class="text-center py-40 text-xl font-semibold">
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
