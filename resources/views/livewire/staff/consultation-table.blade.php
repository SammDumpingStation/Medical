  <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 dark:bg-gray-900">
      <main>
          <div class="flex flex-col">
              <div class="overflow-x-auto">
                  <div class="inline-block min-w-full align-middle">
                      <div class="overflow-hidden shadow">
                          <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                              <thead class="bg-gray-100 dark:bg-gray-700">
                                  <tr>
                                      <th scope="col"
                                          class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                          Patient ID
                                      </th>
                                      <th scope="col"
                                          class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                          Patient Name
                                      </th>
                                      <th scope="col"
                                          class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                          Age
                                      </th>
                                      <th scope="col"
                                          class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                          Gender
                                      </th>
                                      <th scope="col"
                                          class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                          Date
                                      </th>
                                      <th scope="col"
                                          class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                          Department
                                      </th>
                                      <th scope="col"
                                          class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                          Primary Diagnosis
                                      </th>
                                      <th scope="col"
                                          class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                          Status
                                      </th>
                                  </tr>
                              </thead>
                              <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                  @for ($i = 0; $i < 10; $i++)
                                      <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                          <td class="flex items-center p-4 space-x-6 whitespace-nowrap">
                                              <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                                  <div class="text-base text-gray-900 dark:text-white">
                                                      2022307321</div>
                                              </div>
                                          </td>
                                          <td
                                              class="max-w-sm p-4 overflow-hidden text-base font-normal truncate xl:max-w-xs dark:text-gray-400">
                                              Samm Caagbay</td>
                                          <td
                                              class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                              21</td>
                                          <td
                                              class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                              Male</td>
                                          <td
                                              class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                              2024-30-31

                                          </td>
                                          <td class="p-4 space-x-2 whitespace-nowrap">
                                              CITC
                                          </td>
                                          <td class="p-4 space-x-2 whitespace-nowrap">
                                              Fever
                                          </td>
                                          <td class="p-4 whitespace-nowrap">
                                              <span
                                                  class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500">Completed</span>
                                          </td>
                                      </tr>
                                  @endfor
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
          <div
              class="sticky bottom-0 right-0 items-center w-full p-4 bg-white border-t border-gray-200 sm:flex sm:justify-between dark:bg-gray-800 dark:border-gray-700">
              <div class="flex items-center mb-4 sm:mb-0">
                  <a href="#"
                      class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                      <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd"
                              d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                              clip-rule="evenodd"></path>
                      </svg>
                  </a>
                  <a href="#"
                      class="inline-flex justify-center p-1 mr-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                      <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"></path>
                      </svg>
                  </a>
                  <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span
                          class="font-semibold text-gray-900 dark:text-white">1-20</span> of <span
                          class="font-semibold text-gray-900 dark:text-white">2290</span></span>
              </div>
              <div class="flex items-center space-x-3">
                  <a href="#"
                      class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                      <svg class="w-5 h-5 mr-1 -ml-1"" fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd"
                              d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                              clip-rule="evenodd"></path>
                      </svg>
                      Previous
                  </a>
                  <a href="#"
                      class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                      Next
                      <svg class="w-5 h-5 ml-1 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"></path>
                      </svg>
                  </a>
              </div>
          </div>
      </main>
  </div>
