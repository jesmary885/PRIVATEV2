<div class="relative w-4/5 " x-data>
    
    <form action="{{ route('search') }}" autocomplete="off">

        <x-input name="name" wire:model="search" type="text" class="w-full placeholder-gray-300" placeholder="{{__('messages.Estas buscando un usuario?')}}" />

        <button class="absolute top-0 right-0 w-12 h-full bg-gray-400 flex items-center justify-center rounded-r-md">
            <x-search size="35" color="white" />
        </button>

    </form>

    <div class="absolute w-full mt-1 hidden" :class="{ 'hidden' : !$wire.open }" @click.away="$wire.open = false">
        <div class="bg-white rounded-lg shadow-lg">
            <div class="px-4  py-3 space-y-1">
                @forelse ($users as $user)
                    <a href="#" class="flex">
                        <img class="w-16 h-12 object-cover" src="{{ $user->profile_photo_url  }}" alt="">
                        <div class="ml-4 text-gray-700">
                            <p class="text-lg font-semibold leading-5">{{$user->name}}</p>
                         
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