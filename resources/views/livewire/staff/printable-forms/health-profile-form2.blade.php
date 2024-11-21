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

        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: left;
        }
        th {
            background-color: #d3d3d3;
        }
        .section-title {
            background-color: #d3d3d3;
            font-weight: bold;
            text-align: center;
        }
        .checkbox {
            text-align: center;
        }
        .no-border {
            border: none;
        }
        .no-border td {
            border: none;
        }
        .footer {
            margin-top: 20px;
        }
    </style>


        <button class="print-button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4"
            onclick="window.print()">
            Print this form
        </button>

        <div class="container">
        <table>
        <tr>
            <th colspan="6">II. Physical Screening. Please check (√) appropriate box or supply needed information.</th>
        </tr>
        <tr>
            <td>Height (cm)</td>
            <td>Weight (kg)</td>
            <td>Blood Pressure</td>
            <td>Pulse Rate</td>
            <td>Respiration</td>
            <td>SPO<sub>2</sub></td>
        </tr>
        <tr>
            <td>RHR</td>
            <td>BMI</td>
            <td>BMI Class</td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <th colspan="6">III. Physical Examination. Please Check (√) Normal and specify ABNORMAL findings</th>
        </tr>
        <tr>
            <td>Visual Acuity</td>
            <td>OD</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>OS</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td></td>
        </tr>
        <tr>
            <td>Color Vision</td>
            <td>Corrected</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Uncorrected</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td></td>
        </tr>
        <tr>
            <td>Hearing by testing</td>
            <td>AD</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>AS</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td></td>
        </tr>
        <tr>
            <td>Speech</td>
            <td>Clear</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Unclear</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td></td>
        </tr>
        <tr>
            <th colspan="6">IV. Physical Examination. Please Check (√) Normal and specify ABNORMAL findings</th>
        </tr>
        <tr>
            <td>Skin</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Normal</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Findings</td>
            <td></td>
        </tr>
        <tr>
            <td>Head, Neck</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Normal</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Findings</td>
            <td></td>
        </tr>
        <tr>
            <td>Eyes</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Normal</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Findings</td>
            <td></td>
        </tr>
        <tr>
            <td>Ears</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Normal</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Findings</td>
            <td></td>
        </tr>
        <tr>
            <td>Nose</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Normal</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Findings</td>
            <td></td>
        </tr>
        <tr>
            <td>Mouth, Throat</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Normal</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Findings</td>
            <td></td>
        </tr>
        <tr>
            <td>Neck</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Normal</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Findings</td>
            <td></td>
        </tr>
        <tr>
            <td>Chest, Breast</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Normal</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Findings</td>
            <td></td>
        </tr>
        <tr>
            <td>Lungs</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Normal</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Findings</td>
            <td></td>
        </tr>
        <tr>
            <td>Heart</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Normal</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Findings</td>
            <td></td>
        </tr>
        <tr>
            <td>Abdomen</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Normal</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Findings</td>
            <td></td>
        </tr>
        <tr>
            <td>Genitals</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Normal</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Findings</td>
            <td></td>
        </tr>
        <tr>
            <td>Rectum</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Normal</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Findings</td>
            <td></td>
        </tr>
        <tr>
            <td>Spine, Back</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Normal</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Findings</td>
            <td></td>
        </tr>
        <tr>
            <td>Extremities</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Normal</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Findings</td>
            <td></td>
        </tr>
        <tr>
            <td>Neurological</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Normal</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Findings</td>
            <td></td>
        </tr>
        <tr>
            <th colspan="6">V. Ancillary Examinations. Please check (√) NORMAL and specify ABNORMAL FINDINGS.</th>
        </tr>
        <tr>
            <td>Urinalysis</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Normal</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>With Findings</td>
            <td></td>
        </tr>
        <tr>
            <td>Chest X-ray</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Normal</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>With Findings</td>
            <td></td>
        </tr>
        <tr>
            <td>Fecalysis</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Normal</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>With Findings</td>
            <td></td>
        </tr>
        <tr>
            <td>Pregnancy Test</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Positive</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Negative</td>
            <td></td>
        </tr>
        <tr>
            <td>Drug Test</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Normal</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>With Findings</td>
            <td></td>
        </tr>
        <tr>
            <td>Blood Type</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Normal</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>With Findings</td>
            <td></td>
        </tr>
        <tr>
            <td>HIV</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Normal</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>With Findings</td>
            <td></td>
        </tr>
        <tr>
            <td>Other</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>Normal</td>
            <td class="checkbox"><input type="checkbox"></td>
            <td>With Findings</td>
            <td></td>
        </tr>
        <tr>
            <th colspan="6">VI. FITNESS FOR CLASSIFICATION. Please check (√) appropriate box according to your findings.</th>
        </tr>
        <tr>
            <td>A</td>
            <td colspan="5">Physically fit, mentally fit for any work or study.</td>
        </tr>
        <tr>
            <td>B</td>
            <td colspan="5">With minor condition, physically fit for any work or study.</td>
        </tr>
        <tr>
            <td>C</td>
            <td colspan="5">With major condition, physically fit for any work or study.</td>
        </tr>
        <tr>
            <td>D</td>
            <td colspan="5">Unfit for any work or study.</td>
        </tr>
        <tr>
            <th colspan="6">VII. Endorsing Personnel Remarks: Please provide a summary of the examination findings.</th>
        </tr>
        <tr>
            <td colspan="6">
                <table class="no-border">
                    <tr>
                        <td>DIAGNOSIS</td>
                        <td>REMARKS</td>
                    </tr>
                    <tr>
                        <td><textarea rows="4" cols="50"></textarea></td>
                        <td><textarea rows="4" cols="50"></textarea></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <div class="footer">
        <table class="no-border">
            <tr>
                <td>School Name:</td>
                <td>School Physician:</td>
            </tr>
            <tr>
                <td>LRN No.:</td>
                <td>License No.:</td>
            </tr>
            <tr>
                <td>Sex:</td>
                <td>Recorded by:</td>
            </tr>
            <tr>
                <td>Date Filed:</td>
                <td>File No.:</td>
            </tr>
        </table>
        </div>
    </body>

</x>
