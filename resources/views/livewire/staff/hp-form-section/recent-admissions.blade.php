<div>
    <h4 class="text-xl mb-4 font-bold dark:text-white">Recent Hospital Admissions</h4>

    @foreach ($admissions as $index => $admission)
        <div class="grid grid-cols-2 ml-6 gap-6 mb-4">
            <div>
                <label for="Diagnosis-{{ $index }}"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diagnosis</label>
                <input type="text" id="Diagnosis-{{ $index }}"
                    wire:model="admissions.{{ $index }}.diagnosis"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Fever, Cough Etc." required />
            </div>
            <div>
                <label for="datepicker-{{ $index }}"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">When?</label>
                <livewire:datepicker id="datepicker-{{ $index }}"
                    wire:model="admissions.{{ $index }}.date" :key="'datepicker-' . $index" />
            </div>
        </div>
    @endforeach
    <div class="w-full flex justify-end">
        <button wire:click="addAdmission"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Add Another Admission
        </button>
    </div>

</div>
