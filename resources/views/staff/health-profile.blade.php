<x-layout>
    <div class="">
        <div
            class="p-4 bg-white block sm:flex items-end justify-between border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <div class="w-full mb-1">
                <div class="mb-4">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Student Health Profile</h1>
                </div>
                <div class="flex justify-between">
                    <livewire:search-bar />
                    <button type="button" data-modal-target="find-user-modal" data-modal-toggle="find-user-modal"
                        class="inline-flex min-w-max items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Create Student Health Profile
                    </button>
                </div>
            </div>

        </div>
        <livewire:consultation-table />
    </div>
    <!-- find User Modal -->
<livewire:find-student-modal />
</x-layout>
