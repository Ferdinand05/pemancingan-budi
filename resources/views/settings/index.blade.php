<x-app-layout title="User Settings">

    @if (session()->has('success'))
        <x-alert type="success">
            {{ session('success') }}
        </x-alert>
    @endif

    @if (session()->has('fail'))
        <x-alert type="danger">
            {{ session('fail') }}
        </x-alert>
    @endif

    <div class="px-16 py-16 md:py-28">
        <p class="text-gray-600 text-sm">Created at {{ $user->created_at->format('d F Y') }}</p>


        <div class="grid md:grid-cols-2 space-y-10 md:space-y-0 md:space-x-5">


            {{-- edit user --}}
            <div class=" max-w-md mt-5">
                <form action="{{ route('settings.update', $user->username) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-4">
                        <label for="username"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="text" name="username"
                            class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ $user->username }}" disabled />

                    </div>
                    <div class="mb-4">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email" name="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ old('email', $user->email) }}" />
                        @error('email')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" id="name" name="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ old('name', $user->name) }}" />
                        @error('name')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit"
                        class="px-3 py-1 bg-blue-500 hover:bg-blue-600 rounded text-white duration-150">Save</button>
                </form>
            </div>



            {{-- edit Password --}}

            <div class="max-w-md">
                <h4 class="text-gray-500 mb-3">Your Credentials</h4>


                <form action="{{ route('update.password') }}" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-4">
                        <label for="current_password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current
                            Password</label>
                        <input type="password" id="current_password" name="current_password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        @error('current_password')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
                            Password</label>
                        <input type="password" id="username" name="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        @error('password')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password_confirmation"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password
                            Comfirmation</label>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        @error('password_confirmation')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit"
                        class="py-1 px-3 bg-blue-500 hover:bg-blue-600 rounded duration-150 text-white">Update</button>
                </form>
            </div>
        </div>

    </div>
</x-app-layout>
