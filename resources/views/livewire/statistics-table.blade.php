<div>
    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white p-4">Statistical Dashboard</h1>
    <div class="px-4 pt-4 2xl:px-0">
        <div class="">
            <!-- Main widget -->
            <div
                class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex-shrink-0">
                        <h3 class="text-base font-light text-gray-500 dark:text-gray-400">Visitation This Week</h3>
                        <span class="text-xl font-bold leading-none text-gray-900 sm:text-2xl dark:text-white">
                            {{ $newVisitationsThisWeek }}
                        </span>
                    </div>

                    <div
                        class="flex items-center justify-end flex-1 text-base font-medium text-green-500 dark:text-green-400">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>

                <!-- Chart Container -->
                <div class="relative">
                    <canvas id="visitationsChart" width="400" height="200"></canvas>
                </div>

                <!-- Card Footer -->
                <div
                    class="flex items-center justify-between pt-3 mt-4 border-t border-gray-200 sm:pt-4 dark:border-gray-700">
                    <div>
                        <button
                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
                            type="button" data-dropdown-toggle="weekly-sales-dropdown">Last 7 days
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="weekly-sales-dropdown">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white" role="none">
                                    Filters</p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem" onclick="updateChart('last7days')">Last 7 days</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem" onclick="updateChart('last30days')">Last 30 days</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>







        </div>

        <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-2 2xl:grid-cols-3">


            <div>
                <div
                    class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div class="w-full">
                        <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">New Health Profiles</h3>
                        <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">
                            {{ $newHealthProfilesThisMonth }}
                        </span>
                        <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
                            <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                    </path>
                                </svg>
                                {{ $newHealthProfilesThisMonth ? number_format(($newHealthProfilesThisMonth / 100) * 3.4, 1) . '%' : '0%' }}
                            </span>
                            Since last month
                        </p>
                    </div>
                    <div class="w-full" id="week-signups-chart"></div>
                </div>
            </div>




            <div
                class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div>
                    <h3 class="text-base font-normal text-white">New Users in Year Level</h3>
                </div>
                @foreach ($newUsersByYearLevel as $level => $count)
                    <div class="w-full mb-4">
                        <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Year Level
                            {{ $level }}</h3>
                        <span
                            class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">{{ $count }}</span>
                        <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
                            <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                    </path>
                                </svg>

                            </span>

                        </p>
                    </div>
                @endforeach
            </div>



            <div
                class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="w-full">
                    <h3 class="mb-2 text-base font-normal text-gray-500 dark:text-gray-400">Smokers by Year Level</h3>

                    @foreach ($smokersByYearLevel as $level => $count)
                        @php
                            $totalStudentsInYearLevel = \App\Models\Patient::where('year', $level)->count();

                            $percentage =
                                $totalStudentsInYearLevel > 0 ? ($count / $totalStudentsInYearLevel) * 100 : 0;
                        @endphp

                        <div class="flex items-center mb-2">
                            <div class="w-16 text-sm font-medium dark:text-white min-w-max mr-3">{{ $level }}
                                Year</div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500"
                                    style="width: {{ $percentage }}%">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div id="traffic-channels-chart" class="w-full"></div>
            </div>
        </div>
    </div>
    <br>
    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">

        <div class="flex items-center justify-between pb-4 border-b border-gray-200 dark:border-gray-700">
            <div>
                <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Pregnancy Report</h3>
                <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">All
                    Year Levels</span>
            </div>
        </div>

        <!-- Canvas element for Chart.js -->
        <canvas id="pregnancyChart"></canvas>

        <!-- Card Footer -->
        <div class="flex items-center justify-between pt-4 lg:justify-evenly sm:pt-4">
            @foreach (['1' => '1st Year', '2' => '2nd Year', '3' => '3rd Year', '4' => '4th Year'] as $year => $label)
                <div>
                    <h3 class="text-gray-500 dark:text-gray-400">{{ $label }}</h3>
                    <h4 class="text-xl font-bold dark:text-white">
                        {{ $pregnanciesByYearLevel[$year] ?? 0 }}
                    </h4>
                    <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                        <span
                            class="flex items-center mr-1.5 text-sm {{ $pregnanciesByYearLevel[$year] > 0 ? 'text-green-500 dark:text-green-400' : 'text-red-600 dark:text-red-500' }}">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="{{ $pregnanciesByYearLevel[$year] > 0 ? 'M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z' : 'M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z' }}">
                                </path>
                            </svg>
                            0%
                        </span>
                        vs last semester
                    </p>
                </div>
            @endforeach
        </div>

    </div>
</div>
</div>
</div>
</div>
</div>

<script>
    document.addEventListener('livewire:load', function() {
        const ctx = document.getElementById('user-registrations-chart').getContext('2d');
        const chartData = @json($chartData);

        new Chart(ctx, {
            type: 'line',
            data: chartData,
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'Monthly User Registrations',
                    },
                },
                scales: {
                    x: {
                        type: 'time',
                        time: {
                            unit: 'month',
                        },
                    },
                },
            },
        });
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const pregnanciesByYearLevel = @json($pregnanciesByYearLevel);

        const labels = ['1st Year', '2nd Year', '3rd Year', '4th Year'];
        const data = [
            pregnanciesByYearLevel['1'] || 0,
            pregnanciesByYearLevel['2'] || 0,
            pregnanciesByYearLevel['3'] || 0,
            pregnanciesByYearLevel['4'] || 0,
        ];

        const ctx = document.getElementById('pregnancyChart').getContext('2d');
        const pregnancyChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Pregnancy Count per Year Level',
                    data: data,
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        enabled: true,
                    },
                },
            }
        });
    });
</script>

<script>
    const data = {
        yesterday: [@json($newVisitationsYesterday)],
        today: [@json($newVisitationsToday)],
        last7days: @json($newVisitationsLast7Days),
        last30days: @json($newVisitationsLast30Days),
        thisWeek: [@json($newVisitationsThisWeek)]
    };

    const last7DaysLabels = data.last7days.map(item => item.day);
    const last7DaysCounts = data.last7days.map(item => item.count);

    const last30DaysLabels = data.last30days.map(item => item.day);
    const last30DaysCounts = data.last30days.map(item => item.count);

    console.log("Log data for visitations: ", data);

    const ctx = document.getElementById('visitationsChart').getContext('2d');
    const visitationsChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: last7DaysLabels,
            datasets: [{
                label: 'Visitations (Last 7 Days)',
                data: last7DaysCounts,
                borderColor: 'rgba(75, 192, 192, 1)',
                tension: 0.1,
                fill: true
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    enabled: true
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1
                    }
                }
            }
        }
    });

    function updateChart(period) {
        let newData, newLabels, chartLabel;

        switch (period) {
            case 'thisWeek':
                newData = [data.thisWeek[0].count];
                newLabels = ['This Week'];
                chartLabel = 'Visitations (This Week)';
                break;
            case 'last30days':
                newData = last30DaysCounts;
                newLabels = last30DaysLabels;
                chartLabel = 'Visitations (Last 30 Days)';
                break;
            case 'last7days':
            default:
                newData = last7DaysCounts;
                newLabels = last7DaysLabels;
                chartLabel = 'Visitations (Last 7 Days)';
                break;
        }

        visitationsChart.data.labels = newLabels;
        visitationsChart.data.datasets[0].data = newData;
        visitationsChart.data.datasets[0].label = chartLabel;
        visitationsChart.update();
    }

    document.getElementById('periodSelector').addEventListener('change', function(event) {
        const selectedPeriod = event.target.value;
        updateChart(selectedPeriod);
    });
</script>
