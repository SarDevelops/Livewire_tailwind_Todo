{{-- Body Background --}}
{{-- --------------------------------------------------- --}}

<div class="w-full bg-cover bg-center"
    style=" height:55rem; background-image: url({{ asset('images/backgroud.webp') }});">
    <div class="flex p-20 h-full w-full bg-gray-900 bg-opacity-50">
        <div class="container">
            <h1 class="text-white text-2xl font-semibold uppercase md:text-3xl ">Importent Task </h1>
            {{-- <h6 class="text-white font-semibold uppercase item ">{{ $today }}</h6> --}}

            {{-- <label for="my-modal-3"
                class="btn text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">
                <img class="mr-2 -ml-1 w-5 h-5" src="{{ asset('images/plus.png') }}" alt="">open modal</label> --}}
            {{-- @if ($isModalOpen) --}}
            @include('livewire.add-todos')
            {{-- @endif --}}

            @if (session()->has('message'))
            <div x-data="{ show: true }" x-init="setTimeout(() => { show = false })" x-show="show">
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                    role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @include('livewire.show-all-todo')
            {{-- @include('livewire.edit') --}}
            {{-- ------------------------------------------------ --}}





        </div>


    </div>
</div>
