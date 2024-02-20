<div>

  
    @if ($accion == 'create')

        <a wire:click="$set('open',true)" class="cursor-pointer  hover:bg-blue-500 font-medium tracking-wider rounded-full  duration-300">
            
            <svg  height="32" viewBox="0 0 24 24" width="32" xmlns="http://www.w3.org/2000/svg"><path d="m13 12h4.5c.2761424 0 .5.2238576.5.5s-.2238576.5-.5.5h-4.5v4.5c0 .2761424-.2238576.5-.5.5s-.5-.2238576-.5-.5v-4.5h-4.5c-.27614237 0-.5-.2238576-.5-.5s.22385763-.5.5-.5h4.5v-4.5c0-.27614237.2238576-.5.5-.5s.5.22385763.5.5zm-7.5-9c.27614237 0 .5.22385763.5.5s-.22385763.5-.5.5c-.82842712 0-1.5.67157288-1.5 1.5 0 .27614237-.22385763.5-.5.5s-.5-.22385763-.5-.5c0-1.38071187 1.11928813-2.5 2.5-2.5zm14 1c-.2761424 0-.5-.22385763-.5-.5s.2238576-.5.5-.5c1.3807119 0 2.5 1.11928813 2.5 2.5v.06155281c0 .27614238-.2238576.5-.5.5s-.5-.22385762-.5-.5v-.06155281c0-.82842712-.6715729-1.5-1.5-1.5zm-16.5 3.5c0-.27614237.22385763-.5.5-.5s.5.22385763.5.5v1c0 .27614237-.22385763.5-.5.5s-.5-.22385763-.5-.5zm0 3c0-.2761424.22385763-.5.5-.5s.5.2238576.5.5v1c0 .2761424-.22385763.5-.5.5s-.5-.2238576-.5-.5zm0 3c0-.2761424.22385763-.5.5-.5s.5.2238576.5.5v1c0 .2761424-.22385763.5-.5.5s-.5-.2238576-.5-.5zm0 3c0-.2761424.22385763-.5.5-.5s.5.2238576.5.5v1c0 .2761424-.22385763.5-.5.5s-.5-.2238576-.5-.5zm18-9c0-.27614237.2238576-.5.5-.5s.5.22385763.5.5v1c0 .27614237-.2238576.5-.5.5s-.5-.22385763-.5-.5zm0 3c0-.2761424.2238576-.5.5-.5s.5.2238576.5.5v1c0 .2761424-.2238576.5-.5.5s-.5-.2238576-.5-.5zm0 3c0-.2761424.2238576-.5.5-.5s.5.2238576.5.5v1c0 .2761424-.2238576.5-.5.5s-.5-.2238576-.5-.5zm0 3c0-.2761424.2238576-.5.5-.5s.5.2238576.5.5v1c0 .2761424-.2238576.5-.5.5s-.5-.2238576-.5-.5zm-18 3c0-.2761424.22385763-.5.5-.5s.5.2238576.5.5c0 .8284271.67157288 1.5 1.5 1.5.27614237 0 .5.2238576.5.5s-.22385763.5-.5.5c-1.38071187 0-2.5-1.1192881-2.5-2.5zm4.5-15.5c-.27614237 0-.5-.22385763-.5-.5s.22385763-.5.5-.5h1c.27614237 0 .5.22385763.5.5s-.22385763.5-.5.5zm3 0c-.2761424 0-.5-.22385763-.5-.5s.2238576-.5.5-.5h1c.2761424 0 .5.22385763.5.5s-.2238576.5-.5.5zm3 0c-.2761424 0-.5-.22385763-.5-.5s.2238576-.5.5-.5h1c.2761424 0 .5.22385763.5.5s-.2238576.5-.5.5zm3 0c-.2761424 0-.5-.22385763-.5-.5s.2238576-.5.5-.5h1c.2761424 0 .5.22385763.5.5s-.2238576.5-.5.5zm-9 18c-.27614237 0-.5-.2238576-.5-.5s.22385763-.5.5-.5h1c.27614237 0 .5.2238576.5.5s-.22385763.5-.5.5zm3 0c-.2761424 0-.5-.2238576-.5-.5s.2238576-.5.5-.5h1c.2761424 0 .5.2238576.5.5s-.2238576.5-.5.5zm3 0c-.2761424 0-.5-.2238576-.5-.5s.2238576-.5.5-.5h1c.2761424 0 .5.2238576.5.5s-.2238576.5-.5.5zm3 0c-.2761424 0-.5-.2238576-.5-.5s.2238576-.5.5-.5h1c.2761424 0 .5.2238576.5.5s-.2238576.5-.5.5zm3 0c-.2761424 0-.5-.2238576-.5-.5s.2238576-.5.5-.5c.8284271 0 1.5-.6715729 1.5-1.5 0-.2761424.2238576-.5.5-.5s.5.2238576.5.5c0 1.3807119-1.1192881 2.5-2.5 2.5z"/></svg>

        </a>

    @else


        <a wire:click="$set('open',true)" class="cursor-pointer  hover:bg-blue-500 font-medium tracking-wider rounded-full  duration-300">
            <svg fill="none" height="28" stroke="#000" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" width="28" xmlns="http://www.w3.org/2000/svg">&lt;!--! Atomicons Free 1.00 by @atisalab License - https://atomicons.com/license/ (Icons: CC BY 4.0) Copyright 2021 Atomicons --&gt;<path d="m20.41 2.41 1.18 1.18a2 2 0 0 1 0 2.82l-10.3 10.3a1 1 0 0 1 -.7.29h-3.59v-3.59a1 1 0 0 1 .29-.7l10.3-10.3a2 2 0 0 1 2.82 0z"/><path d="m21 14v6a2 2 0 0 1 -2 2h-15a2 2 0 0 1 -2-2v-15a2 2 0 0 1 2-2h6"/></svg>
        </a>




    @endif

    
    <x-dialog-modal wire:model="open">

        <x-slot name="title">
            Agregar plan
        </x-slot>

        <x-slot name="content">

      <hr>

            <div class="flex justify-between w-full mt-4  rounded-lg dark:bg-gray-700 dark:border-gray-600">

                <div class="w-1/2">
                    <x-label value="Plan" />

                    <select @if($accion == 'edit') disabled="disabled" @endif wire:model.defer="plan_id" id="plan_id" class=" block w-full bg-gray-50 border border-gray-200 text-gray-400 py-1 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <option value="" selected>{{__('messages.Seleccione una opción')}}</option>
                            @foreach ($planes as $plan)
                                <option value="{{$plan->id}}">{{$plan->name}}</option>
                            @endforeach
                    </select>
                    <x-input-error for="plan_id" />

                </div>

                <div class="w-1/2 ml-2">

                    <x-label value="Precio" />

                    <div class="relative mb-2 mt-2">

                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" enable-background="new 0 0 32 32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="m14.209 31.36c-.096 0-.187-.038-.254-.105l-13.209-13.213c-.141-.141-.141-.369 0-.51l16.79-16.786c.141-.141.369-.141.51 0l6.352 6.35 3.348-3.35c.141-.141.369-.14.51 0 .141.141.141.369 0 .509l-3.348 3.351 6.348 6.346c.067.067.105.159.105.254s-.038.187-.105.254l-16.793 16.795c-.067.067-.158.105-.254.105zm-12.7-13.573 12.7 12.704 16.282-16.286-6.093-6.091-.99.991c.661.908.582 2.191-.236 3.009-.878.877-2.407.879-3.287 0-.905-.906-.905-2.38 0-3.286.794-.793 2.13-.885 3.016-.233l.988-.99-6.098-6.096zm20.019-8.919c-.428 0-.831.167-1.134.47-.303.302-.47.705-.47 1.134 0 .428.167.831.47 1.134.606.606 1.663.604 2.268 0 .303-.303.47-.706.47-1.134 0-.305-.084-.596-.241-.848l-1.104 1.105c-.141.141-.369.14-.51 0-.141-.141-.141-.369 0-.509l1.105-1.106c-.253-.161-.547-.246-.854-.246zm-3.278 5.397-.51-.509-.929.929c-1.025-.792-2.446-.778-3.319.095-.467.466-.707 1.101-.677 1.787.024.556.233 1.086.581 1.534l-2.443 2.443c-.519-.734-.5-1.706.096-2.302l-.509-.51c-.467.467-.707 1.102-.677 1.787.025.556.234 1.086.581 1.534l-.965.965.509.51.968-.968c.493.38 1.072.584 1.644.584.618 0 1.22-.225 1.674-.678.874-.874.887-2.294.095-3.32l2.445-2.445c.224.315.354.68.371 1.057.021.481-.145.924-.467 1.246l.509.51c.467-.467.707-1.102.677-1.787-.024-.556-.234-1.086-.581-1.534zm-4.715 2.27c-.021-.481.145-.924.466-1.246.322-.322.769-.494 1.246-.466.377.016.741.147 1.056.37l-2.398 2.398c-.223-.314-.354-.679-.37-1.056zm.229 4.422c-.596.596-1.567.615-2.302.096l2.397-2.397c.52.734.5 1.706-.095 2.301z"/><path d="m0 0h32v32h-32z" fill="none"/></svg>
                        </div>
                        <input id="precio" type="precio" wire:model.defer="precio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com">
                    </div>
                </div>
            </div>

        </x-slot>

        <x-slot name="footer">

            <button wire:click="close" wire:loading.attr="disabled" type="button" class="mr-2 inline-block rounded bg-dark px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
           
                Cerrar
             </button>
      

            <button wire:click="update" class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                Agregar
            </button>


            

        </x-slot>

    </x-dialog-modal>
    {{-- Be like water. --}}

</div>
