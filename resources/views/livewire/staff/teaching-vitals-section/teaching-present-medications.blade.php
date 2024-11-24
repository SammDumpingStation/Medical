<div class="p-4 bg-gray-50 dark:bg-gray-900 rounded-lg shadow-md">
    <h4 class="text-xl mb-4 font-bold text-gray-800 dark:text-white">Present Medications</h4>

    <form wire:submit.prevent="submit">

        <!-- Medications Section -->
        <div class="mb-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            <label
                class="flex items-center text-gray-700 dark:text-gray-300 hover:text-indigo-600 cursor-pointer text-sm">
                <input type="checkbox" wire:model="presentMedications.antibiotics"
                    class="form-checkbox text-indigo-600 mr-2">
                <i class="fas fa-capsules mr-1"></i> Antibiotics
            </label>
            <label
                class="flex items-center text-gray-700 dark:text-gray-300 hover:text-indigo-600 cursor-pointer text-sm">
                <input type="checkbox" wire:model="presentMedications.birthControlPill"
                    class="form-checkbox text-indigo-600 mr-2">
                <i class="fas fa-pills mr-1"></i> Birth Control Pill
            </label>
            <label
                class="flex items-center text-gray-700 dark:text-gray-300 hover:text-indigo-600 cursor-pointer text-sm">
                <input type="checkbox" wire:model="presentMedications.aspirin"
                    class="form-checkbox text-indigo-600 mr-2">
                <i class="fas fa-tablets mr-1"></i> Aspirin
            </label>
            <label
                class="flex items-center text-gray-700 dark:text-gray-300 hover:text-indigo-600 cursor-pointer text-sm">
                <input type="checkbox" wire:model="presentMedications.antiConvulsant"
                    class="form-checkbox text-indigo-600 mr-2">
                <i class="fas fa-syringe mr-1"></i> Anti-convulsant
            </label>
        </div>

        <!-- Other Medications -->
        <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-300 mb-1 font-medium text-sm">Others:</label>
            <input type="text" wire:model="presentMedications.others"
                class="border border-gray-300 dark:border-gray-600 rounded-lg w-full p-2 bg-gray-50 dark:bg-gray-700 dark:text-gray-100 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                placeholder="Specify other medications">
        </div>

        <!-- Pregnancy Section -->
        <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-300 mb-1 font-medium text-sm">Are you Pregnant?</label>
            <div class="flex items-center space-x-4">
                <label
                    class="flex items-center text-gray-700 dark:text-gray-300 hover:text-indigo-600 cursor-pointer text-sm">
                    <input type="radio" wire:model="pregnant" value="yes" class="form-radio text-indigo-600 mr-1">
                    Yes
                </label>
                <label
                    class="flex items-center text-gray-700 dark:text-gray-300 hover:text-indigo-600 cursor-pointer text-sm">
                    <input type="radio" wire:model="pregnant" value="no" class="form-radio text-indigo-600 mr-1">
                    No
                </label>
                <label
                    class="flex items-center text-gray-700 dark:text-gray-300 hover:text-indigo-600 cursor-pointer text-sm">
                    <input type="radio" wire:model="pregnant" value="n/a" class="form-radio text-indigo-600 mr-1">
                    N/A
                </label>
            </div>
        </div>

        <!-- Last Menstrual Period -->
        <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-300 mb-1 font-medium text-sm">Last Menstrual Period (LMP)
                First day:</label>
            <input type="date" wire:model="lmpDate"
                class="border border-gray-300 dark:border-gray-600 rounded-lg w-full p-2 bg-gray-50 dark:bg-gray-700 dark:text-gray-100 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <!-- Procedures/Operations -->
        <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-300 mb-1 font-medium text-sm">Procedures/Operations
                undergone prior to the consultation:</label>
            <textarea wire:model="proceduresOperations"
                class="border border-gray-300 dark:border-gray-600 rounded-lg w-full p-2 bg-gray-50 dark:bg-gray-700 dark:text-gray-100 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                rows="3" placeholder="Describe procedures or operations"></textarea>
        </div>

        <!-- Date -->
        <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-300 mb-1 font-medium text-sm">Date:</label>
            <input type="date" wire:model="recordDate"
                class="border border-gray-300 dark:border-gray-600 rounded-lg w-full p-2 bg-gray-50 dark:bg-gray-700 dark:text-gray-100 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <!-- Submit Button -->
        <div class="mb-4">
            <button type="submit"
                class="px-4 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 focus:outline-none">Submit</button>
        </div>
    </form>
</div>
