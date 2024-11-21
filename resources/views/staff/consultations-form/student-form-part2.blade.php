<x-layout>
    <div class="a4 mx-auto border border-gray-300 p-4">
        <div class="text-center mb-4">
            <h1 class="text-xl font-bold">NORTHERN BUKIDNON STATE COLLEGE</h1>
            <p>(Formerly Northern Bukidnon Community College) R.A.11284</p>
            <p>Manolo Fortich, 8703 Bukidnon • 0975-3032951 • nbscadmin@nbsc.ph</p>
            <p class="italic">Creando futura, Transformationis</p>
        </div>
        <h2 class="text-center text-lg font-bold mb-4">MEDICAL CONSULTATION FORM</h2>
        <form action="{{ route('consultation.storeFormPart2', ['id' => $patient->id]) }}" method="POST">
            @csrf
            <div class="border-t border-b border-gray-300 py-2 mb-4">
                <div class="grid grid-cols-3 gap-4 mb-2">
                    <div>
                        <label class="block font-bold">FAMILY NAME</label>
                        <input type="text" name="family_name" value="{{ old('family_name') }}" class="w-full border border-gray-300 p-1" required>
                    </div>
                    <div>
                        <label class="block font-bold">FIRST NAME</label>
                        <input type="text" name="first_name" value="{{ old('first_name') }}" class="w-full border border-gray-300 p-1" required>
                    </div>
                    <div>
                        <label class="block font-bold">MIDDLE NAME</label>
                        <input type="text" name="middle_name" value="{{ old('middle_name') }}" class="w-full border border-gray-300 p-1">
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-4 mb-2">
                    <div>
                        <label class="block font-bold">AGE</label>
                        <input type="text" name="age" value="{{ old('age', $patient->age) }}" class="w-full border border-gray-300 p-1" required>
                    </div>
                    <div>
                        <label class="block font-bold">SEX</label>
                        <input type="text" name="sex" value="{{ old('sex', $patient->sex) }}" class="w-full border border-gray-300 p-1" required>
                    </div>
                    <div>
                        <label class="block font-bold">CIVIL STATUS</label>
                        <div class="flex flex-col">
                            <label><input type="checkbox" name="civil_status[]" value="Single" {{ in_array('Single', old('civil_status', [])) ? 'checked' : '' }}> SINGLE</label>
                            <label><input type="checkbox" name="civil_status[]" value="Married" {{ in_array('Married', old('civil_status', [])) ? 'checked' : '' }}> MARRIED</label>
                            <label><input type="checkbox" name="civil_status[]" value="Widow/Widower" {{ in_array('Widow/Widower', old('civil_status', [])) ? 'checked' : '' }}> WIDOW/WIDOWER</label>
                            <label><input type="checkbox" name="civil_status[]" value="Separated" {{ in_array('Separated', old('civil_status', [])) ? 'checked' : '' }}> SEPARATED</label>
                            <label><input type="checkbox" name="civil_status[]" value="Child" {{ in_array('Child', old('civil_status', [])) ? 'checked' : '' }}> CHILD</label>
                        </div>
                    </div>
                </div>
                <div class="mb-2">
                    <label class="block font-bold">PHONE NUMBER & ADDRESS:</label>
                    <input type="text" name="phone_address" value="{{ old('phone_address', $patient->phone_number . ' / ' . $patient->address) }}" class="w-full border border-gray-300 p-1" required>
                </div>
            </div>
            <div class="border-t border-b border-gray-300 py-2 mb-4">
                <div class="grid grid-cols-2 gap-4 mb-2">
                    <div>
                        <label class="block font-bold">Date, Time & Vital Signs</label>
                        <p>(kindly include height, weight)</p>
                        <textarea name="vital_signs" class="w-full border border-gray-300 p-1" rows="3">{{ old('vital_signs') }}</textarea>
                    </div>
                    <div>
                        <label class="block font-bold">CHIEF COMPLAINT (-S)/ PHYSICAL EXAMINATION FINDINGS/ DIAGNOSIS (-ES)/ MEDICAL and/or SURGICAL MANAGEMENT/PLANS</label>
                        <textarea name="chief_complaint" class="w-full border border-gray-300 p-1" rows="3">{{ old('chief_complaint') }}</textarea>
                    </div>
                </div>
                <div class="h-96"></div> <!-- Added space to match the image -->
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600 transition">
                    Submit Form
                </button>
            </div>
        </form>
        <div class="text-sm text-gray-600 mt-4">
            <p>Document code: <span class="font-bold">HSO-SCR (Appendix F)</span></p>
            <p>Revision No. 1</p>
            <p>Revision Date: September 15, 2023</p>
        </div>
    </div>
</x-layout>
