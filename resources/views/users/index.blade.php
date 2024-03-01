<x-app-layout title="Users">

    @if (session()->has('success'))
        <x-alert type="success">
            {{ session('success') }}
        </x-alert>
    @endif

    @if (session()->has('danger'))
        <x-alert type="danger">
            {{ session('danger') }}
        </x-alert>
    @endif

    <x-container>
        <div class="py-5">
            {{ Breadcrumbs::render('users') }}

            <div>
                <h4>Control your Users</h3>
                    <p class="text-sm text-gray-600">Registered users</p>
            </div>

        </div>


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Username
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Roles
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

                    @php
                        $i = 1;
                    @endphp
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $i++ }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $user->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->username }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->getRoleNames()[0] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->created_at->toFormattedDateString() }}
                            </td>
                            <td class="px-6 py-4 flex flex-wrap md:flex-nowrap gap-2">
                                <a href="{{ route('users.edit', $user->username) }}"
                                    class="px-4 py-1 bg-blue-700 text-white hover:bg-blue-600 rounded">Edit</a>
                                <form action="{{ route('users.destroy', $user->username) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        class="px-4 py-1 bg-red-700 text-white hover:bg-red-600 rounded">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </x-container>




</x-app-layout>
