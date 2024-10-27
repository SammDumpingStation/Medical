<div class="flex-1">
    <livewire:horizontal-nav />
    <livewire:health-profile-form />
</div>

{{-- <main class="flex-1">
    <livewire:horizontal-nav />
    <div class="container-fluid">
        <div class="row">
            <section class="col-md-9 content flex-1">
                <div class="profile-header flex flex-col items-center justify-center">
                    <img src={{ asset('images/Nbsc_logo-removebg-preview.png') }} alt="Profile Logo">
                    <h5>
                        Republic of the Philippines
                        <br />
                        Province of Bukidnon
                        <br />
                        NORTHERN BUKIDNON STATE COLLEGE
                        <br />
                        Municipality of Manolo Fortich
                        <br />
                        HEALTH PROFILE
                    </h5>
                </div>
                <div class="profile bg-white" id="printableProfile">
                    <h4>PERSONAL PROFILE</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div>Date: <span><?php echo htmlspecialchars($form_date ?? 'Loram'); ?></span></div>
                            <div>Name: <span><?php echo htmlspecialchars($name ?? 'Loram'); ?></span></div>
                            <div>College Clinic File Number: <span><?php echo htmlspecialchars($college_clinic_file_number ?? 'Loram'); ?></span></div>
                            <div>College Course: <span><?php echo htmlspecialchars($college_course ?? 'Loram'); ?></span></div>
                            <div>Year: <span><?php echo htmlspecialchars($year ?? 'Loram'); ?></span></div>
                            <div>Age/Sex: <span><?php echo htmlspecialchars($age_sex ?? 'Loram'); ?></span></div>
                            <div>Birthday: <span><?php echo htmlspecialchars($birthday ?? 'Loram'); ?></span></div>
                        </div>
                        <div class="col-md-6">
                            <div>Municipal Address: <span><?php echo htmlspecialchars($municipal_address ?? 'Loram'); ?></span></div>
                            <div>Occupation: <span><?php echo htmlspecialchars($occupation ?? 'Loram'); ?></span></div>
                            <div>Contact Number: <span><?php echo htmlspecialchars($contact_number ?? 'Loram'); ?></span></div>
                            <div>Civil Status: <span><?php echo htmlspecialchars($civil_status ?? 'Loram'); ?></span></div>
                            <div>Home Address: <span><?php echo htmlspecialchars($home_address ?? 'Loram'); ?></span></div>
                            <div>Religion: <span><?php echo htmlspecialchars($religion ?? 'Loram'); ?></span></div>
                        </div>
                    </div>

                    <h4>In Case of Emergency (Please Contact):</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div>Emergency Contact Name: <span><?php echo htmlspecialchars($emergency_contact_name ?? 'Loram'); ?></span></div>
                            <div>Emergency Contact Number: <span><?php echo htmlspecialchars($emergency_contact_number ?? 'Loram'); ?></span></div>
                            <div>Emergency Contact Address: <span><?php echo htmlspecialchars($emergency_contact_address ?? 'Loram'); ?></span></div>
                        </div>
                        <div class="col-md-6">
                            <div>Emergency Contact Relationship: <span><?php echo htmlspecialchars($emergency_contact_relationship ?? 'Loram'); ?></span></div>
                        </div>
                    </div>

                    <h4>PERSONAL/ SOCIAL HISTORY:</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div>Smoking: <span><?php echo htmlspecialchars($smoking ?? 'Loram'); ?></span></div>
                            <div>Alcohol Drinking: <span><?php echo htmlspecialchars($alcohol_drinking ?? 'Loram'); ?></span></div>
                            <div>Illegal Drug Use: <span><?php echo htmlspecialchars($illegal_drug_use ?? 'Loram'); ?></span></div>
                            <div>Sexually Active: <span><?php echo htmlspecialchars($sexually_active ?? 'Loram'); ?></span></div>
                            <h4>Allergy</h4>
                            <div class="row">
                                <div>Food: <span><?php echo htmlspecialchars($food ?? 'Loram'); ?></span></div>
                                <div>Drug: <span><?php echo htmlspecialchars($drug ?? 'Loram'); ?></span></div>
                            </div>
                        </div>
                    </div>

                    <h4>PAST MEDICAL HISTORY:</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div>Epilepsy Seizure Disorder: <span><?php echo htmlspecialchars($epilepsy_seizure_disorder ?? 'Loram'); ?></span></div>
                            <div>Asthma: <span><?php echo htmlspecialchars($asthma ?? 'Loram'); ?></span></div>
                            <div>Congenital Heart Disorder: <span><?php echo htmlspecialchars($congenital_heart_disorder ?? 'Loram'); ?></span></div>
                            <div>Thyroid Disease: <span><?php echo htmlspecialchars($thyroid_disease ?? 'Loram'); ?></span></div>
                        </div>
                        <div class="col-md-6">
                            <div>Skin Disorder: <span><?php echo htmlspecialchars($skin_disorder ?? 'Loram'); ?></span></div>
                            <div>Cancer: <span><?php echo htmlspecialchars($cancer ?? 'Loram'); ?></span></div>
                            <div>Diabetes Mellitus: <span><?php echo htmlspecialchars($diabetes_mellitus ?? 'Loram'); ?></span></div>
                            <div>Peptic Ulcer: <span><?php echo htmlspecialchars($peptic_ulcer ?? 'Loram'); ?></span></div>
                            <div>Tuberculosis: <span><?php echo htmlspecialchars($tuberculosis ?? 'Loram'); ?></span></div>
                            <div>Coronary Artery Disease: <span><?php echo htmlspecialchars($coronary_artery_disease ?? 'Loram'); ?></span></div>
                        </div>
                        <div class="col-md-6">
                            <div>PCOS: <span><?php echo htmlspecialchars($pcos ?? 'Loram'); ?></span></div>
                            <div>Hepatitis: <span><?php echo htmlspecialchars($hepatitis ?? 'Loram'); ?></span></div>
                            <div>Hypertension Elevated BP: <span><?php echo htmlspecialchars($hypertension_elevated_bp ?? 'Loram'); ?></span></div>
                            <div>Psychological Disorder: <span><?php echo htmlspecialchars($psychological_disorder ?? 'Loram'); ?></span></div>
                            <div>Hospital Admissions Diagnosis: <span><?php echo htmlspecialchars($hospital_admissions_diagnosis ?? 'Loram'); ?></span></div>
                            <div>Hospital Admissions When: <span><?php echo htmlspecialchars($hospital_admissions_when ?? 'Loram'); ?></span></div>
                        </div>
                    </div>

                    <h4>PAST SURGICAL HISTORY:</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div>Past Surgical History Operation Type: <span><?php echo htmlspecialchars($past_surgical_history_operation_type ?? 'Loram'); ?></span></div>
                            <div>Past Surgical History When: <span><?php echo htmlspecialchars($past_surgical_history_when ?? 'Loram'); ?></span></div>
                        </div>
                        <div class="col-md-6">
                            <div>Person with Disability: <span><?php echo htmlspecialchars($person_with_disability ?? 'Loram'); ?></span></div>
                        </div>
                    </div>

                    <h4>WILLING TO DONATE BLOOD:</h4>
                    <div>Willing to Donate Blood: <?php echo htmlspecialchars($willing_to_donate_blood ?? 'Loram'); ?></div>

                    <h4>Family History:</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div>Family History Mother Side: <span><?php echo htmlspecialchars($family_history_mother_side ?? 'Loram'); ?></span></div>
                            <div>Family History Father Side: <span><?php echo htmlspecialchars($family_history_father_side ?? 'Loram'); ?></span></div>
                        </div>
                    </div>

                    <h4>Immunizations:</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div>Immunizations Completed Newborn Immunizations: <span><?php echo htmlspecialchars($immunizations_completed_newborn_immunizations ?? 'Loram'); ?></span></div>
                            <div>Immunizations Tetanus Toxoid: <span><?php echo htmlspecialchars($immunizations_tetanus_toxoid ?? 'Loram'); ?></span></div>
                            <div>Immunizations Influenza: <span><?php echo htmlspecialchars($immunizations_influenza ?? 'Loram'); ?></span></div>
                            <div>Immunizations Pneumococcal Vaccine: <span><?php echo htmlspecialchars($immunizations_pneumococcal_vaccine ?? 'Loram'); ?></span></div>
                        </div>
                        <div class="col-md-6">
                            <div>COVID-19 Brand Name First Dose: <span><?php echo htmlspecialchars($covid_19_brand_name_first_dose ?? 'Loram'); ?></span></div>
                            <div>COVID-19 Brand Name Second Dose: <span><?php echo htmlspecialchars($covid_19_brand_name_second_dose ?? 'Loram'); ?></span></div>
                            <div>COVID-19 Brand Name First Booster: <span><?php echo htmlspecialchars($covid_19_brand_name_first_booster ?? 'Loram'); ?></span></div>
                            <div>COVID-19 Brand Name Second Booster: <span><?php echo htmlspecialchars($covid_19_brand_name_second_booster ?? 'Loram'); ?></span></div>
                        </div>
                    </div>

                    <h4>Unvaccinated with COVID-19 Reason:</h4>
                    <div><?php echo htmlspecialchars($unvaccinated_with_covid_19_reason ?? 'Loram'); ?></div>

                    <div class="print-button mt-3">
                        <button class="btn btn-success" id="printButton">Print</button>
                    </div>
                    <script>
                        document.getElementById('printButton').addEventListener('click', function() {
                            window.print(); // Directly trigger the print dialog
                        });
                    </script>
                </div>
            </section>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</main> --}}
