<div class="sticky z-10 top-0">

    <style>
    @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
    
    .inset-l-full {
        left: 100%;
    }
    </style>
    <div class="font-general">
        <div class="py-3 px-5 bg-white rounded shadow-sm">
            <div class="px-3">
                <ul class="flex w-full flex-wrap items-center h-12 container mt-2">
    
                    <li class="flex-1 block relative">
                        <div class="flex">
    
                            <a href="{{route('home')}}" class="rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100  hover:bg-gray-100 mr-2">
                                <img src="{{URL::asset('imagen/Private Social 4.png')}}" class="block md:-mt-6 h-14 w-28 md:h-16 md:w-36 ">
                                
                            
                            </a>
        
                            <div class="hidden lg:block  ml-4 w-2/5 -mt-2">
    
                                @livewire('buscar')
    
                            </div>
                        </div>
    
                    </li>
    
    
                    <li class="hidden md:block relative mr-0 md:mr-2 -mt-3">
                        <a href="{{route('home')}}" class=" h-10 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100  hover:bg-gray-100">
                                <div class="p-2 rounded cursor-pointer hover:no-underline transition-colors duration-100  hover:bg-gray-100">
    
                                   
                                    <svg class="w-6 h-6 mx-auto text-gray-600" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg"><path d="m280.37 148.26-184.37 151.85v163.89a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16v-95.71a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05l112.02.31a16 16 0 0 0 16-16v-164l-184.33-151.74a12.19 12.19 0 0 0 -15.3 0zm291.23 103.21-83.6-68.91v-138.51a12 12 0 0 0 -12-12h-56a12 12 0 0 0 -12 12v72.61l-89.53-73.66a48 48 0 0 0 -61 0l-253.13 208.47a12 12 0 0 0 -1.6 16.9l25.5 31a12 12 0 0 0 16.91 1.63l235.22-193.74a12.19 12.19 0 0 1 15.3 0l235.23 193.74a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0 -1.7-16.93z"/></svg>
                                    <p class="mx-auto hidden md:block md:mx-auto text-black text-sm">Inicio</p>
                                </div>
                        </a>
                    </li>
    
    
    
                    <li class=" hidden md:block relative mr-0 md:mr-2 -mt-3 " x-data="{showChildren:false}" @click.away="showChildren=false">
                        <a href="#" class="h-10 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100  hover:bg-gray-100" @click.prevent="showChildren=!showChildren">
                            <div class="p-2 rounded cursor-pointer hover:no-underline transition-colors duration-100  hover:bg-gray-100">
                               
                                <svg class=" w-6 h-6 mx-auto text-gray-500" fill="none"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" fill="#000" r="10"/><g stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m2 12h20"/><path d="m12 23s5-5.4444 5-11c0-5.55556-5-11-5-11"/><path d="m12 23s-5-5.4444-5-11c0-5.55556 5-11 5-11"/></g></svg>
                                <p class="mx-auto hidden md:block md:mx-auto text-black text-sm">Idiomas</p>
               
    
                            </div>
                            
                        </a>
                        <div class="bg-white shadow-md rounded border border-gray-300 text-sm absolute top-auto left-0 min-w-full w-56 z-30 mt-1" x-show="showChildren" x-transition:enter="transition ease duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease duration-300 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                            <span class="absolute top-0 left-0 w-3 h-3 bg-white border transform rotate-45 -mt-1 ml-6"></span>
                            <div class="bg-white rounded w-full relative z-10 py-1">
                                <ul class="list-reset">
                                    <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                        <a href="#" class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer"> <span class="flex-1">Español</span> </a>
                                    </li>
                                    <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                        <a href="#" class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer"> <span class="flex-1">English</span> </a>
                                    </li>
           
                                 
                               
                                </ul>
                            </div>
                        </div>
                    </li>
    
                    <li class="hidden md:block relative mr-0 md:mr-2 -mt-3">
                        <a href="{{route('creadores.index')}}" class=" h-10 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100  hover:bg-gray-100">
                                <div class="p-2 rounded cursor-pointer hover:no-underline transition-colors duration-100  hover:bg-gray-100">
                                    
                          
                                        
    
                                        <svg class=" w-6 h-6 mx-auto text-black" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="m8.49578666 8c.82842712 0 1.5.67157288 1.5 1.5l-.00078253.7483651c.10287167 1.8365588-1.31166527 2.752445-3.93481052 2.752445-2.61467435 0-4.06019361-.9039022-4.06019361-2.726236v-.7745741c0-.82842712.67157288-1.5 1.5-1.5zm4.00060194 0c.8284271 0 1.5.67157288 1.5 1.5l-.0007513.5265728c.0904148 1.6474623-1.1594628 2.4734272-3.4440428 2.4734272-.3101233 0-.60166782-.0151086-.87393931-.0453403.53670921-.4956236.82381451-1.1682013.82283521-2.0180908l-.0062688-.2161666.0015651-.7204023c0-.59757013-.2620738-1.13392965-.67755473-1.50041196zm-6.4963886-6c1.38093559 0 2.50040506 1.11946948 2.50040506 2.50040506 0 1.38093559-1.11946947 2.50040507-2.50040506 2.50040507s-2.50040506-1.11946948-2.50040506-2.50040507c0-1.38093558 1.11946947-2.50040506 2.50040506-2.50040506zm5 1c1.1045695 0 2 .8954305 2 2s-.8954305 2-2 2-2-.8954305-2-2 .8954305-2 2-2z" fill="#212121"/></svg>
                                      
                                    
                                        <p class="mx-auto hidden md:block md:mx-auto text-gray-600 text-sm">Creadores</p>
                                </div>
                        </a>
                    </li>
    
                    <li class="hidden md:block relative mr-0 md:mr-2 -mt-3">
                        <a href="{{route('chat.index')}}" class=" h-10 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100  hover:bg-gray-100">
                                <div class="p-2 rounded cursor-pointer hover:no-underline transition-colors duration-100  hover:bg-gray-100">
    
                                
    
                                    <svg class=" w-6 h-6 mx-auto text-black"  fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2 10c0-4.005 3.732-7 8-7s8 2.995 8 7-3.732 7-8 7a8.973 8.973 0 01-3.228-.592l-3.614.58a1 1 0 01-1.113-1.286l.8-2.563A6.285 6.285 0 012 10zm8 8.167c-.942 0-1.855-.123-2.716-.351C8.736 19.763 11.257 21 14 21c1.145 0 2.237-.21 3.228-.592l3.614.58a1 1 0 001.113-1.286l-.8-2.563A6.285 6.285 0 0022 14c0-2.172-1.098-4.047-2.783-5.308.076.424.116.86.116 1.308 0 4.673-4.353 8.167-9.333 8.167z" fill="currentColor"/></svg>
                                        <p class="mx-auto hidden md:block md:mx-auto text-gray-600 text-sm">Chat</p>
                                </div>
                        </a>
                    </li>
    
                    <li class="hidden md:block relative mr-0 md:mr-2 -mt-3">
                        <a href="#" class=" h-10 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100  hover:bg-gray-100">
                                <div class="p-2 rounded cursor-pointer hover:no-underline transition-colors duration-100  hover:bg-gray-100">
    
                            
    
                                    <svg class=" w-6 h-6 mx-auto text-black"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M4 8a6 6 0 0 1 4.03-5.67 2 2 0 1 1 3.95 0A6 6 0 0 1 16 8v6l3 2v1H1v-1l3-2V8zm8 10a2 2 0 1 1-4 0h4z"/></svg>
                                        <p class="mx-auto hidden md:block md:mx-auto  text-gray-600 text-sm">Notificaciones</p>
                                </div>
                        </a>
                    </li>
    
                    <li class="hidden md:block relative -mt-8" x-data="{showChildren:false}" @click.away="showChildren=false">
                        <div class="mx-2 relative">
    
                            <div class="flex">
    
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                            
                                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                <img class="h-8 w-8 md:h-12 md:w-12 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                            </button>
                                        
                                        </x-slot>
                    
                                        <x-slot name="content">

                                            @if(auth()->user()->roles->first()->id == 1)
                                                <x-dropdown-link class="flex" href="{{ route('home_admin') }}">
                
                                                    <svg height="20" class=" mr-3"  viewBox="0 0 32 32" width="20" xmlns="http://www.w3.org/2000/svg"><path d="m17.599 3.738v2.598l.8.207c.905.234 1.768.597 2.566 1.081l.715.434 1.86-1.86 2.262 2.262-1.888 1.888.407.708c.451.785.788 1.635 1.002 2.527l.196.817h2.744v3.199h-2.806l-.216.782c-.233.844-.583 1.654-1.04 2.406l-.434.716 2.036 2.035-2.262 2.262-2.064-2.064-.707.407c-.734.422-1.531.745-2.368.961l-.8.206v2.951h-3.199v-2.951l-.8-.206c-.837-.216-1.634-.539-2.368-.961l-.708-.407-2.064 2.064-2.262-2.262 2.036-2.035-.434-.716c-.457-.753-.807-1.562-1.04-2.406l-.216-.782h-2.806v-3.199h2.744l.196-.817c.213-.891.551-1.742 1.002-2.527l.407-.708-1.888-1.888 2.262-2.262 1.86 1.86.715-.434c.798-.484 1.661-.848 2.566-1.081l.8-.207v-2.598h3.199zm-1.599 17.061c2.646 0 4.798-2.153 4.798-4.799s-2.152-4.799-4.798-4.799-4.798 2.153-4.798 4.799 2.152 4.799 4.798 4.799zm2.666-18.127h-5.331v2.839c-1.018.263-1.975.67-2.852 1.202l-2.022-2.022-3.769 3.77 2.065 2.065c-.498.867-.875 1.81-1.114 2.809h-2.97v5.331h3.06c.263.953.655 1.85 1.156 2.676l-2.198 2.198 3.769 3.77 2.241-2.241c.816.469 1.7.828 2.633 1.069v3.191h5.331v-3.191c.933-.241 1.817-.6 2.633-1.069l2.241 2.241 3.769-3.77-2.198-2.198c.501-.826.893-1.723 1.156-2.676h3.06v-5.331h-2.97c-.239-.999-.616-1.941-1.114-2.809l2.065-2.065-3.769-3.77-2.022 2.022c-.877-.532-1.834-.939-2.852-1.202v-2.839zm-2.666 17.061c-2.062 0-3.732-1.671-3.732-3.733s1.67-3.732 3.732-3.732 3.732 1.671 3.732 3.732c0 2.062-1.67 3.733-3.732 3.733z"/></svg> 
                                                    Administración
                                                </x-jet-dropdown-link>

                                            @endif
                                        
                    
                                            <x-dropdown-link class="flex" href="{{ route('profile_user') }}">
            
                                                <svg fill="none" class=" mr-3" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><g stroke="#292d32" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="m14.9405 8.03998c.22.44.35.94.35 1.47-.01 1.77002-1.4 3.22002-3.16 3.27002-.07-.01-.16-.01-.24 0-1.76-.06-3.16003-1.5-3.16003-3.27002 0-1.81 1.46003-3.28 3.28003-3.28"/><path d="m18.7398 19.3801c-1.78 1.63-4.14 2.62-6.74 2.62-2.60003 0-4.96003-.99-6.74003-2.62.1-.94.7-1.86 1.77-2.58 2.74-1.82 7.22003-1.82 9.94003 0 1.07.72 1.67 1.64 1.77 2.58z"/><path d="m4 6c-1.25 1.67-2 3.75-2 6 0 5.52 4.48 10 10 10s10-4.48 10-10-4.48-10-10-10c-1.43 0-2.8.3-4.03.85"/></g></svg>
                                                Perfil
                                            </x-jet-dropdown-link>
            
                                            <x-dropdown-link class="flex" href="{{ route('profile.show') }}">
            
                                                <svg height="20" class=" mr-3"  viewBox="0 0 32 32" width="20" xmlns="http://www.w3.org/2000/svg"><path d="m17.599 3.738v2.598l.8.207c.905.234 1.768.597 2.566 1.081l.715.434 1.86-1.86 2.262 2.262-1.888 1.888.407.708c.451.785.788 1.635 1.002 2.527l.196.817h2.744v3.199h-2.806l-.216.782c-.233.844-.583 1.654-1.04 2.406l-.434.716 2.036 2.035-2.262 2.262-2.064-2.064-.707.407c-.734.422-1.531.745-2.368.961l-.8.206v2.951h-3.199v-2.951l-.8-.206c-.837-.216-1.634-.539-2.368-.961l-.708-.407-2.064 2.064-2.262-2.262 2.036-2.035-.434-.716c-.457-.753-.807-1.562-1.04-2.406l-.216-.782h-2.806v-3.199h2.744l.196-.817c.213-.891.551-1.742 1.002-2.527l.407-.708-1.888-1.888 2.262-2.262 1.86 1.86.715-.434c.798-.484 1.661-.848 2.566-1.081l.8-.207v-2.598h3.199zm-1.599 17.061c2.646 0 4.798-2.153 4.798-4.799s-2.152-4.799-4.798-4.799-4.798 2.153-4.798 4.799 2.152 4.799 4.798 4.799zm2.666-18.127h-5.331v2.839c-1.018.263-1.975.67-2.852 1.202l-2.022-2.022-3.769 3.77 2.065 2.065c-.498.867-.875 1.81-1.114 2.809h-2.97v5.331h3.06c.263.953.655 1.85 1.156 2.676l-2.198 2.198 3.769 3.77 2.241-2.241c.816.469 1.7.828 2.633 1.069v3.191h5.331v-3.191c.933-.241 1.817-.6 2.633-1.069l2.241 2.241 3.769-3.77-2.198-2.198c.501-.826.893-1.723 1.156-2.676h3.06v-5.331h-2.97c-.239-.999-.616-1.941-1.114-2.809l2.065-2.065-3.769-3.77-2.022 2.022c-.877-.532-1.834-.939-2.852-1.202v-2.839zm-2.666 17.061c-2.062 0-3.732-1.671-3.732-3.733s1.67-3.732 3.732-3.732 3.732 1.671 3.732 3.732c0 2.062-1.67 3.733-3.732 3.733z"/></svg> 
                                                Configuraciones
                                            </x-jet-dropdown-link>
            
                                            <div class="border-t border-gray-100"></div>
            
                                            <x-dropdown-link class="flex" href="{{ route('creadores.start_index') }}">
            
                                                <svg fill="none" class=" mr-3" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><g stroke="#292d32" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="m9.5 13.75c0 .97.75 1.75 1.67 1.75h1.88c.8 0 1.45-.68 1.45-1.53 0-.91-.4-1.24-.99-1.45l-3.01-1.05c-.59-.21-.98999-.53-.98999-1.45 0-.84001.64999-1.53001 1.44999-1.53001h1.88c.92 0 1.67.78 1.67 1.75001"/><path d="m12 7.5v9"/><path d="m22 12c0 5.52-4.48 10-10 10s-10-4.48-10-10 4.48-10 10-10"/><path d="m22 6v-4h-4"/><path d="m17 7 5-5"/></g></svg> 
                                                Iniciar como creador
                                            </x-jet-dropdown-link>
                    
                    
                                            <div class="border-t border-gray-100"></div>
                    
                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                    
                                                <x-dropdown-link class="flex" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                this.closest('form').submit();">
            
                                                        <svg viewBox="0 0 128 128" class=" mr-3" width="20" height="20"  xmlns="http://www.w3.org/2000/svg"><path d="m13.076 97.083a1.75 1.75 0 0 0 1.75-1.75v-28.666a1.75 1.75 0 0 0 -3.5 0v28.666a1.75 1.75 0 0 0 1.75 1.75z"/><path d="m122.38 64.97c.027-.041.046-.085.069-.128a1.037 1.037 0 0 0 .146-.348c.015-.051.035-.1.045-.152a1.755 1.755 0 0 0 0-.685c-.01-.053-.03-.1-.045-.152a1.733 1.733 0 0 0 -.054-.174 1.692 1.692 0 0 0 -.092-.174c-.023-.042-.042-.086-.069-.127a1.75 1.75 0 0 0 -.22-.269l-12.509-12.509a1.75 1.75 0 0 0 -2.475 2.475l9.524 9.523h-53.276a1.75 1.75 0 0 0 0 3.5h53.276l-9.523 9.523a1.75 1.75 0 1 0 2.475 2.475l12.508-12.509a1.75 1.75 0 0 0 .22-.269z"/><path d="m95.424 72.25a1.75 1.75 0 0 0 -1.75 1.75v36.9h-45.041v-93.8h45.041v36.9a1.75 1.75 0 1 0 3.5 0v-38.65a1.75 1.75 0 0 0 -1.75-1.75h-46.791v-7.1a1.75 1.75 0 0 0 -2.461-1.6l-39.807 17.693a1.751 1.751 0 0 0 -1.039 1.6v79.615a1.751 1.751 0 0 0 1.039 1.6l39.807 17.692a1.75 1.75 0 0 0 2.461-1.6v-7.1h46.791a1.75 1.75 0 0 0 1.75-1.75v-38.65a1.75 1.75 0 0 0 -1.75-1.75zm-50.291 46.558-36.307-16.138v-77.34l36.307-16.138z"/></svg>
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        </x-slot>
                                </x-dropdown>
            
            
                            </div>
                        </div>
                        
                    </li>
    
              
    
                    
    
    
                </ul>
            </div>
        </div>
    </div>
    
    @if($is_c == 1)
    <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
        <div>
            <a title="Buy me a beer" href="{{route('profile_user.add_public')}}" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                <img class="object-cover object-center w-full h-full rounded-full" src="{{URL::asset('imagen/anadir.png')}}"/>
            </a>
        </div>
    </div>
    @endif
       
    
    </div>
