<nav
    class="bg-white w-[250px] min-h-screen border-r border-[#E9EAEE] p-2 flex flex-col gap-3 {{ $isVisible ? '' : 'hidden' }}">
    <div class="flex flex-row items-center justify-between">
        <button wire:click="home" class="flex flex-row items-center">
            <img src="{{ asset('images/Nbsc_logo-removebg-preview.png') }}" class="w-12" alt="">
            <h1 class="font-bold text-2xl flex-1 ml-2">NBSC HOS</h1>
        </button>
        <button wire:click="showSidebar">
            <img src="{{ asset('images/sidebar.svg') }}" class="w-6" alt="">
        </button>
    </div>

    <div class="border border-[#9b9b9b] h-10 flex items-center gap-x-2 p-2 rounded-lg">
        <i class="fas fa-search text-[#9b9b9b]"></i>
        <input type="text" placeholder="Search" class="w-full h-full bg-white border-none">
    </div>
    <h1 class="text-[#9b9b9b] mt-6">MAIN MENU</h1>
    <div class="">
        <livewire:main-menu title="Dashboard" icon="fa-home" href="/nurse"/>
        <livewire:main-menu title="Medical Records" icon="fa-medkit" href="/nurse/medical-records" />
        <livewire:main-menu title="Dental Records" icon="fa-tooth" href="/nurse/dental-records" />
        <livewire:main-menu title="Medicine Records" icon="fa-capsules" href="/nurse/medicine-records" />
        <livewire:main-menu title="Checkup" icon="fa-stethoscope" href="/nurse/checkup" />
    </div>
</nav>
