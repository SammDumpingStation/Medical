<!-- Modal -->
<div x-data="{ open: false }" @open-prescription-modal.window="open = true" @keydown.escape.window="open = false">
    <!-- Modal Background -->
    <div x-show="open"
         x-cloak
         class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
         @click="open = false">
    </div>

    <!-- Modal Content -->
    <div x-show="open"
         x-cloak
         class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-2xl sm:p-6">
                <!-- Modal Header -->
                <div class="flex items-center justify-between mb-4 border-b pb-4">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Prescription & Medical Certificate - Patient: <span class="text-blue-600">John Doe</span>
                    </h3>
                    <button @click="open = false" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Close</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Tabs -->
                <div x-data="{ activeTab: 'prescription' }" class="mb-6">
                    <div class="border-b border-gray-200">
                        <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                            <button @click="activeTab = 'prescription'"
                                    :class="{'border-blue-500 text-blue-600': activeTab === 'prescription',
                                            'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== 'prescription'}"
                                    class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                Prescription
                            </button>
                            <button @click="activeTab = 'certificate'"
                                    :class="{'border-blue-500 text-blue-600': activeTab === 'certificate',
                                            'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== 'certificate'}"
                                    class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                Medical Certificate
                            </button>
                        </nav>
                    </div>

                    <!-- Prescription Form -->
                    <div x-show="activeTab === 'prescription'" class="mt-4">
                        <form class="space-y-4">
                            <!-- Patient Vitals Summary -->
                            <div class="bg-gray-50 p-4 rounded-lg text-sm">
                                <h4 class="font-medium mb-2">Latest Vitals:</h4>
                                <div class="grid grid-cols-3 gap-4">
                                    <p>BP: <span class="font-medium">120/80</span></p>
                                    <p>Temp: <span class="font-medium">36.5°C</span></p>
                                    <p>HR: <span class="font-medium">75 bpm</span></p>
                                </div>
                            </div>

                            <!-- Diagnosis -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Diagnosis</label>
                                <input type="text" name="diagnosis"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            </div>

                            <!-- Medications -->
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">Prescribed Medications</label>
                                <div class="medication-entry border rounded-md p-4">
                                    <div class="grid grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-xs text-gray-500">Medicine Name</label>
                                            <input type="text" name="medicine_name[]"
                                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                        </div>
                                        <div>
                                            <label class="block text-xs text-gray-500">Dosage</label>
                                            <input type="text" name="dosage[]"
                                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 gap-4 mt-2">
                                        <div>
                                            <label class="block text-xs text-gray-500">Frequency</label>
                                            <input type="text" name="frequency[]"
                                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                        </div>
                                        <div>
                                            <label class="block text-xs text-gray-500">Duration</label>
                                            <input type="text" name="duration[]"
                                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="text-blue-600 hover:text-blue-700 text-sm">
                                    + Add Another Medication
                                </button>
                            </div>

                            <!-- Special Instructions -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Special Instructions</label>
                                <textarea name="instructions" rows="2"
                                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></textarea>
                            </div>

                            <!-- Follow-up Date -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Follow-up Date</label>
                                <input type="date" name="followup_date"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            </div>
                        </form>
                    </div>

                    <!-- Medical Certificate Form -->
                    <div x-show="activeTab === 'certificate'" class="mt-4">
                        <form class="space-y-4">
                            <!-- Certificate Date -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Certificate Date</label>
                                <input type="date" name="certificate_date"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            </div>

                            <!-- Diagnosis for Certificate -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Diagnosis</label>
                                <input type="text" name="certificate_diagnosis"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            </div>

                            <!-- Treatment Given -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Treatment Given</label>
                                <textarea name="treatment" rows="2"
                                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></textarea>
                            </div>

                            <!-- Recommendations -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Recommendations</label>
                                <textarea name="recommendations" rows="2"
                                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></textarea>
                            </div>

                            <!-- Rest Period -->
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Rest Period From</label>
                                    <input type="date" name="rest_from"
                                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Rest Period To</label>
                                    <input type="date" name="rest_to"
                                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                </div>
                            </div>

                            <!-- Fitness Declaration -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Fitness Declaration</label>
                                <select name="fitness_declaration"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                    <option>Fit to return to work/school after rest period</option>
                                    <option>Needs follow-up consultation before returning</option>
                                    <option>Requires specialist consultation</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="mt-5 sm:mt-6 flex justify-end space-x-3">
                    <button type="button" @click="open = false"
                            class="inline-flex justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Cancel
                    </button>
                    <button type="submit"
                            class="inline-flex justify-center rounded-md border border-transparent bg-blue-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Save & Print
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
