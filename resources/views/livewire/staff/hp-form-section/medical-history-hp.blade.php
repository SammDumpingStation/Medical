<form class="space-y-14">
    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Past Medical History</h4>

        <div class="grid gap-6 ml-6 mb-6 md:grid-cols-2">
            <div>
                <livewire:toggle title="Allergy" :checked="$allergy" />
                <div class="hidden">
                    <livewire:checkbox title="Food" />
                    <livewire:checkbox title="Drug" />
                </div>

            </div>
            <livewire:toggle title="Asthma" :checked="$asthma" />
            <livewire:toggle title="Cancer" :checked="$cancer"/>
            <livewire:toggle title="Coronary Artery Disease" :checked="$coronaryArteryDisease" />
            <livewire:toggle title="Thyroid Disease" :checked="$thyroidDisease" />
            <livewire:toggle title="Peptic Ulcer" :checked="$pepticUlcer" />
            <livewire:toggle title="PCOS" :checked="$pcos" />
            <livewire:toggle title="Hypertension" :checked="$hypertension" />
            <livewire:toggle title="Epilepsy"  :checked="$epilepsy"/>
            <livewire:toggle title="Skin Disorder" :checked="$skinDisorder" />
            <livewire:toggle title="Tuberculosis" :checked="$tuberculosis" />
            <livewire:toggle title="Hepatitis" :checked="$hepatitis" />
            <livewire:toggle title="Psychological Disorder" :checked="$psychologicalDisorder" />
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
