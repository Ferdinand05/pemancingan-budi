<x-app-layout title="Cateogries">
    <div class="flex justify-between items-center px-7 md:px-14 mt-5">
        <div class="">
            <h2 class="font-semibold md:text-2xl">Posts Dashboard</h2>
            <p class="text-sm">Create, Edit , Delete your Posts</p>
        </div>
        <div>
            <a href="{{ route('posts.create') }}"
                class=" bg-blue-600 rounded hover:bg-blue-700 duration-200 hover:text-gray-100 py-2 px-4 text-white text-sm">Create</a>
        </div>
    </div>

    <div class="px-7 md:px-14 pt-5 pb-14">


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Used
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Created at
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4">
                            <a href="#"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>

</x-app-layout>
