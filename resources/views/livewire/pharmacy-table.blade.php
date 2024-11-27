<div wire:listen="refreshPharmacyTable">
    <div class="space-y-6 w-full">
        <div class="p-4 bg-white block sm:flex items-center justify-between dark:bg-gray-800">
            <div class="w-full mb-1">
                <div class="mb-4">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Pharmacy</h1>
                </div>
                <div class="sm:flex">
                    <form class="w-full">
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="flex w-full justify-between ">
                            <div class="relative flex-1 max-w-md">
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
                                <button type="button" data-modal-target="add-user-modal"
                                    data-modal-toggle="add-user-modal"
                                    class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Add Medicine
                                </button>
                                <button type="button" data-modal-target="dispensed-medicine-modal"
                                    data-modal-toggle="dispensed-medicine-modal"
                                    class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 sm:w-auto dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                    <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M15 7a3 3 0 10-6 0v3a3 3 0 006 0V7zM5 8a1 1 0 100-2 1 1 0 000 2zM4 14a2 2 0 01-2-2h2a2 2 0 002 2H4zm10 0a2 2 0 002-2h2a2 2 0 01-2 2h-2z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Dispense Medicine
                                    <br>
                                </button>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="items-center px-4 justify-between lg:flex">
        <div class="mb-4 lg:mb-0">
            <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Medicine Inventory</h3>
            <span class="text-base font-normal text-gray-500 dark:text-gray-400">All Medicine Records</span>
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
                                    <td
                                        class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $data->medicine_id ?? '' }}
                                    </td>

                                    <td class="flex items-center p-4 space-x-6 whitespace-nowrap">
                                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                            <div class="text-base text-gray-900 dark:text-white">
                                                {{ $data->Name ?? '' }}
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $data->brand_name ?? '' }}
                                    </td>
                                    <td
                                        class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $data->dosage ?? '' }}
                                    </td>
                                    <td
                                        class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $data->manufactured_date ?? '' }}
                                    </td>
                                    <td
                                        class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $data->expiry ?? '' }}
                                    </td>
                                    <td
                                        class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $data->turn_over_to_supply ?? '' }}
                                    </td>
                                    <td
                                        class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $data->stock_on_hand ?? '' }}
                                    </td>
                                    {{-- <td class="p-4 border whitespace-nowrap dark:text-white">
                                        <span
                                            class="p-4 space-x-2 text-sm text-gray-500 whitespace-nowrap dark:text-white">
                                            {{ $data->dispensed ?? '' }}
                                        </span>
                                    </td> --}}
                                    <td class="p-4 border whitespace-nowrap dark:text-white">
                                        <span
                                            class="p-4 space-x-2 text-sm text-gray-500 whitespace-nowrap dark:text-white">
                                            {{ $data->status ?? '' }}
                                        </span>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" rowspan="10" class="text-center py-40 text-xl font-semibold">
                                        No medicine with that matching name available
                                    </td>
                                </tr>
                            @endforelse


                        </tbody>
                    </table>
                    @if ($lowStockModalVisible)
                        <div id="lowStockModal"
                            style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; display: flex; justify-content: center; align-items: center;">
                            <div
                                style="background: white; width: 80%; max-width: 500px; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
                                <div
                                    style="padding: 16px; border-bottom: 1px solid #ddd; display: flex; justify-content: space-between; align-items: center;">
                                    <h3 style="margin: 0; font-size: 1.5rem; color: #333;">Low Stock Medicines</h3>
                                    <button onclick="closeModal()"
                                        style="background: none; border: none; font-size: 1.2rem; color: #666; cursor: pointer;">×</button>
                                </div>
                                <div style="padding: 16px;">
                                    <ul style="list-style-type: none; padding: 0; margin: 0;">
                                        @foreach ($lowStockMedicinesList as $medicine)
                                            <li
                                                style="margin-bottom: 8px; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
                                                <strong>{{ $medicine->Name }}</strong>
                                                <span style="color: #888;">(Stock:
                                                    {{ $medicine->stock_on_hand }})</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div style="padding: 16px; border-top: 1px solid #ddd; text-align: right;">
                                    <button onclick="closeModal()"
                                        style="padding: 8px 16px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer;">Close</button>
                                </div>
                            </div>
                        </div>

                        <script>
                            function closeModal() {
                                document.getElementById('lowStockModal').style.display = 'none';
                            }

                            // Close modal when clicking outside of it
                            document.addEventListener('click', function(event) {
                                const modal = document.querySelector('#lowStockModal > div');
                                if (modal && !modal.contains(event.target)) {
                                    closeModal();
                                }
                            });
                        </script>
                    @endif



                </div>
            </div>
        </div>
    </div>
    <div
        class="sticky bottom-0 right-0 items-center justify-between w-full p-4 bg-white border-t border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        {{ $datas->links() }}
    </div>

    <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
        id="add-user-modal">
        <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                    <h3 class="text-xl font-semibold dark:text-white">
                        Add new medicine
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                        data-modal-toggle="add-user-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-6 space-y-6">
                    <form wire:submit.prevent="addMedicine">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                <input type="text" wire:model="name" id="name"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Bonnie" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="brand_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand
                                    Name</label>
                                <input type="text" wire:model="brand_name" id="brand_name"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Green" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="dosage"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dosage</label>
                                <input type="text" wire:model="dosage" id="dosage"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Input Details Here" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="manufactured_date"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Manufactured
                                    Date</label>
                                <input type="date" wire:model="manufactured_date" id="manufactured_date"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="expiry"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Expiry</label>
                                <input type="date" wire:model="expiry" id="expiry"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="turn_over_to_supply"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Turn Over
                                    To Supply</label>
                                <input type="date" wire:model="turn_over_to_supply" id="manufactured_date"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="stock_on_hand"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock on
                                    Hand</label>
                                <input type="number" wire:model="stock_on_hand" id="stock_on_hand"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Input Details Here" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="dispensed"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dispensed</label>
                                <input type="number" wire:model="dispensed" id="dispensed"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Input Details Here" required>
                            </div>
                            {{-- <div class="col-span-6 sm:col-span-3">
                                <label for="status"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                <input type="text" wire:model="status" id="status"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Input Details Here" required>
                            </div> --}}
                        </div>

                        <div class="items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                            <button type="submit"
                                class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                Add Medicine
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
        id="dispensed-medicine-modal">
        <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                <!-- Modal Header -->

                <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                    <h3 class="text-xl font-semibold dark:text-white">
                        Dispense Medicine
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                        data-modal-toggle="dispensed-medicine-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>

                <!-- Modal Content -->
                <div class="p-6 space-y-6">
                    <form wire:submit.prevent="dispenseMedicine">
                        <div class="grid grid-cols-6 gap-6">
                            <!-- Patient ID -->
                            <div class="col-span-6 sm:col-span-3">
                                <label for="patient_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Patient
                                    ID</label>
                                <input type="text" wire:model="patient_id" id="patient_id"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Enter Patient ID" required>
                                @error('patient_id')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Medicine Name -->
                            <div class="col-span-6 sm:col-span-3">
                                <label for="medicine_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Medicine
                                    Name</label>

                                <select wire:model="medicine_id" id="medicine_id"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    required>
                                    <option value="">Select Medicine</option>
                                    @foreach ($this->medicines as $medicine)
                                        <option value="{{ $medicine->medicine_id }}">{{ $medicine->Name }}</option>
                                    @endforeach
                                </select>

                                @error('medicine_id')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Quantity -->
                            <div class="col-span-6 sm:col-span-3">
                                <label for="quantity_dispensed"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity
                                    Dispensed</label>
                                <input type="number" wire:model="quantity_dispensed" id="quantity_dispensed"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Enter Quantity" required>
                            </div>

                            <!-- When was it given -->
                            <div class="col-span-6 sm:col-span-3">
                                <label for="given_date"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">When was it
                                    given</label>
                                <input type="date" wire:model="given_date" id="given_date"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    required>
                            </div>
                            <!-- Medicine Type -->
                            <div class="col-span-6 sm:col-span-3">
                                <label for="medicine_type"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Medicine
                                    Type</label>
                                <select id="medicine_type" wire:model="medicine_type"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="" disabled selected>Select Medicine Type</option>
                                    <option value="capsule">Capsule</option>
                                    <option value="liquid">Liquid</option>
                                    <option value="tablet">Tablet</option>
                                    <option value="injectable">Injectable</option>
                                </select>
                            </div>
                            <div class="mt-4">
                                <button type="submit"
                                    class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                    Dispense Medicine
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</div>
</div>
