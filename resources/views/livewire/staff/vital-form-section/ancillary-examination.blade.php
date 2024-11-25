<div class="space-y-16">
    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Ancillary Examination</h4>
        <div id="main-content" class="relative w-full h-full bg-gray-50 dark:bg-gray-900">
            <main>
                <div class="flex flex-col">
                    <div class="overflow-x-auto">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden shadow">
                                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                                    <thead class="bg-gray-100 dark:bg-gray-700">
                                        <tr>
                                            <th scope="col"
                                                class="text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                Normal
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Examination Type
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Findings
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody
                                        class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                        @foreach ($examinations as $index => $exam)
                                            <tr wire:key="row-{{ $index }}"
                                                class="hover:bg-gray-100 divide-x divide-gray-200 dark:bg-gray-800 dark:divide-gray-700 dark:hover:bg-gray-700">
                                                <td class="p-4 text-center">
                                                    <livewire:checkbox :wire:key="'checkbox-'.$index" :id="'checkbox-' . $index"
                                                        :value="$exam" />
                                                </td>
                                                <td class="flex items-center p-4">
                                                    <div class="text-base font-semibold text-gray-900 dark:text-white">
                                                        {{ $exam }}
                                                    </div>
                                                </td>
                                                <td class="p-4">
                                                    <input type="text" wire:model.live="findings.{{ $exam }}"
                                                        @disabled(in_array($exam, $checkedExamination))
                                                        class="block w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:border-blue-600 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:ring-0 disabled:opacity-50 disabled:cursor-not-allowed"
                                                        placeholder="{{ in_array($exam, $checkedExamination) ? 'Uncheck Normal first' : 'Enter findings' }}" />
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Additional Examination</h4>
        <div class="grid ml-6 gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="pregnancy" class="block mb-3 font-medium text-gray-900 dark:text-white">Pregnancy Test
                </label>
                <div class="flex ml-4 gap-6">
                    <livewire:radio title="Positive" id="pregnancy-positive" :default="$pregnancy" value="Positive" name="pregnancy" />
                    <livewire:radio title="Negative" id="pregnancy-negative" value="Negative" :default="$pregnancy" name="pregnancy" />
                </div>
            </div>
            <div>
                <label for="hepb" class="block mb-3 font-medium text-gray-900 dark:text-white">Hep B (HBsAg -
                    Screening)
                </label>
                <div class="flex ml-4 gap-6">
                    <livewire:radio title="Reactive" id="reactive" :default="$hepb" value="Reactive" name="hepb" />
                    <livewire:radio title="Non-reactive" id="non-reactive" :default="$hepb" value="Non-reactive" name="hepb" />
                </div>
            </div>
            <div>
                <label for="blood-type" class="block mb-3 font-medium text-gray-900 dark:text-white">Blood Type
                </label>
                <select id="blood-type" wire:model='blood_type'
                    class="bg-gray-50 border max-w-md border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Select Blood Type</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div>
        </div>
    </div>
    {{--<div class="flex items-center justify-between w-full">
        <button id="medical-prev" wire:click="switchToTab('physical-examination')"
            class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Previous</button>
        <button id="medical-next" wire:click="switchToTab('student-classification')"
            class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Next</button>
    </div>--}}
</div>
