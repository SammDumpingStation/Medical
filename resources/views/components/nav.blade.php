<nav class="bg-white w-[250px] h-screen border-r border-[#E9EAEE] p-2 flex flex-col gap-3">
    <div class="flex flex-row items-center justify-between">
        <img src="{{ asset('images/Nbsc_logo-removebg-preview.png') }}" class="w-12" alt="">
        <h1 class="font-bold text-2xl flex-1 ml-2">NBSC HOS</h1>
        <img src="{{ asset('images/sidebar.svg') }}" class="w-6" alt="">
    </div>
    <div class="border h-10 flex items-center gap-x-2 p-2 rounded-lg">
        <i class="fas fa-search text-[#9b9b9b]"></i>
        <input type="text" placeholder="Search" class="w-full h-full">
    </div>
    <h1 class="text-[#9b9b9b] mt-6">MAIN MENU</h1>
    <div class="">
        <x-main-menu title="Medical Records" icon="fa-medkit" href="/nurse/dashboard/medical-records" />
        <x-main-menu title="Dental Records" icon="fa-tooth" href="/nurse/dashboard/dental-records" />
        <x-main-menu title="Medicine Records" icon="fa-capsules" href="/nurse/dashboard/medicine-records" />
        <x-main-menu title="Follow-up Checkup" icon="fa-stethoscope" href="/nurse/dashboard/follow-up-checkup" />
        <x-main-menu title="Statistical Dashboard" icon="fa-chart-bar" href="/nurse/dashboard/statistical-dashboard" />
        <x-main-menu title="Inventory" icon="fa-boxes" href="/nurse/dashboard/inventory" />

    </div>

</nav>


{{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
        aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main_nav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">Panel</a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div> --}}
