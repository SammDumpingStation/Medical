<?php

namespace App\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Livewire\Component;

class statisticstable extends Component
{
    public $chartData;

    public function mount()
    {
        $this->generateChart();
    }

    public function generateChart()
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

    public function render()
    {
        return view('livewire.statistics-table');
    }
}
