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
                            id="social_history-tab" data-tabs-target="#social_history" type="button" role="tab"
                            aria-controls="social_history" aria-selected="false">Social History</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="medical_history-tab" data-tabs-target="#medical_history" type="button" role="tab"
                            aria-controls="medical_history" aria-selected="false">Past Medical History</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="surgical_history-tab" data-tabs-target="#surgical_history" type="button" role="tab"
                            aria-controls="surgical_history" aria-selected="false">Past Surgical History</button>
                    </li>
                    <li class="" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="immunizations-tab" data-tabs-target="#immunizations" type="button" role="tab"
                            aria-controls="immunizations" aria-selected="false">Immunizations</button>
                    </li>
                </ul>
            </div>
            <div>
                <div id="default-tab-content">
                    <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="profile" role="tabpanel"
                        aria-labelledby="profile-tab">
                        <livewire:first-form-hp />
                    </div>
                    <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="social_history" role="tabpanel"
                        aria-labelledby="social_history-tab">
                        <livewire:second-form-hp />
                    </div>
                    <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="medical_history" role="tabpanel"
                        aria-labelledby="medical_history-tab">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium accusamus quod sed
                            laborum iste consequatur harum in commodi sunt aut animi, nobis fuga dolore at numquam error
                            eos eius. Vero.</p>
                        {{-- <livewire:third-form-hp /> --}}
                    </div>
                    <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="surgical_history" role="tabpanel"
                        aria-labelledby="surgical_history-tab">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium accusamus quod sed
                            laborum iste consequatur harum in commodi sunt aut animi, nobis fuga dolore at numquam error
                            eos eius. Vero.</p>

                        <livewire:fourth-form-hp />
                    </div>
                    <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="immunizations" role="tabpanel"
                        aria-labelledby="immunizations-tab">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium accusamus quod sed
                            laborum iste consequatur harum in commodi sunt aut animi, nobis fuga dolore at numquam error
                            eos eius. Vero.</p>

                        <livewire:fifth-form-hp />
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
