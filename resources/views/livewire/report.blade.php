<body class="bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto p-6">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-extrabold text-gray-800 dark:text-gray-100">Reports</h1>
            <button class="flex items-center gap-2 bg-gray-300 dark:bg-gray-700 text-gray-800 dark:text-gray-200 px-5 py-2 rounded-lg shadow hover:bg-gray-400 dark:hover:bg-gray-600 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M4 4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2H4zm8 9H8v-2h4v2zm2-4H6V7h8v2z" />
                </svg>
                Print
            </button>
        </div>

        <!-- Filters Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div>
                <label for="year-level" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Year Level</label>
                <select id="year-level" class="mt-1 block w-full p-3 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-400 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option>All</option>
                    <option>1st Year</option>
                    <option>2nd Year</option>
                </select>
            </div>
            <div>
                <label for="course" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Course</label>
                <select id="course" class="mt-1 block w-full p-3 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-400 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option>All</option>
                    <option>BSIT</option>
                    <option>BSCS</option>
                </select>
            </div>
            <div>
                <label for="frequency-options" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Frequency Options</label>
                <select id="frequency-options" class="mt-1 block w-full p-3 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-400 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option>Weekly</option>
                    <option>Monthly</option>
                    <option>Yearly</option>
                </select>
            </div>
        </div>

        <!-- Apply Filters Button -->
        <div class="flex justify-center mb-6">
            <button class="bg-blue-600 dark:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold shadow hover:bg-blue-700 dark:hover:bg-blue-800 transition">
                APPLY FILTERS
            </button>
        </div>

        <!-- Tab Buttons -->
        <div class="flex justify-center space-x-4 mb-6">
            <button class="bg-gray-300 dark:bg-gray-700 text-gray-800 dark:text-gray-200 px-6 py-2 rounded-lg shadow hover:bg-gray-400 dark:hover:bg-gray-600 transition">
                Health Profile
            </button>
            <button class="bg-gray-300 dark:bg-gray-700 text-gray-800 dark:text-gray-200 px-6 py-2 rounded-lg shadow hover:bg-gray-400 dark:hover:bg-gray-600 transition">
                Medicine
            </button>
        </div>

        <!-- Table Section -->
        <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow rounded-lg">
            <table class="min-w-full border-collapse border border-gray-300 dark:border-gray-700">
                <thead>
                    <tr class="bg-gray-200 dark:bg-gray-700">
                        <th class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-left text-gray-800 dark:text-gray-200">Patient ID</th>
                        <th class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-left text-gray-800 dark:text-gray-200">Patient Name</th>
                        <th class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-left text-gray-800 dark:text-gray-200">Age</th>
                        <th class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-left text-gray-800 dark:text-gray-200">Gender</th>
                        <th class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-left text-gray-800 dark:text-gray-200">Year Level</th>
                        <th class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-left text-gray-800 dark:text-gray-200">Department</th>
                        <th class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-left text-gray-800 dark:text-gray-200">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                        <td class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-gray-800 dark:text-gray-200">20211275</td>
                        <td class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-gray-800 dark:text-gray-200">Daniel Ray Susana</td>
                        <td class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-gray-800 dark:text-gray-200">22</td>
                        <td class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-gray-800 dark:text-gray-200">Male</td>
                        <td class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-gray-800 dark:text-gray-200">4th Year</td>
                        <td class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-gray-800 dark:text-gray-200">BSIT</td>
                        <td class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-gray-800 dark:text-gray-200">11/29/2024</td>
                    </tr>
                    <!-- Add additional rows dynamically -->
                </tbody>
            </table>
        </div>
    </div>
</body>
