<nav class="bg-white h-16 border-b border-[rgb(233,234,238)] flex items-center px-6 justify-between">
    <h1 class="font-bold text-2xl capitalize">{{ $role }}</h1>
    <div x-data="{ open: false }" class="relative">
    <button @click="open = !open"
            @click.away="open = false" class="nav-link dropdown-toggle font-bold px-4 py-2 rounded-lg">Panel</button>
    <livewire:nurse-dropdown />
    </div>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</nav>
