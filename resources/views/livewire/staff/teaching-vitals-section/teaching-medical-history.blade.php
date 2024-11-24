<div class="p-6 bg-gray-50 dark:bg-gray-900 rounded-lg shadow-md">
    <h4 class="text-2xl mb-6 font-bold text-gray-800 dark:text-white">Past Medical History</h4>

    <!-- Physician Care Section -->
    <div class="mb-8">
        <label class="block text-lg text-gray-700 font-medium mb-4 dark:text-gray-300">
            Are you currently under the care of a physician?
        </label>
        <div class="flex flex-wrap items-center gap-4">
            <label class="flex items-center space-x-2">
                <input type="radio" name="under_care" class="form-radio text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">Yes</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="radio" name="under_care" class="form-radio text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">No</span>
            </label>
            <div class="flex items-center space-x-2">
                <span class="text-gray-800 dark:text-gray-300">Last Appointment of Physician:</span>
                <input type="text" 
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
                <input type="checkbox" class="form-checkbox text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">Diabetes</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">High Blood Pressure</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">Coronary Artery Disease</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">Seizure Disorder</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">Arthritis</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">Urinary Tract Infection</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">Hepatitis</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">Thyroid H. Imbalance</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">Allergies</span>
            </label>
            <!-- Text Input for Additional Conditions -->
            <input type="text" 
                   class="border-b border-gray-400 focus:border-indigo-600 focus:outline-none p-1 col-span-2 bg-transparent text-gray-800 dark:text-gray-300 dark:border-gray-600 dark:focus:border-indigo-500" 
                   placeholder="Please specify">
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">HIV/AIDS</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-indigo-600">
                <span class="text-gray-800 dark:text-gray-300">Any Infection</span>
            </label>
        </div>
    </div>

    <!-- Other Medical Conditions Section -->
    <div>
        <label class="block text-lg text-gray-700 font-medium mb-4 dark:text-gray-300">
            Any other medical conditions?
        </label>
        <input type="text" 
               class="border-b border-gray-400 focus:border-indigo-600 focus:outline-none p-1 w-full bg-transparent text-gray-800 dark:text-gray-300 dark:border-gray-600 dark:focus:border-indigo-500" 
               placeholder="Enter details">
    </div>
</div>
