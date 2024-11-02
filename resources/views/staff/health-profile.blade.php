<x-layout>
    <section>
        <div>
            <h2 class="text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl dark:text-white">
                Health Profile</h2>
            <p class="text-gray-500 dark:text-gray-400">Create a Student Health Profile</p>
        </div>

        <div>
            <livewire:search-bar />
        </div>
        <div class="bg-white dark:bg-gray-800 p-4 rounded-lg mt-10">
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
                            id="social-history-tab" data-tabs-target="#social-history" type="button" role="tab"
                            aria-controls="social-history" aria-selected="false">Social History</button>
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
                    <livewire:first-form-hp />
                </div>
                <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="social-history" role="tabpanel"
                    aria-labelledby="social-history-tab">
                    <livewire:second-form-hp />
                </div>
                <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="medical-history" role="tabpanel"
                    aria-labelledby="medical-history-tab">
                    <livewire:third-form-hp />
                </div>
                <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="surgical-history" role="tabpanel"
                    aria-labelledby="surgical-history-tab">
                    <livewire:fourth-form-hp />
                </div>
                <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="immunizations" role="tabpanel"
                    aria-labelledby="immunizations-tab">
                    <livewire:fifth-form-hp />
                </div>
            </div>

        </div>
    </section>
</x-layout>
