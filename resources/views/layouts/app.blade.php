<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @livewireStyles
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @stack('styles')


    {{-- Dark mode script --}}
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class="font-sans antialiased body-bg ">
    <div class="toast_box fixed top-0 left-0 flex flex-col z-50 w-full items-center mt-12" id="toast-main-box"></div>
    @include('layouts.navigation')

    {{-- Page Content --}}
    <div class="m-0 lg:m-10 md:m-9  h-full dash-board-glass dark:bg-slate-700  md:rounded-3xl shadow-xl">
            {{ $slot }}
    </div>

    <footer class="p-4 bg-white  shadow md:px-6 md:py-8 dark:bg-gray-800">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="{{ route('dashboard') }}" class="flex items-center mb-4 sm:mb-0">
                <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-8" alt="Flowbite Logo">
                <span
                    class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white font-Rubik">Arshad</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a
                href="https://flowbite.com" class="hover:underline">Flowbite™</a>. All Rights Reserved.
        </span>
    </footer>

    {{-- Scripts --}}
    <script src="https://unpkg.com/flowbite@1.4.6/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/driver.js/dist/driver.min.js"></script>
    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>


</html>
