<form class="space-y-14">
    <div>
        <h2 class="text-lg font-bold leading-none tracking-tight text-gray-900 md:text-2xl dark:text-white mb-6">
            Past Surgical History</h2>
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


    <div class="flex items-center justify-between w-full">
        <button data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard"
            aria-selected="false"
            class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Previous</button>
        <button data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard"
            aria-selected="false"
            class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Next</button>
    </div>

</form>
