<div class="flex items-center justify-center flex-1">
    <input @checked($default) id="default-checkbox" type="checkbox" value=""
        class="w-5 h-5 text-blue-600  cursor-pointer bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $title }}</label>
</div>
