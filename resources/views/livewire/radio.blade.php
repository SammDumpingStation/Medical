<div class="flex items-center cursor-pointer">
    <input @checked($default) id="{{ $id }}" type="radio" value="{{ $value }}"
        name="{{ $name }}"
        class=" cursor-pointer w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="{{ $id }}"
        class=" cursor-pointer ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $title }}</label>
</div>
