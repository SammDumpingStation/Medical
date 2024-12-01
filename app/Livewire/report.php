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
    public $period = 'daily';

    public $dailyCount, $weeklyCountsByDay, $monthlyCountsByDay, $monthlyCounts, $yearlyCounts;

    public $chartData;



    public $newUsersByYearLevel = [];
    public $newHealthProfilesThisMonth;

    public $chartDataConsultation = ['labels' => [], 'counts' => []]; 


    public $weeklyCount;
    public $monthlyCount;


    public function mount()
    {
        $this->completeConsultations = ConsultationHistory::where('status', 'Completed')->get();
        Log::info('Complete consultations retrieved', ['data' => $this->completeConsultations]);

        $this->dispensedMedicineRecords = DispenseMedicineRecords::all();
        Log::info('Dispensed medicine records retrieved', ['data' => $this->dispensedMedicineRecords]);

        $this->generateChartData();
       

        $this->calculateDispenseMedicine();

        $this->countCompletedConsultationsByPeriod();


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


   
    public function calculateDispenseMedicine()
    {
        $today = Carbon::today();
        $startOfWeek = Carbon::now()->startOfWeek(Carbon::MONDAY); 
        $endOfWeek = $startOfWeek->copy()->addDays(6);
        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();
        $startOfYear = Carbon::now()->startOfYear();
    
        Log::info('Starting dispense medicine calculations', [
            'today' => $today->toDateString(),
            'startOfWeek' => $startOfWeek->toDateString(),
            'endOfWeek' => $endOfWeek->toDateString(),
            'startOfMonth' => $startOfMonth->toDateString(),
            'endOfMonth' => $endOfMonth->toDateString(),
            'startOfYear' => $startOfYear->toDateString(),
        ]);
    
        $this->dailyCount = dispenseMedicineRecords::whereDate('created_at', $today)->count();
        Log::info('Daily dispensed medicine count calculated', ['dailyCount' => $this->dailyCount]);
    
        $this->weeklyCountsByDay = [];
        for ($day = 0; $day < 7; $day++) {
            $dayDate = $startOfWeek->copy()->addDays($day);
            $count = dispenseMedicineRecords::whereDate('created_at', $dayDate)->count();
            $this->weeklyCountsByDay[$dayDate->format('l')] = $count;
            
            Log::info('Weekly dispensed medicine count calculated for day', [
                'day' => $dayDate->format('l'),
                'date' => $dayDate->toDateString(),
                'count' => $count
            ]);
        }
    
        $this->monthlyCounts = [];
        for ($month = 1; $month <= 12; $month++) {
            $startOfMonth = Carbon::create(null, $month, 1)->startOfMonth();
            $endOfMonth = Carbon::create(null, $month, 1)->endOfMonth();
            $count = dispenseMedicineRecords::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();
            $this->monthlyCounts[$month] = $count;  

            Log::info('Monthly dispensed medicine count calculated for month', [
                'month' => $startOfMonth->format('F'),
                'count' => $count
            ]);
        }

        $this->monthlyCountsLabels = [
            1 => 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
        ];
    
        $this->yearlyCounts = [];
        $years = dispenseMedicineRecords::selectRaw('YEAR(created_at) as year')
                    ->distinct()
                    ->orderBy('year')
                    ->pluck('year'); 
    
        Log::info('Found distinct years for yearly counts', ['years' => $years]);
    
        foreach ($years as $year) {
            $startOfYear = Carbon::create($year, 1, 1)->startOfYear();
            $endOfYear = Carbon::create($year, 12, 31)->endOfYear();
            $count = dispenseMedicineRecords::whereBetween('created_at', [$startOfYear, $endOfYear])->count();
            $this->yearlyCounts[$year] = $count;
    
            Log::info('Yearly dispensed medicine count calculated for year', [
                'year' => $year,
                'count' => $count
            ]);
        }
    
        Log::info('Finished dispense medicine calculations', [
            'weeklyCountsByDay' => $this->weeklyCountsByDay,
            'monthlyCounts' => $this->monthlyCounts,
            'yearlyCounts' => $this->yearlyCounts,
        ]);
    }

    


private function countCompletedConsultationsByPeriod()
{
    $startOfWeek = Carbon::now()->startOfWeek(); 
    $endOfWeek = Carbon::now()->endOfWeek();

    $currentYear = Carbon::now()->year;

    $this->weeklyConsultations = ConsultationHistory::where('status', 'Completed')
        ->whereBetween('updated_at', [$startOfWeek, $endOfWeek])
        ->whereRaw('DAYOFWEEK(updated_at) BETWEEN 2 AND 7') 
        ->get()
        ->groupBy(function ($date) {
            return Carbon::parse($date->updated_at)->dayOfWeekIso; 
        })
        ->mapWithKeys(function ($group, $day) {
            return [$day => $group->count()];
        });

    $this->weeklyConsultations = collect(range(1, 6)) 
        ->mapWithKeys(function ($day) {
            return [$day => $this->weeklyConsultations->get($day, 0)];
        })
        ->toArray();

    Log::info('Weekly consultations count calculated', [
        'startOfWeek' => $startOfWeek,
        'endOfWeek' => $endOfWeek,
        'weeklyConsultations' => $this->weeklyConsultations,
    ]);

    $monthlyConsultationsData = ConsultationHistory::where('status', 'Completed')
        ->whereYear('updated_at', $currentYear)
        ->get()
        ->groupBy(function ($date) {
            return Carbon::parse($date->updated_at)->format('F');
        })
        ->map(function ($group) {
            return $group->count(); 
        });

    $this->monthlyConsultations = $monthlyConsultationsData;
    Log::info('Monthly consultations count calculated', [
        'monthlyConsultations' => $this->monthlyConsultations,
    ]);

    $this->yearlyConsultations = ConsultationHistory::where('status', 'Completed')
        ->whereYear('updated_at', $currentYear)
        ->count();

    Log::info('Yearly consultations count calculated', [
        'currentYear' => $currentYear,
        'yearlyConsultations' => $this->yearlyConsultations,
    ]);
}




public function render()
{

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
        'yearlyCounts' => $this->yearlyCounts,
        'dailyCount' => $this->dailyCount,

        'chartDataConsultation' => $this->chartDataConsultation

        // 'newVisitationsThisWeek' => $visitations['newVisitationsThisWeek'],
        // 'newVisitationsToday' => $visitations['newVisitationsToday'],
        // 'newVisitationsYesterday' => $visitations['newVisitationsYesterday'],
        // 'newVisitationsLast7Days' => $visitations['newVisitationsLast7Days'],
        // 'newVisitationsLast30Days' => $visitations['newVisitationsLast30Days'],
    ]);
}
}
