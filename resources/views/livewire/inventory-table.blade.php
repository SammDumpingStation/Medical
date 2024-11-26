<div class="space-y-6 w-full">
    <div class="p-4 bg-white block sm:flex items-center justify-between dark:bg-gray-800">
        <div class="w-full mb-1">
            <div class="mb-4">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Dispense History</h1>
            </div>
            <div class="sm:flex">
                <form class=" w-full">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="flex w-full justify-between ">
                        <div class="relative w-full max-w-md">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="default-search" wire:model.live.debounce.500ms='search'
                                class=" block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search Student by ID" required />
                            <button type="submit"
                                class="hover:bg-blue-800 text-white absolute end-2.5 bottom-2.5 bg-blue-700  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                        <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                            <button type="button" data-modal-target="add-item-modal" data-modal-toggle="add-item-modal"
                                class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Add Inventory
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="items-center px-4 justify-between lg:flex">
        <div class="mb-4 lg:mb-0">
            <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Dispense History</h3>
            <span class="text-base font-normal text-gray-500 dark:text-gray-400">Check all the in and outs of the
                medicine here!</span>
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
                            @foreach ($datas as $data)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td
                                        class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $data->patient_id }}
                                    </td>
                                    <td
                                        class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $data->medicine ? $data->medicine->Name : 'Unknown' }}
                                        <!-- Display Medicine Name -->
                                    </td>
                                    <td
                                        class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $data->quantity_dispensed }}
                                    </td>
                                    <td
                                        class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $data->amount_given }}
                                    </td>
                                    <td
                                        class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $data->medicine_type }}
                                    </td>
                                    <td
                                        class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $data->given_date }}
                                    </td>
                                    <td
                                        class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $data->expiration_date }}
                                    </td>
                                </tr>
                            @endforeach

                            @if ($datas->isEmpty())
                                <tr>
                                    <td colspan="7" class="text-center py-40 text-xl font-semibold">
                                        No records found
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>

                    <!-- Pagination Links -->
                    <div class="mt-4">
                        {{ $datas->links() }} <!-- Display pagination links -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div
        class="sticky bottom-0 right-0 items-center justify-between w-full p-4 bg-white border-t border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        {{ $datas->links() }}
    </div>
    <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
        id="add-item-modal">
        <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                    <h3 class="text-xl font-semibold dark:text-white">
                        Add new medicine
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                        data-modal-toggle="add-item-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>

                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <form wire:submit.prevent="addItem">
                        @csrf
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                <input type="text" wire:model="name" id="name"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Bonnie" required>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="acquired_at"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Acquired
                                    At</label>
                                <input type="date" wire:model="acquired_at" id="acquired_at"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Green" required>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="pieces"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. of
                                    Pieces</label>
                                <input type="number" wire:model="pieces" id="pieces"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Input Details" required>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="status"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                <input type="text" wire:model="status" id="status"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Input Details Here" required>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="turn_over_to_supply"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Turn Over
                                    to Supply
                                    Date</label>
                                <input type="date" wire:model="turn_over_to_supply" id="turn_over_to_supply"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Green" required>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="damaged"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Damaged</label>
                                <input type="text" wire:model="damaged" id="damaged"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Input Details Here" required>
                            </div>
                        </div>
                        <button type="submit"
                            class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-4">Submit</button>
                    </form>
                </div>


                <!-- Modal footer -->
                <div class="items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                    <button
                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                        type="submit">Add Item</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
