<x-layout>
    <form action="/consultations/select-type" method="GET" class="flex flex-col min-h-[70vh]">
        @csrf
        <div class="my-auto">
            <div class="px-6">
                <h4 class="text-4xl mb-4 font-bold dark:text-white text-center">Create a vital form for</h4>
                <ul class="grid grid-cols-2 gap-6">
                    <li class="">
                        <input type="radio" id="student" name="patient-type" value="student" class="hidden peer"
                            required />
                        <label for="student"
                            class="inline-flex h-64 items-center justify-between w-full p-5 text-gray-700 bg-white shadow-[rgba(50,_50,_105,_0.15)_0px_2px_5px_0px,_rgba(0,_0,_0,_0.05)_0px_1px_1px_0px] border rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <div class="w-full text-2xl text-center font-semibold">Registered Student Patients</div>
                        </label>
                    </li>
                    <li class="">
                        <input type="radio" id="teaching" name="patient-type" value="teaching" class="hidden peer"
                            required />
                        <label for="teaching"
                            class="inline-flex h-64 items-center justify-between w-full p-5 text-gray-700 bg-white shadow-[rgba(50,_50,_105,_0.15)_0px_2px_5px_0px,_rgba(0,_0,_0,_0.05)_0px_1px_1px_0px] border rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <div class="w-full text-2xl text-center font-semibold">Teaching/Non-Teaching Personnel</div>
                        </label>
                    </li>
                </ul>
            </div>
            <div class="w-full flex">
                <button type="submit"
                    class="mt-5 w-full max-w-[500px] m-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Select
                </button>
            </div>
        </div>
    </form>
</x-layout>
