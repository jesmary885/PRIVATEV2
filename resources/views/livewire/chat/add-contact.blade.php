<div >

    @if($accion == 'inferior')

    <button wire:click="$set('open',true)"  class="mt-8 mb-4 py-2 px-14 rounded-full bg-sky-600 text-white tracking-widest hover:bg-sky-500 transition duration-200">
        
        Agregar contácto

    </button>

    @else

    <button wire:click="$set('open',true)"  class=" py-2 px-4 text-sky-600 mt-3 ">

        <svg fill="none" height="30" viewBox="0 0 27 25" width="30" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><filter id="a" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse" height="5.5" width="9.5" x="17.25" y="8.25"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" result="hardAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="1"/><feComposite in2="hardAlpha" operator="out"/><feColorMatrix type="matrix" values="0 0 0 0 0.231373 0 0 0 0 0.407843 0 0 0 0 1 0 0 0 0.35 0"/><feBlend in2="BackgroundImageFix" mode="normal" result="effect1_dropShadow_192_1050"/><feBlend in="SourceGraphic" in2="effect1_dropShadow_192_1050" mode="normal" result="shape"/></filter><filter id="b" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse" height="9.5" width="5.5" x="19.25" y="6.25"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" result="hardAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="1"/><feComposite in2="hardAlpha" operator="out"/><feColorMatrix type="matrix" values="0 0 0 0 0.231373 0 0 0 0 0.407843 0 0 0 0 1 0 0 0 0.35 0"/><feBlend in2="BackgroundImageFix" mode="normal" result="effect1_dropShadow_192_1050"/><feBlend in="SourceGraphic" in2="effect1_dropShadow_192_1050" mode="normal" result="shape"/></filter><filter id="c" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse" height="15.1343" width="24.1211" x=".939453" y="9.56006"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feGaussianBlur in="BackgroundImageFix" stdDeviation="1"/><feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_192_1050"/><feColorMatrix in="SourceAlpha" result="hardAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="2"/><feComposite in2="hardAlpha" operator="out"/><feColorMatrix type="matrix" values="0 0 0 0 0.231373 0 0 0 0 0.407843 0 0 0 0 1 0 0 0 0.1 0"/><feBlend in2="effect1_backgroundBlur_192_1050" mode="normal" result="effect2_dropShadow_192_1050"/><feBlend in="SourceGraphic" in2="effect2_dropShadow_192_1050" mode="normal" result="shape"/><feColorMatrix in="SourceAlpha" result="hardAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="1.5"/><feComposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic"/><feColorMatrix type="matrix" values="0 0 0 0 0.231373 0 0 0 0 0.407843 0 0 0 0 1 0 0 0 0.38 0"/><feBlend in2="shape" mode="normal" result="effect3_innerShadow_192_1050"/></filter><linearGradient id="d" gradientUnits="userSpaceOnUse" x1="-.29994" x2="13.8972" y1="8.90922" y2="32.5456"><stop offset="0" stop-color="#344ea6" stop-opacity=".26"/><stop offset=".505208" stop-color="#587eff" stop-opacity=".12"/><stop offset="1" stop-color="#829eff" stop-opacity=".04"/></linearGradient><linearGradient id="e" gradientUnits="userSpaceOnUse" x1="5.34248" x2="12.216" y1="13.6592" y2="24.6568"><stop offset="0" stop-color="#fff" stop-opacity=".15"/><stop offset="1" stop-color="#fff" stop-opacity=".44"/></linearGradient><g filter="url(#a)"><path d="m20 11h4" stroke="#3b68ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></g><g filter="url(#b)"><path d="m22 9v4" stroke="#3b68ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></g><circle fill="#3b68ff" r="4.60606" transform="matrix(-1 0 0 1 12.9999 6.60606)"/><g filter="url(#c)" shape-rendering="crispEdges"><path d="m4.93945 16.8946c0-.9907.6228-1.8745 1.55581-2.2077 4.20644-1.5023 8.80314-1.5023 13.00964 0 .933.3332 1.5558 1.217 1.5558 2.2077v1.7995c0 1.2171-1.078 2.152-2.2829 1.9799l-1.9594-.2799c-2.5327-.3618-5.104-.3618-7.63672 0l-1.95938.2799c-1.20487.1721-2.28285-.7628-2.28285-1.9799z" fill="url(#d)"/><path d="m5.06445 16.8946c0-.9379.5896-1.7745 1.47285-2.09 4.1792-1.4926 8.7463-1.4926 12.9255 0 .8833.3155 1.4729 1.1521 1.4729 2.09v1.7995c0 1.141-1.0106 2.0175-2.1402 1.8562l-1.9594-.2799c-2.5444-.3635-5.1276-.3635-7.6721 0l-1.95938.2799c-1.12956.1613-2.14017-.7152-2.14017-1.8562z" stroke="url(#e)" stroke-opacity=".7" stroke-width=".25"/></g></svg>


    
    </button>

    @endif


  
  <x-dialog-modal wire:model="open">

      <x-slot name="title">
          <p class="text-gray-600 font-bold">
            

          </p>

          <hr>
         
      </x-slot>

      <x-slot name="content">

        <div class="  bg-white container">

            <div class="card">
                <div class="card-header">
                        <input wire:model="search" placeholder="Buscar usuario..." class="form-control">
                </div>

                @forelse ($users as $user)
                <div wire:click="selec('{{$user->id}}')" class=" cursor-pointer flex mt-2">
                    <div>
                        <img class="w-16 h-12 object-cover mr-2" src="{{ $user->profile_photo_url  }}" alt="">
                    </div>
                    
                    <div class=" text-gray-700 mt-2">
                        <p class="text-lg font-semibold leading-5">{{$user->name}}</p>
                    </div>
                </div>

                <hr>
                    
                    
                @empty
                   
                @endforelse

            </div>

        </div>


        @if($select == 1)

        <div class="w-full  mb-4  px-3 mt-2">
            <div class="px-4 py-2  rounded-t-lg dark:bg-gray-800 border border-gray-200 rounded-lg bg-white  dark:border-gray-600">
                <textarea wire:model="mensaje" id="mensaje" rows="4" class=" w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Escribe un mensaje de saludo a {{$name_select}} ..." required></textarea>
            </div>
        </div>

       

        @endif



          


      </x-slot>

      <x-slot name="footer">
    

          <button wire:click="close" class="mr-2 inline-block rounded bg-neutral-800 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
              Cerrar
          </button>

          @if($select == 1)

          <button wire:click="save" class="mr-2 inline-block rounded bg-neutral-800 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
            Guardar
            </button>
          @endif
    


      </x-slot>

  </x-dialog-modal>

  @push('js')

  <script>
    Livewire.on('volver', function(){
        window.history.back();      
    })
    </script>

  @endpush


  {{-- Be like water. --}}
</div>
