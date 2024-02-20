<div>



    <button wire:click="$set('open',true)"  class="mt-8 mb-4 py-2 px-14 rounded-full bg-sky-600 text-white tracking-widest hover:bg-sky-500 transition duration-200">MORE</button>

  
  
  <x-dialog-modal wire:model="open">

      <x-slot name="title">
          <p class="text-gray-600 font-bold">
           

          </p>
         
      </x-slot>

      <x-slot name="content">

        <div class="bg-gradient-to-b from-pink-100 to-purple-200">
            <div class="container m-auto px-6 py-4 md:px-12 lg:px-20">
                <div class="m-auto text-center lg:w-8/12 xl:w-7/12">
                    <h2 class="text-2xl text-pink-900 font-bold md:text-4xl">TUS GANANCIAS</h2>
                </div>
                <div class="mt-12 m-auto -space-y-4 items-center justify-center md:flex md:space-y-0 md:-space-x-4 xl:w-10/12">
                    <div class="relative z-10 -mx-4 group md:w-6/12 md:mx-0 lg:w-5/12">
                        <div aria-hidden="true" class="absolute top-0 w-full h-full rounded-2xl bg-white shadow-xl transition duration-500 group-hover:scale-105 lg:group-hover:scale-110"></div>
                        <div class="relative p-6 space-y-6 lg:p-8">
                            <h3 class="text-3xl text-gray-700 font-semibold text-center">División 85-15</h3>
                            <div>
                                <div class="relative flex justify-around">
                                    <div class="flex items-end">
                                        <span class="text-8xl text-gray-800 font-bold leading-0">85</span>
                                        <div class="pb-2">
        <span class="block text-2xl text-gray-700 font-bold">%</span>
        <span class="block text-xl text-purple-500 font-bold">Creador</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul role="list" class="w-max space-y-4 py-6 m-auto text-gray-600">
                                <li class="space-x-2">
                                    <span class="text-purple-500 font-semibold">&check;</span>
                                    <span>Ingresos por suscripción</span>
                                </li>
                                <li class="space-x-2">
                                    <span class="text-purple-500 font-semibold">&check;</span>
                                    <span>Ventas directas</span>
                                </li>
                                <li class="space-x-2">
                                    <span class="text-purple-500 font-semibold">&check;</span>
                                    <span>Ingresos por referencias</span>
                                </li>
                            </ul>
                  
                           
                        </div>
                    </div>
        
                    <div class="relative group md:w-6/12 lg:w-6/12">
                        <div aria-hidden="true" class="absolute top-0 w-full h-full rounded-2xl bg-white shadow-lg transition duration-500 group-hover:scale-105"></div>
                        <div class="relative p-6 pt-16 md:p-8 md:pl-12 md:rounded-r-2xl lg:pl-20 lg:p-16">
                            <ul role="list" class="space-y-4 py-6 text-gray-600">
                                <li class="space-x-2">
                                    <span class="text-purple-500 font-semibold">&check;</span>
                                    <span>Private Social solo cobra el 15% de sus ganancias</span>
                                </li>
                       

                            </ul>
                          
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

          


      </x-slot>

      <x-slot name="footer">
    

          <button wire:click="close" class="mr-2 inline-block rounded bg-neutral-800 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
              Cerrar
          </button>
    


      </x-slot>

  </x-dialog-modal>
  {{-- Be like water. --}}
</div>
