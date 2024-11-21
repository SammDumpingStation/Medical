<x-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Medical Consultation Form</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-gray-100 p-6">
        <div class="max-w-4xl mx-auto bg-white p-6 shadow-md rounded-lg">
            <!-- Header Section -->
            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold">NORTHERN BUKIDNON STATE COLLEGE</h1>
                <p class="text-sm">(Formerly Northern Bukidnon Community College) R.A.11284</p>
                <p class="text-sm">Manolo Fortich, 8703 Bukidnon - 0975-3032951 - nbsbcadmin@nbsc.ph</p>
                <p class="italic text-sm">"Creando futura, Transformacionis"</p>
            </div>

            <h2 class="text-center text-lg font-bold mb-6 border-b-2 border-black pb-0.001">
                MEDICAL CONSULTATION FORM
            </h2>
            <!-- Form Section -->
            <form action="{{ url('/consultation/student/' . $patient->id . '/store-form') }}" method="POST">
                @csrf
                <!-- User Type Section -->
                <div class="mb-6 flex items-center justify-center space-x-4">
                    <label>
                        <input type="radio" name="user_type" value="Non-Teaching" class="mr-2"
                            {{ old('user_type') == 'Non-Teaching' ? 'checked' : '' }}> Non-Teaching
                    </label>
                    <label>
                        <input type="radio" name="user_type" value="Teaching" class="mr-2"
                            {{ old('user_type') == 'Teaching' ? 'checked' : '' }}> Teaching
                    </label>
                    <label>
                        <input type="radio" name="user_type" value="Student" class="mr-2"
                            {{ old('user_type') == 'Student' ? 'checked' : '' }}> Student
                    </label>
                </div>

                <!-- Personal Information -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div>
                        <label for="name" class="block mb-1 text-gray-700">Name:</label>
                        <input id="name" type="text" name="name"
                            value="{{ old('name', $patient->full_name) }}"
                            class="w-full border border-gray-300 p-2 rounded-md
                                      @error('name') border-red-500 @enderror"
                            required aria-required="true">
                        @error('name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="mobile_number" class="block mb-1 text-gray-700">Mobile #:</label>
                        <input id="mobile_number" type="text" name="mobile_number"
                            value="{{ old('mobile_number', $patient->phone_number) }}"
                            class="w-full border border-gray-300 p-2 rounded-md
                                      @error('mobile_number') border-red-500 @enderror">
                        @error('mobile_number')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="block mb-1 text-gray-700">Date:</label>
                        <input type="date" name="date" value="{{ old('date') }}"
                            class="w-full border border-gray-300 p-2 rounded-md">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div>
                        <label class="block mb-1 text-gray-700">Date of Birth/Age/Sex:</label>
                        <input type="text" name="dob_age_sex"
                            value="{{ old('dob_age_sex', $patient->birthday . ' / ' . $patient->age . ' / ' . $patient->gender) }}"
                            class="w-full border border-gray-300 p-2 rounded-md">
                    </div>
                    <div>
                        <label class="block mb-1 text-gray-700">Course & Year:</label>
                        <input type="text" name="course_year" value="{{ old('course_year') }}"
                            class="w-full border border-gray-300 p-2 rounded-md">
                    </div>
                    <div>
                        <label class="block mb-1 text-gray-700">PhilHealth:</label>
                        <input type="text" name="philhealth" value="{{ old('philhealth') }}"
                            class="w-full border border-gray-300 p-2 rounded-md">
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block mb-1 text-gray-700">Address:</label>
                    <input type="text" name="address" value="{{ old('address', $patient->address) }}"
                        class="w-full border border-gray-300 p-2 rounded-md">
                </div>

                <!-- Emergency Contact -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block mb-1 text-gray-700">Emergency Contact Name:</label>
                        <input type="text" name="emergency_contact_name" value="{{ old('emergency_contact_name') }}"
                            class="w-full border border-gray-300 p-2 rounded-md">
                    </div>
                    <div>
                        <label class="block mb-1 text-gray-700">Emergency Contact Phone:</label>
                        <input type="text" name="emergency_contact_phone"
                            value="{{ old('emergency_contact_phone') }}"
                            class="w-full border border-gray-300 p-2 rounded-md">
                    </div>
                </div>

                <!-- Vital Signs -->
                <div class="mb-4">
                    <h3 class="font-bold">Vital Signs:</h3>
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div>
                            <label class="block mb-1 text-gray-700">Temperature:</label>
                            <input type="text" name="temperature" value="{{ old('temperature') }}"
                                class="w-full border border-gray-300 p-2 rounded-md">
                        </div>
                        <div>
                            <label class="block mb-1 text-gray-700">Blood Pressure:</label>
                            <input type="text" name="blood_pressure" value="{{ old('blood_pressure') }}"
                                class="w-full border border-gray-300 p-2 rounded-md">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                        <div>
                            <label class="block mb-1 text-gray-700">Pulse Rate:</label>
                            <input type="text" name="pulse_rate" value="{{ old('pulse_rate') }}"
                                class="w-full border border-gray-300 p-2 rounded-md">
                        </div>
                        <div>
                            <label class="block mb-1 text-gray-700">Respiratory Rate:</label>
                            <input type="text" name="respiratory_rate" value="{{ old('respiratory_rate') }}"
                                class="w-full border border-gray-300 p-2 rounded-md">
                        </div>
                        <div>
                            <label class="block mb-1 text-gray-700">O2 Saturation:</label>
                            <input type="text" name="o2_saturation" value="{{ old('o2_saturation') }}"
                                class="w-full border border-gray-300 p-2 rounded-md">
                        </div>
                    </div>
                </div>

                <!-- HEIGHT, WEIGHT, BMI, AND NUTRITIONAL STATUS -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                    <div>
                        <label class="block mb-1 text-gray-700 font-bold">Height:</label>
                        <input type="text" name="height" value="{{ old('height') }}"
                            class="w-full border border-gray-300 p-2 rounded-md">
                    </div>
                    <div>
                        <label class="block mb-1 text-gray-700 font-bold">Weight:</label>
                        <input type="text" name="weight" value="{{ old('weight') }}"
                            class="w-full border border-gray-300 p-2 rounded-md">
                    </div>
                    <div>
                        <label class="block mb-1 text-gray-700 font-bold">Body Mass Index:</label>
                        <input type="text" name="bmi" value="{{ old('bmi') }}"
                            class="w-full border border-gray-300 p-2 rounded-md">
                    </div>
                    <div>
                        <label class="block mb-1 text-gray-700 font-bold">Nutritional Status:</label>
                        <input type="text" name="nutritional_status" value="{{ old('nutritional_status') }}"
                            class="w-full border border-gray-300 p-2 rounded-md">
                    </div>
                </div>

                <!-- CHIEF COMPLAINTS -->
                <div class="mb-4">
                    <h3 class="font-bold">Chief Complaints:</h3>
                    <textarea name="chief_complaints" class="w-full border border-gray-300 p-2 rounded-md">{{ old('chief_complaints') }}</textarea>
                </div>

                <!-- PAST OR PRESENT ILLNESS / MEDICAL CONDITIONS -->
                <div class="mb-4">
                    <h3 class="font-bold">Past or Present Illness/Medical Conditions:</h3>
                    <div class="mb-2">
                        <label>Are you currently under the care of a physician?</label>
                        <div>
                            <label class="inline-block ml-4"><input type="radio" name="under_physician_care"
                                    value="yes" {{ old('under_physician_care') === 'yes' ? 'checked' : '' }}>
                                Yes</label>
                            <label class="inline-block ml-4"><input type="radio" name="under_physician_care"
                                    value="no" {{ old('under_physician_care') === 'no' ? 'checked' : '' }}>
                                No</label>
                        </div>
                        <div>
                            <label class="inline-block ml-4">Last Appointment of Physician:</label>
                            <input type="text" name="last_physician_appointment"
                                value="{{ old('last_physician_appointment') }}"
                                class="border border-gray-300 p-2 rounded-md">
                        </div>
                    </div>

                    <div class="mb-2">
                        <label>Do you have any of the following medical conditions?</label>
                        <div class="grid grid-cols-2 gap-4">
                            @foreach (['Diabetes', 'High Blood Pressure', 'Coronary Artery Disease', 'Seizure Disorder', 'Arthritis', 'UTI', 'Hepatitis', 'Thyroid Imbalance', 'Allergies', 'HIV/AIDS', 'Infections'] as $condition)
                                <label>
                                    <input type="checkbox" name="medical_conditions[]" value="{{ $condition }}"
                                        {{ is_array(old('medical_conditions')) && in_array($condition, old('medical_conditions')) ? 'checked' : '' }}>
                                    {{ $condition }}
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-2">
                        <label>Any other medical conditions?</label>
                        <input type="text" name="other_medical_conditions"
                            value="{{ old('other_medical_conditions') }}"
                            class="w-full border border-gray-300 p-2 rounded-md">
                    </div>
                </div>

                <!-- PRESENT MEDICATIONS -->
                <div class="mb-4">
                    <h3 class="font-bold mb-2">Present Medications:</h3>
                    <div class="grid grid-cols-4 gap-4 items-center">
                        @foreach (['Antibiotics', 'Birth Control Pill', 'Aspirin', 'Anti-convulsant'] as $medication)
                            <label>
                                <input type="checkbox" name="present_medications[]" value="{{ $medication }}"
                                    {{ is_array(old('present_medications')) && in_array($medication, old('present_medications')) ? 'checked' : '' }}>
                                {{ $medication }}
                            </label>
                        @endforeach
                    </div>
                    <div class="mt-4 grid grid-cols-2 gap-4">
                        <label class="col-span-1">Others:</label>
                        <input type="text" name="other_medications" value="{{ old('other_medications') }}"
                            class="w-full border border-gray-300 p-2 rounded-md">
                    </div>
                </div>

                <!-- PREGNANCY STATUS -->
                <div class="mb-4">
                    <label>Are you pregnant?</label>
                    <div>
                        <label class="inline-block ml-4"><input type="radio" name="pregnant" value="yes"
                                {{ old('pregnant') === 'yes' ? 'checked' : '' }}> Yes</label>
                        <label class="inline-block ml-4"><input type="radio" name="pregnant" value="no"
                                {{ old('pregnant') === 'no' ? 'checked' : '' }}> No</label>
                        <label class="inline-block ml-4"><input type="radio" name="pregnant" value="na"
                                {{ old('pregnant') === 'na' ? 'checked' : '' }}> N/A</label>
                    </div>
                    <div>
                        <label class="inline-block ml-4">Last Menstrual Period (LMP) First Day:</label>
                        <input type="date" name="lmp_date" value="{{ old('lmp_date') }}"
                            class="border border-gray-300 p-2 rounded-md">
                    </div>
                </div>

                <!-- PROCEDURES/OPERATIONS -->
                <div class="mb-4 flex items-center space-x-4">
                    <div class="flex-1">
                        <label class="block mb-1">Procedures/Operations undergone prior to the consultation:</label>
                        <input type="text" name="procedures" value="{{ old('procedures') }}"
                            class="w-full border border-gray-300 p-2 rounded-md">
                    </div>
                    <div class="w-1/4">
                        <label class="block mb-1">Date:</label>
                        <input type="date" name="procedure_date" value="{{ old('procedure_date') }}"
                            class="w-full border border-gray-300 p-2 rounded-md">
                    </div>
                </div>

                <!-- FINDINGS -->
                <div class="mb-4">
                    <label>Findings/Diagnosis:</label>
                    <textarea name="findings" class="w-full border border-gray-300 p-2 rounded-md">{{ old('findings') }}</textarea>
                </div>

                <!-- RECOMMENDATIONS -->
                <div class="mb-4">
                    <label>Recommendations:</label>
                    <textarea name="recommendations" class="w-full border border-gray-300 p-2 rounded-md">{{ old('recommendations') }}</textarea>
                </div>

                <!-- END -->
                <div class="mb-4">
                    <label>MEDS dispensed and quantity:</label>
                    <textarea class="w-full border border-gray-300 p-2"></textarea>
                </div>
                <div class="mb-4">
                    <label>Physician:</label>
                    <input type="text" class="w-full border border-gray-300 p-2">
                </div>
                <div class="mb-4">
                    <label>Health and Sanitation Services</label>
                </div>
                <div class="text-sm">
                    <p>Document Code: HSD Appendix C. Consultation Form</p>
                    <p>Revision No. 1 (January 3, 2023)</p>
                </div>
                
                <div> <!-- to student-form part2 -->
                    <button type="submit" class="hover:bg-blue-800 text-white bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Next
                    </button>
                </div>
            </form>
        </div>
    </body>

    </html>
</x-layout>

