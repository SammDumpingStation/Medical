<form class="space-y-14">
    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Past Surgical History</h4>
        <div class="grid grid-cols-2 ml-6 gap-6">
            <div>
                <label for="operation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Operation
                    Type</label>
                <input type="text" id="operation"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="" required />
            </div>
            <div>
                <label for="datepicker"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">When?</label>
                <livewire:datepicker id="surgical-datepicker" />
            </div>

        </div>
    </div>


    <livewire:next-prev-button />


</form>
