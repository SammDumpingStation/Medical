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
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        @for ($i = 0; $i < 10; $i++)
                            <tr
                                class="hover:bg-gray-100 divide-x divide-gray-200 dark:bg-gray-800 dark:divide-gray-700 dark:hover:bg-gray-700">
                                <td class="flex items-center p-4">
                                    <input type="text" name="question" id="question"
                                        class="block px-4 w-full text-sm text-gray-900 bg-transparent border-0 focus:border dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-negativene focus:ring-0 focus:border-blue-600 peer"
                                        placeholder="Enter additional question" required />
                                </td>
                                <td
                                    class="overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                    <input type="text" name="response" id="response"
                                        class="block px-4 w-full text-sm text-gray-900 bg-transparent border-0 focus:border dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-negativene focus:ring-0 focus:border-blue-600 peer"
                                        placeholder="Enter response" required />
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
