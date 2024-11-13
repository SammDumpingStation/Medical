<x-layout>
    <x-slot:title>
        Dashboard
    </x-slot:title>
    <div class="px-4 flex flex-col mt-4 gap-4 bg-white dark:bg-gray-900">
        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Dashboard</h1>
        <div class="grid gap-4 mb-4 md:grid-cols-2 xl:grid-cols-4">
            <livewire:small-card link="/consultations" title="Vital Form" subtitle="Create a vital check form for patients." footer="Create Vital Form" />
            <livewire:small-card link="/health-profile" title="Health Profile" subtitle="Setup a health profile for student patients."
                footer="Create Health Profile" />
            <livewire:small-card link="/statistics" title="Statistics" subtitle="View health stats among student patients." footer="Proceed" />
            <livewire:small-card link="/pharmacy" title="Pharmacy" subtitle="Access the medicine inventory quickly."
                footer="Proceed" />
        </div>
    </div>

    <livewire:visitation-table />

</x-layout>
