<x-app-layout>



    <div class="min-w-screen min-h-screen bg-gray-200 font-general  pt-2">
        <div class="py-1 px-5 bg-white flex justify-center rounded shadow-xl">
            <div class="-mx-1">
                <ul class="md:flex md:flex-wrap w-full items-center h-auto  md:h-14 ">
               
                    <li class="block relative">
                        <a href="{{route('profile.show')}}" class=" flex items-center font-semibold  text-gray-600 h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100">
                          

                            <svg class=" w-6 h-6 text-gray-600 mr-2" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="m12 4a5 5 0 1 1 -5 5 5 5 0 0 1 5-5m0-2a7 7 0 1 0 7 7 7 7 0 0 0 -7-7z"/><path d="m22 30h-2v-5a5 5 0 0 0 -5-5h-6a5 5 0 0 0 -5 5v5h-2v-5a7 7 0 0 1 7-7h6a7 7 0 0 1 7 7z"/><path d="m22 4h10v2h-10z"/><path d="m22 9h10v2h-10z"/><path d="m22 14h7v2h-7z"/><path d="m0 0h32v32h-32z" fill="none"/></svg>

                            <span class="text-xs md:text-base mx-auto">Cuenta</span>

                        </a>
                    </li>

                    <li class="block relative">
                        <a href="{{route('configuracion_privacidad')}}" class="flex font-semibold  text-gray-600  items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100">
                            <svg fill="none" class=" font-semibold w-6 h-6 text-gray-600 mr-2"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g stroke="#292d32" stroke-linecap="round" stroke-linejoin="round"><path d="m6 10v-2c0-3.31 1-6 6-6s6 2.69 6 6v2" stroke-width="1.5"/><path d="m17 22h-10c-4 0-5-1-5-5v-2c0-4 1-5 5-5h10c4 0 5 1 5 5v2c0 4-1 5-5 5z" stroke-width="1.5"/><g stroke-width="2"><path d="m15.9965 16h.0089"/><path d="m11.9955 16h.009"/><path d="m7.99451 16h.00898"/></g></g></svg>

                            <span class="text-xs md:text-base mx-auto">  Privacidad y seguridad</span>
                        </a>
                    </li>

                    <li class="block relative">
                        <a href="{{route('configuracion_pagos')}}" class="flex font-semibold  text-gray-600  items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100">
                            <svg fill="none" class=" w-6 h-6 text-gray-600 mr-2" viewBox="0 0 16 16"  xmlns="http://www.w3.org/2000/svg"><g fill="#212121"><path d="m10.5 10c-.2761 0-.5.2239-.5.5s.2239.5.5.5h2c.2761 0 .5-.2239.5-.5s-.2239-.5-.5-.5z"/><path d="m1 5c0-1.10457.89543-2 2-2h10c1.1046 0 2 .89543 2 2v6c0 1.1046-.8954 2-2 2h-10c-1.10457 0-2-.8954-2-2zm13 0c0-.55228-.4477-1-1-1h-10c-.55228 0-1 .44772-1 1v1h12zm-12 6c0 .5523.44772 1 1 1h10c.5523 0 1-.4477 1-1v-4h-12z"/></g></svg>

                            <span class="text-xs md:text-base mx-auto"> Métodos de pago</span>
                        </a>
                    </li>

                    <li class="block relative">
                        <a href="{{route('configuracion_pagos')}}" class="flex font-semibold  text-gray-600  items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100">
                            <svg fill="none"  viewBox="0 0 24 24" class=" w-6 h-6 text-gray-600 mr-2" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="m15.2929 3.29289c.3905-.39052 1.0237-.39052 1.4142 0l5.6586 5.65858c.7559.75596.2205 2.04853-.8485 2.04853h-19.5172c-.55228 0-1-.4477-1-1 0-.55228.44772-1 1-1h17.5858l-4.2929-4.29289c-.3905-.39053-.3905-1.02369 0-1.41422zm-10.87869 11.70711h17.58579c.5523 0 1-.4477 1-1s-.4477-1-1-1h-19.51716c-1.06908 0-1.604485 1.2926-.84853 2.0485l5.65858 5.6586c.39053.3905 1.02369.3905 1.41422 0 .39052-.3905.39052-1.0237 0-1.4142z" fill="#0f0f0f" fill-rule="evenodd"/></svg>

                            <span class="text-xs md:text-base mx-auto"> Transacciones</span>
                        </a>
                    </li>

                </ul>

                
            </div>
        </div>

        <main class="pt-5">
            {{ $slot }}
        </main>

        
    </div>

    





</x-app-layout>