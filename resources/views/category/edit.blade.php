<x-app-layout title="Create Categories">


    @if (session()->has('success'))
        <x-alert type="success">
            {{ session('success') }}
        </x-alert>
    @endif



    <x-container>
        {{ Breadcrumbs::render('categories.edit', $category) }}
        <div class=" mb-5">
            <h2 class="font-semibold text-xl">Edit Category</h2>
            <p class="text-sm text-gray-500">Edit categories for your posts</p>
        </div>
        <form action="{{ route('category.update', $category->id) }}" method="POST">
            @csrf
            @method('put')
            <div class=" max-w-lg">
                <label for="category_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category
                    name</label>
                <input type="text" id="category_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Category" name="category" value="{{ $category->name }}" />
                @error('category')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <div class="mt-5">
                <button type="submit" class=" py-1 px-4 rounded bg-blue-500 text-white text-sm">Save</button>
            </div>

        </form>
    </x-container>

</x-app-layout>
