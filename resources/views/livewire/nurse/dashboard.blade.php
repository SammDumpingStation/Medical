    <div class="flex-1 flex flex-col">
        <livewire:horizontal-nav />
        <main class="flex-1 flex flex-col gap-8 p-4 h-full">
            <section class="flex flex-row w-full justify-end">
                <div class="bg-[#003366] px-4 py-2 rounded-full flex flex-row items-center gap-2">
                    <i class="fas fa-plus text-white text-lg"></i>
                    <button @click="$dispatch('open-modal')" class="text-white">Record Vital Signs</button>
                </div>

            </section>
            <div class="flex flex-row flex-wrap gap-4">
                <livewire:card-component title="Medical Records" />
                <livewire:card-component title="Dental Records" />
                <livewire:card-component title="Medicine Records" />
                <livewire:card-component title="Follow-up Checkup" />
            </div>
            <livewire:nurse-table />
            <livewire:vital-form />

        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit-id.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit-id.js" crossorigin="anonymous"></script>
