<div>

    <script>
        function printContent() {
            window.print();
        }

        window.onbeforeprint = function() {
            document.getElementById('printButton').style.display = 'none';
            document.getElementById('health-tab').style.display = 'none';
            document.getElementById('pharmacy-tab').style.display = 'none';


            document.getElementById('header').style.display = 'block';
        };

        window.onafterprint = function() {
            document.getElementById('printButton').style.display = 'block';
            document.getElementById('health-tab').style.display = 'inline-block';
            document.getElementById('pharmacy-tab').style.display = 'inline-block';


            document.getElementById('header').style.display = 'none';
        };
    </script>

    <style>
        @media print {
            body * {
                visibility: hidden;
            }

            .printable,
            .printable * {
                visibility: visible;
            }

            .printable {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
            }

            #printButton,
            #health-tab,
            #pharmacy-tab {
                display: none !important;
            }

            #header {
                display: block !important;
            }
        }

        #header {
            display: none;
        }
    </style>




    <body class="bg-gray-50 dark:bg-gray-900">

        <div class="bg-white p-8 report printable">

            {{-- MAO ning image ninyo diri ibutang tas kaning iyang ID dapat header --}}
            <img src="/images/image__2_-removebg-preview.png" id="header" alt="Image Description"
                  style="width:100%; height:auto; max-height:150px; display:none;">


            <!-- Header -->
            <div class="flex justify-between items-center mb-6 no-print">
                <h1 class="text-3xl font-extrabold text-gray-800 dark:text-gray-100">Generate Analytics</h1>
                <!-- Print button -->
                <button id="printButton" onclick="printContent()"
                    class="flex items-center gap-2 bg-gray-300 dark:bg-gray-700 text-gray-800 dark:text-gray-200 px-5 py-2 rounded-lg shadow hover:bg-gray-400 dark:hover:bg-gray-600 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M4 4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2H4zm8 9H8v-2h4v2zm2-4H6V7h8v2z" />
                    </svg>
                    Print
                </button>
            </div>
            <div>
                <!-- Filters Section -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    {{-- <div>
                    <label for="year-level" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Year
                        Level</label>
                    <select id="year-level" wire:model="yearLevel"
                        class="mt-1 block w-full p-3 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-400 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        <option>All</option>
                        <option value="1">1st Year</option>
                        <option value="2">2nd Year</option>
                        <option value="3">3rd Year</option>
                        <option value="4">4th Year</option>
                    </select>
                </div>
                <div>
                    <label for="course"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Course</label>
                    <select id="course" wire:model="course"
                        class="mt-1 block w-full p-3 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-400 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        <option>All</option>
                        <option>BSIT</option>
                        <option>BSCS</option>
                    </select>
                </div>
                <div>
                    <label for="frequency-options"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Frequency
                        Options</label>
                    <select id="frequency-options" wire:model="frequency"
                        class="mt-1 block w-full p-3 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-400 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        <option>Weekly</option>
                        <option>Monthly</option>
                        <option>Yearly</option>
                    </select>
                </div>
                <div class="col-span-3">
                    <button wire:click="generateReport"
                        class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Generate
                    </button>
                </div> --}}


                    {{-- <body class="bg-gray-50 dark:bg-gray-900">
                <div class="container mx-auto p-6">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-6">
                        <h1 class="text-3xl font-extrabold text-gray-800 dark:text-gray-100">Reports</h1>
                        <button
                            class="flex items-center gap-2 bg-gray-300 dark:bg-gray-700 text-gray-800 dark:text-gray-200 px-5 py-2 rounded-lg shadow hover:bg-gray-400 dark:hover:bg-gray-600 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M4 4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2H4zm8 9H8v-2h4v2zm2-4H6V7h8v2z" />
                            </svg>
                            Print
                        </button>
                    </div> --}}
                </div>

            </div>
            <br>

            <div class="flex justify-center space-x-4 mb-6">
                <button id="health-tab" data-section="health-profile"
                    class="tab-btn bg-blue-600 dark:bg-blue-700 text-white px-6 py-2 rounded-lg shadow font-semibold transition">
                    Health Profile
                </button>
                <button id="pharmacy-tab" data-section="pharmacy"
                    class="tab-btn bg-gray-300 dark:bg-gray-700 text-gray-800 dark:text-gray-200 px-6 py-2 rounded-lg shadow hover:bg-gray-400 dark:hover:bg-gray-600 transition">
                    Pharmacy
                </button>
            </div>




            <!-- Health Profile -->
            <div id="health-profile" class="toggle-section">

                <div>
                    <div
                        class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <div class="w-full">
                            <h3 class="mb-2 text-base font-normal text-gray-500 dark:text-gray-400">Visitation Stats
                            </h3>

                            <!-- Dropdown to select period -->
                            <select wire:model="period" id="periodSelector2" class="mb-4 p-2 border rounded">
                                <option value="daily">Daily (Current Week)</option>
                                <option value="monthly">Monthly (Current Month)</option>
                                <option value="yearly">Yearly (Current Year)</option>
                            </select>

                            <!-- Chart Canvas -->
                            <div class="chartvis" id="chartvis"> <canvas id="Visitation"></canvas></div>
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow rounded-lg">
                    <table class="min-w-full border-collapse border border-gray-300 dark:border-gray-700">
                        <thead>
                            <h2>Complete Vital Profiles Record</h2>
                            <tr class="bg-gray-200 dark:bg-gray-700">
                                <th
                                    class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-left text-gray-800 dark:text-gray-200">
                                    Patient ID
                                </th>
                                <th
                                    class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-left text-gray-800 dark:text-gray-200">
                                    Patient Name
                                </th>
                                <th
                                    class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-left text-gray-800 dark:text-gray-200">
                                    Age
                                </th>
                                <th
                                    class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-left text-gray-800 dark:text-gray-200">
                                    Gender
                                </th>
                                <th
                                    class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-left text-gray-800 dark:text-gray-200">
                                    Year Level
                                </th>
                                <th
                                    class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-left text-gray-800 dark:text-gray-200">
                                    Department
                                </th>
                                <th
                                    class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-left text-gray-800 dark:text-gray-200">
                                    Date
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($consultationHistories as $history)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                    <td
                                        class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-gray-800 dark:text-gray-200">
                                        {{ $history->patient_id }}
                                    </td>
                                    <td
                                        class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-gray-800 dark:text-gray-200">
                                        {{ $history->patient->full_name ?? 'N/A' }}
                                    </td>
                                    <td
                                        class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-gray-800 dark:text-gray-200">
                                        {{ $history->patient->age ?? 'N/A' }}
                                    </td>
                                    <td
                                        class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-gray-800 dark:text-gray-200">
                                        {{ $history->patient->gender ?? 'N/A' }}
                                    </td>
                                    <td
                                        class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-gray-800 dark:text-gray-200">
                                        {{ $history->patient->year ?? 'N/A' }}
                                    </td>
                                    <td
                                        class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-gray-800 dark:text-gray-200">
                                        {{ $history->patient->course ?? 'N/A' }}
                                    </td>
                                    <td
                                        class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-gray-800 dark:text-gray-200">
                                        {{ \Carbon\Carbon::parse($history->date)->format('m/d/Y') }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center py-4 text-gray-800 dark:text-gray-200">No
                                        Consultation History Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="pharmacy" class="toggle-section hidden">

                <div
                    class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div class="w-full">
                        <h3 class="mb-2 text-base font-normal text-gray-500 dark:text-gray-400">Dispensed Medicine Stats
                        </h3>

                        <!-- Dropdown to select period -->
                        <select id="periodSelector" class="mb-4 p-2 border rounded">
                            <option value="daily">Daily (Current Week)</option>
                            <option value="monthly">Monthly (Current Month)</option>
                            <option value="yearly">Yearly (Current Year)</option>
                        </select>

                        <!-- Chart Canvas -->
                        <div class="chartvis" id="chartvis"> <canvas id="dispenseMedicineChart"></canvas></div>
                    </div>
                </div>

                <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow rounded-lg">
                    <h2>Dispensed Medicine Records</h2>
                    <table class="min-w-full border-collapse border border-gray-300 dark:border-gray-700">
                        <thead>
                            <tr class="bg-gray-200 dark:bg-gray-700">
                                <th
                                    class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-left text-gray-800 dark:text-gray-200">
                                    Patient ID
                                </th>
                                <th
                                    class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-left text-gray-800 dark:text-gray-200">
                                    Medicine Name
                                </th>
                                <th
                                    class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-left text-gray-800 dark:text-gray-200">
                                    Quantity Dispensed
                                </th>
                                <th
                                    class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-left text-gray-800 dark:text-gray-200">
                                    Medicine Type
                                </th>
                                <th
                                    class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-left text-gray-800 dark:text-gray-200">
                                    Given Date
                                </th>
                                <th
                                    class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-left text-gray-800 dark:text-gray-200">
                                    Expiration Date
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($dispensedMedicineRecords as $record)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                    <td
                                        class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-gray-800 dark:text-gray-200">
                                        {{ $record->patient_id }}
                                    </td>
                                    <td
                                        class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-gray-800 dark:text-gray-200">
                                        {{ $record->medicine->Name ?? 'Unknown' }}
                                    </td>
                                    <td
                                        class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-gray-800 dark:text-gray-200">
                                        {{ $record->quantity_dispensed }}
                                    </td>
                                    <td
                                        class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-gray-800 dark:text-gray-200">
                                        {{ $record->medicine_type }}
                                    </td>
                                    <td
                                        class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-gray-800 dark:text-gray-200">
                                        {{ \Carbon\Carbon::parse($record->given_date)->format('m/d/Y') }}
                                    </td>
                                    <td
                                        class="border border-gray-300 dark:border-gray-600 px-6 py-3 text-gray-800 dark:text-gray-200">
                                        {{ \Carbon\Carbon::parse($record->expiration_date)->format('m/d/Y') }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-4 text-gray-800 dark:text-gray-200">No
                                        Dispensed Medicine Records Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>





            <script>
                const tabs = document.querySelectorAll('.tab-btn');
                const sections = document.querySelectorAll('.toggle-section');

                tabs.forEach(tab => {
                    tab.addEventListener('click', () => {
                        tabs.forEach(t => t.classList.remove('bg-blue-600', 'text-white'));
                        tabs.forEach(t => t.classList.add('bg-gray-300', 'dark:bg-gray-700', 'text-gray-800',
                            'dark:text-gray-200'));

                        tab.classList.add('bg-blue-600', 'text-white');
                        tab.classList.remove('bg-gray-300', 'dark:bg-gray-700', 'text-gray-800',
                            'dark:text-gray-200');

                        sections.forEach(section => section.classList.add('hidden'));

                        const sectionId = tab.getAttribute('data-section');
                        document.getElementById(sectionId).classList.remove('hidden');
                    });
                });
            </script>











            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script>
                const weeklyConsultations = @json($weeklyConsultations);
                const monthlyConsultations = @json($monthlyConsultations);
                const yearlyConsultations = @json($yearlyConsultations);


                const ctx = document.getElementById('Visitation').getContext('2d');
                let visitationChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                        datasets: [{
                            label: 'Completed Health Profile',
                            data: Object.values(weeklyConsultations),
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true,
                                title: {
                                    display: true,
                                    text: 'Number of Completed Health Profile'
                                }
                            },
                            x: {
                                title: {
                                    display: true,
                                    text: 'Days of the Week'
                                }
                            }
                        }
                    }
                });

                document.getElementById('periodSelector2').addEventListener('change', function() {
                    const period = this.value;

                    if (period === 'daily') {
                        visitationChart.data.labels = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                        visitationChart.data.datasets[0].data = Object.values(weeklyConsultations);
                        visitationChart.data.datasets[0].backgroundColor = 'rgba(75, 192, 192, 0.2)';
                        visitationChart.data.datasets[0].borderColor = 'rgba(75, 192, 192, 1)';
                    } else if (period === 'monthly') {
                        visitationChart.data.labels = Object.keys(monthlyConsultations);
                        visitationChart.data.datasets[0].data = Object.values(monthlyConsultations);
                        visitationChart.data.datasets[0].backgroundColor = 'rgba(153, 102, 255, 0.2)';
                        visitationChart.data.datasets[0].borderColor = 'rgba(153, 102, 255, 1)';
                    } else if (period === 'yearly') {
                        visitationChart.data.labels = ['2024'];
                        visitationChart.data.datasets[0].data = [yearlyConsultations];
                        visitationChart.data.datasets[0].backgroundColor = 'rgba(255, 159, 64, 0.2)';
                        visitationChart.data.datasets[0].borderColor = 'rgba(255, 159, 64, 1)';
                    }

                    visitationChart.update();
                });
            </script>


            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const ctx = document.getElementById('dispenseMedicineChart').getContext('2d');
                    const periodSelector = document.getElementById('periodSelector');

                    const weeklyCountsByDay = @json($weeklyCountsByDay);
                    const monthlyCounts = @json($monthlyCounts);
                    const yearlyCounts =
                        @json($yearlyCounts);
                    const dailyCount = @json($dailyCount);

                    function updateChartData(chart, dataLabels, dataCounts) {
                        chart.data.labels = dataLabels;
                        chart.data.datasets[0].data = dataCounts;
                        chart.update();
                    }

                    const chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: Object.keys(weeklyCountsByDay),
                            datasets: [{
                                label: 'Dispensed Medicine Count',
                                data: Object.values(weeklyCountsByDay),
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });

                    periodSelector.addEventListener('change', function() {
                        const selectedPeriod = periodSelector.value;

                        if (selectedPeriod === 'daily') {
                            updateChartData(chart, ['Today'], [dailyCount]);
                        } else if (selectedPeriod === 'weekly') {
                            updateChartData(chart, Object.keys(weeklyCountsByDay), Object.values(
                                weeklyCountsByDay));
                        } else if (selectedPeriod === 'monthly') {
                            const monthLabels = [
                                'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
                            ];
                            const monthData = monthLabels.map((month, index) => monthlyCounts[index + 1] ||
                                0);
                            updateChartData(chart, monthLabels, monthData);
                        } else if (selectedPeriod === 'yearly') {
                            const yearLabels = Object.keys(
                                yearlyCounts);
                            updateChartData(chart, yearLabels, Object.values(
                                yearlyCounts));
                        }
                    });
                });
            </script>
