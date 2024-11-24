<div class="">
    <h4 class="text-xl mb-4 font-bold dark:text-white">Additional Questions</h4>
    <div id="main-content" class="relative w-full h-full bg-gray-50 dark:bg-gray-900">
        <main>
            <div class="overflow-hidden shadow">
                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th scope="col"
                                class="p-4 text-center text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                Question
                            </th>
                            <th scope="col"
                                class="p-4 text-center text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                Response
                            </th>
                            <th scope="col"
                                class="p-4 text-center text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        @foreach ($additionalQuestions as $index => $item)
                            <tr
                                class="hover:bg-gray-100 divide-x divide-gray-200 dark:bg-gray-800 dark:divide-gray-700 dark:hover:bg-gray-700">
                                <td class="flex items-center p-4">
                                    <input type="text" name="additionalQuestions[{{ $index }}][question]"
                                        wire:model="additionalQuestions.{{ $index }}.question"
                                        class="block px-4 w-full text-sm text-gray-900 bg-transparent border-0 focus:border dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-negativene focus:ring-0 focus:border-blue-600 peer"
                                        placeholder="Enter additional question" required />
                                </td>
                                <td class="flex items-center p-4">
                                    <input type="text" name="additionalQuestions[{{ $index }}][response]"
                                        wire:model="additionalQuestions.{{ $index }}.response"
                                        class="block px-4 w-full text-sm text-gray-900 bg-transparent border-0 focus:border dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-negativene focus:ring-0 focus:border-blue-600 peer"
                                        placeholder="Enter response" required />
                                </td>
                                <td class="text-center p-4">
                                    <button type="button" wire:click="removeQuestion({{ $index }})"
                                        class="text-red-500 hover:text-red-700">Remove</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                <button type="button" wire:click="addQuestion"
                    class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">
                    Add Additional Question
                </button>
                <button type="button" wire:click="save"
                    class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-700">
                    Save
                </button>
            </div>
        </main>
        @if (session()->has('message'))
            <div class="mt-4 text-green-600">
                {{ session('message') }}
            </div>
        @endif
    </div>
</div>
