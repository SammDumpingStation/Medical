<x-layout>
    <form method="POST" action="#" class="p-4 bg-white block dark:bg-gray-800">
        <div class="mb-4">
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Vital Form For Registered
                Students</h1>
        </div>
        <div class="items-center px-4 justify-between">
            <div class="mb-4">
                <h1 class="text-base font-semibold text-gray-900 dark:text-white">Name: <span class="font-normal">
                        {{ $patient->full_name }}</span></h1>
                <h1 class="text-base font-semibold text-gray-900 dark:text-white">Age: <span class="font-normal">
                        {{ $patient->age }}</span></h1>
                <h1 class="text-base font-semibold text-gray-900 dark:text-white">Sex: <span class="font-normal">
                        {{ $patient->gender }}</span></h1>
                <h1 class="text-base font-semibold text-gray-900 dark:text-white">Civil Status: <span
                        class="font-normal">
                        {{ $patient->civil_status }}</span></h1>
                <h1 class="text-base font-semibold text-gray-900 dark:text-white">Phone Number: <span
                        class="font-normal">
                        {{ $patient->phone_number }}</span></h1>
                <h1 class="text-base font-semibold text-gray-900 dark:text-white">Address: <span class="font-normal">
                        {{ $patient->address }}</span></h1>
            </div>

        </div>
        <div class="">
            <h4 class="text-xl mb-4 font-bold dark:text-white">Consultation Details</h4>
            <div id="main-content" class="relative w-full h-full bg-gray-50 dark:bg-gray-900">
                <main>
                    <div class="overflow-hidden shadow">
                        <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="p-4 text-center text-xs font-medium  text-gray-500 uppercase dark:text-gray-400">
                                        Date, Time & Vital Signs (includes height and weight)
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-center  text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        Chief Complaint(s)/Physical Examination Findings/Diagnosis/Medical
                                        and/or Surgical Management/Plans
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                <tr
                                    class="hover:bg-gray-100 divide-x divide-gray-200 dark:bg-gray-800 dark:divide-gray-700 dark:hover:bg-gray-700">
                                    <td class="flex items-center">
                                        <textarea id="message" rows="4"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Write your thoughts here..."></textarea>
                                        {{-- <input type="text" name="findings" id="findings"
                                            class="block px-4 w-full text-sm text-gray-900 bg-transparent border-0 focus:border dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-negativene focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " required /> --}}
                                    </td>
                                    <td
                                        class="overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                        <textarea id="message" rows="4"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Write your thoughts here..."></textarea>
                                        {{-- <input type="text" name="findings" id="findings"
                                            class="block px-4 w-full text-sm text-gray-900 bg-transparent border-0 focus:border dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-negativene focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " required /> --}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </div>
        <div class="w-full mt-4 flex">
            <button type="submit"
                class="w-full max-w-[500px] mx-auto hover:bg-blue-800 text-white bg-blue-700  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

        </div>
    </form>
</x-layout>
