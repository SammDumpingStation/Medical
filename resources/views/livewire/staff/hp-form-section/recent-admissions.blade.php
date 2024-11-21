<div>
    <h4 class="text-xl mb-4 font-bold dark:text-white">Recent Hospital Admissions</h4>

    @foreach ($admissions as $index => $admission)
        <div class="grid grid-cols-2 ml-6 gap-6 mb-4">
            <!-- Display Diagnosis Field -->
            <div>
                <label for="diagnosis-{{ $index }}"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diagnosis</label>
                <input type="text" id="diagnosis-{{ $index }}" value="{{ $admission['diagnosis'] }}"
                    wire:model.defer="admissions.{{ $index }}.diagnosis"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>

            <!-- Display Date Field -->
            <div>
                <label for="date-{{ $index }}"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">When?</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </div>
                    <input type="text" id="date-{{ $index }}" value="{{ $admission['admission_date'] }}"
                        wire:model.defer="admissions.{{ $index }}.admission_date"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                </div>
            </div>
        </div>
    @endforeach

    <!-- Only show input fields for new admissions -->
    <h4 class="text-xl mb-4 font-bold dark:text-white mt-6">Add New Admission</h4>
    <div class="grid grid-cols-2 ml-6 gap-6 mb-4">
        <div>
            <label for="diagnosis-new"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diagnosis</label>
            <input type="text" id="diagnosis-new" wire:model.defer="admissions.{{ count($admissions) }}.diagnosis"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Fever, Cough Etc." required />
        </div>

        <div>
            <label for="date-new" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">When?</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                    </svg>
                </div>
                <input type="date" id="date-new"
                    wire:model.defer="admissions.{{ count($admissions) }}.admission_date"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
            </div>
        </div>
    </div>

    <!-- Buttons for adding and saving -->
    <div class="w-full flex justify-end space-x-4">
        <button wire:click="addAdmission"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Add Another Admission
        </button>

        <button wire:click="saveAdmission"
            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            Save Admissions
        </button>
    </div>
</div>
