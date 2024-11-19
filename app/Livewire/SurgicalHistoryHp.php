<?php
namespace App\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use App\Models\PastSurgicalHistory;

class SurgicalHistoryHp extends Component
{
    public $patientID;
    public $operations = [];
    public $type;
    public $date;

    public function mount()
    {
        // Retrieve the patient ID from the session
        $this->patientID = Session::get('patient_information.patient_id');

        // Check if operations data is in session, if so load it, otherwise initialize with default
        $this->operations = Session::get('patient_information.operations', [
            ['type' => '', 'date' => ''],
        ]);
    }

    public function addOperation()
    {
        // Just add a new empty operation input
        $this->operations[] = ['type' => '', 'date' => ''];
    }

    public function saveOperations()
    {
        $patientID = $this->patientID;

        // Validation
        $this->validate([
            'operations.*.type' => 'required|string|max:255',
            'operations.*.date' => 'required|date',
        ]);

        // Save each operation to the database
        foreach ($this->operations as $operation) {
            PastSurgicalHistory::create([
                'patient_id' => $patientID,
                'operation_type' => $operation['type'],
                'operation_time' => Carbon::parse($operation['date']),
            ]);
        }

        // Save operations to session
        $this->saveToSession();

        // Clear operations after saving if needed
        $this->operations = [['type' => '', 'date' => '']];
        session()->flash('message', 'Operations saved successfully.');
    }

    public function removeOperation($index)
    {
        unset($this->operations[$index]);
        $this->operations = array_values($this->operations); // Reindex the array
        $this->saveToSession(); // Save to session each time an operation is removed
    }

    public function switchToTab($tabId)
    {
        $this->saveToSession(); // Save to session before switching tabs
        $this->dispatch('switch-tab', ['tabId' => $tabId]); // Trigger JavaScript event to change tab
    }

    public function saveToSession()
    {
        $patient = Session::get('patient_information', []);
        $patient['operations'] = $this->operations;
        Session::put('patient_information', $patient); // Save operations data to session
    }

    public function render()
    {
        return view('livewire.staff.hp-form-section.surgical-history-hp');
    }
}
