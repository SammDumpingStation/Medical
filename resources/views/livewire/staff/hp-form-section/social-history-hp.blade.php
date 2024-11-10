<div>
    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Social History</h4>
        <div class="grid ml-6 gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="smoking" class="block mb-3 font-medium text-gray-900 dark:text-white">Are you
                    Smoking (Cigarrates, Vape, E-Cigar)?
                </label>
                <div class="flex ml-4 gap-6">
                    <div class="flex items-center cursor-pointer">
                        <input id="smoke-yes" type="radio" name="smoking" wire:model="smoking" value="Yes"
                            class=" cursor-pointer w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="smoke-yes"
                            class=" cursor-pointer ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                    </div>
                    <div class="flex items-center cursor-pointer">
                        <input id="smoke-no" type="radio" name="smoking" wire:model="smoking" value="No"
                            class=" cursor-pointer w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="smoke-no"
                            class=" cursor-pointer ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                    </div>
                    <div class="flex items-center cursor-pointer">
                        <input id="smoke-quitted" type="radio" name="smoking" wire:model="smoking" value="Quitted"
                            class=" cursor-pointer w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="smoke-quitted"
                            class=" cursor-pointer ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Quitted</label>
                    </div>
                </div>
            </div>

            <div>
                <label for="alcohol" class="block mb-3 font-medium text-gray-900 dark:text-white">Are you
                    Drinking Alcohol (Beer, Rhum, Gin)?
                </label>
                <div class="flex ml-4 gap-6">
                    <div class="flex items-center cursor-pointer">
                        <input id="alcohol-yes" type="radio" name="alcohol" wire:model="alcohol" value="Yes"
                            class=" cursor-pointer w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="alcohol-yes"
                            class=" cursor-pointer ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                    </div>
                    <div class="flex items-center cursor-pointer">
                        <input id="alcohol-no" type="radio" name="alcohol" wire:model="alcohol" value="No"
                            class=" cursor-pointer w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="alcohol-no"
                            class=" cursor-pointer ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                    </div>
                    <div class="flex items-center cursor-pointer">
                        <input id="alcohol-quitted" type="radio" name="alcohol" wire:model="alcohol" value="Quitted"
                            class=" cursor-pointer w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="alcohol-quitted"
                            class=" cursor-pointer ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Quitted</label>
                    </div>
                </div>
            </div>
            <div>
                <label for="smoking" class="block mb-3 font-medium text-gray-900 dark:text-white">Are you using
                    Illegal Drugs/Subtance?
                </label>
                <div class="flex ml-4 gap-6">
                    <div class="flex items-center cursor-pointer">
                        <input id="drug-yes" type="radio" name="drug" wire:model="drug" value="Yes"
                            class=" cursor-pointer w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="drug-yes"
                            class=" cursor-pointer ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                    </div>
                    <div class="flex items-center cursor-pointer">
                        <input id="drug-no" type="radio" name="drug" wire:model="drug" value="No"
                            class=" cursor-pointer w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="drug-no"
                            class=" cursor-pointer ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                    </div>
                    <div class="flex items-center cursor-pointer">
                        <input id="drug-quitted" type="radio" name="drug" wire:model="drug" value="Quitted"
                            class=" cursor-pointer w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="drug-quitted"
                            class=" cursor-pointer ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Quitted</label>
                    </div>
                </div>
            </div>
            <div>
                <label for="smoking" class="block mb-3 font-medium text-gray-900 dark:text-white">Are you
                    Sexually Active?
                </label>
                <div class="flex ml-4 gap-6">
                    <div class="flex items-center cursor-pointer">
                        <input id="sex-yes" type="radio" name="sex" wire:model="sex" value="Yes"
                            class=" cursor-pointer w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="sex-yes"
                            class=" cursor-pointer ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                    </div>
                    <div class="flex items-center cursor-pointer">
                        <input id="sex-no" type="radio" name="sex" wire:model="sex" value="No"
                            class=" cursor-pointer w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="sex-no"
                            class=" cursor-pointer ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                    </div>
                    <div class="flex items-center cursor-pointer">
                        <input id="sex-quitted" type="radio" name="sex" wire:model="sex" value="Quitted"
                            class=" cursor-pointer w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="sex-quitted"
                            class=" cursor-pointer ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Quitted</label>
                    </div>
                </div>

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
