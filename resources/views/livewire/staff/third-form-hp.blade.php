<form class="space-y-14">
    <div>
        <h2 class="text-lg font-bold leading-none tracking-tight text-gray-900 md:text-2xl dark:text-white mb-6">
            Past Medical History</h2>
        <div class="grid gap-6 ml-6 mb-6 md:grid-cols-2">
            <div>
                <livewire:toggle title="Allergy" />
                <div class="hidden">
                    <livewire:checkbox title="Food" />
                    <livewire:checkbox title="Drug" />
                </div>

            </div>
            <livewire:toggle title="Allergy" />
            <livewire:toggle title="Asthma" />
            <livewire:toggle title="Cancer" />
            <livewire:toggle title="Coronary Artery Disease" />
            <livewire:toggle title="Thyroid Disease" />
            <livewire:toggle title="Peptic Ulcer" />
            <livewire:toggle title="PCOS" />
            <livewire:toggle title="Hypertension" />
            <livewire:toggle title="Epilepsy" />
            <livewire:toggle title="Skin Disorder" />
            <livewire:toggle title="Tuberculosis" />
            <livewire:toggle title="Hepatitis" />
            <livewire:toggle title="Psychological Disorder" />
        </div>

    </div>
    <div>
        <h2 class="text-lg font-bold leading-none tracking-tight text-gray-900 md:text-2xl dark:text-white mb-6">
            Family Medical Condition</h2>
        <div class="grid gap-6 ml-6 mb-6 md:grid-cols-2">
            <div>
                <label for="mother-side" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mother
                    Side</label>
                <div class="flex items-center justify-center gap-3">
                    <input type="text" id="mother-side"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="ex. Cancer" required />
                    <button
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">+</button>
                </div>
            </div>
            <div>
                <label for="father-side" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Father
                    Side</label>
                <div class="flex items-center justify-center gap-3">
                    <input type="text" id="father-side"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="ex. Tuberculosis" required />
                    <button
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">+</button>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h2 class="text-lg font-bold leading-none tracking-tight text-gray-900 md:text-2xl dark:text-white mb-6">
            Recent Hospital Admissions</h2>
        <div class="grid grid-cols-2 ml-6 gap-6">
            <div>
                <label for="Diagnosis"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diagnosis</label>
                <input type="text" id="Diagnosis"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Fever, Cough Etc." required />
            </div>
            <div>
                <label for="datepicker"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">When?</label>
                <livewire:datepicker id="diagnosis-datepicker" />
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
