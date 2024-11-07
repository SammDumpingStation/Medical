<?php

namespace App\Livewire;

use Livewire\Component;

class FindStudentModal extends Component
{
    public $studentID;
    public function submit()
    {
        return redirect('/consultations/' . $this->studentID);
    }

    public function render()
    {
        return view('livewire.staff.find-student-modal'
        );

    }

}
