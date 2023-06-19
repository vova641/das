
    @foreach ($categories as $category)
    <x-nav-link class="nav-phone-block" href="{{route('by-category', $category)}}">
        {{ $category->title }}
    </x-nav-link>
    @endforeach

