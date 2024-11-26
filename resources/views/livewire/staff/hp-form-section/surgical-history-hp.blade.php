<form class="space-y-14">
    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Past Surgical History</h4>
        <!-- Surgical Operations Section -->
        <div>
            <!-- Loop through each operation -->
            @foreach ($operations as $index => $operation)
                <div class="grid grid-cols-2 items-center gap-3 mb-3">
                    <div>
                        <label for="operation-{{ $index }}"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Operation Type</label>
                        <input type="text" id="operation-{{ $index }}"
                            wire:model="operations.{{ $index }}.type"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Enter operation type" />
                    </div>
                    <div>
                        <label for="datepicker-{{ $index }}"
                            class="mb-2 text-sm font-medium text-gray-900 dark:text-white w-full flex justify-between">When?
                            <button wire:click.prevent="removeOperation({{ $index }})" type="button"
                                class="text-red-600 dark:text-red-400 ml-3">Remove</button></label>

                        <div class="relative w-full" id="custom-datepicker">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input id="{{ $index }}" type="date"
                                wire:model="operations.{{ $index }}.date" :key="'datepicker-'.$index"
                                class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Select date" />
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Add New Operation Button -->
            <div class="flex w-full space-x-3">
                <button wire:click.prevent="addOperation"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Add Operation
                </button>
                <button wire:click.prevent="saveOperations"
                    class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-800">
                    Save Operations
                </button>
            </div>
        </div>
    </div>

    {{-- <div class="flex items-center justify-between w-full">
        <button id="surgical-prev" wire:click="switchToTab('medical')"
            class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Previous</button>
        <button id="surgical-next" wire:click="switchToTab('immunizations')"
            class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Next</button>
    </div> --}}
</form>
