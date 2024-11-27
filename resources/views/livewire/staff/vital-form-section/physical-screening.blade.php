<div class="space-y-14">
    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Physical Screening</h4>
        <div class="grid ml-6 gap-6 mb-6 md:grid-cols-2">
            <div class="flex justify-between">
                <div>
                    <label for="height" class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">Height
                        (cm)</label>
                    <input type="number" wire:model="height" id="height" aria-describedby="helper-text-explanation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required />
                </div>
                <div>
                    <label for="weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Weight
                        (kg)</label>
                    <input type="number" wire:model="weight" id="weight" aria-describedby="helper-text-explanation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required />
                </div>
                <div>
                    <label for="blood-pressure"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blood Pressure</label>
                    <input type="text" wire:model="blood_pressure" id="blood-pressure"
                        aria-describedby="helper-text-explanation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required />
                </div>
            </div>
            <div class="flex justify-between">
                <div>
                    <label for="pulse-rate" class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">Pulse
                        Rate</label>
                    <input type="number" wire:model="pulse_rate" id="pulse-rate"
                        aria-describedby="helper-text-explanation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required />
                </div>
                <div>
                    <label for="respirations"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Respiration
                    </label>
                    <input type="number" id="respirations" wire:model="respiration"
                        aria-describedby="helper-text-explanation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required />
                </div>
                <div>
                    <label for="spo2"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SpO2</label>
                    <input type="text" id="spo2" aria-describedby="helper-text-explanation" wire:model="spo2"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required />
                </div>
            </div>
            <div class="flex flex-wrap gap-7">
                <!-- BMI Input -->
                <div class="w-full sm:w-auto">
                    <label for="bmi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        BMI
                    </label>
                    <input type="number" id="bmi" aria-describedby="bmi-helper-text" wire:model="bmi" readonly
                        class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Calculated BMI" />
                </div>

                <!-- BMI Class Input -->
                <div class="flex-1">
                    <label for="bmi-class" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        BMI Class
                    </label>
                    <input type="text" id="bmi-class" aria-describedby="bmi-class-helper-text" wire:model="bmi_class"
                        readonly
                        class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="BMI Category" />
                </div>
            </div>

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label for="right-vision"
                        class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">Right Vision
                    </label>
                    <input type="text" id="right-vision" aria-describedby="helper-text-explanation"
                        wire:model="right_vision"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required />
                </div>
                <div class="">
                    <label for="left-vision" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Left
                        Vision
                    </label>
                    <input type="text" id="left-vision" aria-describedby="helper-text-explanation"
                        wire:model="left_vision"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required />
                </div>
            </div>
            <div>
                <label for="visual-acuity" class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">Visual
                    Acuity
                </label>
                <div class="flex ml-4 gap-6">
                    <livewire:radio title="Corrected" :default="$visual_acuity" id="visual-acuity-corrected" value="corrected"
                        name="visual-acuity" />
                    <livewire:radio title="Uncorrected" :default="$visual_acuity" id="visual-acuity-uncorrected"
                        value="uncorrected" name="visual-acuity" />
                </div>
            </div>
            <div>
                <label for="" class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">Isihara
                    Color Vision
                </label>
                <div class="flex ml-4 gap-6">
                    <livewire:radio title="Adequate" id="isihara-adequate" value="Adequate"
                        name="isihara-color-vision" :default="$isihara_color_vision" />
                    <livewire:radio title="Defective" id="isihara-defective" value="Defective"
                        name="isihara-color-vision" :default="$isihara_color_vision" />
                </div>
            </div>
            <div>
                <label for=""
                    class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">Ear/Hearing by tuning fork
                </label>
                <div class="flex ml-4 gap-6 items-center mb-4">
                    <label for="" class="block text-sm font-medium text-gray-900 dark:text-white">AD:
                    </label>
                    <livewire:radio title="Adequate" id="adequate-ad" :default="$hearing_ad" value="Adequate"
                        name="AD" />
                    <livewire:radio title="Inadequate" id="inadequate-ad" :default="$hearing_ad" value="Inadequate"
                        name="AD" />
                </div>
                <div class="flex ml-4 gap-6 items-center">
                    <label for="" class="block  text-sm font-medium text-gray-900 dark:text-white">AS:
                    </label>
                    <livewire:radio title="Adequate" id="adeqaute-as" :default="$hearing_as" value="Adequate"
                        name="AS" />
                    <livewire:radio title="Inadequate" id="inadequate-as" :default="$hearing_as" value="Inadequate"
                        name="AS" />
                </div>
            </div>
            <div>
                <label for="" class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">Speech
                </label>
                <div class="flex ml-4 gap-6">
                    <livewire:radio title="Clear" id="clear-speech" :default="$speech" value="Clear"
                        name="speech" />
                    <livewire:radio title="Unclear" id="unclear-speech" :default="$speech" value="Unclear"
                        name="speech" />
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-between w-full">
        <a href="/health-profile/create-form-1/{{ $patientID }}"
            class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Go Back to Previous Form
        </a>
        <button type="button" wire:click="saveToDatabase"
            class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-700">
            Save
        </button>
    </div>

</div>
