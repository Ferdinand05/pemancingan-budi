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
            <h3 class="text-center font-semibold text-2xl mb-10">Menu</h3>
        </div>
        <div class="flex md:justify-around flex-wrap gap-y-5">

            <a href="" class=" bg-blue-300  rounded border inline-block p-2 border-gray-400 shadow">
                <div class="">
                    <h3 class="font-semibold text-xl">Category</h3>
                    <p class="text-gray-700 text-sm">Membuat, Mengedit dan Menghapus Kategori Post</p>
                </div>

            </a>

            <a href="" class=" bg-green-300  rounded border inline-block p-2 border-gray-400 shadow">
                <div class="">
                    <h3 class="font-semibold text-xl">Post</h3>
                    <p class="text-gray-700 text-sm">Membuat, Mengedit dan Menghapus Postingan</p>
                </div>
            </a>



        </div>
    </section>









</x-app-layout>
