<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    {{-- <link href="https://cdn.jsdelivr.net/npm/daisyui@2.37.0/dist/full.css" rel="stylesheet" type="text/css" /> --}}

    <!-- Scripts -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <!-- Styles -->
    @livewireStyles
</head>

<body>

    <div class="md:flex md:justify-start ">

        <div x-data="{ showMessage: true }" x-show="showMessage" class="flex justify-center">
            @if (session()->has('status'))
                <div class="flex items-center justify-between max-w-xl p-4 bg-white border rounded-md shadow-sm">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-green-500" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="ml-3 text-sm font-bold text-green-600">{{ session()->get('status') }}</p>
                    </div>
                    <span @click="showMessage = false" class="inline-flex items-center cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </span>
                </div>
            @endif
        </div>
        <div @click.away="open = false"
            class="flex flex-col w-full md:w-64 text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0"
            x-data="{ open: false }">
            <livewire:profile />
            <livewire:navbar />
        </div>
        <!-- Page Content -->
        <main style="width: 100%">
            {{ $slot }}
        </main>
    </div>
    @stack('modals')
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>


    @livewireScripts


</body>

</html>
