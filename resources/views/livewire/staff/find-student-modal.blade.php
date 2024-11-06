    <div class="fixed left-0 right-0 z-50 items-center hidden justify-center overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
        id="find-user-modal">
        <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                    <div class="flex flex-col">
                        <h3 class="text-xl font-semibold dark:text-white">
                            Vital Form Creation
                        </h3>
                        <h3 class="text-sm text-gray-500 dark:text-white">
                            Select a Student ID to start
                        </h3>
                    </div>

                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                        data-modal-toggle="find-user-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <form action="#">
                        <div class="flex w-full">
                            <div class="w-full">
                                <label for="student-id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Student ID</label>
                                <livewire:search-bar />
                                {{-- <input type="text" name="student-id" id="student-id"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Select a student by ID" required> --}}
                            </div>
                        </div>
                </div>
                <!-- Modal footer -->
                <div class="flex justify-end p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                    <a href="/consultations/vital-form"
                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Select
                        Student</a>
                </div>
                </form>
            </div>
        </div>
    </div>
