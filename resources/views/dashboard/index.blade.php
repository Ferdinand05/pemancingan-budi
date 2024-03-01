<x-app-layout title="Dashboard">


    {{-- hero --}}
    <section>
        <div style="background-image: url('/img/dashboard/1.jpg')" class=" w-full h-60 bg-bottom  bg-fixed">
            <div class="relative top-1/3 text-center space-y-3 md:text-left md:px-32 px-24">
                <h2 class=" font-semibold text-3xl md:text-5xl text-center">Dashboard</h2>
            </div>
        </div>
    </section>

    {{-- Menu --}}
    <section class="py-12 px-12">
        <div>
            <h3 class="text-center font-semibold text-2xl mb-10">Admin Menu</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

            <a href="{{ route('category.index') }}"
                class=" shadow-md  rounded border inline-block p-2 border-gray-300 hover:bg-gray-100">
                <div class="">
                    <h3 class="font-semibold text-xl">Category ( {{ $categories }} )</h3>
                    <p class="text-gray-700 text-sm">Membuat, Mengedit dan Menghapus Kategori Post</p>
                </div>

            </a>

            <a href="{{ route('posts.index') }}"
                class="   rounded border inline-block p-2 border-gray-300 shadow-md hover:bg-gray-100">
                <div class="">
                    <h3 class="font-semibold text-xl">Post ( {{ $posts }} )</h3>
                    <p class="text-gray-700 text-sm">Membuat, Mengedit dan Menghapus Postingan</p>
                </div>
            </a>
            <a href="{{ route('users') }}"
                class="   rounded border inline-block p-2 border-gray-300 shadow-md hover:bg-gray-100">
                <div class="">
                    <h3 class="font-semibold text-xl">Users ( {{ $users }} )</h3>
                    <p class="text-gray-700 text-sm">Controll All Users</p>
                </div>
            </a>



        </div>
    </section>









</x-app-layout>
