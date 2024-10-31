<x-layout>
    <h2 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">
        Dashboard</h2>
    <div class="grid gap-4 mb-4 md:grid-cols-2 xl:grid-cols-4">
        <livewire:small-card />
        <livewire:small-card />
        <livewire:small-card />
        <livewire:small-card />
    </div>
    <livewire:table :isDashboard="true" />
</x-layout>
