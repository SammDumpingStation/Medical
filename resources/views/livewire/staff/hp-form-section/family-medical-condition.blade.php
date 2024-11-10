<div>
    <h4 class="text-xl mb-4 font-bold dark:text-white">Family Medical Condition</h4>
    <div class="grid gap-6 ml-6 mb-6 md:grid-cols-2">

        <!-- Mother Side -->
        <div>
            <label for="mother-side" class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Mother
                Side</label>
            @foreach ($motherConditions as $index => $condition)
                <div class="flex items-center gap-3 mb-3">
                    <input type="text" wire:model="motherConditions.{{ $index }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="ex. Cancer" required />
                </div>
            @endforeach
            <div class="flex w-full">
                <button wire:click.prevent="addMotherCondition"
                    class="text-white ml-auto bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Add Medical Condition
                </button>
            </div>

        </div>

        <!-- Father Side -->
        <div>
            <label for="father-side" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Father
                Side</label>
            @foreach ($fatherConditions as $index => $condition)
                <div class="flex items-center gap-3 mb-3">
                    <input type="text" wire:model="fatherConditions.{{ $index }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="ex. Tuberculosis" required />
                </div>
            @endforeach
            <div class="w-full flex">
                <button wire:click.prevent="addFatherCondition"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto ml-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Add Medical Condition
                </button>
            </div>

        </div>
    </div>
</div>
