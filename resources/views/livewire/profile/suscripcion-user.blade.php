<div>

    <button wire:click="$set('open',true)" class="mt-3 py-2 px-2 rounded-full font-semibold text-xs bg-blue-600 text-white tracking-widest hover:bg-blue-500 transition duration-200">SUSCRIBIRSE</button>
  
  
    <x-dialog-modal wire:model="open">

      <x-slot name="title">
        
      </x-slot>

      <x-slot name="content">

          <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
              <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                @if($sf>0)
                  <div class="flex items-center py-3">
                    <span
                      class="w-8 h-8 shrink-0 mr-4 rounded-full bg-blue-50 flex items-center justify-center"
                    >
                    <svg enable-background="new 0 0 64 64" height="64" viewBox="0 0 64 64" width="64" xmlns="http://www.w3.org/2000/svg"><g fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2"><path d="m61 44v11h-60v-40h60v11"/><path d="m6 9h48v6"/><path d="m6 9c-2.762 0-5 2.239-5 5"/><path d="m43.125 26c-4.972 0-9 4.029-9 9 0 4.97 4.028 9 9 9h19.875v-18z"/><circle cx="44" cy="35" r="3"/></g></svg>
                    </span>
                    <div class="space-y-3 flex-1">
                      <div class="flex items-center">
                        
                        <h4 class="font-medium text-sm mr-auto text-gray-700 flex items-center" >
                        Su saldo es suficiente para suscribirte al plan seleccionado
                        </h4>
                        
                        <span class="px-2 py-1 rounded-lg bg-green-50 text-green-500 text-xs">
                        PVS {{$user->balance}}
                        </span>
                      </div>
                      <div class="overflow-hidden bg-blue-50 h-1.5 rounded-full w-full">
                        <span
                          class="h-full bg-blue-500 w-full block rounded-full"
                          style="width: 100%"
                        ></span>
                      </div>
                    </div>
                  </div>
                @else
                  <div class="flex items-center py-3">
                    <span
                      class="w-8 h-8 shrink-0 mr-4 rounded-full bg-red-50 flex items-center justify-center"
                    >
                    <svg enable-background="new 0 0 64 64" height="64" viewBox="0 0 64 64" width="64" xmlns="http://www.w3.org/2000/svg"><g fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2"><path d="m61 44v11h-60v-40h60v11"/><path d="m6 9h48v6"/><path d="m6 9c-2.762 0-5 2.239-5 5"/><path d="m43.125 26c-4.972 0-9 4.029-9 9 0 4.97 4.028 9 9 9h19.875v-18z"/><circle cx="44" cy="35" r="3"/></g></svg>
                    </span>
                    <div class="space-y-3 flex-1">
                      <div class="flex items-center">
                        
                        <h4 class="font-medium text-sm mr-auto text-gray-700 flex items-center" >
                        Su saldo <span class=" ml-1 mr-1 "> NO</span> es suficiente para suscribirte al plan seleccionado
                        </h4>
                        
                        <span class="px-2 py-1 rounded-lg bg-red-50 text-red-500 text-xs">
                        Balance: PVS {{$user->balance}}
                        </span>
                      </div>
                      <p>
           
                      </p>
                      <div class="overflow-hidden bg-blue-50 h-1.5 rounded-full w-full">
                        <span class="h-full bg-red-500 block rounded-full" style=<?php echo $porcentaje_style; ?> >
                        </span>
                      </div>
                    </div>
                  </div>

                  <a class="flex items-baseline mt-3 mb-2 text-blue-600 hover:text-blue-900 focus:text-blue-900" href="{{route('configuracion_pagos')}}">
                    <span>Recarga dinero a tu billetera aquí</span>
                    <span class="text-xs ml-1">&#x279c;</span>
                  </a>

                @endif

                <hr>

                <div class="flex justify-center">

                  <p class="text-gray-700 font-bold text-lg mb-4 mt-4">
                    Beneficios del plan {{$plan->name}}                            
                  </p>

                </div>

                  <div class="flex items-center  bg-white px-6 md:px-60">
                      <div class="border-l-2 border-dashed">
                        
                       


                          @foreach($contenido_plan as $contenido)
                          <div class="relative w-full mb-2">

                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="absolute -top-0.5 z-10 -ml-3.5 h-7 w-7 rounded-full text-blue-500">
                                  <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                              </svg>
                          
                              <div class="ml-6">
                                  <h4 class="font-bold text-blue-500">{{$contenido->titulo}}</h4>
                                  <p class="mt-2 max-w-screen-sm text-sm text-gray-500">{{$contenido->servicio}}</p>
                              
                              </div>
                          </div>

                          @endforeach

                      </div>
                  </div>

              </div>
             
          </div>

      </x-slot>

      <x-slot name="footer">
    

          <button wire:click="close" class="mr-2 inline-block rounded bg-neutral-800 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
              Cerrar
          </button>

          @if($sf == 1)
    

          <button wire:click="suscribir" class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
              Procesar suscripción
          </button>

          @endif

      </x-slot>

  </x-dialog-modal>
  {{-- Be like water. --}}
</div>
