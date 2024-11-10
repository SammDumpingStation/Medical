<x-layout>
    <div class="px-4 flex flex-col mt-4 gap-4 bg-white dark:bg-gray-900">
        <div class="mb-4">
        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Health Profile</h1>
            {{-- <span class="text-base font-normal text-gray-500 dark:text-gray-400">Click the "Create Form" to start
                creating Vital Check forms for a student</span> --}}
        </div>
    </div>
    <livewire:health-profile-table />
</x-layout>
