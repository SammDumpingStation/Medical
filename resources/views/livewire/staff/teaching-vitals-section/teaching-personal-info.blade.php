<div class="space-y-14">
    <!-- Personal Information Section -->
    <form wire:submit.prevent="submitForm">
        <div>
            <h4 class="text-xl mb-4 font-bold dark:text-white">Personal Information</h4>

            <div class="grid ml-6 gap-6 mb-6 md:grid-cols-2">
                <!-- Full Name -->
                <div>
                    <label for="full_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full
                        name</label>
                    <input type="text" id="full_name" wire:model="full_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="John Doe" required />
                </div>
                <!-- Employee ID -->
                <div>
                    <label for="emp_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Employee
                        ID</label>
                    <input type="text" id="emp_id" name="emp_id" wire:model="emp_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter Employee ID" required />
                </div>
                <!-- Age and Gender -->
                <div class="grid gap-3 grid-cols-2">
                    <div class="max-w-sm flex gap-3">
                        <div class="w-20">
                            <label for="age"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age</label>
                            <input type="number" id="age" wire:model="age"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="21" required />
                        </div>
                        <div class="flex-1">
                            <label for="gender"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                            <select id="gender" wire:model="gender"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose a gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    <!-- Birthday -->
                    <div> <label for="gender"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birthday</label>

                        <input type="date" id="birthday" wire:model="birthday"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Birthday" required />
                    </div>

                </div>
                <!-- Address -->
                <div>
                    <label for="address"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                    <input type="text" id="address" wire:model="address"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="ex. Tankulan, Manolo Fortich, Bukidnon" required />
                </div>
                <!-- Phone Number -->
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                        number</label>
                    <input type="tel" id="phone" wire:model="phone"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
                </div>
                <!-- Philhealth -->
                <div>
                    <label for="philhealth"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Philhealth</label>
                    <input type="text" id="philhealth" wire:model="philhealth"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Philhealth Number" required />
                </div>
            </div>
        </div>

        <!-- Emergency Contact Information Section -->
        <div>
            <h4 class="text-xl mb-4 font-bold dark:text-white">Emergency Contact Information</h4>

            <div class="grid ml-6 gap-6 mb-6 md:grid-cols-2">
                <!-- Emergency Contact Name -->
                <div>
                    <label for="emergency_contact_full_name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact Person (Full
                        name)</label>
                    <input type="text" id="emergency_contact_full_name" wire:model="emergency_contact_full_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="John Doe" required />
                </div>
                <!-- Emergency Contact Address -->
                <div>
                    <label for="emergency_address"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                    <input type="text" id="emergency_address" wire:model="emergency_address"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="ex. Tankulan, Manolo Fortich, Bukidnon" required />
                </div>
                <!-- Emergency Contact Phone Number -->
                <div>
                    <label for="emergency_phone"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                        number</label>
                    <input type="tel" id="emergency_phone" wire:model="emergency_phone"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
                </div>
                <!-- Emergency Contact Relationship -->
                <div>
                    <label for="relationship"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Relationship</label>
                    <select id="relationship" wire:model="relationship"
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

        <div class="flex justify-right mt-6">
            <button type="button" wire:click="submitForm" wire:loading.attr="disabled"
                wire:loading.class="bg-blue-300 cursor-not-allowed"
                class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                Save Data
            </button>

            <div wire:loading wire:target="submitForm">
                <svg aria-hidden="true"
                    class="w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                    viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M100 50.5908C100 78.2051 77.6142 100.592 50 100.592C22.3858 100.592 0 78.2051 0 50.5908C0 22.9766 22.3858 0.589844 50 0.589844C77.6142 0.589844 100 22.9766 100 50.5908ZM9.08197 50.5908C9.08197 73.1495 27.4413 91.5088 50 91.5088C72.5587 91.5088 90.918 73.1495 90.918 50.5908C90.918 28.032 72.5587 9.67275 50 9.67275C27.4413 9.67275 9.08197 28.032 9.08197 50.5908Z"
                        fill="currentColor" />
                    <path
                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5538C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7237 75.2124 7.4129C69.5422 4.10214 63.2754 1.94025 56.7376 1.05103C51.8773 0.367444 46.9666 0.446843 42.1372 1.27873C39.5941 1.69832 38.1209 4.19778 38.7573 6.62326C39.3936 9.04874 41.8735 10.4717 44.3718 10.1071C47.8519 9.56927 51.4294 9.5262 54.9375 10.0007C60.8643 10.7596 66.5547 12.6982 71.6115 15.7087C76.6683 18.7191 80.9543 22.7423 84.2123 27.5151C86.6166 31.0814 88.4328 35.0532 89.5979 39.2595C90.2334 41.6173 92.5423 42.9795 93.9676 39.0409Z"
                        fill="currentFill" />
                </svg>
            </div>
        </div>
    </form>
</div>
