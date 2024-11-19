<section class="space-y-14">
    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Immunization</h4>
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="newborn-immunizations" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
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
            @if ($patientGender === 'Female')
                <div>
                    <label for="newborn-immunizations"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        For Women
                    </label>
                    <livewire:toggle title="HPV" :checked="$hpv" />
                    @if ($hpv)
                        <label for="hpv-specifics"
                            class="block mt-1 mb-2 text-sm font-medium text-gray-900 dark:text-white">How Many Doses?
                        </label>
                        <input type="text" id="hpv-specifics" wire:model="hpvDetails"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required placeholder="Input details here" />
                    @endif
                </div>
            @endif
            <div>
                <livewire:toggle title="Tetanus Toxoid" :checked="$tetanusToxoid" />
                @if ($tetanusToxoid)
                    <label for="tetanus-specifics"
                        class="block mt-1 mb-2 text-sm font-medium text-gray-900 dark:text-white">How Many Doses?
                    </label>
                    <input type="text" id="tetanus-specifics" wire:model="tetanusDetails"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required placeholder="Input details here" />
                @endif
            </div>
            <div>
                <livewire:toggle title="Influenza/Flu" :checked="$influenzaFlu" />
                <div>
                    @if ($influenzaFlu)
                        <label for="flu-specifics"
                            class="block mt-1 mb-2 text-sm font-medium text-gray-900 dark:text-white">How Many Doses
                            (per year)?
                        </label>
                        <input type="text" id="flu-specifics" wire:model="influenzaFluDetails"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required placeholder="Input details here" />
                    @endif
                </div>
            </div>
            <div>
                <livewire:toggle title="Pneumococcal Vaccine" :checked="$pneumococcalVaccine" />
                @if ($pneumococcalVaccine)
                    <label for="pneumococcalVaccine-specifics"
                        class="block mt-1 mb-2 text-sm font-medium text-gray-900 dark:text-white">How Many Doses?
                    </label>
                    <input type="text" id="pneumococcalVaccine-specifics" wire:model="pneumococcalVaccineDetails"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required placeholder="Input details here" />
                @endif
            </div>
            <div>
                <livewire:toggle title="Others" :checked="$others" />
                @if ($others)
                    <label for="others-specifics"
                        class="block mt-1 mb-2 text-sm font-medium text-gray-900 dark:text-white">Specify
                    </label>
                    <input type="text" id="others-specifics" wire:model="othersDetails"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required placeholder="Input details here" />
                @endif
            </div>
        </div>
    </div>
    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Covid 19 Specifics</h4>
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div class=" space-y-4">
                <livewire:toggle title="COVID-19 Vaccinated" :checked="$covidVaccinated" />
                @if ($covidVaccinated)
                    <div class="ml-4 flex gap-6">
                        <div class="flex-1 ">
                            <livewire:toggle title="1st Dose" :checked="$firstDose" />
                            @if ($firstDose)
                                <label for="first-dose-brand"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Vaccine Brand for 1st Dose
                                </label>
                                <select id="first-dose-brand" wire:model="firstDoseBrand"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Choose a brand</option>
                                    <option value="Pf-Pfizer">Pf-Pfizer</option>
                                    <option value="Mo-Moderna">Mo-Moderna</option>
                                    <option value="Sn-Sinovac">Sn-Sinovac</option>
                                    <option value="Az-AstraZeneca">Az-AstraZeneca</option>
                                    <option value="Sp-Sputnik">Sp-Sputnik</option>
                                    <option value="Jj-Janssen">Jj-Janssen</option>
                                    <option value="Sp-Sinopharm">Sp-Sinopharm</option>
                                </select>
                            @endif
                        </div>
                        <div class="flex-1">
                            <livewire:toggle title="2nd Dose" :checked="$secondDose" />
                            @if ($secondDose)
                                <label for="second-dose-brand"
                                    class="block mt-1 mb-2 text-sm font-medium text-gray-900 dark:text-white">Vaccine
                                    Brand for 2nd Dose
                                </label>
                                <select id="second-dose-brand" wire:model="secondDoseBrand"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Choose a brand</option>
                                    <option value="Pf-Pfizer">Pf-Pfizer</option>
                                    <option value="Mo-Moderna">Mo-Moderna</option>
                                    <option value="Sn-Sinovac">Sn-Sinovac</option>
                                    <option value="Az-AstraZeneca">Az-AstraZeneca</option>
                                    <option value="Sp-Sputnik">Sp-Sputnik</option>
                                    <option value="Jj-Janssen">Jj-Janssen</option>
                                    <option value="Sp-Sinopharm">Sp-Sinopharm</option>
                                </select>
                            @endif
                        </div>
                    </div>
                @endif

            </div>
            @if ($covidVaccinated)
                <div class=" space-y-4">
                    <livewire:toggle title="COVID-19 Booster" :checked="$covidBooster" />
                    @if ($covidBooster)
                        <div class="ml-4 flex gap-6">
                            <div class="flex-1 ">
                                <livewire:toggle title="1st Booster" :checked="$firstBooster" />
                                @if ($firstBooster)
                                    <label for="first-booster-brand"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Vaccine Brand for 1st booster
                                    </label>
                                    <select id="first-booster-brand" wire:model="firstBoosterBrand"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Choose a brand</option>
                                        <option value="Pf-Pfizer">Pf-Pfizer</option>
                                        <option value="Mo-Moderna">Mo-Moderna</option>
                                        <option value="Sn-Sinovac">Sn-Sinovac</option>
                                        <option value="Az-AstraZeneca">Az-AstraZeneca</option>
                                        <option value="Sp-Sputnik">Sp-Sputnik</option>
                                        <option value="Jj-Janssen">Jj-Janssen</option>
                                        <option value="Sp-Sinopharm">Sp-Sinopharm</option>
                                    </select>
                                @endif
                            </div>
                            <div class="flex-1">
                                <livewire:toggle title="2nd Booster" :checked="$secondBooster" />
                                @if ($secondBooster)
                                    <label for="second-booster-brand"
                                        class="block mt-1 mb-2 text-sm font-medium text-gray-900 dark:text-white">Vaccine
                                        Brand for 2nd Booster
                                    </label>
                                    <select id="second-booster-brand" wire:model.live="secondBoosterBrand"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Choose a brand</option>
                                        <option value="Pf-Pfizer">Pf-Pfizer</option>
                                        <option value="Mo-Moderna">Mo-Moderna</option>
                                        <option value="Sn-Sinovac">Sn-Sinovac</option>
                                        <option value="Az-AstraZeneca">Az-AstraZeneca</option>
                                        <option value="Sp-Sputnik">Sp-Sputnik</option>
                                        <option value="Jj-Janssen">Jj-Janssen</option>
                                        <option value="Sp-Sinopharm">Sp-Sinopharm</option>
                                    </select>
                                @endif
                            </div>
                        </div>
                    @endif
                </div>
            @endif
            @if (!$covidVaccinated)
                <div>
                    <label for="unvaccinated" class="block mb-3 font-medium text-gray-900 dark:text-white">Are you
                        Unvaccinated w/ Covid-19 Reason
                    </label>
                    <input type="text" id="unvaccinated" wire:model="unvaccinatedReason"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="State the reason for being unvaccinated" required />
                </div>
            @endif
        </div>
    </div>
    <div class="flex items-center justify-between w-full">
        <button id="immunizations-prev" wire:click="switchToTab('surgical')"
            class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Previous</button>
        <a href="/health-profile/create-form-2/{{ $patientID }}"
            class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Proceed
            to Next Form</a>
    </div>
</section>
<script>
    window.livewire.on('debug-log', (eventData) => {
        console.log(eventData.message); // Log the message
        console.log(eventData.data);    // Log the data array for debugging
    });
</script>
