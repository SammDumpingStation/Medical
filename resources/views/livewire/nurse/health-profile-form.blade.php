    <div class="py-12 flex-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div x-data="{
                        step: 1,
                        totalSteps: 9,
                        nextStep() {
                            if (this.step < this.totalSteps) this.step++;
                        },
                        previousStep() {
                            if (this.step > 1) this.step--;
                        }
                    }">
                        <!-- Progress Bar -->
                        <div class="mb-8">
                            <div class="relative pt-1">
                                <div class="flex mb-2 items-center justify-between">
                                    <div>
                                        <span
                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200">
                                            Progress
                                        </span>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-xs font-semibold inline-block text-blue-600">
                                            Step <span x-text="step"></span> of <span x-text="totalSteps"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-blue-200">
                                    <div x-bind:style="'width: ' + ((step / totalSteps) * 100) + '%'"
                                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500 transition-all duration-500">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 1: Patient Information -->
                        <div x-show="step === 1">
                            <h2 class="text-xl font-bold mb-4">Patient Information</h2>
                            <form class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Full Name</label>
                                    <input type="text" name="name"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Date of Birth</label>
                                    <input type="date" name="dateOfBirth"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Gender</label>
                                    <select name="gender"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                        <option value="">Select gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </form>
                        </div>

                        <!-- Step 2: Habits -->
                        <div x-show="step === 2">
                            <h2 class="text-xl font-bold mb-4">Habits</h2>
                            <form class="space-y-4">
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input type="checkbox" name="smoking"
                                            class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                        <label class="ml-2 block text-sm text-gray-700">Smoking</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" name="alcohol"
                                            class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                        <label class="ml-2 block text-sm text-gray-700">Alcohol Drinking</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" name="drugs"
                                            class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                        <label class="ml-2 block text-sm text-gray-700">Illegal Drug Use</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" name="sexually_active"
                                            class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                        <label class="ml-2 block text-sm text-gray-700">Sexually Active</label>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Step 3: Allergies -->
                        <div x-show="step === 3">
                            <h2 class="text-xl font-bold mb-4">Allergies</h2>
                            <div x-data="{ allergies: [] }">
                                <form
                                    @submit.prevent="allergies.push({type: $refs.type.value, description: $refs.description.value})"
                                    class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Allergy Type</label>
                                        <select x-ref="type"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                            <option value="food">Food</option>
                                            <option value="drug">Drug</option>
                                            <option value="environmental">Environmental</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Description</label>
                                        <input type="text" x-ref="description"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    </div>
                                    <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        Add Allergy
                                    </button>
                                </form>

                                <div class="mt-4">
                                    <h3 class="text-lg font-medium mb-2">Added Allergies</h3>
                                    <template x-if="allergies.length > 0">
                                        <ul class="space-y-2">
                                            <template x-for="(allergy, index) in allergies" :key="index">
                                                <li class="flex justify-between items-center p-2 bg-gray-50 rounded">
                                                    <div>
                                                        <span x-text="allergy.type" class="font-medium"></span>:
                                                        <span x-text="allergy.description"></span>
                                                    </div>
                                                    <button @click="allergies.splice(index, 1)"
                                                        class="text-red-600 hover:text-red-800">
                                                        Remove
                                                    </button>
                                                </li>
                                            </template>
                                        </ul>
                                    </template>
                                </div>

                            </div>
                        </div>
                        <!-- Step 4: Medical Conditions -->
                        <div x-show="step === 4">
                            <h2 class="text-xl font-bold mb-4">Medical Conditions</h2>
                            <div x-data="{ conditions: {} }" class="space-y-4">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="flex items-center space-x-3 p-3 border rounded">
                                        <input type="checkbox" x-model="conditions.epilepsy"
                                            class="rounded border-gray-300 text-blue-600">
                                        <label class="text-sm text-gray-700">Epilepsy</label>
                                    </div>
                                    <div class="flex items-center space-x-3 p-3 border rounded">
                                        <input type="checkbox" x-model="conditions.asthma"
                                            class="rounded border-gray-300 text-blue-600">
                                        <label class="text-sm text-gray-700">Asthma</label>
                                    </div>
                                    <div class="flex items-center space-x-3 p-3 border rounded">
                                        <input type="checkbox" x-model="conditions.diabetes"
                                            class="rounded border-gray-300 text-blue-600">
                                        <label class="text-sm text-gray-700">Diabetes</label>
                                    </div>
                                    <div class="flex items-center space-x-3 p-3 border rounded">
                                        <input type="checkbox" x-model="conditions.hypertension"
                                            class="rounded border-gray-300 text-blue-600">
                                        <label class="text-sm text-gray-700">Hypertension</label>
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Other Conditions</label>
                                    <textarea class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                        rows="3" placeholder="Please specify any other medical conditions..."></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Step 5: Family History -->
                        <div x-show="step === 5">
                            <h2 class="text-xl font-bold mb-4">Family History</h2>
                            <div x-data="{ familyHistory: { mother: [], father: [] } }" class="space-y-6">
                                <!-- Mother's Side -->
                                <div class="border-b pb-4">
                                    <h3 class="text-lg font-medium mb-3">Mother's Side</h3>
                                    <div class="space-y-3">
                                        <div class="flex items-center space-x-3">
                                            <input type="checkbox" x-model="familyHistory.mother" value="diabetes"
                                                class="rounded border-gray-300 text-blue-600">
                                            <label class="text-sm text-gray-700">Diabetes</label>
                                        </div>
                                        <div class="flex items-center space-x-3">
                                            <input type="checkbox" x-model="familyHistory.mother"
                                                value="heart_disease" class="rounded border-gray-300 text-blue-600">
                                            <label class="text-sm text-gray-700">Heart Disease</label>
                                        </div>
                                        <div class="flex items-center space-x-3">
                                            <input type="checkbox" x-model="familyHistory.mother" value="cancer"
                                                class="rounded border-gray-300 text-blue-600">
                                            <label class="text-sm text-gray-700">Cancer</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Father's Side -->
                                <div>
                                    <h3 class="text-lg font-medium mb-3">Father's Side</h3>
                                    <div class="space-y-3">
                                        <div class="flex items-center space-x-3">
                                            <input type="checkbox" x-model="familyHistory.father" value="diabetes"
                                                class="rounded border-gray-300 text-blue-600">
                                            <label class="text-sm text-gray-700">Diabetes</label>
                                        </div>
                                        <div class="flex items-center space-x-3">
                                            <input type="checkbox" x-model="familyHistory.father"
                                                value="heart_disease" class="rounded border-gray-300 text-blue-600">
                                            <label class="text-sm text-gray-700">Heart Disease</label>
                                        </div>
                                        <div class="flex items-center space-x-3">
                                            <input type="checkbox" x-model="familyHistory.father" value="cancer"
                                                class="rounded border-gray-300 text-blue-600">
                                            <label class="text-sm text-gray-700">Cancer</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 6: Surgical History -->
                        <div x-show="step === 6">
                            <h2 class="text-xl font-bold mb-4">Surgical History</h2>
                            <div x-data="{ surgeries: [] }">
                                <form
                                    @submit.prevent="surgeries.push({type: $refs.surgeryType.value, date: $refs.surgeryDate.value})"
                                    class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Surgery Type</label>
                                        <input type="text" x-ref="surgeryType"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Date of Surgery</label>
                                        <input type="date" x-ref="surgeryDate"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    </div>
                                    <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        Add Surgery
                                    </button>
                                </form>

                                <div class="mt-4">
                                    <h3 class="text-lg font-medium mb-2">Previous Surgeries</h3>
                                    <template x-if="surgeries.length > 0">
                                        <ul class="space-y-2">
                                            <template x-for="(surgery, index) in surgeries" :key="index">
                                                <li class="flex justify-between items-center p-2 bg-gray-50 rounded">
                                                    <div>
                                                        <span x-text="surgery.type" class="font-medium"></span> -
                                                        <span x-text="surgery.date"></span>
                                                    </div>
                                                    <button @click="surgeries.splice(index, 1)"
                                                        class="text-red-600 hover:text-red-800">
                                                        Remove
                                                    </button>
                                                </li>
                                            </template>
                                        </ul>
                                    </template>
                                </div>
                            </div>
                        </div>

                        <!-- Step 7: Hospital Admissions -->
                        <div x-show="step === 7">
                            <h2 class="text-xl font-bold mb-4">Hospital Admissions</h2>
                            <div x-data="{ admissions: [] }">
                                <form
                                    @submit.prevent="admissions.push({diagnosis: $refs.admissionDiagnosis.value, date: $refs.admissionDate.value})"
                                    class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Admission
                                            Diagnosis</label>
                                        <input type="text" x-ref="admissionDiagnosis"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Admission Date</label>
                                        <input type="date" x-ref="admissionDate"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    </div>
                                    <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        Add Admission
                                    </button>
                                </form>

                                <div class="mt-4">
                                    <h3 class="text-lg font-medium mb-2">Previous Admissions</h3>
                                    <template x-if="admissions.length > 0">
                                        <ul class="space-y-2">
                                            <template x-for="(admission, index) in admissions" :key="index">
                                                <li class="flex justify-between items-center p-2 bg-gray-50 rounded">
                                                    <div>
                                                        <span x-text="admission.diagnosis" class="font-medium"></span>
                                                        -
                                                        <span x-text="admission.date"></span>
                                                    </div>
                                                    <button @click="admissions.splice(index, 1)"
                                                        class="text-red-600 hover:text-red-800">
                                                        Remove
                                                    </button>
                                                </li>
                                            </template>
                                        </ul>
                                    </template>
                                </div>
                            </div>
                        </div>

                        <!-- Step 8: Immunizations -->
                        <div x-show="step === 8">
                            <h2 class="text-xl font-bold mb-4">Immunizations</h2>
                            <div x-data="{
                                immunizations: {
                                    tetanus: { completed: false, date: '' },
                                    flu: { completed: false, date: '' },
                                    hepb: { completed: false, date: '' },
                                    mmr: { completed: false, date: '' }
                                }
                            }" class="space-y-4">
                                <div class="grid gap-4">
                                    <div class="p-4 border rounded">
                                        <div class="flex items-center justify-between mb-2">
                                            <div class="flex items-center">
                                                <input type="checkbox" x-model="immunizations.tetanus.completed"
                                                    class="rounded border-gray-300 text-blue-600">
                                                <label class="ml-2 text-sm font-medium text-gray-700">Tetanus</label>
                                            </div>
                                            <input type="date" x-model="immunizations.tetanus.date"
                                                class="rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                                :disabled="!immunizations.tetanus.completed">
                                        </div>
                                    </div>

                                    <div class="p-4 border rounded">
                                        <div class="flex items-center justify-between mb-2">
                                            <div class="flex items-center">
                                                <input type="checkbox" x-model="immunizations.flu.completed"
                                                    class="rounded border-gray-300 text-blue-600">
                                                <label class="ml-2 text-sm font-medium text-gray-700">Flu Shot</label>
                                            </div>
                                            <input type="date" x-model="immunizations.flu.date"
                                                class="rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                                :disabled="!immunizations.flu.completed">
                                        </div>
                                    </div>

                                    <div class="p-4 border rounded">
                                        <div class="flex items-center justify-between mb-2">
                                            <div class="flex items-center">
                                                <input type="checkbox" x-model="immunizations.hepb.completed"
                                                    class="rounded border-gray-300 text-blue-600">
                                                <label class="ml-2 text-sm font-medium text-gray-700">Hepatitis
                                                    B</label>
                                            </div>
                                            <input type="date" x-model="immunizations.hepb.date"
                                                class="rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                                :disabled="!immunizations.hepb.completed">
                                        </div>
                                    </div>

                                    <div class="p-4 border rounded">
                                        <div class="flex items-center justify-between mb-2">
                                            <div class="flex items-center">
                                                <input type="checkbox" x-model="immunizations.mmr.completed"
                                                    class="rounded border-gray-300 text-blue-600">
                                                <label class="ml-2 text-sm font-medium text-gray-700">MMR</label>
                                            </div>
                                            <input type="date" x-model="immunizations.mmr.date"
                                                class="rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                                :disabled="!immunizations.mmr.completed">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 9: COVID-19 Vaccination -->
                        <div x-show="step === 9">
                            <h2 class="text-xl font-bold mb-4">COVID-19 Vaccination</h2>
                            <div x-data="{ covidVaccinations: [] }">
                                <form
                                    @submit.prevent="covidVaccinations.push({dose: $refs.doseNumber.value, brand: $refs.brandName.value, date: $refs.vaccineDate.value})"
                                    class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Dose</label>
                                        <select x-ref="doseNumber"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                            <option value="first">First Dose</option>
                                            <option value="second">Second Dose</option>
                                            <option value="first_booster">First Booster</option>
                                            <option value="second_booster">Second Booster</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Vaccine Brand</label>
                                        <select x-ref="brandName"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                            <option value="pfizer">Pfizer-BioNTech</option>
                                            <option value="moderna">Moderna</option>
                                            <option value="jj">Johnson & Johnson</option>
                                            <option value="novavax">Novavax</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Date
                                            Administered</label>
                                        <input type="date" x-ref="vaccineDate"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    </div>
                                </form>
                            </div>
                            {{-- <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"> --}}
                        </div>
                        <!-- Navigation Buttons -->
                        <div class="mt-8 flex justify-between">
                            <button @click="previousStep()" x-show="step > 1"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                Previous
                            </button>
                            <button @click="nextStep()" x-show="step < totalSteps"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Next
                            </button>
                            <button x-show="step === totalSteps"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
