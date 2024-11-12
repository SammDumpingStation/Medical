<form class="space-y-14">
    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Past Medical History</h4>

        <div class="grid gap-6 ml-6 mb-6 md:grid-cols-2">
            <div class="space-y-2">
                <livewire:toggle title="Allergy" :checked="$allergy" />
                @if ($allergy)
                    <div class="flex gap-6">
                        <div class="flex-1">
                            <livewire:toggle title="Food" />
                            @if ($foodAllergy)
                                <label for="food-specifics"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Specify
                                </label>
                                <input type="text" id="food-specifics" wire:model="foodDetails"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required placeholder="ex. Shellfish" />
                            @endif
                        </div>
                        <div class="flex-1">
                            <livewire:toggle title="Drug" />
                            @if ($drugAllergy)
                                <label for="drug-specifics"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Specify
                                </label>
                                <input type="text" id="drug-specifics" wire:model="drugDetails"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="ex. Antibiotics" required />
                            @endif
                        </div>
                    </div>
                @endif
            </div>
            <livewire:toggle title="Asthma" :checked="$asthma" />
            <div>
                <livewire:toggle title="Cancer" :checked="$cancer" />
                @if ($cancer)
                    <label for="cancer-specifics"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Specify
                    </label>
                    <input type="text" id="cancer-specifics" wire:model="cancerDetails"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required placeholder="Input details here" />
                @endif
            </div>
            <livewire:toggle title="Coronary Artery Disease" :checked="$coronaryArteryDisease" />
            <livewire:toggle title="Thyroid Disease" :checked="$thyroidDisease" />
            <livewire:toggle title="Peptic Ulcer" :checked="$pepticUlcer" />
            <livewire:toggle title="PCOS" :checked="$pcos" />
            <div>
                <livewire:toggle title="Hypertension" :checked="$hypertension" />
                @if ($hypertension)
                    <label for="hypertension-specifics"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Specify
                    </label>
                    <input type="text" id="hypertension-specifics" wire:model="hypertensionDetails"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required placeholder="Input details here" />
                @endif
            </div>
            <div>
                <livewire:toggle title="Epilepsy" :checked="$epilepsy" />
                @if ($epilepsy)
                    <label for="epilepsy-specifics"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Specify
                    </label>
                    <input type="text" id="epilepsy-specifics" wire:model="epilepsyDetails"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required placeholder="Input details here" />
                @endif
            </div>
            <div>
                <livewire:toggle title="Skin Disorder" :checked="$skinDisorder" />
                @if ($skinDisorder)
                    <label for="skin-specifics"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Specify
                    </label>
                    <input type="text" id="skin-specifics" wire:model="skinDisorderDetails"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required placeholder="Input details here" />
                @endif
            </div>
            <div>
                <livewire:toggle title="Tuberculosis" :checked="$tuberculosis" />
                @if ($tuberculosis)
                    <label for="tuberculosis-specifics"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Specify
                    </label>
                    <input type="text" id="tuberculosis-specifics" wire:model="tuberculosisDetails"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required placeholder="Input details here" />
                @endif
            </div>
            <div>
                <livewire:toggle title="Hepatitis" :checked="$hepatitis" />
                @if ($hepatitis)
                    <label for="hepatitis-specifics"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Specify
                    </label>
                    <input type="text" id="hepatitis-specifics" wire:model="hepatitisDetails"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required placeholder="Input details here" />
                @endif
            </div>
            <div>
                <livewire:toggle title="Psychological Disorder" :checked="$psychologicalDisorder" />
                @if ($psychologicalDisorder)
                    <label for="psychologicalDisorder-specifics"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Specify
                    </label>
                    <input type="text" id="psychologicalDisorder-specifics" wire:model="psychologicalDisorderDetails"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required placeholder="Input details here" />
                @endif
            </div>
        </div>

    </div>
    <livewire:family-medical-condition />
    <livewire:recent-admissions />
    <div class="flex items-center justify-between w-full">
        <button id="medical-prev" wire:click="switchToTab('social')"
            class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Previous</button>
        <button id="medical-next" wire:click="switchToTab('surgical')"
            class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Next</button>
    </div>
</form>
