<div>
    <section>
        <div class="p-4 bg-white flex flex-col justify-between dark:bg-gray-800">
            <div class="p-4 bg-white block sm:flex items-center justify-between dark:bg-gray-800">
                <div class="w-full mb-1">
                    <div class="mb-4">
                        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Health Profile</h1>
                    </div>
                    <div class="sm:flex">
                        <form class="max-w-md w-full">
                            <label for="default-search"
                                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="number" id="default-search" wire:model.live.debounce.500ms='search'
                                    class=" block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Search Student by ID" required />
                                <button type="submit"
                                    class="hover:bg-blue-800 text-white absolute end-2.5 bottom-2.5 bg-blue-700  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg ">
                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="doctor-confirmation-tab"
                        data-tabs-toggle="#default-tab-content" role="tablist">

                        <li class="me-2" role="presentation">
                            <button  class="inline-block p-4 border-b-2 rounded-t-lg" id="health-profile-tab"
                                data-tabs-target="#health-profile" type="button" role="tab" aria-controls="health-profile"
                                aria-selected="false">Health Profile Creation</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="confirmation-tab"
                                data-tabs-target="#confirmation" type="button" role="tab"
                                aria-controls="confirmation" aria-selected="false">Confirm Health Profile Creation</button>
                        </li>

                    </ul>
                </div>
                <div id="default-tab-content">
                    <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="health-profile" role="tabpanel"
                        aria-labelledby="health-profile-tab">
                        <livewire:health-profile-table :disabled="true" />
                    </div>
                    <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="confirmation" role="tabpanel"
                        aria-labelledby="confirmation-tab">
                        <livewire:doctor-cofirmation-table/>
                    </div>
                </div>
            </div>
    </section>
</div>
