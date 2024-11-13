<x-layout>
    <div class="p-4 bg-white flex flex-col justify-between dark:bg-gray-800">
        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Student Health Profile Creation</h1>
        @if ($patient->gender === 'Female')
            Form 2 out of 3
        @else
            Form 2 out of 2
        @endif
    </div>
    <div class="bg-white dark:bg-gray-800 p-4 rounded-lg ">
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="second-health-profile-tab"
                data-tabs-toggle="#default-tab-content" role="tablist">

                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="physical-screening-tab"
                        data-tabs-target="#physical-screening" type="button" role="tab"
                        aria-controls="physical-screening" aria-selected="false">Physical Screening</button>
                </li>
                <li class="me-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="physical-examination-tab" data-tabs-target="#physical-examination" type="button"
                        role="tab" aria-controls="physical-examination" aria-selected="false">Physical
                        Examination</button>
                </li>
                <li class="me-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="ancillary-examination-tab" data-tabs-target="#ancillary-examination" type="button"
                        role="tab" aria-controls="ancillary-examination" aria-selected="false">Ancillary
                        Examination</button>
                </li>
                <li class="me-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="student-classification-tab" data-tabs-target="#student-classification" type="button"
                        role="tab" aria-controls="student-classification" aria-selected="false">Student
                        Classification</button>
                </li>
                <li class="me-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="personal-remarks-tab" data-tabs-target="#personal-remarks" type="button" role="tab"
                        aria-controls="personal-remarks" aria-selected="false">Personal Remarks</button>
                </li>

            </ul>
        </div>
        <div id="default-tab-content">
            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="physical-screening" role="tabpanel"
                aria-labelledby="physical-screening-tab">
                <livewire:physical-screening />
            </div>
            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="physical-examination" role="tabpanel"
                aria-labelledby="physical-examination-tab">
                <livewire:physical-examination />
            </div>
            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="ancillary-examination" role="tabpanel"
                aria-labelledby="ancillary-examination-tab">
                <livewire:ancillary-examination />
            </div>

            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="student-classification" role="tabpanel"
                aria-labelledby="student-classification-tab">
                <livewire:student-classification />
            </div>
            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="personal-remarks" role="tabpanel"
                aria-labelledby="personal-remarks-tab">
                <livewire:personal-remarks />
            </div>
        </div>
    </div>
</x-layout>
