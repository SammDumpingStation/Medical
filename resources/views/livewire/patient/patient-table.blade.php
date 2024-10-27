<div class="relative rounded-2xl p-4 overflow-x-auto shadow-md flex-1 bg-white flex flex-col gap-4">
    <div class="flex justify-between">
        <h1 class="text-xl font-bold">Check-Up List</h1>
        <di class="border pl-3 gap-2 py-1 flex items-center rounded-md w-64">
            <i class="fas fa-search text-[#9b9b9b]"></i>
            <input type="text" class="bg-white flex-1 border-none" placeholder="Search Patients">
        </di>
    </div>
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Patient ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Patient Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Age
                </th>
                <th scope="col" class="px-6 py-3">
                    Gender
                </th>
                <th scope="col" class="px-6 py-3">
                    Department
                </th>
                <th scope="col" class="px-6 py-3">
                    Primary Diagnosis
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b hover:bg-gray-50">
                <td class="px-6 py-4">
                    P-001
                </td>
                <td class="px-6 py-4">
                    John Doe
                </td>
                <td class="px-6 py-4">
                    45
                </td>
                <td class="px-6 py-4">
                    Male
                </td>
                <td class="px-6 py-4">
                    Cardiology
                </td>
                <td class="px-6 py-4">
                    Hypertension
                </td>
                <td class="px-6 py-4">
                    <div class="bg-[#EDF9F5] items-center flex justify-center text-[#009053] py-2 rounded-md">
                        Active
                    </div>

                </td>
            </tr>
            <tr class="bg-white border-b hover:bg-gray-50">
                <td class="px-6 py-4">
                    P-002
                </td>
                <td class="px-6 py-4">
                    Jane Smith
                </td>
                <td class="px-6 py-4">
                    32
                </td>
                <td class="px-6 py-4">
                    Female
                </td>
                <td class="px-6 py-4">
                    Neurology
                </td>
                <td class="px-6 py-4">
                    Migraine
                </td>
                <td class="px-6 py-4">
                    Pending
                </td>
            </tr>
        </tbody>
    </table>
</div>
