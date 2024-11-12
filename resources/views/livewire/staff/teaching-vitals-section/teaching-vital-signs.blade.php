<div class="space-y-14">
    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Vital Signs</h4>
        <div class="grid ml-6 gap-6 mb-6 md:grid-cols-2">
            <div class="flex justify-between">
                <div>
                    <label for="temperature"
                        class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">Temperature</label>
                    <input type="number" id="temperature" aria-describedby="helper-text-explanation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required />
                </div>
                <div>
                    <label for="blood-pressure"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blood Pressure</label>
                    <input type="text" id="blood-pressure" aria-describedby="helper-text-explanation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required />
                </div>
                <div>
                    <label for="pulse-rate" class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">Pulse
                        Rate</label>
                    <input type="number" id="pulse-rate" aria-describedby="helper-text-explanation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required />
                </div>

            </div>
            <div class="flex gap-4">
                <div class="flex-1">
                    <label for="respirations"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Respiratory Rate
                    </label>
                    <input type="number" id="respirations" aria-describedby="helper-text-explanation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required />
                </div>
                <div class="flex-1">
                    <label for="O2-saturation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">O2
                        Saturation</label>
                    <input type="text" id="O2-saturation" aria-describedby="helper-text-explanation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required />
                </div>
            </div>
            <div class="flex gap-6">
                <div class="flex-1">
                    <label for="bmi" class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">BMI
                    </label>
                    <input type="number" id="bmi" aria-describedby="helper-text-explanation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required />
                </div>
                <div class="flex-1">
                    <label for="nutritional-status"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nutritional Status
                    </label>
                    <input type="text" id="nutritional-status" aria-describedby="helper-text-explanation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required />
                </div>
            </div>
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label for="Height" class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">Height
                        (cm)
                    </label>
                    <input type="text" id="Height" aria-describedby="helper-text-explanation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required />
                </div>
                <div class="">
                    <label for="Weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Weight
                        (kg)
                    </label>
                    <input type="text" id="Weight" aria-describedby="helper-text-explanation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required />
                </div>
            </div>
        </div>
        <div class="flex-1">
            <label for="chief-complaints" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Chief
                Complaints
            </label>
            <textarea id="cheif-complaints" rows=""
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write your complaints here..."></textarea>
        </div>
    </div>
</div>
