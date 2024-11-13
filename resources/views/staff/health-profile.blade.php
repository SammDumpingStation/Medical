<x-layout>
    @if (Auth::user()->role === 'doctor')
        <livewire:doctor-cofirmation />
    @else
        <livewire:health-profile-table />
    @endif
</x-layout>
