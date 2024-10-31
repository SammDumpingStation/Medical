<x-layout>
    <h2 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">
        Dashboard</h2>
    <div class="grid gap-4 mb-4 md:grid-cols-2 xl:grid-cols-4">
        <livewire:small-card title="Clinic Visits" subtitle="Visitors This Week" footer="Visits Report" id="clinic-chart" />
        <livewire:small-card title="Smoking Rate" subtitle="Current Smoking Rate" footer="Smokers Report" id="smoking-chart" />
        <livewire:small-card title="Obesity Rate" subtitle="Obesity Among Students" footer="Obesity Report" id="sales-by-category" />
        <livewire:small-card title="Pregnancy Rate" subtitle="Pregnancy Rate Stats" footer="Pregnancy Report" id="week-signups-chart" />
    </div>
    <livewire:table :isDashboard="true" />

</x-layout>
