<div>

    <button wire:click="$set('open',true)" class="flex justify-center items-center gap-2 px-2 hover:bg-gray-50 rounded-full p-1">

        <span class="font-semibold">{{$cant_me_gusta}} Me gusta</span>
    </button>

   
  
  
    <x-dialog-modal maxWidth="sm" wire:model="open">

      <x-slot name="title">

        <div class="flex justify-between">

            <p class="font-bold text-gray-500"> Me gusta</p>



            <button wire:click="close" class="text-gray-500 hover:text-gray-700">
                <span class="sr-only">Close</span>
                <svg class="h-6 w-6" x-description="Heroicon name: x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

        </div>

       
        
      </x-slot>

      <x-slot name="content">

        @if ($me_gustan->count())

        @foreach($me_gustan as $me_gusta)
          <div class="relative flex w-full max-w-[26rem] flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
              <div class="relative mx-0 flex items-center gap-2 overflow-hidden rounded-xl bg-transparent bg-clip-border pt-0 pb-2 text-gray-700 shadow-none">
                <img
                  src="{{$me_gusta->user->profile_photo_url}}"
                  alt="tania andrew"
                  class="relative inline-block h-[58px] w-[58px] !rounded-full object-cover object-center"
                />
                <div class="flex w-full flex-col gap-0.5">
                  <div class="flex items-center justify-between">
                    <h5 class="block font-sans text-md font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                      {{$me_gusta->user->username}}
                    </h5>
                

                    
                  </div>

                  <div class="flex justify-between">

                    @if($me_gusta->user->pais_id)
                    <p class="block font-sans text-base font-light leading-relaxed text-blue-gray-900 antialiased">
                      {{$me_gusta->user->pais->name}}
                    </p>

                    @endif

                    

                  </div>

                 
                </div>
              </div>
             
          </div>

          
          

        @endforeach

        @if($me_gustan->hasMorePages())
            <button class="dark:text-white dark:border-white w-full sm:w-auto border border-gray-800 text-base font-medium text-gray-800 p-2 focus:outline-none focus:ring-2 focus:ring-offset-2  dark:hover:text-white dark:hover:bg-gray-700" wire:click.prevent="loadMore">Load more</button>
        @endif

        @else

        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Upss!</strong>
            <span class="block sm:inline">Aún no hay comentarios registrados</span>
          </div>

        @endif

      </x-slot>

      <x-slot name="footer">
    


      </x-slot>

  </x-dialog-modal>
  {{-- Be like water. --}}
</div>

