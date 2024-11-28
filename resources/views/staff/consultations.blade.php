<x-layout>
    <div class="px-4 flex flex-col mt-4 gap-4 bg-white dark:bg-gray-900">
        <form action="/consultations/select-type" method="GET" class="flex flex-col mb-10">
            @csrf
            <div class="my-auto">
                <div class="">
                    <h4 class="text-2xl mb-4 font-bold dark:text-white">Vital Form</h4>
                    <ul class="grid grid-cols-2 gap-6">
                        <li class="">
                            <input type="radio" id="teaching" name="patient-type" value="teaching"
                                class="hidden peer" required />
                            <label for="teaching"
                                class="inline-flex h-40 items-center justify-center w-full p-5 text-gray-700 bg-white shadow-[rgba(50,_50,_105,_0.15)_0px_2px_5px_0px,_rgba(0,_0,_0,_0.05)_0px_1px_1px_0px] border rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <h3
                                    class="mb-2 flex justify-center items-center text-xl font-medium tracking-tight text-gray-800 dark:text-white text-center">
                                    Consultation for Student and Teaching/Non-Teaching
                                </h3>
                                <div class="">
                                    <svg class="w-5 h-5 min-w-fit rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </div>
                            </label>

                        </li>
                    </ul>
                </div>
                <div class="w-full flex  items-end justify-center">
                    <button type="submit"
                        class="mt-5 text-white w-full max-w-[300px] bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Select
                    </button>
                </div>
            </div>
        </form>
    </div>

    <livewire:consultation-history-table />
</x-layout>
