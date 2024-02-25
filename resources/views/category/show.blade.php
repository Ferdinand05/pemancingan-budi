<x-app-layout title="{{ $category->name }}">
    <x-container>



        <div class="md:ms-16">
            <div>
                {{ Breadcrumbs::render('category.post', $category) }}
            </div>
            <div>
                <h2>{{ $category->name }}</h2>
                <p class="text-gray-600">Some posts with {{ $category->name }} Category</p>
            </div>
        </div>

        <div class="mt-10 grid md:grid-cols-2 justify-items-center gap-y-10">

            {{-- postingan --}}


            @foreach ($category->posts as $post)
                <div
                    class="max-w-md  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ route('posts.show', $post->slug) }}">
                        <img class="rounded-t-lg" src="/storage/{{ $post->image }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="{{ route('posts.show', $post->slug) }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
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
</x-app-layout>
