<div class="p-6 bg-gray-50 dark:bg-gray-900 rounded-lg shadow-md">
    <h4 class="text-2xl mb-6 font-bold text-gray-800 dark:text-white">Past Medical History</h4>

    <!-- Physician Care Section -->
    <div class="mb-8">
        <label class="block text-lg text-gray-700 font-medium mb-4 dark:text-gray-300">
            Are you currently under the care of a physician?
        </label>
        <div class="flex flex-wrap items-center gap-4">
            <label class="flex items-center space-x-2">
                <input type="radio" name="under_care" wire:model="under_care" value="yes"
                    class="form-radio text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">Yes</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="radio" name="under_care" wire:model="under_care" value="no"
                    class="form-radio text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">No</span>
            </label>
            <div class="flex items-center space-x-2">
                <span class="text-gray-800 dark:text-gray-300">Last Appointment of Physician:</span>
                <input type="date" wire:model="last_appointment_date"
                    class="border-b border-gray-400 focus:border-indigo-600 focus:outline-none p-1 bg-transparent text-gray-800 dark:text-gray-300 dark:border-gray-600 dark:focus:border-indigo-500"
                    placeholder="Enter date">
            </div>
        </div>
    </div>

    <!-- Medical Conditions Section -->
    <div class="mb-8">
        <label class="block text-lg text-gray-700 font-medium mb-4 dark:text-gray-300">
            Do you have any of the following medical conditions?
        </label>
        <div class="grid gap-6 ml-6 mb-6 md:grid-cols-2">
            <!-- Checkbox Options -->
            <label class="flex items-center space-x-2">
                <input type="checkbox" wire:model="diabetes" class="form-checkbox text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">Diabetes</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" wire:model="high_blood_pressure" class="form-checkbox text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">High Blood Pressure</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" wire:model="coronary_artery_disease" class="form-checkbox text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">Coronary Artery Disease</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" wire:model="seizure_disorder" class="form-checkbox text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">Seizure Disorder</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" wire:model="arthritis" class="form-checkbox text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">Arthritis</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" wire:model="urinary_tract_infection" class="form-checkbox text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">Urinary Tract Infection</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" wire:model="hepatitis" class="form-checkbox text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">Hepatitis</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" wire:model="thyroid_h_imbalance" class="form-checkbox text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">Thyroid H. Imbalance</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" wire:model="allergies" class="form-checkbox text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">Allergies</span>
            </label>
            <!-- Text Input for Additional Conditions -->
            <input type="text" wire:model="additional_conditions"
                class="border-b border-gray-400 focus:border-indigo-600 focus:outline-none p-1 col-span-2 bg-transparent text-gray-800 dark:text-gray-300 dark:border-gray-600 dark:focus:border-indigo-500"
                placeholder="Please specify" oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g, '');"
                title="Only letters and spaces are allowed">
            <label class="flex items-center space-x-2">
                <input type="checkbox" wire:model="hiv_aids" class="form-checkbox text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">HIV/AIDS</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" wire:model="any_infection" class="form-checkbox text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">Any Infection</span>
            </label>
        </div>
    </div>

    <!-- Other Medical Conditions Section -->
    <div>
        <label class="block text-lg text-gray-700 font-medium mb-4 dark:text-gray-300">
            Any other medical conditions?
        </label>
        <input type="text" wire:model="other_conditions"
            class="border-b border-gray-400 focus:border-indigo-600 focus:outline-none p-1 w-full bg-transparent text-gray-800 dark:text-gray-300 dark:border-gray-600 dark:focus:border-indigo-500"
            placeholder="Enter details" oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g, '');"
            title="Only letters and spaces are allowed">
    </div>

    <div class="flex justify-right mt-6">
        <button type="button" wire:click="submitForm" wire:loading.attr="disabled"
            wire:loading.class="bg-blue-300 cursor-not-allowed"
            class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
            Save Data
        </button>

        <div wire:loading wire:target="submitForm">
            <svg aria-hidden="true" class="w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M100 50.5908C100 78.2051 77.6142 100.592 50 100.592C22.3858 100.592 0 78.2051 0 50.5908C0 22.9766 22.3858 0.589844 50 0.589844C77.6142 0.589844 100 22.9766 100 50.5908ZM9.08197 50.5908C9.08197 73.1495 27.4413 91.5088 50 91.5088C72.5587 91.5088 90.918 73.1495 90.918 50.5908C90.918 28.032 72.5587 9.67275 50 9.67275C27.4413 9.67275 9.08197 28.032 9.08197 50.5908Z"
                    fill="currentColor" />
                <path
                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5538C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7237 75.2124 7.4129C69.5422 4.10214 63.2754 1.94025 56.7376 1.05103C51.8773 0.367444 46.9666 0.446843 42.1372 1.27873C39.5941 1.69832 38.1209 4.19778 38.7573 6.62326C39.3936 9.04874 41.8735 10.4717 44.3718 10.1071C47.8519 9.56927 51.4294 9.5262 54.9375 10.0155C58.4816 10.4934 61.889 11.8879 65.0799 14.1981C67.9523 16.2153 70.5749 18.6822 72.8185 21.4525C75.128 24.2687 77.0549 27.2423 78.4089 30.2957C80.5335 35.4432 84.2766 39.3875 89.0589 40.5354C91.4359 40.9707 93.7674 39.9198 93.9676 39.0409Z"
                    fill="currentFill" />
            </svg>
        </div>
    </div>
</div>
