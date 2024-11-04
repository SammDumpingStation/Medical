<div>
    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Social History</h4>
        <div class="grid ml-6 gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="smoking" class="block mb-3 font-medium text-gray-900 dark:text-white">Are you
                    Smoking (Cigarrates, Vape, E-Cigar)?
                </label>
                <div class="flex ml-4 gap-6">
                    <livewire:radio title="Yes" id="smoke-yes" value="yes" name="smoking" />
                    <livewire:radio :default="true" title="No" id="smoke-no" value="no" name="smoking" />
                    <livewire:radio title="Quitted" id="smoke-quit" value="quit" name="smoking" />
                </div>
            </div>

            <div>
                <label for="alcohol" class="block mb-3 font-medium text-gray-900 dark:text-white">Are you
                    Drinking Alcohol (Beer, Rhum, Gin)?
                </label>
                <div class="flex ml-4 gap-6">
                    <livewire:radio title="Yes" id="alcohol-yes" value="yes" name="alcohol" />
                    <livewire:radio :default="true" title="No" id="alcohol-no" value="no" name="alcohol" />
                    <livewire:radio title="Quitted" id="alcohol-quit" value="quit" name="alcohol" />
                </div>
            </div>
            <div>
                <label for="smoking" class="block mb-3 font-medium text-gray-900 dark:text-white">Are you using
                    Illegal Drugs/Subtance?
                </label>
                <div class="flex ml-4 gap-6">
                    <livewire:radio title="Yes" id="drug-yes" value="yes" name="drug" />
                    <livewire:radio :default="true" title="No" id="drug-no" value="no" name="drug" />
                    <livewire:radio title="Quitted" id="drug-quit" value="quit" name="drug" />
                </div>
            </div>
            <div>
                <label for="smoking" class="block mb-3 font-medium text-gray-900 dark:text-white">Are you
                    Sexually Active?
                </label>
                <div class="flex ml-4 gap-6">
                    <livewire:radio title="Yes" id="sex-yes" value="yes" name="sex" />
                    <livewire:radio :default="true" title="No" id="sex-no" value="no" name="sex" />
                    <livewire:radio title="Quitted" id="sex-quit" value="quit" name="sex" />
                </div>
            </div>
        </div>

    <livewire:next-prev-button />

    </div>
</div>
