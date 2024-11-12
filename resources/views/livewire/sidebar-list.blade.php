<li class="">
    @if (!$isDropdown)
        <a href="{{ $href }}" wire:click="navigate"
            class=" {{ $active ? 'bg-gray-100 text-gray-900 dark:bg-gray-700' : 'text-gray-500' }} flex items-center p-2 text-lg rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
            <div
                class="{{ $active ? 'fill-gray-900 dark:fill-white' : 'fill-gray-500' }}  w-6 h-6 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white ">
                {!! $icon !!}
            </div>
            <span
                class="ml-3 whitespace-nowrap duration-300 ease-in-out overflow-hidden
    {{ $sidebar ? 'opacity-100 w-auto flex' : 'hidden' }}"
                sidebar-toggle-item>{{ $label }}</span>
        </a>
    @else
        <button type="button"
            class="{{ $active ? 'bg-gray-100 text-gray-900 dark:bg-gray-700' : 'text-gray-500' }} flex w-full items-center p-2 text-lg rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700"
            aria-controls="dropdown-layouts" data-collapse-toggle="dropdown-layouts">
            <div
                class="{{ $active ? 'fill-gray-900 dark:fill-white' : 'fill-gray-500' }}  w-6 h-6 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white ">
                {!! $icon !!}
            </div>
            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>{{ $label }}</span>
            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <ul id="dropdown-layouts" class=" py-2 space-y-2">
            @foreach ($menuList as $key => $value)
                <li>
                    <a href="{{ $value }}"
                        class="{{ request()->is(ltrim($value, '/')) ? 'bg-gray-100 text-gray-900 dark:bg-gray-700' : 'text-gray-500' }} flex items-center p-2 text-base text-gray-500 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">{{ $key }}</a>
                </li>
            @endforeach
        </ul>
    @endif
</li>
