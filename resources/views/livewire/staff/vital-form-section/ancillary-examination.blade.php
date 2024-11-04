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
                                                Body Part
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Findings
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody
                                        class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                        @foreach ($examinations as $examination)
                                            <tr
                                                class="hover:bg-gray-100 divide-x divide-gray-200 dark:bg-gray-800 dark:divide-gray-700 dark:hover:bg-gray-700">
                                                <td class="">
                                                    <livewire:checkbox />
                                                </td>
                                                <td class="flex items-center p-4">
                                                    <div class="text-base font-semibold text-gray-900 dark:text-white">
                                                        {{ $examination }}</div>
                                                </td>
                                                <td
                                                    class="overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                                    <input type="text" name="findings" id="findings"
                                                        class="block px-4 w-full text-sm text-gray-900 bg-transparent border-0 focus:border dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-negativene focus:ring-0 focus:border-blue-600 peer"
                                                        placeholder=" " required />
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
                    <livewire:radio title="Positive" id="pregnancy-positive" value="positive" name="pregnancy" />
                    <livewire:radio title="Negative" id="pregnancy-negative" value="negative" name="pregnancy" />
                </div>
            </div>
            <div>
                <label for="hepb" class="block mb-3 font-medium text-gray-900 dark:text-white">Hep B (HBsAg -
                    Screening)
                </label>
                <div class="flex ml-4 gap-6">
                    <livewire:radio title="Reactive" id="smoke-reactive" value="reactive" name="hepb" />
                    <livewire:radio title="Non-reactive" id="smoke-non-reactive" value="non-reactive" name="hepb" />
                </div>
            </div>
            <div>
                <label for="blood-type" class="block mb-3 font-medium text-gray-900 dark:text-white">Blood Type
                </label>
                <select id="blood-type"
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


    <livewire:next-prev-button />


</div>
