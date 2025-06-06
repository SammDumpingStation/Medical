<?php

namespace App\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Livewire\Component;


use App\Models\Patient;
use App\Models\SocialHistory;
use App\Models\AncillaryExaminationsModel;
use App\Models\ConsultationHistory;
use App\Models\dispenseMedicineRecords;



use Illuminate\Support\Facades\Log;

use App\Models\MedicalHistory;


class StatisticsTable extends Component
{
    public $chartData;
    public $smokersByYearLevel = [];
    public $pregnanciesByYearLevel = [];
    public $newUsersByYearLevel = [];
    public $newHealthProfilesThisMonth = 0;
    public $newHealthProfilesLastMonth = 0;
    public $percentageChange = 0;
    public $newHealthProfilesThisWeek = 0;
    public $weeklyCountsByDay = [];
    public $monthlyCountsByDay = [];
    public $monthlyCounts = [];
    public $yearlyCount = 0;
    public $newVisitationsThisWeek = 0;
    public $newVisitationsToday = 0;
    public $newVisitationsYesterday = 0;
    public $newVisitationsLast30Days = [];
    public $newVisitationsLast7Days = [];

    public $dailyCount = 0;
    public $weeklyCount = 0;
    public $monthlyCount = 0;

    public function mount()
    {
        // Generate chart data for user registrations
        $this->generateChartData();

        // Calculate the number of smokers by year level
        $this->calculateSmokersByYearLevel();

        // Calculate the number of pregnancies by year level
        $this->calculatePregnanciesByYearLevel();

        // Calculate the number of new uers by year level
        $this->calculateNewUsersByYearLevel();

        // Calculate the number of new Health Profile
        $this->calculateNewHealthProfiles();

        // Calculate the number of Visitations
        $this->calculateVisitations();

        $this->calculateDispenseMedicine();
    }

    private function generateChartData()
    {
        $start = Carbon::parse(User::min("created_at"));
        $end = Carbon::now();
        $period = CarbonPeriod::create($start, "1 month", $end);

        $usersPerMonth = collect($period)->map(function ($date) {
            $endDate = $date->copy()->endOfMonth();

            return [
                "count" => User::where("created_at", "<=", $endDate)->count(),
                "month" => $endDate->format("Y-m-d"),
            ];
        });

        $this->chartData = json_encode([
            'labels' => $usersPerMonth->pluck("month")->toArray(),
            'datasets' => [
                [
                    "label" => "User Registrations",
                    "backgroundColor" => "rgba(38, 185, 154, 0.31)",
                    "borderColor" => "rgba(38, 185, 154, 0.7)",
                    "data" => $usersPerMonth->pluck("count")->toArray(),
                ],
            ],
        ]);
    }

        private function calculateNewUsersByYearLevel()
        {
            $yearLevels = [1 => '1', 2 => '2', 3 => '3', 4 => '4'];

            Log::info('Starting calculation of new users by year level for this week.');

            foreach ($yearLevels as $level => $label) {
                try {
                    $startOfWeek = Carbon::now()->startOfWeek();
                    $endOfWeek = Carbon::now()->endOfWeek();

                    $count = Patient::whereBetween('created_at', [$startOfWeek, $endOfWeek])
                        ->whereHas('user', function ($query) use ($level) {
                            $query->where('year', $level);
                        })
                        ->count();

                    $this->newUsersByYearLevel[$label] = $count;

                    Log::info("Year Level: {$label}, New Users Count (This Week): {$count}");

                } catch (\Exception $e) {
                    Log::error("Error calculating new users for Year Level: {$label}. Error: " . $e->getMessage());
                }
            }

            Log::info('Completed calculation of new users by year level for this week.');
        }


