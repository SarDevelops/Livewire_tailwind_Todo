<div>
    <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
        <div class="md:space-y-10 mt-10">
            <h1 class="hidden md:block font-bold text-sm md:text-xl text-center">
                <img src="{{ asset('images/m_image.png') }}" alt="" class="w-10 md:w-16 rounded-full mx-auto">
            </h1>
            <div class="personal-image">
                <div id="profile" class="space-y-3">
                    <button
                        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button" data-modal-toggle="popup-modal">
                        Toggle modal
                    </button>
                    <label for="my-modal-4" class="">
                        <div class="avatar">
                            <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">

                                <img src="https://placeimg.com/192/192/people" />
                            </div>
                        </div>
                    </label>

                    <!-- Put this part before </body> tag -->
                    <input type="checkbox" id="my-modal-4" class="modal-toggle" />
                    <div class="modal">
                        <div class="modal-box relative">
                            <label for="my-modal-4" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                            <h3 class="text-left font-bold">Profile</h3>

                        </div>
                    </div>
                </div>

                <div id="popup-modal" tabindex="-1"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <div class="flex justify-between p-4 ">
                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Profile</h3>
                                <button type="button"
                                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                    data-modal-toggle="popup-modal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <form wire:submit.prevent="save">
                            <div class="p-6 text-center">
                                <div class="container">
                                    <div class="p-3">

                                        <input type="text" placeholder="Your name" wire:model="name"
                                            class=" p-3 input input-bordered w-full max-w-xs" />
                                            @error('name') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="p-3">

                                        <input type="email" placeholder="email" wire:model="email"
                                            class=" p-3 input input-bordered w-full max-w-xs" disabled />
                                    </div>
                                    <div class=" p-3 flex justify-start  ">
                                        <div class="p-3">
                                            <img class=" w-10 h-10 rounded-full ring-2 ring-gray-300 dark:ring-gray-500"
                                                src="{{ asset('images/images.jpg') }}" alt="Bordered avatar">
                                        </div>
                                        <div class="p-3">
                                            <label
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                for="multiple_files">Change</label>
                                            <input
                                                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                id="multiple_files" type="file" multiple="" wire:model="profile">
                                                @error('') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                                    </div>
                                </div>

                                <button data-modal-toggle="popup-modal" type="button"
                                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                    Update
                                </button>
                                <button data-modal-toggle="popup-modal" type="submit"
                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                    cancel</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- <div class="avatar">
                    <div class="w-24 rounded-full">
                        <a href="#" id="upload_link"><img src="https://placeimg.com/192/192/people" /></a>
                    </div>
                    <input type="file" name="" hidden id="upload">
                </div> --}}
                {{-- <img src="{{ asset('images/user_profile.png') }}" alt="Avatar user"
                    class="w-10 md:w-16 rounded-full mx-auto" /> --}}
                <div>
                    <h2 class="font-medium text-xs md:text-sm text-center text-teal-500">
                        {{ Auth::user()->name }}
                    </h2>
                    <p class="font-medium text-xs md:text-sm text-center text-teal-500">
                        {{ Auth::user()->email }}
                    </p>
                </div>
            </div>
        </div>
        <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                <path x-show="!open" fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
                <path x-show="open" fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
</div>
