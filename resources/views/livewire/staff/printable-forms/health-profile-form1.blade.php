<div>
    <style>
        @media print {
        /* Hide everything by default */
        body * {
            visibility: hidden;
        }

        /* Show only the printable content */
        .printable, .printable * {
            visibility: visible;
        }

        /* Ensure printable content is not cropped */
        .printable {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }

        /* Hide the print button */
        .no-print {
            display: none;
        }

            html,
            body {
                margin: 0;
                padding: 0;
                overflow: hidden;
                width: 210mm;
                height: 297mm;
            }

            @page {
                size: A4;
                margin: 0;
            }
        }
    </style>

    <div class="bg-white p-8 form-1 printable">
        <div class="text-center mb-6 no-print">
            <button onclick="window.print()" class="bg-blue-500 text-white font-bold text-sm py-2 px-4 rounded">
                Print Profile
            </button>
        </div>

        <div class="max-w-4xl mx-auto border border-black print:border-none p-6">
            <p class="text-sm">Appendix C. Student Health Profile</p>
            <div class="text-center mb-4">

                <p class="text-sm">Republic of the Philippines</p>
                <p class="text-sm">Province of Bukidnon</p>
                <p class="text-sm font-bold  "><strong>Northern Bukidnon State College</strong></p>
                <p class="text-sm">Municipality of Manolo Fortich</p>
                <p class="text-sm font-bold"><strong>STUDENT HEALTH PROFILE</strong></p>
            </div>
            <div class="flex justify-between mb-4">
                <div class="w-2/3">
                    <p class="text-[12px]">Date: {{ \Carbon\Carbon::now()->format('Y-m-d') }}</p>
                    <p class="text-[12px]">College Clinic File
                        Number:___________________________</p>
                    <p class="text-[12px]"> College Course:
                        <span
                            class="underline">{{ $personal_information ? $personal_information['course'] ?? 'N/A' : 'N/A' }}</span>
                    </p>


                    <div class="flex items-center">
                        <p class="mr-2">1<sup>st</sup> yr</p>
                        <input type="checkbox" disabled @checked(($personal_information['year'] ?? 0) == 1) class="mr-4">

                        <p class="mr-2">2<sup>nd</sup> yr</p>
                        <input type="checkbox" disabled @checked(($personal_information['year'] ?? 0) == 2) class="mr-4">

                        <p class="mr-2">3<sup>rd</sup> yr</p>
                        <input type="checkbox" disabled @checked(($personal_information['year'] ?? 0) == 3) class="mr-4">

                        <p class="mr-2">4<sup>th</sup> yr</p>
                        <input type="checkbox" disabled @checked(($personal_information['year'] ?? 0) == 4)>
                    </div>

                </div>
            </div>
            <div class="mb-6">
                <p class="font-bold text-sm mb-2">PERSONAL PROFILE:</p>

                <div class="text-[12px] mb-4">
                    <!-- Name, Age/Sex, and Birthday in a row -->
                    <div class="flex justify-between mb-2">
                        <div>
                            <strong>Name:</strong>
                            <span
                                class="underline">{{ $personal_information ? $personal_information['full_name'] : 'N/A' }}</span>
                        </div>
                        <div>
                            <strong>Age/Sex:</strong>
                            <span>{{ $personal_information ? ($personal_information['age'] ?? 'N/A') . ' / ' . ($personal_information['gender'] ?? 'N/A') : 'N/A' }}</span>
                        </div>
                        <div>
                            <strong>Birthday:</strong>
                            <span>{{ $personal_information ? $personal_information['birthday'] ?? 'N/A' : 'N/A' }}</span>
                        </div>
                    </div>

                    <strong>Home Address:</strong>
                    <span>{{ $personal_information ? $personal_information['address'] ?? 'N/A' : 'N/A' }}</span>
                    <br><strong>Municipal Address:</strong>
                    <span>{{ $personal_information ? $personal_information['municipal'] ?? 'N/A' : 'N/A' }}</span>
                    <Br><strong>Contact Number(s):</strong>
                    <span>{{ $personal_information ? $personal_information['phone_number'] ?? 'N/A' : 'N/A' }}</span>

                </div>

                <!-- Emergency Contact Section -->
                <p class="font-bold text-sm mb-2">IN CASE OF EMERGENCY PLEASE CONTACT:</p>

                <div class="text-[12px] mb-4">
                    <div class="mb-2">
                        <strong>Name:</strong>
                        <span>{{ $emergency_contact ? $emergency_contact['emergency_contact_name'] ?? 'N/A' : 'N/A' }}</span>
                        <br> <strong>Contact Number:</strong>
                        <span>{{ $emergency_contact ? $emergency_contact['emergency_contact_phone'] ?? 'N/A' : 'N/A' }}</span>
                        <br> <strong>Address:</strong>
                        <span>{{ $emergency_contact ? $emergency_contact['emergency_contact_address'] ?? 'N/A' : 'N/A' }}</span>
                        <br> <strong>Relationship:</strong>
                        <span>{{ $emergency_contact ? $emergency_contact['emergency_contact_relationship'] ?? 'N/A' : 'N/A' }}</span>

                    </div>
                </div>

                <div class="mb-4">
                    <p class="font-bold text-[12px]">PERSONAL / SOCIAL HISTORY:</p>

                    <!-- Smoking Section -->
                    <p class="text-[12px]">
                        Smoking:
                        <input type="checkbox" disabled @checked($social_history && $social_history['smoking'] === 'Yes') class="mr-2"> YES
                        <input type="checkbox" disabled @checked($social_history && $social_history['smoking'] === 'No') class="mr-2"> NO
                        <input type="checkbox" disabled @checked($social_history && $social_history['smoking'] === 'Quitted') class="mr-2"> QUITTED
                        {{ $social_history ? $social_history['pack_per_day'] ?? '_______' : '_______' }} pack/day x
                        {{ $social_history ? $social_history['pack_in_years'] ?? '_______' : '_______' }} years
                    </p>

                    <!-- Alcohol Drinking Section -->
                    <p class="text-[12px]">
                        Alcohol Drinking:
                        <input type="checkbox" disabled @checked($social_history && $social_history['alcohol'] === 'Yes') class="mr-2"> YES
                        <input type="checkbox" disabled @checked($social_history && $social_history['alcohol'] === 'No') class="mr-2"> NO
                        <input type="checkbox" disabled @checked($social_history && $social_history['alcohol'] === 'Quitted') class="mr-2"> QUITTED
                        {{ $social_history ? $social_history['alcohol_frequency'] ?? '_______' : '_______' }}
                        (Occasionally / Moderately / Heavily / Insanely)

                        <!-- Type of Alcohol: Show only if "Yes" is selected -->
                        @if ($social_history && $social_history['alcohol'] === 'Yes')
                            <br>
                            Type of Alcohol:
                            {{ $social_history ? $social_history['alcohol_type'] ?? '___________________________' : '___________________________' }}
                        @endif
                    </p>


                    <!-- Illegal Drug Use Section -->
                    <p class="text-[12px]">
                        Illegal Drug Use:
                        <input type="checkbox" disabled @checked($social_history && $social_history['drug'] === 'Yes') class="mr-2"> YES
                        <input type="checkbox" disabled @checked($social_history && $social_history['drug'] === 'No') class="mr-2"> NO
                        <input type="checkbox" disabled @checked($social_history && $social_history['drug'] === 'Quitted') class="mr-2"> QUITTED

                        <!-- Show "What kind?" only if "Yes" is selected for drug use -->
                        @if ($social_history && $social_history['drug'] === 'Yes')
                            What kind?
                            {{ $social_history ? $social_history['drug_type'] ?? '___________________________' : '___________________________' }}
                        @endif
                    </p>

                    <!-- Sexually Active Section -->
                    <p class="text-[12px]">
                        Sexually Active:
                        <input type="checkbox" disabled @checked($social_history && $social_history['sex'] === 'Yes') class="mr-2"> YES
                        <input type="checkbox" disabled @checked($social_history && $social_history['sex'] === 'No') class="mr-2"> NO

                        <!-- Show "How many sexual partners" only if "Yes" is selected for sexually active -->
                        @if ($social_history && $social_history['sex'] === 'Yes')
                            How many sexual partners within this year?
                            {{ $social_history ? $social_history['partner_count'] ?? '_______' : '_______' }}
                            ({{ $social_history ? $social_history['partner_type'] ?? 'male / female / both' : 'male / female / both' }})
                        @else
                            <!-- Placeholder if not sexually active -->
                            How many sexual partners within this year? _______ (male / female / both)
                        @endif
                    </p>

                </div>

                <div class="mb-4">
                    <p class="font-bold text-sm">PAST MEDICAL HISTORY:</p>
                    <div class="mb-4">
                        <div class="grid grid-cols-3 gap-4">
                            <!-- Column 1 -->
                            <div>
                                <p class="font-semibold text-[12px] text-blue-500">Allergic Conditions:</p>
                                <p class="text-[12px]">
                                    <input type="checkbox" disabled @checked(($medical_history['allergy'] ?? 0) == 1) class="mr-2">
                                    Allergy
                                </p>
                                <p class="text-[12px]">
                                    <input type="checkbox" disabled @checked(($medical_history['food_allergy'] ?? 0) == 1) class="mr-2"> Food
                                    @if (!empty($medical_history['food_details']))
                                        <br><span class="ml-6 text-gray-600">Details:
                                            {{ $medical_history['food_details'] }}</span>
                                    @endif
                                </p>
                                <p class="text-[12px]">
                                    <input type="checkbox" disabled @checked(($medical_history['drug_allergy'] ?? 0) == 1) class="mr-2"> Drug
                                    @if (!empty($medical_history['drug_details']))
                                        <br><span class="ml-6 text-gray-600">Details:
                                            {{ $medical_history['drug_details'] }}</span>
                                    @endif
                                </p>
                            </div>

                            <!-- Column 2 -->
                            <div>
                                <p class="font-semibold text-[12px] text-blue-500">Neurological & Respiratory:</p>
                                <p class="text-[12px]">
                                    <input type="checkbox" disabled @checked(($medical_history['epilepsy'] ?? 0) == 1) class="mr-2">
                                    Epilepsy/Seizure Disorder
                                    @if (!empty($medical_history['epilepsy_details']))
                                        <br><span class="ml-6 text-gray-600">Details:
                                            {{ $medical_history['epilepsy_details'] }}</span>
                                    @endif
                                </p>
                                <p class="text-[12px]">
                                    <input type="checkbox" disabled @checked(($medical_history['asthma'] ?? 0) == 1) class="mr-2"> Asthma
                                </p>
                                <p class="font-semibold text-[12px] text-blue-500">Endocrine & Metabolic:</p>
                                <p class="text-[12px]">
                                    <input type="checkbox" disabled @checked(($medical_history['thyroid_disease'] ?? 0) == 1) class="mr-2">
                                    Thyroid Disease
                                </p>
                            </div>

                            <!-- Column 3 -->
                            <div>
                                <p class="font-semibold text-[12px] text-blue-500">Cardiovascular & Other:</p>
                                <p class="text-[12px]">
                                    <input type="checkbox" disabled @checked(false) class="mr-2">
                                    Congenital Heart Disorder
                                </p>
                                <p class="text-[12px]">
                                    <input type="checkbox" disabled @checked(false) class="mr-2">
                                    Diabetes Mellitus
                                </p>
                                <p class="font-semibold text-[12px] text-green-500">Chronic Conditions:</p>
                                <p class="text-[12px]">
                                    <input type="checkbox" disabled @checked(($medical_history['hypertension'] ?? 0) == 1) class="mr-2">
                                    Hypertension (Elevated BP)
                                    @if (!empty($medical_history['hypertension_details']))
                                        <br><span class="ml-6 text-gray-600">Details:
                                            {{ $medical_history['hypertension_details'] }}</span>
                                    @endif
                                </p>
                                <p class="text-[12px]">
                                    <input type="checkbox" disabled @checked(($medical_history['coronary_artery_disease'] ?? 0) == 1) class="mr-2">
                                    Coronary Artery Disease
                                </p>
                                <p class="text-[12px]">
                                    <input type="checkbox" disabled @checked(($medical_history['pcos'] ?? 0) == 1) class="mr-2"> PCOS
                                </p>
                                <p class="text-[12px]">
                                    <input type="checkbox" disabled @checked(($medical_history['peptic_ulcer'] ?? 0) == 1) class="mr-2">
                                    Peptic Ulcer
                                </p>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-4">
                            <!-- Column 1 (cont'd) -->
                            <div>
                                <p class="font-semibold text-[12px] text-green-500">Infectious Diseases:</p>
                                <p class="text-[12px]">
                                    <input type="checkbox" disabled @checked(($medical_history['tuberculosis'] ?? 0) == 1) class="mr-2">
                                    Tuberculosis
                                    @if (!empty($medical_history['tuberculosis_details']))
                                        <br><span class="ml-6 text-gray-600">Details:
                                            {{ $medical_history['tuberculosis_details'] }}</span>
                                    @endif
                                </p>
                                <p class="text-[12px]">
                                    <input type="checkbox" disabled @checked(($medical_history['hepatitis'] ?? 0) == 1) class="mr-2">
                                    Hepatitis
                                    @if (!empty($medical_history['hepatitis_details']))
                                        <br><span class="ml-6 text-gray-600">Details:
                                            {{ $medical_history['hepatitis_details'] }}</span>
                                    @endif
                                </p>
                            </div>

                            <!-- Column 2 (cont'd) -->
                            <div>
                                <p class="font-semibold text-[12px] text-green-500">Psychological Conditions:</p>
                                <p class="text-[12px]">
                                    <input type="checkbox" disabled @checked(($medical_history['psychological_disorder'] ?? 0) == 1) class="mr-2">
                                    Psychological Disorder
                                    @if (!empty($medical_history['psychological_disorder_details']))
                                        <br><span class="ml-6 text-gray-600">Details:
                                            {{ $medical_history['psychological_disorder_details'] }}</span>
                                    @endif
                                </p>

                                <p class="font-semibold text-[12px] text-green-500">Skin Conditions:</p>
                                <p class="text-[12px]">
                                    <input type="checkbox" disabled @checked(($medical_history['skin_disorder'] ?? 0) == 1) class="mr-2"> Skin
                                    Disorder
                                    @if (!empty($medical_history['skin_disorder_details']))
                                        <br><span class="ml-6 text-gray-600">Details:
                                            {{ $medical_history['skin_disorder_details'] }}</span>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



                <p class="font-bold text-sm">HOSPITAL ADMISSIONS</p>

                @forelse($recentAdmissions as $admission)
                    <p class="text-[12px]">
                        Diagnosis: {{ $admission['diagnosis'] ?? '___________________________________________' }}
                        <br> When?
                        {{ \Carbon\Carbon::parse($admission['admission_date'] ?? '')->format('F j, Y') ?? '___________________' }}

                    </p>
                @empty
                    <p class="text-[12px]">No hospitalizations recorded.</p>
                @endforelse

                <br>


                <div class="mb-4">
                    <p class="font-bold text-sm">PAST SURGICAL HISTORY:</p>

                    @if ($surgical_history)
                        <div class="text-[12px]">
                            <!-- Operation Type Section -->
                            <p><strong>Operation Type:</strong>
                                {{ $surgical_history->operation_type ?? '___________________________________________' }}
                            </p>

                            <!-- Operation Time Section -->
                            <p><strong>When:</strong>
                                {{ $surgical_history->operation_time ?? '___________________' }}
                            </p>
                            <br>
                            <!-- Person with Disability Section -->
                            <p><strong>PERSON WITH DISABILITY </strong> </p>
                            <p><strong>Disability : </strong>
                                {{ $emergency_contact ? $emergency_contact['specifics'] ?? 'N/A' : 'N/A' }}
                            </p>

                            <!-- Registration Status Section -->
                            <p><strong>Registered:</strong>
                                {{ $emergency_contact ? $emergency_contact['registered'] ?? 'N/A' : 'N/A' }}
                            </p>

                        </div>
                    @else
                        <p class="text-[12px]">No past surgical history available.</p>
                    @endif


                    <div class="mb-4">
                        <p class="font-bold text-sm">
                            WILLING TO DONATE BLOOD:
                            <input type="checkbox" disabled @checked($emergency_contact && $emergency_contact['willing_to_donate_blood'] === 'True') class="mr-2"> Yes
                            <input type="checkbox" disabled @checked($emergency_contact && $emergency_contact['willing_to_donate_blood'] === 'False') class="mr-2"> No
                        </p>
                    </div>

                    <div class="mb-4">
                        <p class="font-bold text-sm">FAMILY HISTORY:</p>
                        <p class="text-[12px]">
                            Mother side (Please enumerate):
                            {{ $parent_conditions->mother_conditions ?? '_________________________' }}
                        </p>
                        <p class="text-[12px]">
                            Father side (Please enumerate):
                            {{ $parent_conditions->father_conditions ?? '_________________________' }}
                        </p>
                    </div>



                    <div class="mb-4">


                        @if ($immunizations)
                            <p class="text-[12px]">
                                Completed Newborn Immunizations during childhood
                                <input type="checkbox" disabled @checked($immunizations->newborn_immunization == 1) class="mr-2"> Yes
                                <input type="checkbox" disabled @checked($immunizations->newborn_immunization == 0) class="mr-2"> No
                                <input type="checkbox" disabled @checked(is_null($immunizations->newborn_immunization)) class="mr-2"> Unknown
                            </p>
                        @else
                            <p class="text-[12px]">
                                Completed Newborn Immunizations during childhood: Data not available.
                            </p>
                        @endif

                        <br>

                        @if ($immunizations)
                            <p class="text-[12px]">
                                <strong>FOR WOMEN:</strong>
                            </p>
                            <p class="text-[12px]">
                                <input type="checkbox" disabled @checked($immunizations->hpv == 1) class="mr-1">
                                HPV - How many doses?
                                {{ $immunizations->hpv_details ?? '_______' }}
                            </p>

                            <p class="text-[12px]">
                                <strong>Tetanus Toxoid:</strong>
                            </p>
                            <p class="text-[12px]">
                                <input type="checkbox" disabled @checked($immunizations->tetanus_toxoid == 1) class="mr-1">
                                How many doses?
                                {{ $immunizations->tetanus_toxoid ?? '_______' }}
                            </p>

                            <p class="text-[12px]">
                                <strong>Flu:</strong>
                            </p>
                            <p class="text-[12px]">
                                <input type="checkbox" disabled @checked($immunizations->influenza_flu == 1) class="mr-1">
                                Pneumococcal Vaccine
                                <input type="checkbox" disabled @checked($immunizations->pneumococcal_vaccine == 1) class="mr-1">
                                How many doses?
                                {{ $immunizations->pneumococcal_vaccine ?? '_______' }}
                            </p>
                        @else
                            <p class="text-[12px]">
                                <em>Immunization data not available.</em>
                            </p>
                        @endif

                        <p class="text-[12px]">
                            Others: Specify:
                            {{ $immunizations->specifics ?? '________________________________________________________________________________________' }}
                        </p>

                        <br>

                        <p class="text-[12px]">
                            <strong>Covid-19 (Brand Name):</strong>
                        </p>
                        <p class="text-[12px]">
                            1<sup>st</sup> Dose: {{ $immunizations->first_dose_brand ?? '___________________' }}
                        </p>
                        <p class="text-[12px]">
                            2<sup>nd</sup> Dose: {{ $immunizations->second_dose_brand ?? '___________________' }}
                        </p>
                        <p class="text-[12px]">
                            Booster: {{ $immunizations->first_booster_brand ?? '___________________' }}
                        </p>

                        <p class="text-[12px]">
                            Unvaccinated w/ Covid-19: Reason :
                            {{ $immunizations->unvaccinated_reason ?? '________________________________________________________________________' }}
                        </p>
                    </div>


                    <div class="flex justify-between">
                        <p class="text-[12px]">Revision No. 2</p>
                        <p class="text-[12px]">Date: {{ \Carbon\Carbon::now()->format('F j, Y') }}</p>

                    </div>
                </div>
            </div>

        </div>

<div>
<a href="/health-profile/create-form/{{ $patientID }}/summary"
                wire:click="savePersonalRemarks"
                class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Next
            </a>
</div>

</div>
</div>
