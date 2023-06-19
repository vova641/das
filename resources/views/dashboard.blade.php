<x-app-layout>
    <x-slot name="header">
        <h2 class=" font-semibold text-xl text-gray-800 leading-tight">
           Новости
        </h2>
    </x-slot>
    

    <div class="display-blog">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden mb-12 sm:mb-0 sm:shadow-xl sm:rounded-lg display-blog-block">
                @foreach ($posts as $post)
                    <x-post :post="$post"></x-post>
                @endforeach
                <div class="mt-12">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
