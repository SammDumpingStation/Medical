<div class="">
    <h4 class="text-xl mb-4 font-bold dark:text-white">Personal Remarks</h4>
    <div id="main-content" class="relative w-full h-full bg-gray-50 dark:bg-gray-900">
        <main>
            <div class="overflow-hidden shadow">
                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th scope="col" class="p-4 text-center text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                Diagnosis
                            </th>
                            <th scope="col" class="p-4 text-center text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                Remarks
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        <tr class="hover:bg-gray-100 divide-x divide-gray-200 dark:bg-gray-800 dark:divide-gray-700 dark:hover:bg-gray-700">
                            <td class="flex items-center p-4">
                                <textarea wire:model="diagnosis" id="diagnosis" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Write the diagnosis here..."></textarea>
                            </td>
                            <td class="overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                <textarea wire:model="remarks" id="remarks" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Write your remarks here..."></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
    <div class="flex items-center justify-between w-full">
        {{--<button id="medical-prev" wire:click="switchToTab('student-classification')"
            class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Previous
        </button>--}}

        @if ($gender === 'Female')
            <a href="/health-profile/create-form-3/{{ $patientID }}"
                wire:click="savePersonalRemarks"
                class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Next
            </a>
        @else
            <a href="/health-profile/create-form/{{ $patientID }}/summary" 
                wire:click="savePersonalRemarks" 
                class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Next
            </a>
        @endif
    </div>
</div>
