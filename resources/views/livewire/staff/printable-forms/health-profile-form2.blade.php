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

        th,
        td {
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
                <th colspan="6">II. Physical Screening. Please check (√) appropriate box or supply needed information.
                </th>
            </tr>
            <tr>
                <td>Height (cm) : {{ $physical_screening ? $physical_screening['height'] ?? 'N/A' : 'N/A' }} </td
                    readonly>
                <td>Weight (kg) : {{ $physical_screening ? $physical_screening['weight'] ?? 'N/A' : 'N/A' }}</td
                    readonly>
                <td>Blood Pressure : {{ $physical_screening ? $physical_screening['blood_pressure'] ?? 'N/A' : 'N/A' }}
                </td readonly>
                <td>Pulse Rate : {{ $physical_screening ? $physical_screening['pulse_rate'] ?? 'N/A' : 'N/A' }}</td>
                <td>Respiration : {{ $physical_screening ? $physical_screening['respiration'] ?? 'N/A' : 'N/A' }}</td>
                <td>SPO<sub>2</sub>: : {{ $physical_screening ? $physical_screening['spo2'] ?? 'N/A' : 'N/A' }}</td>
            </tr>
            <tr>
                <td>RHR : {{ $physical_screening ? $physical_screening['rhr'] ?? 'N/A' : 'N/A' }}</td>
                <td>BMI : {{ $physical_screening ? $physical_screening['BMI'] ?? 'N/A' : 'N/A' }}</td>
                <td>BMI Class : {{ $physical_screening ? $physical_screening['BMI_class'] ?? 'N/A' : 'N/A' }} </td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <th colspan="6">III. Physical Examination. Please Check (√) Normal and specify ABNORMAL findings</th>
            </tr>
            <tr>
                <td>Visual Acuity</td>
                <td>Corrected</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_screening['visual_acuity']) && $physical_screening['visual_acuity'] === 'corrected' ? 'checked' : '' }}
                        disabled>
                </td>

                <td>Uncorrected</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_screening['visual_acuity']) && $physical_screening['visual_acuity'] === 'uncorrected' ? 'checked' : '' }}
                        disabled>
                </td>

                <td></td>
            </tr>
            <tr>
                <td>Color Vision</td>
                <td>Corrected</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_screening['ishihara_color_vision']) && $physical_screening['ishihara_color_vision'] === 'Adequate' ? 'checked' : '' }}
                        disabled>
                </td>

                <td>Uncorrected</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_screening['ishihara_color_vision']) && $physical_screening['ishihara_color_vision'] === 'Defective' ? 'checked' : '' }}
                        disabled>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Hearing by testing</td>
                <td>AD</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_screening['tuning_fork_ad']) && $physical_screening['tuning_fork_ad'] === 'Adequate' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>AS</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_screening['tuning_fork_as']) && $physical_screening['tuning_fork_as'] === 'Inadequate' ? 'checked' : '' }}
                        disabled>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Speech</td>
                <td>Clear</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_screening['speech']) && $physical_screening['speech'] === 'Clear' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Unclear</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_screening['speech']) && $physical_screening['speech'] === 'Unclear' ? 'checked' : '' }}
                        disabled>
                </td>
                <td></td>
            </tr>


            <tr>
                <th colspan="6">IV. Physical Examination. Please Check (√) Normal and specify ABNORMAL findings</th>
            </tr>

            <tr>
                <td>Skin</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['skin']) && $physical_examination['skin'] === 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Normal</td>

                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['skin']) && $physical_examination['skin'] !== 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Findings</td>
                <td>
                    {{ isset($physical_examination['skin']) ? $physical_examination['skin'] : 'N/A' }}
                </td>
            </tr>


            <tr>
                <td>Head, Neck</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['head_neck_scalp']) && $physical_examination['head_neck_scalp'] === 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Normal</td>

                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['head_neck_scalp']) && $physical_examination['head_neck_scalp'] !== 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Findings</td>
                <td>
                    {{ isset($physical_examination['head_neck_scalp']) ? $physical_examination['head_neck_scalp'] : 'N/A' }}
                </td>
            </tr>
            <tr>
                <td>Eyes</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['external_eyes']) && $physical_examination['external_eyes'] === 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Normal</td>

                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['external_eyes']) && $physical_examination['external_eyes'] !== 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Findings</td>
                <td>
                    {{ isset($physical_examination['external_eyes']) ? $physical_examination['external_eyes'] : 'N/A' }}
                </td>
            </tr>
            <tr>
                <td>Ears</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['ears_nose_sinuses']) && $physical_examination['ears_nose_sinuses'] === 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Normal</td>

                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['ears_nose_sinuses']) && $physical_examination['ears_nose_sinuses'] !== 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Findings</td>
                <td>
                    {{ isset($physical_examination['ears_nose_sinuses']) ? $physical_examination['ears_nose_sinuses'] : 'N/A' }}
                </td>
            </tr>
            <tr>
                <td>Nose</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['ears_nose_sinuses']) && $physical_examination['ears_nose_sinuses'] === 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Normal</td>

                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['ears_nose_sinuses']) && $physical_examination['ears_nose_sinuses'] !== 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Findings</td>
                <td>
                    {{ isset($physical_examination['ears_nose_sinuses']) ? $physical_examination['ears_nose_sinuses'] : 'N/A' }}
                </td>
            </tr>
            <tr>
                <td>Mouth, Throat</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['mouth_throat']) && $physical_examination['mouth_throat'] === 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Normal</td>

                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['mouth_throat']) && $physical_examination['mouth_throat'] !== 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Findings</td>
                <td>
                    {{ isset($physical_examination['mouth_throat']) ? $physical_examination['mouth_throat'] : 'N/A' }}
                </td>
            </tr>
            <tr>
                <td>Neck</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['neck_lymphnodes_throid']) && $physical_examination['neck_lymphnodes_throid'] === 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Normal</td>

                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['neck_lymphnodes_throid']) && $physical_examination['neck_lymphnodes_throid'] !== 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Findings</td>
                <td>
                    {{ isset($physical_examination['neck_lymphnodes_throid']) ? $physical_examination['neck_lymphnodes_throid'] : 'N/A' }}
                </td>
            </tr>
            <tr>
                <td>Chest, Breast</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['chest_breast_axilla']) && $physical_examination['chest_breast_axilla'] === 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Normal</td>

                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['chest_breast_axilla']) && $physical_examination['chest_breast_axilla'] !== 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Findings</td>
                <td>
                    {{ isset($physical_examination['chest_breast_axilla']) ? $physical_examination['chest_breast_axilla'] : 'N/A' }}
                </td>
            </tr>
            <tr>
                <td>Lungs</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['lungs']) && $physical_examination['lungs'] === 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Normal</td>

                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['lungs']) && $physical_examination['lungs'] !== 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Findings</td>
                <td>
                    {{ isset($physical_examination['lungs']) ? $physical_examination['lungs'] : 'N/A' }}
                </td>
            </tr>
            <tr>
                <td>Heart</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['heart_and_valvular']) && $physical_examination['heart_and_valvular'] === 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Normal</td>

                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['heart_and_valvular']) && $physical_examination['heart_and_valvular'] !== 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Findings</td>
                <td>
                    {{ isset($physical_examination['heart_and_valvular']) ? $physical_examination['heart_and_valvular'] : 'N/A' }}
                </td>
            </tr>
            <tr>
                <td>Abdomen</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['back_and_abdomen']) && $physical_examination['back_and_abdomen'] === 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Normal</td>

                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['back_and_abdomen']) && $physical_examination['skin'] !== 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Findings</td>
                <td>
                    {{ isset($physical_examination['back_and_abdomen']) ? $physical_examination['back_and_abdomen'] : 'N/A' }}
                </td>
            </tr>
            <tr>
                <td>Genitals</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['genitalia']) && $physical_examination['genitalia'] === 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Normal</td>

                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['genitalia']) && $physical_examination['genitalia'] !== 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Findings</td>
                <td>
                    {{ isset($physical_examination['genitalia']) ? $physical_examination['genitalia'] : 'N/A' }}
                </td>
            </tr>
            <tr>
                <td>Rectum</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['anus_rectum']) && $physical_examination['anus_rectum'] === 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Normal</td>

                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['anus_rectum']) && $physical_examination['anus_rectum'] !== 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Findings</td>
                <td>
                    {{ isset($physical_examination['anus_rectum']) ? $physical_examination['anus_rectum'] : 'N/A' }}
                </td>
            </tr>
            <tr>
                <td>Spine, Back</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['back_and_abdomen']) && $physical_examination['back_and_abdomen'] === 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Normal</td>

                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['back_and_abdomen']) && $physical_examination['back_and_abdomen'] !== 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Findings</td>
                <td>
                    {{ isset($physical_examination['back_and_abdomen']) ? $physical_examination['back_and_abdomen'] : 'N/A' }}
                </td>
            </tr>
            <tr>
                <td>Extremities</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['extremities']) && $physical_examination['extremities'] === 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Normal</td>

                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['extremities']) && $physical_examination['extremities'] !== 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Findings</td>
                <td>
                    {{ isset($physical_examination['extremities']) ? $physical_examination['extremities'] : 'N/A' }}
                </td>
            </tr>

            {{-- <tr>
                <td>Neurological</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['skin']) && $physical_examination['skin'] === 'NORMAL' ? 'checked' : '' }} disabled>
                </td>
                <td>Normal</td>

                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($physical_examination['skin']) && $physical_examination['skin'] !== 'NORMAL' ? 'checked' : '' }} disabled>
                </td>
                <td>Findings</td>
                <td>
                    {{ isset($physical_examination['skin']) ? $physical_examination['skin'] : 'N/A' }}
                </td>
            </tr> --}}



            <tr>
                <th colspan="6">V. Ancillary Examinations. Please check (√) NORMAL and specify ABNORMAL FINDINGS.
                </th>
            </tr>
            <tr>
                <td>Urinalysis</td>

                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($ancillary_examinations['urinalysis']) && $ancillary_examinations['urinalysis'] === 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Normal</td>

                <td class="checkbox">

                    <input type="checkbox"
                        {{ isset($ancillary_examinations['urinalysis']) && $ancillary_examinations['urinalysis'] !== 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Findings</td>

                <td>
                    {{ isset($ancillary_examinations['urinalysis']) ? $ancillary_examinations['urinalysis'] : 'N/A' }}
                </td>

            </tr>
            <tr>
                <td>Chest X-ray</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($ancillary_examinations['chest_xray']) && $ancillary_examinations['chest_xray'] === 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Normal</td>

                <td class="checkbox">

                    <input type="checkbox"
                        {{ isset($ancillary_examinations['chest_xray']) && $ancillary_examinations['chest_xray'] !== 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Findings</td>

                <td>
                    {{ isset($ancillary_examinations['chest_xray']) ? $ancillary_examinations['chest_xray'] : 'N/A' }}
                </td>

            </tr>
            <tr>
                <td>Fecalysis</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($ancillary_examinations['fecalysis']) && $ancillary_examinations['fecalysis'] === 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Normal</td>

                <td class="checkbox">

                    <input type="checkbox"
                        {{ isset($ancillary_examinations['fecalysis']) && $ancillary_examinations['fecalysis'] !== 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Findings</td>

                <td>
                    {{ isset($ancillary_examinations['fecalysis']) ? $ancillary_examinations['fecalysis'] : 'N/A' }}
                </td>

            </tr>
            <tr>
                <td>Pregnancy Test</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($ancillary_examinations['pregnancy_test']) && $ancillary_examinations['pregnancy_test'] === 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Normal</td>

                <td class="checkbox">

                    <input type="checkbox"
                        {{ isset($ancillary_examinations['pregnancy_test']) && $ancillary_examinations['pregnancy_test'] !== 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Findings</td>

                <td>
                    {{ isset($ancillary_examinations['pregnancy_test']) ? $ancillary_examinations['pregnancy_test'] : 'N/A' }}
                </td>

            </tr>
            {{-- <tr>
                <td>Drug Test</td>
               <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($ancillary_examinations['urinalysis']) && $ancillary_examinations['urinalysis'] === 'NORMAL' ? 'checked' : '' }} disabled>
                </td>
                <td>Normal</td>

                <td class="checkbox">
             
                    <input type="checkbox"
                        {{ isset($ancillary_examinations['urinalysis']) && $ancillary_examinations['urinalysis'] !== 'NORMAL' ? 'checked' : '' }} disabled>
                </td>
                <td>Findings</td>

                <td>
                    {{ isset($ancillary_examinations['urinalysis']) ? $ancillary_examinations['urinalysis'] : 'N/A' }}
                </td>

            </tr> --}}
            <tr>
                <td>Blood Type</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <strong>
                        {{ isset($ancillary_examinations['blood_type']) ? $ancillary_examinations['blood_type'] : 'N/A' }}
                    </strong>
                </td>

            </tr>
            {{-- <tr>
                <td>HIV</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($ancillary_examinations['urinalysis']) && $ancillary_examinations['urinalysis'] === 'NORMAL' ? 'checked' : '' }} disabled>
                </td>
                <td>Normal</td>

                <td class="checkbox">

                    <input type="checkbox"
                        {{ isset($ancillary_examinations['urinalysis']) && $ancillary_examinations['urinalysis'] !== 'NORMAL' ? 'checked' : '' }} disabled>
                </td>
                <td>Findings</td>

                <td>
                    {{ isset($ancillary_examinations['urinalysis']) ? $ancillary_examinations['urinalysis'] : 'N/A' }}
                </td>

            </tr> --}}
            <tr>
                <td>Other</td>
                <td class="checkbox">
                    <input type="checkbox"
                        {{ isset($ancillary_examinations['urinalysis']) && $ancillary_examinations['urinalysis'] === 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Normal</td>

                <td class="checkbox">

                    <input type="checkbox"
                        {{ isset($ancillary_examinations['urinalysis']) && $ancillary_examinations['urinalysis'] !== 'NORMAL' ? 'checked' : '' }}
                        disabled>
                </td>
                <td>Findings</td>

                <td>
                    {{ isset($ancillary_examinations['urinalysis']) ? $ancillary_examinations['urinalysis'] : 'N/A' }}
                </td>

            </tr>


            <tr>
                <th colspan="6">VI. FITNESS FOR CLASSIFICATION. Please check (√) appropriate box according to your
                    findings.</th>
            </tr>
            <tr>
                <td>A
                    <!-- Checkbox for classification A -->
                    <input type="checkbox"
                        {{ isset($StudentClassificationModel['alphabet']) && $StudentClassificationModel['alphabet'] === 'A' ? 'checked' : '' }}
                        readonly>
                </td>
                <td colspan="5">
                    Physically fit, mentally fit for any work or study.
                </td>
            </tr>
            <tr>
                <td>B
                    <!-- Checkbox for classification B -->
                    <input type="checkbox"
                        {{ isset($StudentClassificationModel['alphabet']) && $StudentClassificationModel['alphabet'] === 'B' ? 'checked' : '' }}
                        readonly>
                </td>
                <td colspan="5">
                    With minor condition, physically fit for any work or study.
                </td>
            </tr>
            <tr>
                <td>C
                    <!-- Checkbox for classification C -->
                    <input type="checkbox"
                        {{ isset($StudentClassificationModel['alphabet']) && $StudentClassificationModel['alphabet'] === 'C' ? 'checked' : '' }}
                        readonly>
                </td>
                <td colspan="5">
                    With major condition, physically fit for any work or study.
                </td>
            </tr>
            <tr>
                <td>D
                    <!-- Checkbox for classification D -->
                    <input type="checkbox"
                        {{ isset($StudentClassificationModel['alphabet']) && $StudentClassificationModel['alphabet'] === 'D' ? 'checked' : '' }}
                        readonly>
                </td>
                <td colspan="5">
                    Unfit for any work or study.
                </td>
            </tr>









            <tr>
                <th colspan="6">VII. Endorsing Personnel Remarks: Please provide a summary of the examination
                    findings.</th>
            </tr>


            <tr>
                <td colspan="6">
                    <table class="no-border">
                        <tr>
                            <td>DIAGNOSIS</td>
                            <td>REMARKS</td>
                        </tr>
                        <tr>
                            <td>
                                <textarea rows="4" cols="50">
                                   
                                        {{ isset($PersonalRemarksModel['diagnosis']) ? $PersonalRemarksModel['diagnosis'] : 'N/A' }}
                                   
                                </textarea>
                            </td>
                            <td>
                                <textarea rows="4" cols="50">
                                  
                                        {{ isset($PersonalRemarksModel['remarks']) ? $PersonalRemarksModel['remarks'] : 'N/A' }}
                                   
                                </textarea>
                            </td>
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