        private function calculateNewHealthProfiles()
        {
            try {
                $startOfMonth = Carbon::now()->startOfMonth();
                $endOfMonth = Carbon::now()->endOfMonth();

                $startOfLastMonth = Carbon::now()->subMonth()->startOfMonth();
                $endOfLastMonth = Carbon::now()->subMonth()->endOfMonth();

                $this->newHealthProfilesThisMonth = ConsultationHistory::whereBetween('date', [$startOfMonth, $endOfMonth])->count();

                $this->newHealthProfilesLastMonth = ConsultationHistory::whereBetween('date', [$startOfLastMonth, $endOfLastMonth])->count();

                if ($this->newHealthProfilesLastMonth > 0) {
                    $this->percentageChange = (($this->newHealthProfilesThisMonth - $this->newHealthProfilesLastMonth) / $this->newHealthProfilesLastMonth) * 100;
                } else {
                    $this->percentageChange = 0;
                }

            } catch (\Exception $e) {
                Log::error("Error calculating health profiles: " . $e->getMessage());
            }
        }



private function calculateDispenseMedicine()
{
    $today = Carbon::today();
    $startOfWeek = Carbon::now()->startOfWeek();
    $endOfWeek = Carbon::now()->endOfWeek();
    $startOfMonth = Carbon::now()->startOfMonth();
    $endOfMonth = Carbon::now()->endOfMonth();
    $startOfYear = Carbon::now()->startOfYear();

    $this->dailyCount = dispenseMedicineRecords::whereDate('created_at', $today)->count();
    Log::info('Daily dispensed medicine count calculated', ['dailyCount' => $this->dailyCount]);

    $this->weeklyCountsByDay = [];
    for ($day = 0; $day < 7; $day++) {
        $dayDate = $startOfWeek->copy()->addDays($day);
        $count = dispenseMedicineRecords::whereDate('created_at', $dayDate)->count();
        $this->weeklyCountsByDay[$dayDate->format('l')] = $count;

        // Log daily count for the week
        Log::info('Weekly dispensed medicine count calculated for the week', [
            'day' => $dayDate->format('l'),
            'date' => $dayDate->format('Y-m-d'),
            'count' => $count,
        ]);
    }

    $this->monthlyCountsByDay = [];
    $daysInMonth = $endOfMonth->day;
    for ($day = 1; $day <= $daysInMonth; $day++) {
        $dayDate = Carbon::now()->startOfMonth()->addDays($day - 1);
        $count = dispenseMedicineRecords::whereDate('created_at', $dayDate)->count();
        $this->monthlyCountsByDay[$dayDate->format('d M')] = $count;

        Log::info('Monthly dispensed medicine count calculated', [
            'day' => $dayDate->format('Y-m-d'),
            'count' => $count,
        ]);
    }

    $this->monthlyCounts = [];
    for ($month = 1; $month <= 12; $month++) {
        $startOfMonth = Carbon::create(null, $month, 1)->startOfMonth();
        $endOfMonth = Carbon::create(null, $month, 1)->endOfMonth();

        $count = dispenseMedicineRecords::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();
        $this->monthlyCounts[$month] = $count;

        // Log monthly count
        Log::info('Monthly dispensed medicine count calculated', [
            'month' => $startOfMonth->format('F'),
            'count' => $count,
        ]);
    }

    $this->yearlyCount = dispenseMedicineRecords::whereBetween('created_at', [$startOfYear, Carbon::now()])->count();
    Log::info('Yearly dispensed medicine count calculated', ['yearlyCount' => $this->yearlyCount]);
}


