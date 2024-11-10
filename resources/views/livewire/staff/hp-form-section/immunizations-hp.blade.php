<section class="space-y-14">
    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Immunization</h4>
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="newborn-immunizations"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Civil
                    Completed Newborn Immunizations during childhood?
                </label>
                <div class="flex ml-4 gap-6">
                    <livewire:radio title="Yes" id="newborn-immunization-yes" value="yes"
                        name="newborn-immunization" />
                    <livewire:radio :default="true" title="No" id="newborn-immunization-no" value="no"
                        name="newborn-immunization" />
                    <livewire:radio title="Unknown" id="newborn-immunization-unknown" value="unknown"
                        name="newborn-immunization" />
                </div>
            </div>
            <div>
                <label for="newborn-immunizations"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Civil
                    For Women
                </label>
                <livewire:toggle title="HPV" />
            </div>
            <livewire:toggle title="Tetanus Toxoid" />
            <livewire:toggle title="Influenza/Flu" />
            <livewire:toggle title="Pneumococcal Vaccine" />
            <livewire:toggle title="Others" />
        </div>
    </div>
    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Covid 19 Specifics</h4>
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <livewire:toggle :default="true" title=" COVID-19 Vaccinated" />
                <livewire:toggle title="1st Dose" />
                <livewire:toggle title="2nd Dose" />
            </div>
            <div>
                <livewire:toggle title=" COVID-19 Booster" />
                <livewire:toggle title="1st Booster" />
                <livewire:toggle title="2nd Booster" />
            </div>
            <div>
                <label for="unvaccinated" class="block mb-3 font-medium text-gray-900 dark:text-white">Are you
                    Unvaccinated w/ Covid-19 Reason
                </label>
                <input type="text" id="unvaccinated"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Zombie Virus" required />
            </div>
        </div>
    </div>
    <div class="flex items-center justify-between w-full">
        <button id="immunizations-prev" wire:click="switchToTab('surgical')"
            class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Previous</button>
        <a href="/health-profile/create-form-2/{{ $patientID }}"
            class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</a>
    </div>
</section>
