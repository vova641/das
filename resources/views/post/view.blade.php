<x-app-layout>
    <article class="px-4 py-4 mx-auto max-w-7xl blog-show" itemid="#" itemscope
        itemtype="http://schema.org/BlogPosting">
        <div class="w-full mx-auto text-left md:w-3/4 lg:w-1/2 mt-5">
            <img src="{{ $post->getThumbnail() }}" class="object-cover w-full h-64 bg-center rounded-lg" alt="Kutty" />
        </div>
        <div class="w-full mt-5 mx-auto prose md:w-3/4 lg:w-1/2">
            <h1 class="text-3xl mt-12 font-bold leading-tight text-gray-900 md:text-4xl" itemprop="headline"
                title="Rise of Tailwind - A Utility First CSS Framework">
                {{ $post->title }}
            </h1>
            <div class="flex space-x-2">
                <span
                    class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center rounded dark:bg-primary-200 dark:text-primary-800">
                    <h1 class="flex">
                        <h1 class="teg mt-5">#</h1>
                        @foreach ($post->categories as $category)
                            <div class="bot ml-2">{{ $category->title }}</div>
                        @endforeach
                    </h1>
                </span>
            </div>
            <p class="text-justify">
                {!! $post->body !!}
            </p>
            <div
                class=" mb-5 py-4 rounde-lg mx-auto flex-row items-center justify-center overflow-hidden rounded-lg bg-gray-200 px-6 flex ">
                <div class="flex justify-center items-center space-x-3 text-sm ">
                    <span class="flex items-center space-x-1">
                        <!-- user icon -->
                        <svg class="inline-block" width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 00.014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 00.022.004zm9.974.056v-.002.002zM8 7a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <a class="font-semibold" href="#">{{ $post->user->name }}</a>
                    </span>
                    <span class="flex items-center">
                        <!-- date icon -->
                        <svg class="mr-1 inline-block" width="1rem" height="1rem" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M14 0H2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"
                                clip-rule="evenodd"></path>
                            <path fill-rule="evenodd"
                                d="M6.5 7a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z"
                                clip-rule="evenodd"></path>
                        </svg>
                        {{ $post->getFormattedDatejSFY() }}
                    </span>

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
                        {{$post->view_count}}
                    </span>
                </div>
            </div>
        </div>
    </article>
    <script type="text/javascript" src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/kutty@latest/dist/alpinejs.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/kutty@latest/dist/dropdown.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/kutty@latest/dist/kutty.min.js"></script>
</x-app-layout>
