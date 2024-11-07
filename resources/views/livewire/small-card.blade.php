<div class="p-2  rounded-lg shadow-[rgba(50,_50,_105,_0.15)_0px_2px_5px_0px,_rgba(0,_0,_0,_0.05)_0px_1px_1px_0px]  dark:bg-gray-800">
    <div class="px-4 py-2 text-gray-400 w-full rounded">
        <h3
            class="mb-2 flex justify-between items-center text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
            {{ $title }}
        </h3>
        <p class="text-gray-500 dark:text-gray-400 min-h-10">{{ $subtitle }}</p>
    </div>
    <div class="flex items-center justify-end pt-3 mt-4 border-t border-gray-200 dark:border-gray-700">
        <div class="flex-shrink-0">
            <a href="#"
                class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                {{ $footer }}
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
</div>
