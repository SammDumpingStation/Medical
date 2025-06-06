<div class="bg-white p-6 rounded-lg shadow-md max-w-4xl mx-auto space-y-6">
    <!-- Head to Toe Assessment Section -->
    <div>
        <h4 class="text-2xl font-semibold text-gray-800 dark:text-white">Head to Toe Assessment</h4>
        <div class="space-y-4">
            
            <!-- Neurological Assessment -->
            <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                <h5 class="text-xl font-semibold text-gray-800 dark:text-white">Neurological Assessment</h5>
                <div class="flex flex-wrap gap-6">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 dark:bg-blue-500 dark:border-transparent" /> 
                        <span class="text-gray-700 dark:text-white">Normal thought processes</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 dark:bg-blue-500 dark:border-transparent" />
                        <span class="text-gray-700 dark:text-white">Normal Emotional Status</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 dark:bg-blue-500 dark:border-transparent" />
                        <span class="text-gray-700 dark:text-white">Normal Psychological Status</span>
                    </label>
                </div>
                <div class="mt-4">
                    <label for="feelings" class="block text-gray-700 dark:text-white">How do you feel right now?</label>
                    <input type="text" id="feelings" class="w-full text-gray-900 dark:text-white bg-gray-100 dark:bg-gray-800 p-2 rounded-md border-2 border-gray-300 dark:border-gray-600" placeholder="Enter feelings or other details..." />
                </div>
                <div class="mt-4">
                    <label for="other-neuro" class="block text-gray-700 dark:text-white">Others:</label>
                    <input type="text" id="other-neuro" class="w-full text-gray-900 dark:text-white bg-gray-100 dark:bg-gray-800 p-2 rounded-md border-2 border-gray-300 dark:border-gray-600" placeholder="Enter other details..." />
                </div>
            </div>

            <!-- HEENT Assessment -->
            <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                <h5 class="text-xl font-semibold text-gray-800 dark:text-white">HEENT</h5>
                <div class="space-y-2">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 dark:bg-blue-500 dark:border-transparent" />
                        <span class="text-gray-700 dark:text-white">Anicteric sclerae</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 dark:bg-blue-500 dark:border-transparent" />
                        <span class="text-gray-700 dark:text-white">PERLA</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 dark:bg-blue-500 dark:border-transparent" />
                        <span class="text-gray-700 dark:text-white">Aural Discharge</span>
                    </label>
                    <!-- Add more checkboxes here -->
                </div>
            </div>

            <!-- Respiratory Assessment -->
            <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                <h5 class="text-xl font-semibold text-gray-800 dark:text-white">Respiratory Assessment</h5>
                <div class="space-y-2">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 dark:bg-blue-500 dark:border-transparent" />
                        <span class="text-gray-700 dark:text-white">Normal breath sounds</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 dark:bg-blue-500 dark:border-transparent" />
                        <span class="text-gray-700 dark:text-white">Symmetrical Chest Expansion</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 dark:bg-blue-500 dark:border-transparent" />
                        <span class="text-gray-700 dark:text-white">Retractions</span>
                    </label>
                </div>
            </div>

            <!-- Cardiovascular Assessment -->
            <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                <h5 class="text-xl font-semibold text-gray-800 dark:text-white">Cardiovascular Assessment</h5>
                <div class="space-y-2">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 dark:bg-blue-500 dark:border-transparent" />
                        <span class="text-gray-700 dark:text-white">Normal Heart Beat</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 dark:bg-blue-500 dark:border-transparent" />
                        <span class="text-gray-700 dark:text-white">Clubbing of fingers</span>
                    </label>
                    <!-- Add more checkboxes here -->
                </div>
            </div>

            <!-- Gastrointestinal Assessment -->
            <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                <h5 class="text-xl font-semibold text-gray-800 dark:text-white">Gastrointestinal Assessment</h5>
                <div class="space-y-2">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 dark:bg-blue-500 dark:border-transparent" />
                        <span class="text-gray-700 dark:text-white">Regular Bowel Movement</span>
                    </label>
                    <div class="flex items-center space-x-2">
                        <input type="number" class="h-10 w-20 text-gray-900 bg-gray-100 dark:bg-gray-800 p-2 rounded-md border-2 border-gray-300 dark:border-gray-600" placeholder="Per day" />
                        <input type="text" class="h-10 w-48 text-gray-900 bg-gray-100 dark:bg-gray-800 p-2 rounded-md border-2 border-gray-300 dark:border-gray-600" placeholder="Borborygmi" />
                    </div>
                    <!-- More gastrointestinal assessments can be added -->
                </div>
            </div>

            <!-- Urinary Assessment -->
            <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                <h5 class="text-xl font-semibold text-gray-800 dark:text-white">Urinary Assessment</h5>
                <div class="space-y-2">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 dark:bg-blue-500 dark:border-transparent" />
                        <span class="text-gray-700 dark:text-white">Flank pain</span>
                    </label>
                    <!-- More urinary assessments can be added -->
                </div>
            </div>

            <!-- Integumentary Assessment -->
            <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                <h5 class="text-xl font-semibold text-gray-800 dark:text-white">Integumentary Assessment</h5>
                <div class="space-y-2">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 dark:bg-blue-500 dark:border-transparent" />
                        <span class="text-gray-700 dark:text-white">Pallor</span>
                    </label>
                    <!-- More integumentary assessments can be added -->
                </div>
            </div>

            <!-- Extremities Assessment -->
            <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                <h5 class="text-xl font-semibold text-gray-800 dark:text-white">Extremities Assessment</h5>
                <div class="space-y-2">
                    <label class="flex items-center space-x-2">
                        <inputtype="checkbox" class="h-4 w-4 text-blue-600 dark:bg-blue-500 dark:border-transparent" /> <span class="text-gray-700 dark:text-white">Gross Deformity</span> </label> <!-- More extremities assessments can be added --> </div> </div> </div> </div>
