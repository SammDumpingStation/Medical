<div class="space-y-14">
    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Personal Information</h4>

        <div class="grid ml-6 gap-6 mb-6 md:grid-cols-2">
            <div class="">
                <label for="full_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full
                    name</label>
                <input type="text" id="full_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm cursor-not-allowed rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="John Doe" wire:model="full_name" value="{{ $full_name }}" disabled required />

                <input type="hidden" id="id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm cursor-not-allowed rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="John Doe" wire:model="patientID" value="{{ $patientID }}" disabled required />

            </div>
            <div class=" grid gap-3 grid-cols-2">
                <div class="max-w-sm flex gap-3">
                    <div class="w-20">
                        <label for="age"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age</label>
                        <input type="number" id="age" aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 cursor-not-allowed text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="21" value="{{ $age }}" disabled required />
                    </div>
                    <div class="flex-1">
                        <label for="gender"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                        <select id="gender" disabled
                            class="bg-gray-50 border cursor-not-allowed border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose a gender</option>
                            <option value="Male" @selected($gender === 'Male')>Male</option>
                            <option value="Female" @selected($gender === 'Female')>Female</option>
                            <option value="Others" @selected($gender === 'Other')>Others</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="birthday" class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Birthday</label>
                    <livewire:datepicker id="birthday-datepicker" value="{{ $birthday }}" :disabled="true" />
                </div>
            </div>
            <div>
                <label for="Address"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                <input type="text" id="Address" disabled
                    class="bg-gray-50 border border-gray-300 text-gray-900 cursor-not-allowed text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="ex. Tankulan, Manolo Fortich, Bukidnon" value="{{ $address }}" required />
            </div>
            <div>
                <label for="municipal"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Municipal</label>
                <input type="text" id="mucicipal"
                    class="bg-gray-50 border border-gray-300 cursor-not-allowed text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Manolo Fortich" value="{{ $municipal }}" disabled required />
            </div>
            <div>
                <label for="religion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Religion
                </label>
                <input type="text" id="religion" value="{{ $religion }}"
                    class="bg-gray-50 border cursor-not-allowed border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Catholic" required disabled />
            </div>
            <div>
                <label for="occupation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Occupation
                </label>
                <input type="text" id="occupation"
                    class="bg-gray-50 border border-gray-300 cursor-not-allowed text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Student" value="{{ $occupation }}" disabled required />
            </div>
            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                    number</label>
                <input type="tel" id="phone"
                    class="bg-gray-50 border border-gray-300 cursor-not-allowed text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" value="{{ $phone_number }}" disabled
                    required />
            </div>

            <div>
                <label for="civil_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Civil
                    Status
                </label>
                <select id="gender" disabled
                    class="bg-gray-50 border cursor-not-allowed border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a status</option>
                    <option value="Single" @selected($civil_status === 'Single')>Single</option>
                    <option value="Married" @selected($civil_status === 'Married')>Married</option>
                    <option value="Divorced" @selected($civil_status === 'Divorced')>Divorced</option>
                    <option value="Widowed" @selected($civil_status === 'Widowed')>Widowed</option>
                    <option value="Divorced" @selected($civil_status === 'Divorced')>Divorced</option>
                </select>
            </div>
        </div>
    </div>

    <div>
        <h4 class="text-xl mb-4 font-bold dark:text-white">Emergency Contact Information</h4>
        <div class="grid ml-6 gap-6 mb-6 md:grid-cols-2">
            <!-- Contact Person -->
            <div class="">
                <label for="emergency_contact_name"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Contact Person (Full name)
                </label>
                <input type="text" id="emergency_contact_name" wire:model="emergency_contact_name"
                    value="{{ session('patient_information.emergency_contact.name') ?? '' }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="John Doe"
                    {{ session('patient_information.emergency_contact.name') ? 'readonly' : '' }} required />
                @error('emergency_contact_name')
                    <span class="text-red-500 text-sm italic">{{ $message }}</span>
                @enderror
            </div>

            <!-- Address -->
            <div>
                <label for="emergency_contact_address"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Address
                </label>
                <input type="text" id="emergency_contact_address" wire:model="emergency_contact_address"
                    value="{{ session('patient_information.emergency_contact.address') ?? '' }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="ex. Tankulan, Manolo Fortich, Bukidnon"
                    {{ session('patient_information.emergency_contact.address') ? 'readonly' : '' }} required />
                @error('emergency_contact_address')
                    <span class="text-red-500 text-sm italic">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="emergency_contact_phone"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Phone number
                </label>
                <input type="tel" id="emergency_contact_phone" wire:model="emergency_contact_phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
                    {{ session('patient_information.emergency_contact.phone') ? 'readonly' : '' }} required />
                @error('emergency_contact_phone')
                    <span class="text-red-500 text-sm italic">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="emergency_contact_relationship"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Relationship
                </label>
                <select id="emergency_contact_relationship" wire:model="emergency_contact_relationship"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    {{ session('patient_information.emergency_contact.relationship') ? 'disabled' : '' }}>
                    <option selected>Choose a relationship</option>
                    <option value="Parent">Parent</option>
                    <option value="Guardian">Guardian</option>
                    <option value="Sibling">Sibling</option>
                    <option value="Other">Other</option>
                </select>
                @error('emergency_contact_relationship')
                    <span class="text-red-500 text-sm italic">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    <div class="">
        <h4 class="text-xl mb-4 font-bold dark:text-white">Additional Questions</h4>
        <div class="grid grid-cols-2 ml-6 gap-6">
            <label class="inline-flex items-center cursor-pointer">
                <input type="checkbox" wire:model.live="person_with_disability" name="additional_question"
                    class="sr-only peer">
                <div
                    class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                </div>
                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Person with disability</span>
            </label>
            <label class="inline-flex items-center cursor-pointer">
                <input type="checkbox" wire:model="willing_to_donate_blood" name="additional_question"
                    class="sr-only peer">
                <div
                    class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                </div>
                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Willing to donate blood?</span>
            </label>
            @if ($person_with_disability)
                <div>
                    <label for="disability-specify"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Specify Disability</label>
                    <input type="text" id="disability-specify" wire:model="specifics"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required />

                    @error('specifics')
                        <span class="text-red-500 text-sm italic">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white opacity-0">Specify
                        Disability</label>
                    <label class="flex items-center justify-start mt-4 cursor-pointer">
                        <input type="checkbox" wire:model="registered" class="sr-only peer">
                        <div
                            class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                        </div>
                        <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Registered?</span>
                    </label>
                </div>
            @endif

        </div>
    </div>
    <div>

    </div>

    <button type="button" wire:click="saveToSession"
        class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-700">
        Save
    </button>

    {{-- <div class="flex items-center justify-end w-full">
        <button type="button" aria-selected="false" id="dashboard-next" wire:click="switchToTab('social')"
            class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Next</button>
    </div> --}}

</div>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        const patientID = document.getElementById('id').value;
        if (patientID) {
            localStorage.setItem('patientID', patientID);
        }
    });
</script>
