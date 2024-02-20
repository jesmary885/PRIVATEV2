<div class="flex justify-end ">
    <div x-data="{ dropdownOpen: false }" class="relative">
        <button @click="dropdownOpen = !dropdownOpen" class="relative flex z-10 block rounded-md bg-gray-100 p-2 text-gray-600 font-bold  focus:outline-none">
            Siguiendo 
            <svg fill="none" class="h-6 w-6" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"><path d="m19.9201 8.94995-6.52 6.52005c-.77.77-2.03.77-2.8 0l-6.52002-6.52005" stroke="#292d32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/></svg>
        </button>

        <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-1/3 z-10"></div>

        <div x-show="dropdownOpen" class="absolute right-0  mt-2 bg-white rounded-md shadow-lg overflow-hidden z-20" style="width:10rem;">
            <div>

                <button wire:click="dejare" class="flex items-center px-4 py-3 border-b w-full hover:bg-gray-100 ">

                    <p class="text-gray-600 text-sm mx-2">
                        Dejar de seguir
                    </p>

                </button>
               
                
            </div>
 
        </div>
    </div>
</div>