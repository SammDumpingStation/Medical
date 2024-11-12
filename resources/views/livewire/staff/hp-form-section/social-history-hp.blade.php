<div>
    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Social History</h4>
        <div class="grid ml-6 gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="smoking" class="block mb-3 font-medium text-gray-900 dark:text-white">Are you
                    Smoking (Cigarrates, Vape, E-Cigar)?
                </label>
                <div class="flex ml-4 gap-6">
                    <livewire:radio :default="true" title="Yes" id="smoke-yes" value="Yes" name="smoking" />
                    <livewire:radio title="Quitted" id="smoke-quitted" value="Quitted" name="smoking" />
                    <livewire:radio title="No" id="smoke-no" value="No" name="smoking" />
                </div>
                @if ($smoking === 'Yes')
                    <div class="flex gap-6 mt-4">
                        <div class="flex-1">
                            <label for="smoking-details-packs"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pack/day</label>
                            <input type="number" id="smoking-details-packs" wire:model="packPerDay"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required />
                        </div>
                        <div class="flex-1">
                            <label for="smoking-details-years"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Years</label>
                            <input type="number" id="smoking-details-years" wire:model="packInYears"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required />
                        </div>


                    </div>
                @endif
            </div>

            <div>
                <label for="alcohol" class="block mb-3 font-medium text-gray-900 dark:text-white">Are you
                    Drinking Alcohol (Beer, Rhum, Gin)?
                </label>

                <div class="flex ml-4 gap-6">
                    <livewire:radio title="Yes" id="alcohol-yes" value="Yes" name="alcohol" />
                    <livewire:radio title="Quitted" id="alcohol-quitted" value="Quitted" name="alcohol" />
                    <livewire:radio title="No" id="alcohol-no" value="No" name="alcohol" />
                </div>
                @if ($alcohol === 'Yes')
                    <div class="flex gap-6 mt-4">
                        <div class="flex-1">
                            <label for="beer-type"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Beer Type</label>
                            <div class="flex ml-4 gap-6">
                                <livewire:radio title="Beer/Rhum" id="beer-alcohol" value="Beer/Rhum"
                                    name="alcohol-type" />
                                <livewire:radio title="Others" id="others-alcohol" value="others" name="alcohol-type" />
                            </div>
                        </div>
                        <div class="flex-1">
                            <div>
                                <label for="bottles-per-session"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bottles/Session</label>
                                <input type="number" id="bottles-per-session" wire:model="bottlesPerSession"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="" required />
                            </div>
                            <div>
                                <label for="bottles-per-session"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Frequency</label>
                                <div class="flex ml-4 gap-6">
                                    <livewire:radio title="Occasionally" id="occasionally-frequency"
                                        value="ocassionally" name="alcohol-frequency" />
                                    <livewire:radio title="Monthly" id="monthly-frequency" value="monthly"
                                        name="alcohol-frequency" />
                                </div>
                            </div>

                        </div>
                    </div>
                @endif
            </div>
            <div>
                <label for="drugs" class="block mb-3 font-medium text-gray-900 dark:text-white">Are you using
                    Illegal Drugs/Subtance?
                </label>
                <div class="flex ml-4 gap-6">
                    <livewire:radio title="Yes" id="drug-yes" value="Yes" name="drug" />
                    <livewire:radio title="Quitted" id="drug-quitted" value="Quitted" name="drug" />
                    <livewire:radio title="No" id="drug-no" value="No" name="drug" />
                </div>
                @if ($drug === 'Yes')
                    <div class="flex gap-6 mt-4">
                        <div class="flex-1">
                            <label for="smoking-details-packs"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">What Kind?</label>
                            <input type="text" id="drug-details" wire:model="drugType"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required />
                        </div>
                    </div>
                @endif
            </div>
            <div>
                <label for="smoking" class="block mb-3 font-medium text-gray-900 dark:text-white">Are you
                    Sexually Active?
                </label>

                <div class="flex ml-4 gap-6">
                    <livewire:radio title="Yes" id="sex-yes" value="Yes" name="sex" />
                    <livewire:radio title="Quitted" id="sex-quitted" value="Quitted" name="sex" />
                    <livewire:radio title="No" id="sex-no" value="No" name="sex" />
                </div>
                @if ($sex === 'Yes')
                    <div class="flex flex-col gap-6 mt-4">
                        <div class="flex-1">
                            <label for="smoking-details-packs"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">How many sexual
                                partners within this year?</label>
                            <input type="number" id="sex-details" wire:model="partnerCount"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required />
                        </div>
                        <div class="flex-1">
                            <label for="smoking-details-packs"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Partner
                                Type</label>
                            <div class="flex gap-2">
                                <livewire:radio title="Male" id="sex-male" value="Male" name="partner-type" />
                                <livewire:radio title="Female" id="sex-female" value="Female" name="partner-type" />
                                <livewire:radio title="Both" id="sex-both" value="Both" name="partner-type" />
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="flex items-center justify-between w-full">
        <button id="social-prev" wire:click="switchToTab('profile')"
            class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Previous</button>
        <button id="social-next" wire:click="switchToTab('medical')"
            class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Next</button>
    </div>
</div>
