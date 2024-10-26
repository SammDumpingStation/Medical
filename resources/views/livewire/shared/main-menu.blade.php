@props(['icon' => '', 'title' => '', 'href' => ''])
<a href="{{ $href }}" class="flex items-center py-2 pl-3 rounded-lg gap-3">
    <i class="fas {{ $icon }} text-[#9b9b9b] text-lg"></i>
    <h1 class="text-lg text-[#9b9b9b]">{{ $title }}</h1>
</a>
