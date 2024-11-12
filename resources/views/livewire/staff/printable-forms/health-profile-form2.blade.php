<x-layout>

    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        </link>
        <style>
            body {
                font-family: Arial, sans-serif;
            }

            .border-collapse {
                border-collapse: collapse;
            }

            .border,
            th,
            td {
                border: 1px solid black;
            }

            th,
            td {
                padding: 4px;
                text-align: left;
            }

            .checkbox {
                display: inline-block;
                width: 20px;
                height: 20px;
                border: 1px solid black;
                margin-right: 5px;
            }

            @media print {
                .print-button {
                    display: none;
                }

                body {
                    margin: 0;
                    padding: 0;
                }

                .container {
                    width: 100%;
                    page-break-after: always;
                }
            }
        </style>
    </head>

    <body class="p-8">

        <button class="print-button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4"
            onclick="window.print()">
            Print this form
        </button>

        <div class="container">
            <table class="w-full border-collapse">
                <tr>
                    <td colspan="8" class="border p-2">
                        <strong>II. Physical Screening. Please check (√) appropriate box or supply needed
                            information.</strong>
                    </td>
                </tr>
                <tr>
                    <td class="border p-2">Height (cm)</td>
                    <td class="border p-2">Weight (kg)</td>
                    <td class="border p-2">Blood Pressure</td>
                    <td class="border p-2">Pulse Rate</td>
                    <td class="border p-2">Respiration</td>
                    <td class="border p-2">SPO2</td>
                    <td class="border p-2">BMI</td>
                    <td class="border p-2">BMI Class</td>
                </tr>
                <tr>
                    <td colspan="8" class="border p-2">
                        <table class="w-full border-collapse">
                            <tr>
                                <td class="border p-2">Visual Acuity</td>
                                <td class="border p-2">Right Vision</td>
                                <td class="border p-2">Left Vision</td>
                                <td class="border p-2">Ishihara Color Vision</td>
                                <td class="border p-2">Ear Hearing by testing</td>
                                <td class="border p-2">Speech</td>
                            </tr>
                            <tr>
                                <td class="border p-2">
                                    <div class="checkbox"></div> Corrected<br>
                                    <div class="checkbox"></div> Uncorrected
                                </td>
                                <td class="border p-2">OD</td>
                                <td class="border p-2">OS</td>
                                <td class="border p-2">
                                    <div class="checkbox"></div> Adequate<br>
                                    <div class="checkbox"></div> Defective
                                </td>
                                <td class="border p-2">
                                    <div class="checkbox"></div> Adequate<br>
                                    <div class="checkbox"></div> Inadequate
                                </td>
                                <td class="border p-2">
                                    <div class="checkbox"></div> Clear<br>
                                    <div class="checkbox"></div> Unclear
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="8" class="border p-2">
                        <strong>III. Physical Examination. Please Check (√) Normal and specify ABNORMAL
                            findings</strong>
                    </td>
                </tr>
                <tr>
                    <td class="border p-2">Normal</td>
                    <td class="border p-2">Findings</td>
                    <td class="border p-2">Normal</td>
                    <td class="border p-2">Findings</td>
                    <td class="border p-2">Normal</td>
                    <td class="border p-2">Findings</td>
                    <td class="border p-2">Normal</td>
                    <td class="border p-2">Findings</td>
                </tr>
                <tr>
                    <td class="border p-2">
                        <div class="checkbox"></div> Skin
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2">
                        <div class="checkbox"></div> Chest, Breast, Lungs
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2">
                        <div class="checkbox"></div> Abdomen
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2">
                        <div class="checkbox"></div> Neck, Throat
                    </td>
                    <td class="border p-2"></td>
                </tr>
                <tr>
                    <td class="border p-2">
                        <div class="checkbox"></div> Head, Scalp
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2">
                        <div class="checkbox"></div> Heart & Vascular System
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2">
                        <div class="checkbox"></div> Anus-Rectum
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2">
                        <div class="checkbox"></div> Lymph Nodes
                    </td>
                    <td class="border p-2"></td>
                </tr>
                <tr>
                    <td class="border p-2">
                        <div class="checkbox"></div> Eyes (external)
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2">
                        <div class="checkbox"></div> Spine, Back
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2">
                        <div class="checkbox"></div> Genito-Urinary System
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2">
                        <div class="checkbox"></div> Extremities
                    </td>
                    <td class="border p-2"></td>
                </tr>
                <tr>
                    <td class="border p-2">
                        <div class="checkbox"></div> Pupils (equality & reaction)
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2">
                        <div class="checkbox"></div> Upper Extremities
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2">
                        <div class="checkbox"></div> Inguinal, Genitalia
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2">
                        <div class="checkbox"></div> Posture, Gait
                    </td>
                    <td class="border p-2"></td>
                </tr>
                <tr>
                    <td class="border p-2">
                        <div class="checkbox"></div> Ears (external)
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2">
                        <div class="checkbox"></div> Lower Extremities
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2">
                        <div class="checkbox"></div> Anus-Rectum
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2">
                        <div class="checkbox"></div> Neurologic
                    </td>
                    <td class="border p-2"></td>
                </tr>
                <tr>
                    <td class="border p-2">
                        <div class="checkbox"></div> Nose, Sinuses
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2">
                        <div class="checkbox"></div> Feet
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2">
                        <div class="checkbox"></div> Anus-Rectum
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2">
                        <div class="checkbox"></div> Skin
                    </td>
                    <td class="border p-2"></td>
                </tr>
                <tr>
                    <td colspan="8" class="border p-2">
                        <strong>IV. Ancillary Examination. Please check (√) NORMAL and specify ABNORMAL
                            FINDINGS.</strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" class="border p-2">
                        <strong>A. CHEST X-RAY</strong>
                    </td>
                    <td colspan="4" class="border p-2">
                        <strong>B. ECG/EKG</strong>
                    </td>
                </tr>
                <tr>
                    <td class="border p-2">
                        <div class="checkbox"></div> Normal
                    </td>
                    <td class="border p-2">
                        <div class="checkbox"></div> With findings
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2"></td>
                    <td class="border p-2">
                        <div class="checkbox"></div> Normal
                    </td>
                    <td class="border p-2">
                        <div class="checkbox"></div> With findings
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2"></td>
                </tr>
                <tr>
                    <td colspan="4" class="border p-2">
                        <strong>C. PREGNANCY TEST</strong>
                    </td>
                    <td colspan="4" class="border p-2">
                        <strong>D. DRUG TEST</strong>
                    </td>
                </tr>
                <tr>
                    <td class="border p-2">
                        <div class="checkbox"></div> Positive
                    </td>
                    <td class="border p-2">
                        <div class="checkbox"></div> Negative
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2"></td>
                    <td class="border p-2">
                        <div class="checkbox"></div> Positive
                    </td>
                    <td class="border p-2">
                        <div class="checkbox"></div> Negative
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2"></td>
                </tr>
                <tr>
                    <td colspan="8" class="border p-2">
                        <strong>V. MEDICAL CLASSIFICATION. Please check (√) appropriate box according to
                            findings</strong>
                    </td>
                </tr>
                <tr>
                    <td class="border p-2">
                        <div class="checkbox"></div> A
                    </td>
                    <td colspan="7" class="border p-2">Physically fit for any work or study</td>
                </tr>
                <tr>
                    <td class="border p-2">
                        <div class="checkbox"></div> B
                    </td>
                    <td colspan="7" class="border p-2">Physically fit for any work or study but with minor
                        condition,
                        defect or deformity</td>
                </tr>
                <tr>
                    <td class="border p-2">
                        <div class="checkbox"></div> C
                    </td>
                    <td colspan="7" class="border p-2">With abnormal findings, needs further evaluation</td>
                </tr>
                <tr>
                    <td class="border p-2">
                        <div class="checkbox"></div> D
                    </td>
                    <td colspan="7" class="border p-2">Unfit for work or study</td>
                </tr>
                <tr>
                    <td colspan="8" class="border p-2">
                        <strong>VI. Remarks/Recommendations: Please provide details as necessary</strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" class="border p-2">DIAGNOSIS</td>
                    <td colspan="4" class="border p-2">REMARKS</td>
                </tr>
                <tr>
                    <td colspan="4" class="border p-2 h-32"></td>
                    <td colspan="4" class="border p-2 h-32"></td>
                </tr>
                <tr>
                    <td colspan="4" class="border p-2">School Name</td>
                    <td colspan="4" class="border p-2">School Physician</td>
                </tr>
                <tr>
                    <td class="border p-2">Lic. No.</td>
                    <td class="border p-2">Date</td>
                    <td class="border p-2">Seal</td>
                    <td class="border p-2"></td>
                    <td class="border p-2">Printed Name</td>
                    <td class="border p-2">Signature</td>
                    <td class="border p-2">Date</td>
                    <td class="border p-2">Recorded by</td>
                </tr>
                <tr>
                    <td colspan="8" class="border p-2 text-right">Revision No. 1 &nbsp;&nbsp;&nbsp;&nbsp; Revision
                        Date: September 30, 2023</td>
                </tr>
            </table>
        </div>
    </body>

</x-layout>
