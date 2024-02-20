<div class="relative font-general" x-data>
    

    <div class="flex justify-center">

        <label for="simple-search" class="sr-only">Search</label>

        <div class=" w-full">

            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>

            <x-input name="name" wire:model="search" type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" />

        </div>

    </div>


    
    <div class="flex justify-center ">

        <div class=" z-20 absolute  mt-1 hidden" :class="{ 'hidden' : !$wire.open }" @click.away="$wire.open = false">
            
            <div class="bg-white rounded-lg shadow-lg">
                
                <div class="px-4 relative py-3 space-y-1">

                    <div class="flex justify-end">
                        <button class="btn btn-sm"
           
                        wire:click="close()">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="m10 0c5.5228475 0 10 4.4771525 10 10s-4.4771525 10-10 10-10-4.4771525-10-10 4.4771525-10 10-10zm2.2066229 6.83655409-2.1966229 2.19344591-2.19503375-2.19344591c-.23975034-.23952941-.61340509-.26332117-.87975736-.07148644l-.08447905.07193092c-.2661438.26638927-.2659448.69809262.00044447.96423641l2.19482569 2.19276502-2.19482569 2.1930677c-.26638927.2661438-.26658827.6978471-.00044447.9642364.26614379.2663893.69784714.2665883.96423641.0004445l2.19503375-2.1947486 2.1966229 2.1947486c.2397504.2395294.6134051.2633212.8797574.0714864l.084479-.0719309c.2661438-.2663893.2659448-.6980926-.0004444-.9642364l-2.1954149-2.1930677 2.1954149-2.19276502c.2663892-.26614379.2665882-.69784714.0004444-.96423641-.2661438-.26638928-.6978471-.26658827-.9642364-.00044448z" fill="#555"/></svg>
                    </button>
        
                    </div>
                    @forelse ($users as $user)
                        <a href="#" class="flex">
                            <img class="w-16 h-12 object-cover" src="{{ $user->profile_photo_url  }}" alt="">
                            <div class="ml-4 text-gray-700">
                                <p class="text-md font-semibold leading-5">{{$user->name}}</p>
                             
                            </div>
                        </a>
                    @empty
                        <p class="text-lg leading-5">
                            {{__('messages.No existe ningún registro')}}
                        </p>
                    @endforelse
                </div>
            </div>
        </div>

    </div>


    
</div>
