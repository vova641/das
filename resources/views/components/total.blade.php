<div class="nav-phone-block">
    @foreach ($categories as $category)
        <x-nav-link class="nav-phone mb-3 w-full justify-between flex items-centertext-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white" href="{{ route('by-category', $category) }}">
                <div class=" p-3 ">
                    {{ $category->title }}
                </div>
                <span class="inline-flex items-center justify-center px-2 py-0.5 ml-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400">
                    Количество записей {{ $category->total }}
                </span>
            
        </x-nav-link>
    @endforeach
</div>
