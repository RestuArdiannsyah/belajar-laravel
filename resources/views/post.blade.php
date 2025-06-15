<x-layout>
    <x-slot:title>
        <div class="flex items-center justify-between">
            {{ $title }}
            {{-- <a href="/posts" :active="request()->is('posts')" class="text-md hover:underline hover:translate-x-1 transition-all ease-in-out duration-300">Back to blog</a> --}}

        </div>
    </x-slot:title>

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <a href="/posts" class="iline-flex items-center mb-4 text-xs text-blue-500 dark:text-gray-400">
                        &laquo; Back to blog
                    </a>
                    <address class="flex items-center my-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                alt="{{ $post->author->name }}">
                            <div>
                                <a href="/authors/{{ $post->author->username }}" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->username }}</a>
                                <p class="my-1 text-xs text-gray-500 dark:text-gray-400">
                                    {{ $post->created_at->diffForHumans() }}</p>
                                <a href="/categories/{{ $post->category->slug }}"
                                    class="{{ $post->category->color }} hover:underline  text-primary-800 text-xs font-medium inline-flex items-center px-2 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                    {{ $post->category->name }}
                                </a>
                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post->title }}</h1>
                </header>
                <p>{{ $post->body }}</p>
            </article>
        </div>
    </main>


</x-layout>
