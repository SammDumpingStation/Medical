<div class="p-2 bg-white rounded-lg shadow-sm dark:bg-gray-800">
    <div class="px-4 py-2 text-gray-400 w-full rounded">
        <h3
            class="mb-2 flex justify-between items-center text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
            {{ $title }} <span
                class="flex items-center text-base font-semibold text-green-500 dark:text-green-500 text-center">
                23%
                <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 13V1m0 0L1 5m4-4 4 4" />
                </svg>
            </span>
        </h3>
        <p class="text-gray-500 dark:text-gray-400">{{ $subtitle }}</p>
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
