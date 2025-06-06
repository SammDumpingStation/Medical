<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Patient;
use App\Models\StudentClassification;
use App\Models\AppendixA;
use App\Models\PhysicalExamination;
use App\Models\PhysicalExaminationFinding;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SampleDataSeeder extends Seeder
{
    public function run(): void
    {
        // Create admin user
        $admin = User::create([
            'patient_id' => 'ADMIN' . strtoupper(Str::random(6)),
            'is_staff' => 'yes',
            'role' => 'admin',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        // First create a user for the patient
        $user = User::create([
            'patient_id' => 'PAT' . strtoupper(Str::random(8)),
            'is_staff' => 'no',
            'role' => 'patient',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        // Create sample patient
        $patient = Patient::create([
            'patient_id' => $user->patient_id,
            'full_name' => 'Juan Dela Cruz',
            'age' => 25,
            'gender' => 'Male',
            'birthday' => now()->subYears(25)->format('Y-m-d'),
            'address' => '123 Sample St, Sample City',
            'municipal' => 'Sample City',
            'religion' => 'Catholic',
            'occupation' => 'Student',
            'phone_number' => '09123456789',
            'civil_status' => 'Single',
        ]);

        // Create student classifications for the patient
        StudentClassification::create([
            'patient_id' => $patient->patient_id,
            'alphabet' => 'A',
            'description' => 'Physically fit to enroll in any course',
        ]);

        // Create appendix A record
        $appendixA = AppendixA::create([
            'patient_id' => $patient->patient_id,
            'student_classification_id' => 1, // Regular
            'file_number' => 'FILE' . strtoupper(Str::random(6)),
        ]);

        // Create physical examination
        $exam = PhysicalExamination::create([
            'appendix_a_patient_id' => $appendixA->patient_id,
            'skin' => true,
            'head_neck_scalp' => true,
            'external_eyes' => true,
            'pupils_opthalmoscopic' => false,
            'ears_nose_sinuses' => true,
            'mouth_throat' => true,
            'neck_lymphnodes_throid' => false,
            'chest_breast_axilla' => true,
            'lungs' => true,
            'heart_and_valvular' => true,
            'back_and_abdomen' => false,
            'genitalia' => false,
            'anus_rectum' => false,
            'extremities' => true,
        ]);

        // Add examination findings
        $findings = [
            ['body_part' => 'Skin', 'findings' => 'No abnormalities detected'],
            ['body_part' => 'Head, Neck, Scalp', 'findings' => 'Normal'],
            ['body_part' => 'External Eyes', 'findings' => 'Clear, no redness or swelling'],
            ['body_part' => 'Ears, Nose, Sinuses', 'findings' => 'No discharge or abnormalities'],
            ['body_part' => 'Mouth, Throat', 'findings' => 'No lesions or inflammation'],
        ];

        foreach ($findings as $finding) {
            PhysicalExaminationFinding::create([
                'physical_examination_id' => $exam->id,
                'body_part' => $finding['body_part'],
                'findings' => $finding['findings'],
            ]);
        }

        // Link admin to patient (if needed for your application logic)
        // $admin->update(['patient_id' => $patient->patient_id]);

        $this->command->info('Sample data seeded successfully!');
        $this->command->info('Admin Login: ' . $admin->patient_id);
        $this->command->info('Password: password');
        $this->command->info('Patient Login: ' . $user->patient_id);
        $this->command->info('Password: password');
    }
}
