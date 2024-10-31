<li>
    <a href="{{ $href }}"
        class=" {{ $active ? 'bg-gray-100 text-gray-900 dark:bg-gray-700' : 'text-gray-500' }} flex items-center p-2 text-base rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
        @if (isset($icon))
            <div
                class="{{ $active ? 'fill-gray-900 dark:fill-white' : 'fill-gray-500' }}  w-6 h-6 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white ">
                {!! $icon !!}
            </div>
        @endif
        <span class="ml-3" sidebar-toggle-item>{{ $label ?? 'Lorem' }}</span>
    </a>
</li>

{{-- <li>
            <a href="http://localhost:1313/" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                <svg class="" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                <span class="ml-3" sidebar-toggle-item>Dashboard</span>
            </a>
          </li> --}}
