<x-layout>
    <div class="px-4 flex flex-col mt-4 gap-4">
        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Dashboard</h1>
        <div class="grid gap-4 mb-4 md:grid-cols-2 xl:grid-cols-4">
            <livewire:small-card title="Clinic Visits" subtitle="Visitors This Week" footer="Visits Report"
                id="clinic-chart" />
            <livewire:small-card title="Smoking Rate" subtitle="Smokers Among Student" footer="Smokers Report"
                id="smoking-chart" />
            <livewire:small-card title="Obesity Rate" subtitle="Obesity Among Students" footer="Obesity Report"
                id="sales-by-category" />
            <livewire:small-card title="Pregnancy Rate" subtitle="Pregnancy Rate Stats" footer="Pregnancy Report"
                id="week-signups-chart" />
        </div>
    </div>

    <livewire:table :isDashboard="true" />

</x-layout>
