<x-layout>
    <x-slot:title>
        Dashboard
    </x-slot:title>
    <div class="px-4 flex flex-col mt-4 gap-4 bg-white dark:bg-gray-900">
        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Dashboard</h1>
        <div class="grid gap-4 mb-4 md:grid-cols-2 xl:grid-cols-4">
            <livewire:small-card link="/" title="Health Profile"
                subtitle="Get a copy of your of your Heath Profile" footer="Click here" />
            <livewire:small-card link="/" title="Recent Vital Check"
                subtitle="Get a copy of your of your recent vitals" footer="Create Health Profile" />
        </div>
    </div>

    <livewire:patient-history-table />
</x-layout>
