<x-app-layout title="Reset Password">
    <section class="bg-gray-50 dark:bg-gray-900 py-12">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-20 h-12 mr-2" src="/img/logo.png" alt="logo">
                Pemancingan Budi
            </a>
            <div
                class="w-full p-6 bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md dark:bg-gray-800 dark:border-gray-700 sm:p-8">
                <h2
                    class="mb-1 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Change Password
                </h2>
                <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5" action="{{ route('reset-password-store') }}"
                    method="post">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
                            Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('password')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div>
                        <label for="password_confirmation"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                            password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('password_confirmation')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="newsletter" aria-describedby="newsletter" type="checkbox" required
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="newsletter" class="font-light text-gray-500 dark:text-gray-300">I accept the <a
                                    class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                                    href="#">Terms and Conditions</a></label>
                        </div>
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Reset
                        passwod</button>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>
