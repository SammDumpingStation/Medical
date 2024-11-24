<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MedicalHistoryAdditionalInfo;
use Illuminate\Support\Facades\Log;

class TeachingAdditionalQuestions extends Component
{
    public $additionalQuestions = [
        ['question' => '', 'response' => '']
    ];

    public $patient_id; 

    public function mount()
    {
        $this->patient_id = session('patient_id');
    }

    public function addQuestion()
    {
        $this->additionalQuestions[] = ['question' => '', 'response' => ''];
    }

    public function removeQuestion($index)
    {
        unset($this->additionalQuestions[$index]);
        $this->additionalQuestions = array_values($this->additionalQuestions); 
    }

    public function save()
    {
        $this->validate([
            'additionalQuestions.*.question' => 'required|string|max:255',
            'additionalQuestions.*.response' => 'required|string|max:255',
        ]);

        foreach ($this->additionalQuestions as $item) {
            MedicalHistoryAdditionalInfo::create([
                'patient_id' => $this->patient_id,  
                'question' => $item['question'],
                'response' => $item['response'],
            ]);
        }

        Log::info('Additional Questions Data Submitted', $this->additionalQuestions);

        session()->flash('message', 'Additional questions have been successfully saved.');
    }

    public function render()
    {
        return view('livewire.staff.teaching-vitals-section.teaching-additional-questions');
    }
}
