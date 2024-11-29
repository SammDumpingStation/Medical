<form class="space-y-14">
    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Past Surgical History</h4>

        <!-- Display each operation -->
        @foreach ($this->operations as $operation)
            <div class="grid grid-cols-2 items-center gap-3 mb-3">
                <div>
                    <label for="operation-type"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Operation Type</label>
                    <input type="text" id="operation-type"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $operation['type'] }}" readonly />
                </div>
                <div>
                    <label for="operation-date"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">When?</label>
                    <input type="date" id="operation-date"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $operation['date'] }}" readonly />
                </div>
            </div>
        @endforeach

        <!-- Single Operation Form (for adding new operation) -->
        <div class="grid grid-cols-2 items-center gap-3 mb-3">
            <div>
                <label for="operation-type"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Operation
                    Type</label>
                <input type="text" id="operation-type" wire:model="operationType"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Enter operation type" />
                @error('operationType')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="operation-date"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">When?</label>
                <input type="date" id="operation-date" wire:model="operationDate"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Select date" />
                @error('operationDate')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Buttons -->
        <div class="flex w-full space-x-3">
            <button wire:click.prevent="saveOperation"
                class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-800">
                Save Operation
            </button>
        </div>
    </div>

    <!-- Flash Messages -->
    @if (session()->has('message'))
        <div class="text-green-600 font-medium">{{ session('message') }}</div>
    @endif
    @if (session()->has('error'))
        <div class="text-red-600 font-medium">{{ session('error') }}</div>
    @endif
</form>
