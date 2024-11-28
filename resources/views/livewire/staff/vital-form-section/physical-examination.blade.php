<div class="">
    <h4 class="text-xl mb-4 font-bold dark:text-white">Physical Examinations</h4>

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
                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                    @foreach ($bodyPart as $index => $part)
                                        <tr wire:key="row-{{ $index }}"
                                            class="hover:bg-gray-100 divide-x divide-gray-200 dark:bg-gray-800 dark:divide-gray-700 dark:hover:bg-gray-700">
                                            <td class="p-4 text-center">
                                                <livewire:checkbox :wire:key="'checkbox-'.$index" :id="'checkbox-' . $index"
                                                    :value="$part" />
                                            </td>
                                            <td class="flex items-center p-4">
                                                <div class="text-base font-semibold text-gray-900 dark:text-white">
                                                    {{ $part }}
                                                </div>
                                            </td>
                                            <td class="p-4">
                                                <input type="text" wire:model.live="findings.{{ $part }}"
                                                    @disabled(in_array($part, $checkedBodyPart))
                                                    class="block w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:border-blue-600 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:ring-0 disabled:opacity-50 disabled:cursor-not-allowed"
                                                    placeholder="{{ in_array($part, $checkedBodyPart) ? 'Uncheck Normal first' : 'Enter findings' }}"
                                                    pattern="[A-Za-z ]*"
                                                    title="Only alphabetic characters and spaces are allowed."
                                                    oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '')" />

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

    <button type="button" wire:click="saveToDatabase"
        class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-700">
        Save
    </button>
</div>
