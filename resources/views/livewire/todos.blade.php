
{{-- Body Background --}}
{{-- --------------------------------------------------- --}}

<div class="w-full bg-cover bg-center"
style=" height:55rem; background-image: url({{ asset('images/backgroud.webp') }});">
<div class="flex p-20 h-full w-full bg-gray-900 bg-opacity-50">
    <div class="container">
        <h1 class="text-white text-2xl font-semibold uppercase md:text-3xl ">Today </h1>
        <h6 class="text-white font-semibold uppercase item ">{{ $today }}</h6>

        <label   for="my-modal-3" class="btn text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">
            <img class="mr-2 -ml-1 w-5 h-5" src="{{ asset('images/plus.png') }}" alt="">Add Todo</label>
            {{-- @if($isModalOpen) --}}
            @include('livewire.add-todos')
            {{-- @endif --}}
            @if (session()->has('message'))

            {{-- <div x-data="{ show: true }" x-init="setTimeout(() => { show = false })" x-show="show"> --}}
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                    role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
            @endif

       @include('livewire.show-all-todo')
        @include('livewire.edit')
        {{-- ------------------------------------------------ --}}



        <div
            class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
            <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

            <div
                class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

                <div
                    class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                    <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18"
                        height="18" viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                    </svg>
                    <span class="text-sm">(Esc)</span>
                </div>

                <!-- Add margin if you want to see some of the overlay behind the modal-->
                <div class="modal-content py-4 text-left px-6">
                    <!--Title-->
                    <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold">Simple Modal!</p>
                        <div class="modal-close cursor-pointer z-50">
                            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg"
                                width="18" height="18" viewBox="0 0 18 18">
                                <path
                                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                </path>
                            </svg>
                        </div>
                    </div>

                    <!--Body-->
                    <form>
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="">
                                <div class="mb-4">
                                    <label for="exampleFormControlInput1"
                                        class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="exampleFormControlInput1" placeholder="Enter title"
                                        wire:model="title">
                                    @error('title')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="exampleFormControlInput2"
                                        class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                                    <textarea
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="exampleFormControlInput2" wire:model="description" placeholder="Enter Description"></textarea>
                                    @error('description')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click.prevent="store()" type="button"
                                class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-bold text-white shadow-sm hover:bg-red-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                Store
                            </button>
                        </span>
                        <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                            <button wire:click="closeModalPopover()" type="button"
                                class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-bold text-gray-700 shadow-sm hover:text-gray-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                Close
                            </button>
                        </span>
                    </div> --}}
                        <!--Footer-->
                        <div class="flex justify-end pt-2">
                            <button wire:click.prevent="store()"
                                class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Add</button>
                            <button wire:click="closeModalPopover()"
                                class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
    <form x-data="imgPreview" x-cloak>
        <label for="imgSelect">Select an Image:</label>
        <input type="file" id="imgSelect" accept="{{ asset('images/') }}" x-ref="myFile" @change="previewFile">
        <template x-if="imgsrc">
          <p>
          <img :src="imgsrc" class="imgPreview">
          </p>
        </template>
      </form>


</div>
</div>


