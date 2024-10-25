<x-layout>
    <x-slot:heading>
        NBSC Health Office System
    </x-slot:heading>
    <x-slot:styles>
        <link rel="stylesheet" href="{{ asset('css/nurse/dashboard.css') }}">
    </x-slot:styles>


    <main class="flex-1">
        <div class="flex flex-row flex-wrap my-auto">
            <x-nurse.card-component title="Medical Records" href="/nurse/dashboard/medical-records" icon="fas fa-medkit" />
            <x-nurse.card-component title="Dental Records" href="/nurse/dashboard/dental-records" icon="fas fa-tooth" />
            <x-nurse.card-component title="Medicine Records" href="/nurse/dashboard/medicine-records" icon="fas fa-capsules" />
            <x-nurse.card-component title="Follow-up Checkup" href="/nurse/dashboard/follow-up-checkup" icon="fas fa-stethoscope" />
            <x-nurse.card-component title="Statistical Dashboard" href="/nurse/dashboard/medical-records" icon="fas fa-chart-bar" />
            <x-nurse.card-component title="Inventory" href="/nurse/dashboard/medical-records" icon="fas fa-boxes" />
        </div>

    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit-id.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit-id.js" crossorigin="anonymous"></script>

</x-layout>
