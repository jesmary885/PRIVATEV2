<div>
      <div class="flex justify-center items-center ">
        <div x-data="{ open: false }">
          <!-- Sidebar Overlay -->
          <div x-show="open" class="fixed inset-0 z-50 overflow-hidden">
            <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
            <!-- Sidebar Content -->
            <section class="absolute inset-y-0 right-0 pl-10 max-w-full flex">
              <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform translate-x-full" x-transition:enter-end="transform translate-x-0" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform translate-x-0" x-transition:leave-end="transform translate-x-full" class="w-screen max-w-md">
                <div class="h-full flex flex-col py-6 bg-white shadow-xl">
                  <!-- Sidebar Header -->
                  <div class="flex items-center justify-between px-4">
                    <h2 class="text-xl font-semibold text-black"></h2>
                    <button x-on:click="open = false" class="text-gray-500 hover:text-gray-700">
                      <span class="sr-only">Close</span>
                      <svg class="h-6 w-6" x-description="Heroicon name: x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>
                    </button>
                  </div>
                  <!-- Search Input -->
                
              
                  <!-- Sidebar Content -->
                  <div class="mt-4 px-4 h-full overflow-auto">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">




                        @if ($comentarios->count())

                        @foreach($comentarios as $comentario)
                          <div class="relative flex w-full max-w-[26rem] flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
                              <div class="relative mx-0 mt-4 flex items-center gap-4 overflow-hidden rounded-xl bg-transparent bg-clip-border pt-0 pb-8 text-gray-700 shadow-none">
                                <img
                                  src="{{$comentario->user->profile_photo_url}}"
                                  alt="tania andrew"
                                  class="relative inline-block h-[58px] w-[58px] !rounded-full object-cover object-center"
                                />
                                <div class="flex w-full flex-col gap-0.5">
                                  <div class="flex items-center justify-between">
                                    <h5 class="block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                                      {{$comentario->user->username}}
                                    </h5>
                                    <div class="flex items-center gap-0">

                                      {{ $comentario->created_at->format('d/m/Y') }}

                                    </div>

                                    
                                  </div>

                                  <div class="flex justify-between">

                                    @if($comentario->user->pais_id)
                                    <p class="block font-sans text-base font-light leading-relaxed text-blue-gray-900 antialiased">
                                      {{$comentario->user->pais->name}}
                                    </p>
  
                                    @endif

                                    @if($comentario->user->id == Auth::user()->id)

                                      <button class="text-red-600 btn-sm text-sm hover:text-gray-100 hover:bg-red-700 p-1 rounded-lg"
                                                
                                        wire:click="delete('{{$comentario->id}}')">
                                        Eliminar
                                      </button>

                                    @endif

                                  </div>

                                 
                                </div>
                              </div>
                              <div class="mb-6 p-0">
                                <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
                                  {{$comentario->comentario}}
                                </p>
                              </div>
                          </div>

                          
                          

                        @endforeach

                        @if($comentarios->hasMorePages())
                            <button class="dark:text-white dark:border-white w-full sm:w-auto border border-gray-800 text-base font-medium text-gray-800 p-2 focus:outline-none focus:ring-2 focus:ring-offset-2  dark:hover:text-white dark:hover:bg-gray-700" wire:click.prevent="loadMore">Load more</button>
                        @endif

                        @else

                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Upss!</strong>
                            <span class="block sm:inline">Aún no hay comentarios registrados</span>
                          </div>

                        @endif
                      
                  
              
              
                    </div>
                  </div>
               
                </div>
              </div>
            </section>
          </div>
          <!-- Your main content goes here -->
          <!-- Open sidebar button -->

          <button x-on:click="open = true" class="flex justify-center items-center gap-2 px-2 hover:bg-gray-50 rounded-full p-1">
            <svg width="22px" height="22px" viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22ZM8 13.25C7.58579 13.25 7.25 13.5858 7.25 14C7.25 14.4142 7.58579 14.75 8 14.75H13.5C13.9142 14.75 14.25 14.4142 14.25 14C14.25 13.5858 13.9142 13.25 13.5 13.25H8ZM7.25 10.5C7.25 10.0858 7.58579 9.75 8 9.75H16C16.4142 9.75 16.75 10.0858 16.75 10.5C16.75 10.9142 16.4142 11.25 16 11.25H8C7.58579 11.25 7.25 10.9142 7.25 10.5Z"></path>
              </g>
            </svg>

            @livewire('publicacion.points.cant-comentarios',['publicacion'=>$publicacion->id])
           
          </button>

        </div>
      </div>
     








</div>
