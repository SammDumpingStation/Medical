<div class="space-y-16">
    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Menstrual & Pregnancy History</h4>
        <div class="grid gap-6 md:grid-cols-2">
            <!-- Menarche and Menstrual Details -->
            <div>
                <label for="menarche" class="block mb-3 font-medium text-gray-900 dark:text-white">Menarche (1st Menstruation)</label>
                <input type="text" id="menarche" class="block w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:border-blue-600 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:ring-0" placeholder="Enter Date" />
            </div>
            <div>
                <label for="last-menstrual" class="block mb-3 font-medium text-gray-900 dark:text-white">Last Menstrual Period (This Month/Last Month)</label>
                <input type="text" id="last-menstrual" class="block w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:border-blue-600 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:ring-0" placeholder="Enter Date" />
            </div>
            <div>
                <label for="period-duration" class="block mb-3 font-medium text-gray-900 dark:text-white">Period Duration</label>
                <input type="text" id="period-duration" class="block w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:border-blue-600 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:ring-0" placeholder="Enter Duration" />
            </div>
            <div>
                <label for="cycle" class="block mb-3 font-medium text-gray-900 dark:text-white">Interval/Cycle</label>
                <input type="text" id="cycle" class="block w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:border-blue-600 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:ring-0" placeholder="Enter Interval" />
            </div>
            <div>
                <label for="pads-per-day" class="block mb-3 font-medium text-gray-900 dark:text-white">No. of Pads per Day</label>
                <input type="text" id="pads-per-day" class="block w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:border-blue-600 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:ring-0" placeholder="Enter Number of Pads" />
            </div>
            <div>
                <label for="sexual-intercourse" class="block mb-3 font-medium text-gray-900 dark:text-white">Onset of Sexual Intercourse</label>
                <input type="text" id="sexual-intercourse" class="block w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:border-blue-600 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:ring-0" placeholder="Enter Date" />
            </div>
            <div>
                <label for="birth-control" class="block mb-3 font-medium text-gray-900 dark:text-white">Birth Control Method</label>
                <input type="text" id="birth-control" class="block w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:border-blue-600 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:ring-0" placeholder="Enter Method" />
            </div>
            <div class="col-span-2">
                <label class="block mb-3 font-medium text-gray-900 dark:text-white">Menopausal Stage?</label>
                <div class="flex gap-6 ml-4">
                    <div class="flex items-center">
                        <input type="radio" id="menopause-yes" name="menopause" value="yes" class="mr-2">
                        <label for="menopause-yes" class="text-sm text-gray-900 dark:text-white">Yes</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" id="menopause-no" name="menopause" value="no" class="mr-2">
                        <label for="menopause-no" class="text-sm text-gray-900 dark:text-white">No</label>
                    </div>
                </div>
                <input type="text" id="menopause-age" class="block w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:border-blue-600 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:ring-0 mt-2" placeholder="If yes, what age?" />
            </div>
        </div>
    </div>

    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Pregnancy History</h4>
        <div class="grid gap-6 md:grid-cols-2">
            <div>
                <label for="pregnant-now" class="block mb-3 font-medium text-gray-900 dark:text-white">Are you pregnant now?</label>
                <div class="flex gap-6 ml-4">
                    <div class="flex items-center">
                        <input type="radio" id="pregnant-yes" name="pregnant_now" value="yes" class="mr-2">
                        <label for="pregnant-yes" class="text-sm text-gray-900 dark:text-white">Yes</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" id="pregnant-no" name="pregnant_now" value="no" class="mr-2">
                        <label for="pregnant-no" class="text-sm text-gray-900 dark:text-white">No</label>
                    </div>
                </div>
            </div>
            <div>
                <label for="months-pregnant" class="block mb-3 font-medium text-gray-900 dark:text-white">How many months?</label>
                <input type="number" id="months-pregnant" class="block w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:border-blue-600 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:ring-0" placeholder="Enter Number of Months" />
            </div>
            <div>
                <label for="pre-natal-checkup" class="block mb-3 font-medium text-gray-900 dark:text-white">Pre-Natal Check-up?</label>
                <div class="flex gap-6 ml-4">
                    <div class="flex items-center">
                        <input type="radio" id="pre-natal-yes" name="pre_natal_checkup" value="yes" class="mr-2">
                        <label for="pre-natal-yes" class="text-sm text-gray-900 dark:text-white">Yes</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" id="pre-natal-no" name="pre_natal_checkup" value="no" class="mr-2">
                        <label for="pre-natal-no" class="text-sm text-gray-900 dark:text-white">No</label>
                    </div>
                </div>
                <input type="text" id="pre-natal-location" class="block w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:border-blue-600 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:ring-0 mt-2" placeholder="Where?" />
            </div>
            <div>
                <label for="pregnancy-test" class="block mb-3 font-medium text-gray-900 dark:text-white">Subject for Pregnancy Test</label>
                <div class="flex gap-6 ml-4">
                    <div class="flex items-center">
                        <input type="radio" id="pregnancy-test-yes" name="pregnancy_test" value="yes" class="mr-2">
                        <label for="pregnancy-test-yes" class="text-sm text-gray-900 dark:text-white">Yes</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" id="pregnancy-test-no" name="pregnancy_test" value="no" class="mr-2">
                        <label for="pregnancy-test-no" class="text-sm text-gray-900 dark:text-white">No</label>
                    </div>
                </div>
                <input type="text" id="pregnancy-test-result" class="block w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:border-blue-600 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:ring-0 mt-2" placeholder="Result" />
            </div>
        </div>
    </div>

    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Family History</h4>
        <div class="grid gap-6 md:grid-cols-2">
            <div>
                <label for="family-history-mother" class="block mb-3 font-medium text-gray-900 dark:text-white">Family History (Mother)</label>
                <input type="text" id="family-history-mother" class="block w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:border-blue-600 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:ring-0" placeholder="Enter Family History" />
            </div>
            <div>
                <label for="family-history-father" class="block mb-3 font-medium text-gray-900 dark:text-white">Family History (Father)</label>
                <input type="text" id="family-history-father" class="block w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:border-blue-600 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:ring-0" placeholder="Enter Family History" />
            </div>
        </div>
    </div>
</div>
