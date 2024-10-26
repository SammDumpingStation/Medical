<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('medical_forms', function (Blueprint $table) {
            $table->id(); // form_id (primary key)
            $table->date('form_date'); // Date the form was filled
            $table->string('college_clinic_file_number');
            $table->boolean('smoking')->nullable();
            $table->boolean('alcohol_drinking')->nullable();
            $table->boolean('illegal_drug_use')->nullable();
            $table->boolean('sexually_active')->nullable();
            $table->text('allergy')->nullable();
            $table->text('food')->nullable();
            $table->text('drug')->nullable();
            $table->boolean('epilepsy_seizure_disorder')->nullable();
            $table->boolean('asthma')->nullable();
            $table->boolean('congenital_heart_disorder')->nullable();
            $table->boolean('thyroid_disease')->nullable();
            $table->boolean('skin_disorder')->nullable();
            $table->boolean('cancer')->nullable();
            $table->boolean('diabetes_mellitus')->nullable();
            $table->boolean('peptic_ulcer')->nullable();
            $table->boolean('tuberculosis')->nullable();
            $table->boolean('coronary_artery_disease')->nullable();
            $table->boolean('pcos')->nullable();
            $table->boolean('hepatitis')->nullable();
            $table->boolean('hypertension_elevated_bp')->nullable();
            $table->boolean('psychological_disorder')->nullable();
            $table->string('hospital_admissions_diagnosis')->nullable();
            $table->date('hospital_admissions_when')->nullable();
            $table->string('past_surgical_history_operation_type')->nullable();
            $table->date('past_surgical_history_when')->nullable();
            $table->boolean('person_with_disability')->nullable();
            $table->boolean('willing_to_donate_blood')->nullable();
            $table->string('family_history_mother_side')->nullable();
            $table->string('family_history_father_side')->nullable();
            $table->boolean('immunizations_completed_newborn_immunizations')->nullable();
            $table->boolean('immunizations_tetanus_toxoid')->nullable();
            $table->boolean('immunizations_influenza')->nullable();
            $table->boolean('immunizations_pneumococcal_vaccine')->nullable();
            $table->string('covid_19_brand_name_first_dose')->nullable();
            $table->string('covid_19_brand_name_second_dose')->nullable();
            $table->string('covid_19_brand_name_first_booster')->nullable();
            $table->string('covid_19_brand_name_second_booster')->nullable();
            $table->string('unvaccinated_with_covid_19_reason')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_forms');
    }
};
