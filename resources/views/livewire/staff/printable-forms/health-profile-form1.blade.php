<div>
    <style>
        @media print {
            .form-1 {
                margin: 0 auto;
                padding: 0;
                width: 210mm;
                transform: scale(0.92);
                /* Scale down to fit content */
                transform-origin: top center;
                /* Ensures scaling starts from top left */
                height: auto;
                /* Allow height to adapt */
            }

            .printable {
                border: none;
                page-break-inside: avoid;
            }

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
            <div class="text-center mb-4">
                <p class="text-sm">Appendix C. Student Health Profile</p>
                <p class="text-sm">Republic of the Philippines</p>
                <p class="text-sm">Province of Bukidnon</p>
                <p class="text-sm font-bold ">Northern Bukidnon State College</p>
                <p class="text-sm">Municipality of Manolo Fortich</p>
                <p class="text-sm font-bold">STUDENT HEALTH PROFILE</p>
            </div>
            <div class="flex justify-between mb-4">
                <div class="w-2/3">
                    <p class="text-[12px]">Date: ___________________________</p>
                    <p class="text-[12px]">College Clinic File
                        Number:___________________________CollegeCourse:__________________</p>
                    <div class="flex items-center">
                        <p class="mr-2">1<sup>st</sup> yr</p>
                        <input type="checkbox" class="mr-4">
                        <p class="mr-2">2<sup>nd</sup> yr</p>
                        <input type="checkbox" class="mr-4">
                        <p class="mr-2">3<sup>rd</sup> yr</p>
                        <input type="checkbox" class="mr-4">
                        <p class="mr-2">4<sup>th</sup> yr</p>
                        <input type="checkbox">
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <p class="font-bold text-sm">PERSONAL PROFILE:</p>
                <p class="text-[12px]">Name: ___________________________________________ Age/Sex: ___________________
                    Birthday:
                    ___________________</p>
                <p class="text-[12px]">Home Address:
                    ___________________________________________________________________________________________
                </p>
                <p class="text-[12px]">Municipal Address:
                    ______________________________________________________________________________________
                </p>
                <p class="text-[12px]">Contact Number(s):
                    ______________________________________________________________________________________
                </p>
                <p class="text-[12px]">In Case of Emergency (Please Contact):</p>
                <p class="text-[12px]">Name: ___________________________________________ Contact Number:
                    ________________________________________</p>
                <p class="text-[12px]">Address:
                    ________________________________________________________________________________________________
                </p>
                <p class="text-[12px]">Relationship: _____________________________________</p>
            </div>
            <div class="mb-4">
                <p class="font-bold text-[12px]">PERSONAL / SOCIAL HISTORY:</p>
                <p class="text-[12px]">Smoking: <input type="checkbox" class="mr-2"> YES <input type="checkbox"
                        class="mr-2"> NO <input type="checkbox" class="mr-2"> QUITTED _______ pack/day x _______
                    years</p>
                <p class="text-[12px]">Alcohol Drinking: <input type="checkbox" class="mr-2"> YES <input
                        type="checkbox" class="mr-2">
                    NO
                    <input type="checkbox" class="mr-2"> QUITTED _______ (Occasionally / Moderately / Heavily) /
                    Insanely
                </p>
                <p class="text-[12px]">Illegal Drug Use: <input type="checkbox" class="mr-2"> YES <input
                        type="checkbox" class="mr-2">
                    NO
                    <input type="checkbox" class="mr-2"> QUITTED What kind? ___________________________
                </p>
                <p class="text-[12px]">Sexually Active: <input type="checkbox" class="mr-2"> YES <input
                        type="checkbox" class="mr-2"> NO
                    How
                    many sexual partners within this year? _______ (male / female) / both</p>
            </div>
            <div class="mb-4">
                <p class="font-bold text-[12px]">PAST MEDICAL HISTORY:</p>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-[12px]"><input type="checkbox" class="mr-2"> Allergy</p>
                        <p class="text-[12px]"><input type="checkbox" class="mr-2"> Food</p>
                        <p class="text-[12px]"><input type="checkbox" class="mr-2"> Drug</p>
                        <p class="text-[12px]"><input type="checkbox" class="mr-2"> Epilepsy/Seizure Disorder</p>
                        <p class="text-[12px]"><input type="checkbox" class="mr-2"> Asthma</p>
                        <p class="text-[12px]"><input type="checkbox" class="mr-2"> Congenital Heart Disorder</p>
                        <p class="text-[12px]"><input type="checkbox" class="mr-2"> Thyroid Disease</p>
                        <p class="text-[12px]"><input type="checkbox" class="mr-2"> Diabetes Mellitus</p>
                        <p class="text-[12px]"><input type="checkbox" class="mr-2"> PTB</p>
                        <p class="text-[12px]"><input type="checkbox" class="mr-2"> Hypertension (Elevated BP)</p>
                    </div>
                    <div>
                        <p class="text-[12px]"><input type="checkbox" class="mr-2"> Coronary Artery Disease</p>
                        <p class="text-[12px]"><input type="checkbox" class="mr-2"> PUD</p>
                        <p class="text-[12px]"><input type="checkbox" class="mr-2"> Liver Disease</p>
                        <p class="text-[12px]"><input type="checkbox" class="mr-2"> Kidney Disease</p>
                        <p class="text-[12px]"><input type="checkbox" class="mr-2"> Psychological Disorder</p>
                    </div>
                </div>
                <p class="text-[12px]">Hospitalizations:</p>
                <p class="text-[12px]">Diagnosis: ___________________________________________ When? ___________________
                </p>
                <p class="text-[12px]">Diagnosis: ___________________________________________ When? ___________________
                </p>
            </div>
            <div class="mb-4">
                <p class="font-bold text-sm">PAST SURGICAL HISTORY:</p>
                <p class="text-[12px]">Operation type: ___________________________________________ When?
                    ___________________</p>
                <p class="text-[12px]">Operation type: ___________________________________________ When?
                    ___________________</p>
                <p class="text-[12px]">Operation type: ___________________________________________ When?
                    ___________________</p>
                <p class="text-[12px]">Person with Disability. Specify:
                    ___________________________________________________________________________</p>
                <p class="text-[12px]">Registered <input type="checkbox" class="mr-2"> Not Registered <input
                        type="checkbox"></p>
            </div>
            <div class="mb-4">
                <p class="font-bold text-sm">WILLING TO DONATE BLOOD: <input type="checkbox" class="mr-2"> YES
                    <input type="checkbox" class="mr-2"> NO
                </p>
            </div>
            <div class="mb-4">
                <p class="font-bold text-sm">Family History:</p>
                <p class="text-[12px]">Mother side (Please enumerate):
                    ____________________________________________________________________________</p>
                <p class="text-[12px]">Father side (Please enumerate):
                    ____________________________________________________________________________</p>
            </div>
            <div class="mb-4">
                <p class="font-bold text-sm">Immunizations:</p>
                <p class="text-[12px]">Completed Newborn Immunizations during childhood <input type="checkbox"
                        class="mr-2"> Yes <input type="checkbox" class="mr-2"> No <input type="checkbox"
                        class="mr-2"> Unknown</p>
                <p class="text-[12px]">For Women: <input type="checkbox" class="mr-2"> HPV How many doses? _______
                </p>
                <p class="text-[12px]">Tetanus toxoid <input type="checkbox" class="mr-2"> How many doses? _______
                </p>
                <p class="text-[12px]">Flu <input type="checkbox" class="mr-2"> Pneumococcal Vaccine <input
                        type="checkbox" class="mr-2"> How many doses? _______</p>
                <p class="text-[12px]">Others: Specify:
                    __________________________________________________________________________________________</p>
                <p class="text-[12px]">Covid-19 (Brand Name): 1<sup>st</sup> Dose: ___________________ 2<sup>nd</sup>
                    Dose:
                    ___________________
                    Booster: ___________________</p>
                <p class="text-[12px]">Unvaccinated w/ Covid-19: Reason
                    __________________________________________________________________________</p>
            </div>
            <div class="flex justify-between">
                <p class="text-[12px]">Revision No. 2</p>
                <p class="text-[12px]">Revision Date: December 4, 2023</p>
            </div>
        </div>
    </div>

</div>
