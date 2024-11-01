  <aside id="sidebar"
      class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width"
      aria-label="Sidebar">
      <div
          class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r-2 border-gray-200 dark:bg-gray-800 dark:border-gray-700">
          <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
              <div
                  class="flex-1 px-3 space-y-1 bg-white divide-y-2 divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                  <ul class="pb-4 space-y-4">
                      <li>
                          <form action="#" method="GET" class="lg:hidden">
                              <label for="mobile-search" class="sr-only">Search</label>
                              <div class="relative">
                                  <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                      <svg class="w-5 h-5 fill-inherit" fill="currentColor" viewBox="0 0 20 20"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd"
                                              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                              clip-rule="evenodd"></path>
                                      </svg>
                                  </div>
                                  <input type="text" name="email" id="mobile-search"
                                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-200 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                      placeholder="Search">
                              </div>
                          </form>
                      </li>

                      <livewire:sidebar-list label="Dashboard" :active="request()->is('/')" href="/"
                          icon='<svg class="w-6 h-6 fill-inherit transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z" clip-rule="evenodd"/>
                                </svg>' />

                      <livewire:sidebar-list label="Consultations" :active="request()->is('consultations')" href="/consultations"
                          icon='<svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17 10.27V4.99a1 1 0 0 0-2 0V15a5 5 0 0 1-10 0v-1.08A6 6 0 0 1 0 8V2C0 .9.9 0 2 0h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1H2v6a4 4 0 1 0 8 0V2H9a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1a2 2 0 0 1 2 2v6a6 6 0 0 1-5 5.92V15a3 3 0 0 0 6 0V5a3 3 0 0 1 6 0v5.27a2 2 0 1 1-2 0z"/></svg>' />

                      <livewire:sidebar-list label="Health Profile" :active="request()->is('health-profile')" href="/health-profile"
                          icon='<svg class="w-6 h-6 fill-inherit transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                                </svg>' />

                      <livewire:sidebar-list label="Prescriptions" :active="request()->is('prescriptions')" href="/prescriptions"
                          icon='<svg class="w-6 h-6 fill-inherit transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Zm-6 8a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm1 3a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z" clip-rule="evenodd"/>
                                </svg>' />

                      <livewire:sidebar-list label="Dental Records" href="/dental-records" :active="request()->is('dental-records')"
                          icon='<svg enable-background="new 0 0 48 48" version="1.1" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><g id="Layer_3"><path d="M46.246,12.633c0-5.698-4.622-10.317-10.317-10.317c-2.241,0-4.302,0.722-5.984,1.943   c-0.009,0.004-0.017,0.004-0.023,0.009c-3.99,2.502-8.349-0.559-8.349-0.559s-0.01,0.019-0.012,0.023   c-2.085-2.251-5.04-3.684-8.353-3.684C6.883,0.048,1.756,5.175,1.756,11.5c-0.152,5.237,5.74,21.705,8.156,28.219l1.196,3.623   c0.053,0.217,0.129,0.416,0.205,0.623l0.107,0.318l0.012-0.012c0.006,0.016,0.018,0.027,0.022,0.035   c0.423,0.906,1.367,2.195,1.367,2.195l0.003-0.02c0.715,0.889,1.795,1.469,3.027,1.469c1.47,0,2.734-0.816,3.403-2.016   c0.011-0.02,0.02-0.037,0.031-0.055c0.191-0.355,0.336-0.736,0.409-1.148c0.002-0.006,0.006-0.01,0.007-0.016   c0.711-3.352,3.544-15.275,3.544-15.275c-0.001-0.033-0.019-0.061-0.019-0.094c0-0.09,0.039-0.166,0.05-0.252   c0.02-0.178,0.037-0.287,0.037-0.287l0.019,0.018c0.229-0.762,0.91-1.33,1.748-1.33c0.401,0,0.754,0.152,1.059,0.371   c0.032,0.018,0.061,0.043,0.093,0.064c0.418,0.34,0.699,0.836,0.699,1.416c0,0,3.264,11.971,3.666,14.979   c0.007,0.047,0.021,0.082,0.025,0.127c0.05,0.455,0.169,0.887,0.359,1.281c0.573,1.318,1.549,1.779,1.977,1.922   c0.028,0.002,0.054,0.004,0.08,0.008c0.453,0.182,0.941,0.287,1.459,0.287c1.198,0,2.26-0.545,2.977-1.393l0.01,0.002   c0,0,0.025-0.033,0.032-0.039c0.01-0.012,0.017-0.021,0.023-0.031c0.137-0.164,0.75-0.928,1.154-1.854h0.005l0.039-0.092   c0.003-0.008,0.008-0.012,0.008-0.02c0.002-0.004,0.002-0.006,0.002-0.012l0.144-0.348c0.025-0.041,0.054-0.08,0.07-0.125h0.01   l0.032-0.094c0.01-0.02,0.017-0.045,0.023-0.062l0.658-1.818l-0.012,0.002c3.508-7.959,5.573-21.668,6.285-27.1   C46.131,14.214,46.246,13.438,46.246,12.633z" fill="currentColor"/></g></svg>' />
                  </ul>
                  <ul class="pt-4 space-y-4">
                      <livewire:sidebar-list label="Statistics" :active="request()->is('statistics')" href="/statistics"
                          icon='<svg class="w-6 h-6 fill-inherit transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                </svg>' />

                      <livewire:sidebar-list label="Pharmacy" :active="request()->is('pharmacy')" href="/pharmacy"
                          icon='<svg class="w-6 h-6 fill-inherit transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.99057 3.99057C1.33648 6.64466 1.33648 10.9478 3.99057 13.6019L6.55391 16.1652L7.0495 16.0698C7.04919 16.0698 7.04956 16.0698 7.05049 16.0696L7.06435 16.0666C7.07872 16.0634 7.10332 16.0577 7.13754 16.0491C7.20599 16.0318 7.31287 16.0027 7.45346 15.9578C7.73465 15.868 8.1504 15.7153 8.66292 15.4683C9.68709 14.9747 11.1005 14.1037 12.6019 12.6023C14.1032 11.101 14.9744 9.68744 15.468 8.66312C15.7151 8.15053 15.8679 7.73472 15.9578 7.45347C16.0027 7.31286 16.0318 7.20594 16.0491 7.13748C16.0577 7.10325 16.0634 7.07865 16.0666 7.06426L16.0696 7.05043C16.0698 7.04952 16.0699 7.04909 16.0698 7.0494L16.1653 6.55397L13.6019 3.99057C10.9478 1.33648 6.64466 1.33648 3.99057 3.99057Z" />
                                <path d="M17.4187 7.80734C17.4087 7.83998 17.398 7.87417 17.3866 7.90986C17.2772 8.25257 17.099 8.73396 16.8193 9.31437C16.2594 10.4761 15.2939 12.0316 13.6625 13.663C12.0312 15.2943 10.4757 16.2598 9.31411 16.8195C8.73375 17.0992 8.2524 17.2773 7.90973 17.3867C7.8741 17.3981 7.83996 17.4088 7.80737 17.4187L10.3981 20.0094C13.0522 22.6635 17.3553 22.6635 20.0094 20.0094C22.6635 17.3553 22.6635 13.0522 20.0094 10.3981L17.4187 7.80734Z" />
                                </svg>' />

                      <livewire:sidebar-list label="Inventory" :active="request()->is('inventory')" href="/inventory"
                          icon='<svg class="w-6 h-6 fill-inherit transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 1 0 0 4h16a2 2 0 1 0 0-4H4Zm0 6h16v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-8Zm10.707 5.707a1 1 0 0 0-1.414-1.414l-.293.293V12a1 1 0 1 0-2 0v2.586l-.293-.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l2-2Z" clip-rule="evenodd"/>
                                </svg>' />
                  </ul>
              </div>
          </div>
      </div>
  </aside>
