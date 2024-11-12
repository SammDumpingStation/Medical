<x-layout>
    <section>
        <div class="p-4 bg-white flex flex-col justify-between dark:bg-gray-800">
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Student Health Profile Creation
            </h1>
            <span class="text-base font-normal text-gray-500 dark:text-gray-400">
                @if ($patient->gender === 'Female')
                    Form 1 out of 3
                @else
                    Form 1 out of 2
                @endif
            </span>
        </div>
        <div class="bg-white dark:bg-gray-800 p-4 rounded-lg ">
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="first-health-profile-tab"
                    data-tabs-toggle="#default-tab-content" role="tablist">

                    <li class="me-2" role="presentation">
                        <button disabled class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                            data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">Personal Information</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button disabled class="inline-block p-4 border-b-2 rounded-t-lg" id="social-history-tab"
                            data-tabs-target="#social-history" type="button" role="tab"
                            aria-controls="social-history" aria-selected="false">Social History</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button disabled class="inline-block p-4 border-b-2 rounded-t-lg" id="medical-history-tab"
                            data-tabs-target="#medical-history" type="button" role="tab"
                            aria-controls="medical-history" aria-selected="false">Medical History</button>
                    </li>

                    <li role="presentation">
                        <button disabled class="inline-block p-4 border-b-2 rounded-t-lg" id="surgical-history-tab"
                            data-tabs-target="#surgical-history" type="button" role="tab"
                            aria-controls="surgical-history" aria-selected="false">Surgical History</button>
                    </li>
                    <li role="presentation">
                        <button disabled class="inline-block p-4 border-b-2 rounded-t-lg" id="immunizations-tab"
                            data-tabs-target="#immunizations" type="button" role="tab"
                            aria-controls="immunizations" aria-selected="false">Immunizations</button>
                    </li>

                </ul>
            </div>
            <div id="default-tab-content">
                <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="profile" role="tabpanel"
                    aria-labelledby="profile-tab">
                    <livewire:personal-info-hp :patient="$patient" />
                </div>
                <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="social-history" role="tabpanel"
                    aria-labelledby="social-history-tab">
                    <livewire:social-history-hp />
                </div>
                <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="medical-history" role="tabpanel"
                    aria-labelledby="medical-history-tab">
                    <livewire:medical-history-hp />
                </div>
                <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="surgical-history" role="tabpanel"
                    aria-labelledby="surgical-history-tab">
                    <livewire:surgical-history-hp />
                </div>
                <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="immunizations" role="tabpanel"
                    aria-labelledby="immunizations-tab">
                    <livewire:immunizations-hp :patientID="$patient->patient_id" />
                </div>
            </div>
        </div>
    </section>
</x-layout>
