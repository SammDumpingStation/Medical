<form class="space-y-14">
    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Past Medical History</h4>

        <div class="grid gap-6 ml-6 mb-6 md:grid-cols-2">
            <div class="space-y-2">
                <livewire:toggle title="Allergy" :checked="$allergy" />
                @if ($allergy)
                    <div class="flex gap-6">
                        <div class="flex-1">
                            <livewire:toggle title="Food" :checked="$foodAllergy" />
                            @if ($foodAllergy)
                                <label for="food-specifics"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Specify
                                </label>
                                <input type="text" id="food-specifics" wire:model="foodDetails"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required placeholder="ex. Shellfish" value="{{ $foodDetails ?? '' }}" />
                            @endif
                        </div>
                        <div class="flex-1">
                            <livewire:toggle title="Drug" :checked="$drugAllergy" />
                            @if ($drugAllergy)
                                <label for="drug-specifics"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Specify
                                </label>
                                <input type="text" id="drug-specifics" wire:model="drugDetails"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="ex. Antibiotics" required value="{{ $drugDetails ?? '' }}" />
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
                        required placeholder="Input details here" value="{{ $cancerDetails ?? '' }}" />
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
                        placeholder="Input details here" value="{{ $hypertensionDetails ?? '' }}" />
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
                        required placeholder="Input details here" value="{{ $epilepsyDetails ?? '' }}" />
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
                        required placeholder="Input details here" value="{{ $skinDisorderDetails ?? '' }}" />
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
                        required placeholder="Input details here" value="{{ $tuberculosisDetails ?? '' }}" />
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
                        required placeholder="Input details here" value="{{ $hepatitisDetails ?? '' }}" />
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
                        required placeholder="Input details here" value="{{ $psychologicalDisorderDetails ?? '' }}" />
                @endif
            </div>
        </div>
    </div>

    <livewire:family-medical-condition />

    <livewire:recent-admissions />

    <button type="button" wire:click="saveToSession"
        class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-700">
        Save
    </button>

</form>
