<x-layout>
    <div class="bg-white dark:bg-gray-800 p-4 rounded-lg ">
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="summary-tab"
                data-tabs-toggle="#default-tab-content" role="tablist">

                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="form1-tab" data-tabs-target="#form1"
                        type="button" role="tab" aria-controls="form1" aria-selected="false">Form 1</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="form2-tab" data-tabs-target="#form2"
                        type="button" role="tab" aria-controls="form2" aria-selected="false">Form 2</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="form3-tab" data-tabs-target="#form3"
                        type="button" role="tab" aria-controls="form3" aria-selected="false">Form 3</button>
                </li>
            </ul>
        </div>
        <div id="default-tab-content">
            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="form1" role="tabpanel"
                aria-labelledby="form1-tab">
                <livewire:health-profile-form1 />
            </div>
            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="form2" role="tabpanel"
                aria-labelledby="form2-tab">
                <livewire:health-profile-form2 />
            </div>
            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="form3" role="tabpanel"
                aria-labelledby="form3-tab">
                <livewire:health-profile-form3 />
            </div>

        </div>
    </div>
</x-layout>