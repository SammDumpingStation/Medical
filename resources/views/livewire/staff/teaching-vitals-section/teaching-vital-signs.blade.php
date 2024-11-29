<div class="space-y-14">
    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Vital Signs</h4>
        <div class="grid ml-6 gap-6 mb-6 md:grid-cols-2">
            <div class="flex justify-between space-x-6">
                <div class="w-full">
                    <label for="temperature"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Temperature</label>
                    <input type="number" id="temperature" wire:model="temperature"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required title="Only numbers are allowed"
                        oninput="this.value=this.value.replace(/[^0-9]/g, '')" />
                </div>
                <div class="w-full">
                    <label for="blood-pressure"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blood Pressure</label>
                    <input type="text" id="blood-pressure" wire:model="bloodPressure"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required title="Only numbers are allowed"
                        oninput="this.value=this.value.replace(/[^0-9]/g, '')" />
                </div>
                <div class="w-full">
                    <label for="pulse-rate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pulse
                        Rate</label>
                    <input type="number" id="pulse-rate" wire:model="pulseRate"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required title="Only numbers are allowed"
                        oninput="this.value=this.value.replace(/[^0-9]/g, '')" />
                </div>
            </div>

            <div class="flex gap-6">
                <div class="flex-1">
                    <label for="respirations"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Respiratory Rate</label>
                    <input type="number" id="respirations" wire:model="respirations"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required title="Only numbers are allowed"
                        oninput="this.value=this.value.replace(/[^0-9]/g, '')" />
                </div>
                <div class="flex-1">
                    <label for="O2-saturation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">O2
                        Saturation</label>
                    <input type="text" id="O2-saturation" wire:model="O2Saturation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required title="Only numbers are allowed"
                        oninput="this.value=this.value.replace(/[^0-9]/g, '')" />
                </div>
            </div>

            <div class="flex gap-6">

                <div class="flex-1">
                    <label for="nutritional-status"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nutritional Status</label>
                    <input type="text" id="nutritional-status" wire:model="nutritionalStatus"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required />
                </div>
            </div>

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label for="Height" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Height (cm)
                    </label>
                    <input type="number" id="Height" wire:model="height"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required title="Only numbers are allowed"
                        oninput="this.value=this.value.replace(/[^0-9]/g, '')" />
                </div>
                <div>
                    <label for="Weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Weight (kg)
                    </label>
                    <input type="number" id="Weight" wire:model="weight"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required title="Only numbers are allowed"
                        oninput="this.value=this.value.replace(/[^0-9]/g, '')" />
                </div>
                <div>
                    <label for="BMI" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        BMI
                    </label>
                    <input type="number" id="BMI" wire:model="bmi" readonly
                        class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                </div>
            </div>
        </div>

        <div class="flex-1">
            <label for="chief-complaints" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Chief
                Complaints</label>
            <textarea id="chief-complaints" wire:model="chiefComplaints" rows="4"
                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write your complaints here..." oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g, '');"
                title="Only letters and spaces are allowed"></textarea>
        </div>

        <!-- Button to trigger logInputs method -->
        <button wire:click="submitForm" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-lg">
            Log Vital Signs
        </button>
    </div>
</div>
