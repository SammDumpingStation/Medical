<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ConsultationHistory;
use App\Models\DispenseMedicineRecords;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use App\Models\Patient;
use App\Models\SocialHistory;
use App\Models\AncillaryExaminationsModel;
use App\Models\MedicalHistory;
use App\Models\User;
use Carbon\CarbonPeriod;



class report extends Component
{
    public $completeConsultations;
    public $dispensedMedicineRecords;

    public $weeklyConsultations;
    public $monthlyConsultations;
    public $yearlyConsultations;

    public $yearLevel = 'All';
    public $course = 'All';
    public $frequency = 'Weekly';

    public $dailyCount, $weeklyCountsByDay, $monthlyCountsByDay, $monthlyCounts, $yearlyCount;

    public $chartData;



    public $newUsersByYearLevel = [];
    public $newHealthProfilesThisMonth;




    public $weeklyCount;
    public $monthlyCount;


    public function mount()
    {
        // Retrieve consultations and dispensed medicine records
        $this->completeConsultations = ConsultationHistory::where('status', 'Completed')->get();
        Log::info('Complete consultations retrieved', ['data' => $this->completeConsultations]);

        $this->dispensedMedicineRecords = DispenseMedicineRecords::all();
        Log::info('Dispensed medicine records retrieved', ['data' => $this->dispensedMedicineRecords]);

          // Generate chart data for user registrations
          $this->generateChartData();

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


    private function calculateVisitations()
    {
        try {
            $startOfWeek = Carbon::now()->startOfWeek(Carbon::MONDAY);
            $endOfWeek = Carbon::now();
            $visitationsPerDay = [];

            Log::info('Start calculating visitations for the week.');

            // Loop through the days of the week to calculate daily visitations
            foreach (range(0, 6) as $dayOffset) {
                $date = Carbon::now()->startOfWeek()->addDays($dayOffset);
                $visitationsCount = MedicalHistory::whereDate('created_at', $date)->count();
                $visitationsPerDay[] = [
                    'day' => $date->format('l'),
                    'count' => $visitationsCount
                ];
                Log::info("Visitation count for {$date->format('l')} ({$date->format('Y-m-d')}): $visitationsCount");
            }

            // Calculate visitations for various time periods
            $this->newVisitationsThisWeek = MedicalHistory::whereBetween('created_at', [$startOfWeek, $endOfWeek])->count();
            Log::info("New visitations this week: {$this->newVisitationsThisWeek}");

            $this->newVisitationsToday = MedicalHistory::whereDate('created_at', Carbon::today())->count();
            Log::info("New visitations today: {$this->newVisitationsToday}");

            $this->newVisitationsYesterday = MedicalHistory::whereDate('created_at', Carbon::yesterday())->count();
            Log::info("New visitations yesterday: {$this->newVisitationsYesterday}");

            $this->newVisitationsLast30Days = MedicalHistory::whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()])->count();
            Log::info("New visitations in the last 30 days: {$this->newVisitationsLast30Days}");

            $this->newVisitationsLast7Days = $visitationsPerDay;
            Log::info('Visitations for the last 7 days:', $this->newVisitationsLast7Days);

            // Return the calculated data
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
    }

    $this->monthlyCountsByDay = [];
    $daysInMonth = $endOfMonth->day;
    for ($day = 1; $day <= $daysInMonth; $day++) {
        $dayDate = Carbon::now()->startOfMonth()->addDays($day - 1);
        $count = dispenseMedicineRecords::whereDate('created_at', $dayDate)->count();
        $this->monthlyCountsByDay[$dayDate->format('d M')] = $count;
    }

    $this->monthlyCounts = [];
    for ($month = 1; $month <= 12; $month++) {
        $startOfMonth = Carbon::create(null, $month, 1)->startOfMonth();
        $endOfMonth = Carbon::create(null, $month, 1)->endOfMonth();
        $count = dispenseMedicineRecords::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();
        $this->monthlyCounts[$month] = $count;
    }

    $this->yearlyCount = dispenseMedicineRecords::whereBetween('created_at', [$startOfYear, Carbon::now()])->count();
    Log::info('Yearly dispensed medicine count calculated', ['yearlyCount' => $this->yearlyCount]);
}



public function render()
{
    $visitations = $this->calculateVisitations(); // Get the visitations data

    return view('livewire.report', [
        'completeConsultations' => $this->completeConsultations,
        'dispensedMedicineRecords' => DispenseMedicineRecords::with('medicine')->get(),
        'weeklyConsultations' => $this->weeklyConsultations,
        'monthlyConsultations' => $this->monthlyConsultations,
        'yearlyConsultations' => $this->yearlyConsultations,
        'consultationHistories' => ConsultationHistory::with('patient')->get(),
        'chartData' => $this->chartData,
        'weeklyCountsByDay' => $this->weeklyCountsByDay,
        'monthlyCountsByDay' => $this->monthlyCountsByDay,
        'monthlyCounts' => $this->monthlyCounts,
        'yearlyCount' => $this->yearlyCount,
        'dailyCount' => $this->dailyCount,
        'newVisitationsThisWeek' => $visitations['newVisitationsThisWeek'],
        'newVisitationsToday' => $visitations['newVisitationsToday'],
        'newVisitationsYesterday' => $visitations['newVisitationsYesterday'],
        'newVisitationsLast7Days' => $visitations['newVisitationsLast7Days'],
        'newVisitationsLast30Days' => $visitations['newVisitationsLast30Days'],
    ]);
}
}
