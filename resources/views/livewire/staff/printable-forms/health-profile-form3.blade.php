<div>

    <head>
        <style>
            @media print {

                body,
                .max-w-4xl {
                    margin: 0;
                    padding: 0;
                    width: 210mm;
                    height: 297mm;
                }

                .max-w-4xl {
                    max-width: 100%;
                }

                /* Hide the print button */
                .print-btn {
                    display: none;
                }
            }
        </style>
    </head>

    <body class="bg-white p-8">
        <div class="max-w-4xl mx-auto border border-black p-4">
            <button onclick="window.print()" class="print-btn bg-blue-500 text-white px-4 py-2 rounded">
                Print Form
            </button>
            <h1 class="text-left font-bold text-lg mb-4">Maintenance Medication Taken:</h1>
            <h2 class="font-bold mb-2">OB/GYNE:</h2>
            <div class="mb-4">
                <h3 class="font-bold mb-1">MENSTRUAL HISTORY:</h3>
                <div class="mb-1">
                    Menarche (1<sup>st</sup> Menstruation): ___________________ Last Menstrual Period (this Month/last
                    Month): ___________________
                </div>
                <div class="mb-1">
                    Period Duration: ___________________ Interval / Cycle: ___________________ No. of pads per day:
                    ___________________
                </div>
                <div class="mb-1">
                    Onset of Sexual Intercourse: ___________________ Birth Control Methods: ___________________
                </div>
                <div class="mb-1">
                    Menopausal Stage? <input type="checkbox"> YES <input type="checkbox"> NO If yes? What age?
                    ___________________
                </div>
            </div>
            <div class="mb-4">
                <h3 class="font-bold mb-1">PREGNANCY HISTORY:</h3>
                <div class="mb-1">
                    Are you pregnant now? <input type="checkbox"> YES <input type="checkbox"> NO How many months?
                    ___________________
                </div>
                <div class="mb-1">
                    Pre-Natal Check-up? <input type="checkbox"> YES <input type="checkbox"> NO Where?
                    ___________________
                </div>
                <div class="mb-1">
                    Subject for Pregnancy Test? <input type="checkbox"> YES <input type="checkbox"> NO Result:
                    ___________________
                </div>
                <div class="mb-1">
                    Gravida: ___________________ Para: ___________________
                </div>
                <div class="mb-1">
                    Type of Delivery: <input type="checkbox"> Normal Vaginal Delivery <input type="checkbox"> Cesarean
                    Section <input type="checkbox"> Home Delivery <input type="checkbox"> Hospital
                </div>
                <div class="mb-1">
                    Abortion: ___________________ Live Birth: ___________________
                </div>
                <div class="mb-1">
                    Complications: ___________________
                </div>
                <div class="mb-1">
                    Family Planning: <input type="checkbox"> YES <input type="checkbox"> NO What Type?
                    ___________________
                </div>
                <div class="mb-1">
                    No. of Years: ___________________
                </div>
            </div>
            <h2 class="font-bold mb-2">HEAD TO TOE ASSESSMENT:</h2>
            <div class="mb-4">
                <h3 class="font-bold mb-1">NEUROLOGICAL ASSESSMENT:</h3>
                <div class="mb-1">
                    <input type="checkbox"> Normal thought process <input type="checkbox"> Normal Emotional Status
                    <input type="checkbox"> Normal Psychological Status
                </div>
                <div class="mb-1">Others: ___________________</div>
            </div>
            <div class="mb-4">
                <h3 class="font-bold mb-1">HEENT:</h3>
                <div class="mb-1">
                    <input type="checkbox"> Anicteric <input type="checkbox"> PERRLA <input type="checkbox"> Aural
                    Discharge
                    <input type="checkbox"> Intact Tympanic Membrane <input type="checkbox"> Nasal Flaring <input
                        type="checkbox"> Nasal Discharge <input type="checkbox"> Tonsillopharyngeal congestion <input
                        type="checkbox"> Hypertropic tonsils <input type="checkbox"> Palpable mass
                </div>
            </div>
            <div class="mb-4">
                <h3 class="font-bold mb-1">RESPIRATORY ASSESSMENT:</h3>
                <div class="mb-1">
                    <input type="checkbox"> Normal breath sounds <input type="checkbox"> Symmetrical Chest Expansion
                    <input type="checkbox"> Retractions <input type="checkbox"> Crackles / Rates
                </div>
            </div>
            <div class="mb-4">
                <h3 class="font-bold mb-1">CARDIOVASCULAR ASSESSMENT:</h3>
                <div class="mb-1">
                    <input type="checkbox"> Normal Heart Rate <input type="checkbox"> Heart Murmur <input
                        type="checkbox">
                    Regular Rhythm <input type="checkbox"> Palpitations <input type="checkbox"> Full Volume Excess
                    <input type="checkbox"> Edema <input type="checkbox"> Finger Discoloration <input type="checkbox">
                    Cyanosis
                    <input type="checkbox"> Limitation on mobility
                </div>
            </div>
            <div class="mb-4">
                <h3 class="font-bold mb-1">GASTROINTESTINAL ASSESSMENT:</h3>
                <div class="mb-1">
                    <input type="checkbox"> Normal Bowel Movement per day: ___________________ <input type="checkbox">
                    Borborygmi <input type="checkbox"> Constipation <input type="checkbox"> Loose bowel movement
                </div>
            </div>
            <div class="mb-4">
                <h3 class="font-bold mb-1">GENITOURINARY ASSESSMENT:</h3>
                <div class="mb-1">
                    <input type="checkbox"> Flank pain <input type="checkbox"> Painful Urination No. of urination per
                    day:
                    ___________________ Estimated amount per urination: ___________________
                </div>
            </div>
            <div class="mb-4">
                <h3 class="font-bold mb-1">INTEGUMENTARY ASSESSMENT:</h3>
                <div class="mb-1">
                    <input type="checkbox"> Pallor <input type="checkbox"> Rashes <input type="checkbox"> Jaundice
                    <input type="checkbox"> Good skin turgor <input type="checkbox"> Cyanosis
                </div>
            </div>
            <div class="mb-4">
                <h3 class="font-bold mb-1">EXTREMITIES:</h3>
                <div class="mb-1">
                    <input type="checkbox"> Gross Deformity <input type="checkbox"> Normal Gait <input
                        type="checkbox">
                    Normal Strength
                </div>
                <div class="mb-1">Others: ___________________</div>
            </div>
            <div class="mb-4">
                <h3 class="font-bold mb-1">OTHER PERTINENT FINDINGS UPON ASSESSMENT:</h3>
                <div class="mb-1">
                    ________________________________________________________________________________________</div>
            </div>
            <div class="mb-4">
                <h3 class="font-bold mb-1">CERTIFICATION</h3>
                <p class="mb-1">I truly certify that all information I provided are correct and true, and subject
                    myself
                    to consultation, assessment, and treatment whenever illness occur in the course and duration of my
                    stay
                    as student in NBSC.</p>
            </div>
            <div class="flex mb-4">
                <div class="w-1/2">
                    <div class="mb-1">__________________________</div>
                    <div>(Signature over Printed Name)</div>
                </div>
                <div class="w-1/2">
                    <div class="mb-1">__________________________</div>
                    <div>Checked by:</div>
                </div>
            </div>
            <div class="flex mb-4">
                <div class="w-1/2">
                    <div>Assessed and Interviewed by:</div>
                    <div>NBSC School Nurse</div>
                </div>
                <div class="w-1/2">
                    <div>Medical Doctor</div>
                </div>
            </div>
            <div class="flex justify-between">
                <div>Revision No. 1</div>
                <div>Revision Date: September 26, 2023</div>
            </div>
        </div>
    </body>

</div>
