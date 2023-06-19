<div class="bg-white">
    <div class="post-pc mx-auto max-w-2xl px-4 py-6 sm:px-6 lg:max-w-7xl lg:px-8">
        <article class="flex bg-white transition hover:shadow-xl card-blog">
            <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
                <time class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900">
                    <span>{{ $post->getFormattedDate() }}</span>
                    <span class="w-px flex-1 bg-gray-900/10"></span>
                    <span>{{ $post->getFormattedDatejS() }}</span>
                </time>
            </div>

            <div class="hidden sm:block sm:basis-56">
                <img src="{{ $post->getThumbnail() }}" class="aspect-square h-full w-full object-cover img-post" />
            </div>

            <div class="flex flex-1 flex-col justify-between">
                <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                    <a href="#">
                        <h3 class="font-bold uppercase text-gray-900">
                            {{ $post->title }}
                        </h3>
                    </a>
                    <div class="flex justify-between items-center text-gray-500">
                        <span
                            class=" my-3 bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            <h1 class="flex">
                                @foreach ($post->categories as $category)
                                    <div class="bot mr-2">{{ $category->title }}</div>
                                @endforeach
                            </h1>
                            <span class="flex items-center">
                                <!-- eye icon -->
                                <svg class="mr-1 inline-block" width="1rem" height="1rem" viewBox="0 0 16 16"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 001.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0014.828 8a13.133 13.133 0 00-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 001.172 8z"
                                        clip-rule="evenodd"></path>
                                    <path fill-rule="evenodd"
                                        d="M8 5.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5zM4.5 8a3.5 3.5 0 117 0 3.5 3.5 0 01-7 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{ $post->view_count }}
                            </span>
                        </span>

                    </div>
                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700">
                        {{ $post->shortBody() }}
                    </p>
                </div>
                <div class="sm:flex sm:items-end sm:justify-end">
                    <a href="{{ route('view', $post) }}"
                        class="block bg-oreng px-5 py-3 text-center text-xs font-bold uppercase transition">
                        Read Blog
                    </a>
                </div>
            </div>
        </article>
    </div>

    <a href="{{ route('view', $post) }}">
        <div class="mx-2 mt-5 post-moble p-3 rounded-lg shadow-md">
            <div class="flex flex-row justify-between items-start mt-2">
                <div class="">
                    <h1 class="text-xl text-gray-800 font-bold mb-2">{{ $post->title }}</h1>
                    <div class="flex items-center mb-3">
                        <div class="flex items-center">
                            <img src="{{ $post->user->profile_photo_url }}" alt=""
                            class="w-8 h-8 rounded-full mr-2">
                        <p class="text-sm text-gray-500 mr-2 font-serif font-thin">{{ $post->user->name }}</p>
                        </div>
                        <p class="text-sm text-gray-500 font-serif font-thin">@ {{ $post->slug }}</p>
                    </div>
                    <p class="text-sm line-clamp-3 text-justify leading-normal text-gray-500 mb-3 font-serif font-thin">
                        {{ $post->shortBody() }}</p>
                </div>
            </div>
            <img class="rounded-lg bg-cover" src="{{ $post->getThumbnail() }}" alt="">
            <div class="flex justify-between">
                <div class="mt-3">
                    <time class="flex items-center justify-between gap-2 text-xs font-bold uppercase text-gray-900">
                        <span>{{ $post->getFormattedDate() }}</span>
                        <span>{{ $post->getFormattedDatejS() }}</span>
                    </time>
                </div>
                <span class="flex items-center mt-2 text-xs font-bold">
                    <!-- eye icon -->
                    <svg class="mr-1 inline-block" width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 001.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0014.828 8a13.133 13.133 0 00-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 001.172 8z"
                            clip-rule="evenodd"></path>
                        <path fill-rule="evenodd"
                            d="M8 5.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5zM4.5 8a3.5 3.5 0 117 0 3.5 3.5 0 01-7 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    {{ $post->view_count }}
                </span>
            </div>
        </div>
    </a>
</div>
