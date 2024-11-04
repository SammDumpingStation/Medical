<x-layout>
    <div class="">
        <div
            class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <div class="w-full mb-1">
                <div class="mb-4">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Consultations</h1>
                </div>
                <div class="sm:flex">
                    <livewire:search-bar />
                </div>
            </div>
        </div>
        <livewire:consultation-table />
    </div>
</x-layout>