        private function calculateVisitations()
        {
            try {
                $startOfWeek = Carbon::now()->startOfWeek(Carbon::MONDAY);
                $endOfWeek = Carbon::now();
                $visitationsPerDay = [];
                foreach (range(0, 6) as $dayOffset) {
                    $date = Carbon::now()->startOfWeek()->addDays($dayOffset);
                    $visitationsCount = MedicalHistory::whereDate('created_at', $date)->count();
                    $visitationsPerDay[] = [
                        'day' => $date->format('l'),
                        'count' => $visitationsCount
                    ];
                }
                $this->newVisitationsThisWeek = MedicalHistory::whereBetween('created_at', [$startOfWeek, $endOfWeek])->count();
                $this->newVisitationsToday = MedicalHistory::whereDate('created_at', Carbon::today())->count();
                $this->newVisitationsYesterday = MedicalHistory::whereDate('created_at', Carbon::yesterday())->count();
                $this->newVisitationsLast30Days = MedicalHistory::whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()])->count();
                $this->newVisitationsLast30Days = $visitationsPerDay;
                Log::info('Visitations for the Last 30 Days: ', $this->newVisitationsLast30Days);
                $this->newVisitationsLast7Days = $visitationsPerDay;
                Log::info('Visitations for the Last 7 Days: ', $this->newVisitationsLast7Days);
                return [
                    'newVisitationsThisWeek' => $this->newVisitationsThisWeek,
                    'newVisitationsToday' => $this->newVisitationsToday,
                    'newVisitationsYesterday' => $this->newVisitationsYesterday,
                    'newVisitationsLast30Days' => $this->newVisitationsLast30Days,
                    'newVisitationsLast7Days' => $this->newVisitationsLast7Days,
                ];
            } catch (\Exception $e) {
                Log::error("Error calculating visitations: " . $e->getMessage());
                return [];
            }
        }





    private function calculateSmokersByYearLevel()
    {
        $yearLevels = [1 => '1', 2 => '2', 3 => '3', 4 => '4'];
        Log::info('Starting calculation of smokers by year level.');
        foreach ($yearLevels as $level => $label) {
            try {
                $count = SocialHistory::where('smoking', 'Yes')
                    ->whereHas('patient', function ($query) use ($level) {
                        $query->where('year', $level);
                    })
                    ->count();
                $this->smokersByYearLevel[$label] = $count;
                Log::info("Year Level: {$label}, Smokers Count: {$count}");
            } catch (\Exception $e) {
                Log::error("Error calculating smokers for Year Level: {$label}. Error: " . $e->getMessage());
            }
        }

        Log::info('Completed calculation of smokers by year level.');
    }

    private function calculatePregnanciesByYearLevel()
    {
        $yearLevels = [1 => '1', 2 => '2', 3 => '3', 4 => '4'];

        // Initialize the array with default values
        $this->pregnanciesByYearLevel = array_fill_keys($yearLevels, 0);

        Log::info('Starting calculation of pregnancies by year level.');

        try {
            $pregnancies = AncillaryExaminationsModel::where('pregnancy_test', 'Positive')
                ->with(['patient' => function($query) {
                    $query->select('patient_id', 'year');
                }])
                ->get();

            // Group by year level
            $grouped = $pregnancies->groupBy(function($item) {
                return $item->patient->year ?? null;
            })->map->count();

            // Update the counts for each year level
            foreach ($yearLevels as $level) {
                if (isset($grouped[$level])) {
                    $this->pregnanciesByYearLevel[$level] = $grouped[$level];
                }
                Log::info("Year Level: {$level}, Pregnancy Count: " . $this->pregnanciesByYearLevel[$level]);
            }
        } catch (\Exception $e) {
            Log::error("Error calculating pregnancies: " . $e->getMessage());
            // Ensure all year levels have a default value
            foreach ($yearLevels as $level) {
                $this->pregnanciesByYearLevel[$level] = $this->pregnanciesByYearLevel[$level] ?? 0;
            }
        }

        Log::info('Completed calculation of pregnancies by year level.');
    }

    public function render()
    {
        return view('livewire.statistics-table', [
            'smokersByYearLevel' => $this->smokersByYearLevel,
            'pregnanciesByYearLevel' => $this->pregnanciesByYearLevel,
            'newUsersByYearLevel' => $this->newUsersByYearLevel,
            'newHealthProfilesThisMonth' => $this->newHealthProfilesThisMonth,
            'newVisitationsThisWeek' => $this->newVisitationsThisWeek,
            'newVisitationsToday' => $this->newVisitationsToday,
            'newVisitationsYesterday' => $this->newVisitationsYesterday,
            'newVisitationsLast7Days' => $this->newVisitationsLast7Days,
            'newVisitationsLast30Days' => $this->newVisitationsLast30Days,
            'chartData' => $this->chartData,

           'weeklyCountsByDay' => $this->weeklyCountsByDay,
        'monthlyCountsByDay' => $this->monthlyCountsByDay,
        'monthlyCounts' => $this->monthlyCounts,
        'yearlyCount' => $this->yearlyCount,
        ]);
    }
}
