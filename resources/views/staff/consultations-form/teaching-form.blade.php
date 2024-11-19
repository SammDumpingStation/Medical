<x-layout>
    <div class="p-4 bg-white block sm:flex items-center justify-between dark:bg-gray-800">
        <div class="mb-4 lg:mb-0">
            <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Vital Check Creation </h3>
            <span class="text-base font-normal text-gray-500 dark:text-gray-400">Fill in the details for checking the
                vitals of Teaching/Non-Teaching Personnels</span>
        </div>
    </div>
    <section>
        <div class="bg-white dark:bg-gray-800 p-4 rounded-lg ">
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="consultation-tab"
                    data-tabs-toggle="#default-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="teaching-profile-tab"
                            data-tabs-target="#teaching-profile" type="button" role="tab"
                            aria-controls="teaching-profile" aria-selected="false">Personal Information</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="vital-signs-tab" data-tabs-target="#vital-signs" type="button" role="tab"
                            aria-controls="vital-signs" aria-selected="false">Vital Signs</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="teaching-medical-history-tab" data-tabs-target="#teaching-medical-history"
                            type="button" role="tab" aria-controls="teaching-medical-history"
                            aria-selected="false">Medical
                            History</button>
                    </li>
                    <li role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="present-medication-tab" data-tabs-target="#present-medication" type="button"
                            role="tab" aria-controls="present-medication" aria-selected="false">Present
                            Medications</button>
                    </li>
                    <li role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="additional-questions-tab" data-tabs-target="#additional-questions" type="button"
                            role="tab" aria-controls="additional-questions" aria-selected="false">Additional
                            Questions</button>
                    </li>
                    <li role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="diagnosis-tab" data-tabs-target="#diagnosis" type="button" role="tab"
                            aria-controls="diagnosis" aria-selected="false">Diagnosis</button>
                    </li>
                </ul>
            </div>
            <div id="default-tab-content">
                <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="teaching-profile" role="tabpanel"
                    aria-labelledby="teaching-profile-tab">
                    <livewire:teaching-personal-info />
                </div>
                <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="vital-signs" role="tabpanel"
                    aria-labelledby="vital-signs-tab">
                    <livewire:teaching-vital-signs />
                </div>
                <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="teaching-medical-history"
                    role="tabpanel" aria-labelledby="teaching-medical-history-tab">
                    <livewire:teaching-medical-history />
                </div>
                <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="present-medication" role="tabpanel"
                    aria-labelledby="present-medication-tab">
                    <livewire:teaching-present-medications />
                </div>
                <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="additional-questions" role="tabpanel"
                    aria-labelledby="additional-questions-tab">
                    <livewire:teaching-additional-questions />
                </div>
                <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="diagnosis" role="tabpanel"
                    aria-labelledby="diagnosis-tab">
                    <livewire:teaching-diagnosis />
                </div>
            </div>
        </div>
    </section>


</x-layout>
