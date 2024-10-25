@props(['href' => '/', 'title', 'icon' => ''])
<div class="col-md-4">
    <a href="{{ $href }}" class="card-link">
        <div class="card">
            <div class="card-header">
                {{ $title }}
            </div>
            <div class="card-body">
                <i class="{{ $icon }}"></i>
                <span class="text">{{ $title }}</span>
            </div>
        </div>
    </a>
</div>
