<x-layout>
    <section>
        <div
            class="p-4 bg-white block sm:flex items-center justify-between dark:bg-gray-800">
            <div class="w-full mb-1">
                <div class="mb-4">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Consultations</h1>
                </div>
                <div class="sm:flex">
                    <livewire:search-bar />
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-gray-800 p-4 rounded-lg ">
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                    data-tabs-toggle="#default-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                            data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">Profile</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="second-form-hp-tab" data-tabs-target="#second-form-hp" type="button" role="tab"
                            aria-controls="second-form-hp" aria-selected="false">Social History</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="medical-history-tab" data-tabs-target="#medical-history" type="button" role="tab"
                            aria-controls="medical-history" aria-selected="false">Medical History</button>
                    </li>
                    <li role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="surgical-history-tab" data-tabs-target="#surgical-history" type="button" role="tab"
                            aria-controls="surgical-history" aria-selected="false">Surgical History</button>
                    </li>
                    <li role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="immunizations-tab" data-tabs-target="#immunizations" type="button" role="tab"
                            aria-controls="immunizations" aria-selected="false">Immunizations</button>
                    </li>
                </ul>
            </div>
            <div id="default-tab-content">
                <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="profile" role="tabpanel"
                    aria-labelledby="profile-tab">
                    <livewire:personal-info-hp />
                </div>
                <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="second-form-hp" role="tabpanel"
                    aria-labelledby="second-form-hp-tab">
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
                    <livewire:immunizations-hp />
                </div>
            </div>

        </div>
    </section>
</x-layout>
