<div>
    <div class="bg-white rounded-lg shadow-lg mb-6 mt-1">
        <div class="px-6 py-2 flex justify-between items-center">
            <h2 class="font-semibold text-gray-700 font-subtitulo"> </h2>

            <div class="hidden md:block grid grid-cols-2 border border-gray-200 divide-x divide-gray-200 text-gray-500">
                <i class="fas fa-border-all p-3 cursor-pointer {{ $view == 'grid' ? 'text-blue-600' : ''}}" wire:click="$set('view', 'grid')"></i>
                <i class="fas fa-th-list p-3 cursor-pointer {{ $view == 'list' ? 'text-blue-600' : ''}}" wire:click="$set('view', 'list')"></i>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 container">

        <aside >

            <h3 class="font-semibold text-center mt-4 mb-2 font-subtitulo ">Generos</h3>
            <ul class="divide-y divide-gray-200">
                @foreach ($generos as $genero)
                    <li class="py-2 text-sm">
                        <a class="cursor-pointer hover:text-blue-600 capitalize {{ $gener == $genero->name ? 'text-blue-600 font-semibold' : ''}}"
                            wire:click="$set('gener', '{{$genero->id}}')"
                        >
                            {{$genero->name}}
                        </a>
                    </li>
                @endforeach
            </ul>

            <x-button class="mt-4" wire:click="limpiar">
                Eliminar filtros
            </x-button>
        </aside>

        <div class="md:col-span-2 lg:col-span-4">
            @if ($view == 'grid')

                <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse ($creators as $creator)
                        <li class="bg-white rounded-lg shadow">
                            <article>
                                <a href="{{route('creadores_select.index',$creator)}}">
                                <div class="w-full bg-white rounded-lg sahdow-lg overflow-hidden flex flex-col justify-center items-center">
                                    <div>
                                        <img class="object-center object-cover w-72 h-64  " src="{{ $creator->user->profile_photo_url}}" alt="photo">
                                    </div>
                                    <div class="text-center py-8 sm:py-6">
                                        <p class="text-xl text-gray-700 font-bold mb-2">{{ $creator->user->name}}</p>
                                        <p class="text-base text-gray-400 font-normal">{{ $creator->user->pais->name ?? '-'}}</p>
                                    </div>
                                </div>

                            </a>
                          
                            </article>
                        </li>

                    @empty
                        <li class="md:col-span-2 lg:col-span-4">
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                <strong class="font-bold">Upss!</strong>
                                <span class="block sm:inline">No existe ningún creador con ese filtro.</span>
                            </div>
                        </li>
                    @endforelse
                </ul>

            @else
                <ul>
                    @forelse ($creators as $creator)
                        
                        <x-creator-list :creator="$creator" />

                    @empty

                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Upss!</strong>
                            <span class="block sm:inline">No existe ningún creador con ese filtro.</span>
                        </div>

                    @endforelse
                </ul>
            @endif

            <div class="mt-4">
                {{$creators->links()}}
            </div>
        </div>

    </div>

    @push('script')

 
    <script>
        document.addEventListener('livewire:initialized', () => {
            @this.on('volver', (event) => {
                    window.location.href = "{{ route('creadores.index')}}";
                });
            });
    </script>



    @endpush
</div>