<x-app-layout title="Create Posts">

    @if (session()->has('success'))
        <x-alert type="success">
            {{ session('success') }}
        </x-alert>
    @endif

    <x-container>

        <div class="-mt-12 mb-5">
            {{ Breadcrumbs::render('posts.edit', $post) }}
            <h2 class="font-semibold text-2xl">Create Post</h2>
            <p class="text-gray-500 text-sm">Setup your content</p>
        </div>
        <form action="{{ route('posts.update', $post->slug) }}" method="post" class="max-w-xl space-y-4"
            enctype="multipart/form-data">
            @csrf
            @method('put')
            <div>
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input type="text" id="title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Post title" name="title" value="{{ old('title', $post->title) }}" />
                @error('title')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="category"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                <select name="category" id="category"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    <option value="" selected disabled> > Select</option>
                    @foreach ($categories as $category)
                        @if ($post->category_id == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
                @error('category')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div class=" max-w-sm">
                <img src="/storage/{{ $post->image }}" alt="">
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Content
                    Image</label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    id="file_input" type="file" name="body_image">
                @error('body_image')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="body">Content
                </label>
                <textarea name="body" id="body" cols="30" rows="15">
                    {!! $post->body !!}
                </textarea>
                @error('body')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <div>
                <button type="submit" id="submitPost" class="bg-blue-500 text-white py-1 px-4 rounded">Create</button>
            </div>
        </form>
    </x-container>




    @push('scripts')
        <script>
            ClassicEditor
                .create(document.querySelector('#body'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endpush
</x-app-layout>
