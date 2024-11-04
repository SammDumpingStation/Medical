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
                                          Name
                                      </th>
                                      <th scope="col"
                                          class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                          Biography
                                      </th>
                                      <th scope="col"
                                          class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                          Position
                                      </th>
                                      <th scope="col"
                                          class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                          Country
                                      </th>
                                      <th scope="col"
                                          class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                          Status
                                      </th>
                                      <th scope="col"
                                          class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                          Actions
                                      </th>
                                  </tr>
                              </thead>
                              <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                  @for ($i = 0; $i < 10; $i++)
                                      <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                          <td class="flex items-center p-4 mr-12 space-x-6 whitespace-nowrap">
                                              <img class="w-10 h-10 rounded-full"
                                                  src="http://localhost:1313/images/users/roberta-casas.png"
                                                  alt="Roberta Casas avatar">
                                              <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                                  <div class="text-base font-semibold text-gray-900 dark:text-white">
                                                      Roberta Casas</div>
                                                  <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                                      roberta.casas@flowbite.com</div>
                                              </div>
                                          </td>
                                          <td
                                              class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                              I love working with React and Flowbites to create efficient and
                                              user-friendly
                                              interfaces. In my spare time, I enjoys baking, hiking, and spending time
                                              with
                                              my family.</td>
                                          <td
                                              class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                              Designer</td>
                                          <td
                                              class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                              Spain</td>
                                          <td
                                              class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                              <div class="flex items-center">
                                                  <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Active
                                              </div>
                                          </td>
                                          <td class="p-4 space-x-2 whitespace-nowrap">
                                              <a href="/consultations/vital-form"
                                                  class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                  <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                      xmlns="http://www.w3.org/2000/svg">
                                                      <path
                                                          d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                      </path>
                                                      <path fill-rule="evenodd"
                                                          d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                          clip-rule="evenodd"></path>
                                                  </svg>
                                                  Check Vitals
                                              </a>
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
