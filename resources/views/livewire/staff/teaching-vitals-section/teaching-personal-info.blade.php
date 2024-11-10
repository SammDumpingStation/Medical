<div class="space-y-14">
    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Personal Information</h4>

        <div class="grid ml-6 gap-6 mb-6 md:grid-cols-2">
            <div class="">
                <label for="full_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full
                    name</label>
                <input type="text" id="full_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="John Doe" required />
            </div>
            <div class=" grid gap-3 grid-cols-2">
                <div class="max-w-sm flex gap-3">
                    <div class="w-20">
                        <label for="age"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age</label>
                        <input type="number" id="age" aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="21" required />
                    </div>
                    <div class="flex-1">
                        <label for="gender"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                        <select id="gender"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose a gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="birthday" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Birthday</label>
                    <livewire:datepicker id="birthday-datepicker" />
                </div>
            </div>
            <div>
                <label for="Address"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                <input type="text" id="Address"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="ex. Tankulan, Manolo Fortich, Bukidnon" required />
            </div>
            <div>
                <label for="municipal"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Municipal</label>
                <input type="text" id="mucicipal"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Manolo Fortich" required />
            </div>
            <div>
                <label for="religion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Religion
                </label>
                <input type="text" id="religion"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Catholic" required />
            </div>
            <div>
                <label for="occupation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Occupation
                </label>
                <input type="text" id="occupation"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Student" required />
            </div>
            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                    number</label>
                <input type="tel" id="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
            </div>

            <div>
                <label for="civil_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Civil
                    Status
                </label>
                <select id="gender"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a status</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                    <option value="Divorced">Divorced</option>
                </select>
            </div>
        </div>
    </div>
    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Emergency Contact Information</h4>
        <div class="grid ml-6 gap-6 mb-6 md:grid-cols-2">
            <div class="">
                <label for="full_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact
                    Person
                    (Full name)</label>
                <input type="text" id="full_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="John Doe" required />
            </div>

            <div>
                <label for="Address"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                <input type="text" id="Address"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="ex. Tankulan, Manolo Fortich, Bukidnon" required />
            </div>

            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                    number</label>
                <input type="tel" id="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
            </div>

            <div>
                <label for="relationship" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Relationship
                </label>
                <select id="relationship"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a relationship</option>
                    <option value="Parent">Parent</option>
                    <option value="Guardian">Guardian</option>
                    <option value="Sibling">Sibling</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </div>
    </div>
    <div class="">
        <h4 class="text-xl mb-4 font-bold dark:text-white">Additional Questions</h4>
        <div class="grid grid-cols-2 ml-6 gap-6">
            <livewire:toggle title="Willing to donate blood?" />
            <livewire:toggle title="Person with disability" />
        </div>
    </div>
</div>
