<x-app-layout title="Home">
    <x-carousel></x-carousel>

    <div class="px-8 py-16 md:px-16 md:py-32 -scroll-mt-28  border-t-8 border-t-blue-500" id="tentang">
        <div class="md:flex md:flex-col space-y-5">
            <div class="text-center md:text-left">
                <h2 class="text-xl md:text-2xl font-semibold mb-3 md:tracking-wider">Tentang Kami</h2>
                <p class="font-light md:text-lg first-letter:text-2xl md:first-letter:text-3xl">Lorem ipsum
                    dolor sit
                    amet consectetur adipisicing
                    elit. Doloribus,
                    quas error
                    delectus
                    nostrum aperiam
                    voluptatibus quibusdam quis placeat quaerat illo. Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Reiciendis nam nostrum voluptate nisi itaque aut.</p>
            </div>
            <div class="space-y-3 md:flex md:space-y-0 md:gap-x-5">
                <img src="/img/3.jpg" alt="Pemancingan Budi" class="w-full rounded shadow-lg md:w-1/2 md:h-96">
                <img src="/img/4.jpg" alt="Pemancingan Budi " class="w-full rounded shadow-lg md:w-1/2 md:h-96">
            </div>
        </div>

    </div>

    {{-- Harga --}}

    <section class="bg-blue-500 text-white -scroll-mt-24" id="harga">
        <x-container>
            <div>
                <div class="text-center md:text-start">
                    <h2 class="text-xl md:text-2xl font-semibold mb-3 md:tracking-wider">Harga</h2>
                    <p class="font-light md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus,
                        quas error
                        delectus
                        nostrum aperiam
                        voluptatibus quibusdam quis placeat quaerat illo. Lorem ipsum dolor sit amet consectetur
                        adipisicing
                        elit. Reiciendis nam nostrum voluptate nisi itaque aut.</p>
                </div>
                <div class="md:flex mt-8 md:justify-between ">
                    {{-- harga --}}
                    <div>

                        <h5 class="font-semibold text-lg mb-3 md:text-xl">Harian Ikan Lele </h5>
                        <div class="flex md:space-x-32 justify-between md:justify-normal">
                            <div>
                                <p class="text-lg md:text-xl">Senin - Jumat</p>
                                <p>35K - 1 Joran</p>
                            </div>
                            <div>
                                <p class="text-lg md:text-xl">Sabtu - Minggu</p>
                                <p>50K - 1 Joran</p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class=" italic text-xs md:text-sm font-light">Sabtu,Minggu dilepas Ikan Mas</p>
                            <p class=" italic text-xs md:text-sm font-light">Harga dapat berubah sewaktu - waktu</p>
                        </div>

                        <h5 class="font-semibold text-lg mb-3 md:text-xl mt-10">Galatama Lele </h5>
                        <div class="flex md:space-x-32 justify-between md:justify-normal">
                            <div>
                                <p class="text-lg md:text-xl">Senin - Sabtu</p>
                                <p>20K - 1 Joran</p>
                            </div>
                        </div>


                    </div>

                    {{-- banner --}}
                    <div class="mt-10 md:mt-0 md:flex-1">
                        <img src="/img/banner.jpg" alt="" class="md:w-[400px]  w-64 mx-auto">
                    </div>
                </div>



            </div>

        </x-container>
    </section>



    {{-- lokasi --}}

    <section id="lokasi" class="-scroll-mt-24">
        <x-container>
            <div class="md:flex md:gap-x-20">
                <div class="text-center md:text-left">
                    <h2 class="text-xl md:text-2xl font-semibold mb-3 md:tracking-wider">Lokasi</h2>
                    <p class="font-light md:text-lg">
                        Jl.H. Holil No.99 RT 02/09 Kel. Kreo, Kec. Larangan, Tangerang
                    </p>
                    <div class="mt-5">
                        <p class="md:text-lg md:font-semibold md:tracking-wide">
                            Buka Setiap Hari
                        </p>
                        <p class="font-light md:text-lg">08.00 - 17.00 WIB</p>
                    </div>
                    <div class="flex mt-3 shadow-lg w-full  md:space-x-3 space-x-1">
                        <img src="/img/1.jpg" alt="" class=" w-1/2">
                        <img src="/img/2.jpg" alt="" class=" w-1/2">
                    </div>
                </div>
                <div>
                    <div class="h-64 md:h-80 mt-7 md:mt-12 border border-black md:w-[500px]">
                        <iframe style="height:100%;width:100%;border:0;" frameborder="0"
                            src="https://www.google.com/maps/embed/v1/place?q=Pemancingan+BUDI,+Jalan+Haji+Holil,+Kreo,+Tangerang+City,+Banten,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                    </div>
                </div>
            </div>

            <div class="text-center mt-10 md:mt-14">
                <a href="https://maps.app.goo.gl/NjCxXgJxXKEzY8DFA" target="_blank" rel="noopener noreferrer"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Mancing
                    Sekarang</a>
            </div>


        </x-container>
    </section>



    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#6495ED" fill-opacity="1"
            d="M0,192L21.8,186.7C43.6,181,87,171,131,149.3C174.5,128,218,96,262,112C305.5,128,349,192,393,192C436.4,192,480,128,524,133.3C567.3,139,611,213,655,229.3C698.2,245,742,203,785,197.3C829.1,192,873,224,916,240C960,256,1004,256,1047,229.3C1090.9,203,1135,149,1178,133.3C1221.8,117,1265,139,1309,128C1352.7,117,1396,75,1418,53.3L1440,32L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z">
        </path>
    </svg>
</x-app-layout>
