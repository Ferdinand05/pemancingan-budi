<x-app-layout title="Blog | Pemancingan Budi">

    {{-- hero --}}
    <section>
        <div style="background-image: url('/img/blog/hero.jpg')" class="relative w-full h-[650px] bg-cover bg-fixed">
            <div class="relative top-1/3 text-center space-y-3 md:text-left md:px-32 px-24">
                <h2 class="text-white font-semibold text-3xl md:text-5xl">Blog</h2>
                <h2 class="text-white font-semibold text-3xl md:text-4xl">Tips & Trick Seputar Mancing</h2>
            </div>
        </div>
    </section>


    {{-- posts --}}
    <section>
        <x-container>
            <div class="md:ms-16">
                <h2 class="text-2xl md:text-3xl font-semibold">Posts</h2>
                <p class="font-light text-gray-700">Pilih topik dari category yang anda suka!</p>
            </div>
            {{-- badge --}}
            <div class="md:ms-16 mt-3 flex flex-wrap gap-y-2 gap-x-2">
                @foreach ($categories as $category)
                    <a href="{{ route('category.show', $category->slug) }}"
                        class="bg-blue-100 text-blue-800 hover:bg-blue-200 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $category->name }}</a>
                @endforeach
            </div>
            <div class="mt-10 grid md:grid-cols-2 justify-items-center gap-y-10">

                {{-- postingan --}}

                @foreach ($posts as $post)
                    <div
                        class="max-w-md  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="{{ route('posts.show', $post->slug) }}">
                            <img class="rounded-t-lg hover:grayscale duration-150" src="/storage/{{ $post->image }}"
                                alt="" />
                        </a>
                        <div class="p-5">
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $post->categories->name }}</span>
                            <a href="{{ route('posts.show', $post->slug) }}">
                                <h5 class=" my-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $post->title }}
                                </h5>
                            </a>
                            <div class="mb-3 font-normal text-gray-700 dark:text-gray-400 body">
                                {!! Str::limit($post->body, 100) !!}
                            </div>
                            <a href="{{ route('posts.show', $post->slug) }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>

                        </div>
                        <div class="px-5 mb-2">
                            <span
                                class=" text-right inline-flex bg-blue-100 text-blue-800 text-xs font-medium  items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">
                                <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
                                </svg>
                                {{ $post->created_at->diffForHumans() }}
                            </span>
                        </div>
                    </div>
                @endforeach


            </div>

        </x-container>
    </section>


</x-app-layout>
