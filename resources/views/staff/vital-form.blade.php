<x-layout>
    <div class="p-4 bg-white block sm:flex items-center justify-between dark:bg-gray-800">
        <div class="w-full mb-1">
            <div class="mb-4">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Vital Check Form</h1>
            </div>
            <div class="space-y-4">
                <h1 class="text-base font-normal text-gray-500 dark:text-gray-400">Creating a Vital Sign Form for
                    Student:</h1>
                <div class="max-w-md">
                    <label for="change-student"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <input type="text" id="change-student"
                            class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="No Student Selected" value="" />
                        <button type="button"  data-modal-target="find-user-modal" data-modal-toggle="find-user-modal"
                            class=" text-white absolute end-2.5 hover:bg-blue-800 bottom-2.5 bg-blue-700  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Change
                            Student</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="bg-white dark:bg-gray-800 p-4 rounded-lg ">
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
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
                <li role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="student-classification-tab" data-tabs-target="#student-classification" type="button"
                        role="tab" aria-controls="student-classification" aria-selected="false">Student
                        Classification</button>
                </li>
                <li role="presentation">
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
            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="personal-remarks" role="tabpanel"
                aria-labelledby="personal-remarks-tab">
                <livewire:personal-remarks />
            </div>
            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="student-classification" role="tabpanel"
                aria-labelledby="student-classification-tab">
                <livewire:student-classification />
            </div>
        </div>
        <livewire:find-student-modal />
    </div>
</x-layout>
