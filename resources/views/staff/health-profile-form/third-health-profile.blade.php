<x-layout>
    <div class="p-4 bg-white flex flex-col justify-between dark:bg-gray-800">
        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Student Health Profile Creation</h1>
        Form 3 out of 3
    </div>
    <div class="bg-white dark:bg-gray-800 p-4 rounded-lg ">
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="third-health-profile-tab"
                data-tabs-toggle="#default-tab-content" role="tablist">

                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="menstural-history-tab"
                        data-tabs-target="#menstural-history" type="button" role="tab"
                        aria-controls="menstural-history" aria-selected="false">Menstrual History</button>
                </li>
                <li class="me-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="head-to-toe-assessment-tab" data-tabs-target="#head-to-toe-assessment" type="button"
                        role="tab" aria-controls="head-to-toe-assessment" aria-selected="false">Head to Toe
                        Assessment</button>
                </li>
                <li class="me-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="other-findings-tab" data-tabs-target="#other-findings" type="button" role="tab"
                        aria-controls="other-findings" aria-selected="false">Other Findings
                    </button>
                </li>
            </ul>
        </div>
        <div id="default-tab-content">
            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="menstural-history" role="tabpanel"
                aria-labelledby="menstural-history-tab">
                <livewire:menstrual-history />
            </div>
            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="head-to-toe-assessment" role="tabpanel"
                aria-labelledby="head-to-toe-assessment-tab">
            <livewire:head-to-toe-assessment />
            </div>
            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="other-findings" role="tabpanel"
                aria-labelledby="other-findings-tab">
                <livewire:other-findings>
            </div>
        </div>
    </div>
</x-layout>
