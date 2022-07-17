<aside :class="isOpen?'w-64':'w-0'" class=" h-screen overflow-y-auto bg-gray-500" id="sidbar">
    <div class="grid justify-items-center">
        <span class="text-2xl font-bold whitespace-nowrap text-white p-2">LOGO</span>
        <div class="bg-local w-full h-30 bg-cover bg-center pb-10"
            style="background-image: url({{ asset('/images/Blue_Set.jpg') }})">
            <a href="{{ route('profile.show') }}"
                class="flex items-center p-2 mt-10 ml-1 text-base font-normal text-gray-900 rounded-lg ">
                <svg class="flex-shrink-0 w-10 h-9 text-gray-500 transition duration-75  group-hover:text-gray-900 rounded-full bg-blue-800"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="flex-1 ml-3  whitespace-nowrap text-white"> {{ Auth::user()->name }}</span>
            </a>
        </div>
    </div>
    <div>
        @include('links')
    </div>
</aside>