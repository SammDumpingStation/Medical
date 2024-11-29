<div>
    <h4 class="text-xl mb-4 font-bold dark:text-white">Personal Remarks</h4>
    <div id="main-content" class="relative w-full h-full bg-gray-50 dark:bg-gray-900">
        <main>
            <div class="overflow-hidden shadow rounded-lg">
                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th scope="col"
                                class="p-4 text-center text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                Diagnosis
                            </th>
                            <th scope="col"
                                class="p-4 text-center text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                Remarks
                            </th>
                            <th scope="col"
                                class="p-4 text-center text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        @foreach ($diagnoses as $index => $diagnosis)
                            <tr
                                class="hover:bg-gray-100 dark:hover:bg-gray-700 divide-x divide-gray-200 dark:divide-gray-700">
                                <!-- Diagnosis Input -->
                                <td class="p-4">
                                    <input type="text" wire:model="diagnoses.{{ $index }}"
                                        class="block w-full text-sm text-gray-900 bg-gray-100 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Enter Diagnosis" required
                                        oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g, '');"
                                        title="Only letters and spaces are allowed" />
                                    @error("diagnoses.$index")
                                        <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror
                                </td>

                                <!-- Remarks Input -->
                                <td class="p-4">
                                    <input type="text" wire:model="remarks.{{ $index }}"
                                        class="block w-full text-sm text-gray-900 bg-gray-100 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Enter Remarks" required
                                        oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g, '');"
                                        title="Only letters and spaces are allowed" />
                                    @error("remarks.$index")
                                        <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror
                                </td>

                                <!-- Save Button -->
                                <td class="p-4 text-center">
                                    <button wire:click="saveRow({{ $index }})"
                                        class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:ring-offset-1 dark:focus:ring-offset-gray-800">
                                        Save
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Add a feedback area for flash messages -->
                @if (session('message'))
                    <div class="mt-4 p-4 bg-green-100 text-green-800 rounded-lg dark:bg-green-900 dark:text-green-200">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </main>
    </div>
</div>
