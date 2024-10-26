<div x-data="{ open: false }" @open-modal.window="open = true" @keydown.escape.window="open = false" class="z-10" x-cloak>
    <!-- Modal Background -->
    <div x-show="open" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="open = false">
    </div>

    <!-- Modal Content -->
    <div x-show="open" class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div
                class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                <!-- Modal Header -->
                <div class="flex items-center justify-between mb-4 border-b pb-4">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Record Vital Signs - Patient: <span class="text-blue-600">John Doe</span>
                    </h3>
                    <button @click="open = false" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Close</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Modal Body - Vital Signs Form -->
                <form action="#" method="POST" class="space-y-4">
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Blood Pressure -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Blood Pressure</label>
                            <div class="flex gap-2 mt-1">
                                <input type="text" name="bp_systolic" placeholder="Systolic"
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                <span class="text-gray-500 self-center">/</span>
                                <input type="text" name="bp_diastolic" placeholder="Diastolic"
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            </div>
                        </div>

                        <!-- Heart Rate -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Heart Rate (bpm)</label>
                            <input type="number" name="heart_rate"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        </div>

                        <!-- Temperature -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Temperature (°C)</label>
                            <input type="number" step="0.1" name="temperature"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        </div>

                        <!-- Respiratory Rate -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Respiratory Rate (bpm)</label>
                            <input type="number" name="respiratory_rate"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        </div>

                        <!-- Oxygen Saturation -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Oxygen Saturation (%)</label>
                            <input type="number" name="oxygen_saturation"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        </div>

                        <!-- Pain Scale -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Pain Scale (0-10)</label>
                            <input type="number" min="0" max="10" name="pain_scale"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        </div>
                    </div>

                    <!-- Notes -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Notes</label>
                        <textarea name="notes" rows="3"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></textarea>
                    </div>

                    <!-- Recorded By & DateTime -->
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Recorded By</label>
                            <input type="text" name="recorded_by"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Date & Time</label>
                            <input type="datetime-local" name="recorded_at"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
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
                            Save Vitals
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
