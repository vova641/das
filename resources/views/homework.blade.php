<x-app-layout>
    <x-slot name="header">
        <h2 class=" font-semibold text-xl text-gray-800 leading-tight">
           Категории заданий
        </h2>
    </x-slot>
    

    <div class="display-blog">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden mb-12 sm:mb-0 sm:shadow-xl sm:rounded-lg display-blog-block">
                @foreach ($homeworks as $homework)
                    <x-homework :post="$homework"></x-homework>
                @endforeach
                <div class="mt-12">
                    {{ $homeworks->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>