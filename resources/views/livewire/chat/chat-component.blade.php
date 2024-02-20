<div x-data="data()" class="w-full">

    <div class="bg-gray-50 rounded-lg shadow border border-gray-200 overflow-hidden">
        
        <div class="grid grid-cols-3 divide-x divide-gray-200 w-full">
            <div class="col-span-1">

                <div class="bg-gray-100 h-16 flex justify-between px-4">
                    <div class="mt-3">
                        <img class="w-10 h-10 object-cover object-center" src="{{auth()->user()->profile_photo_url}}" alt="{{auth()->user()->name}}">

                    </div>

                    <div>
                        @livewire('chat.add-contact',['accion'=>'superior'])
                    </div>
                    

                    

                </div>

                <div class="bg-white h-14 flex items-center px-4">
                    <x-input
                    wire:model.live="search" type="text" class="w-full" placeholder="Busque un contacto o un chat...">

                    

                    </x-input>
                </div>

                <div class="overflow-auto h-[calc(90vh-4rem)] border-t border-gray-200">
                    @if($this->chats->count() == 0 || $search)
                        <div class="px-4 py-3">
                            <h2 class="text-sky-500 text-lg mb-4">Contáctos</h2>

                            <ul class="space-y-4">
                                @forelse($this->contacts as $contact)

                                    <li class="cursor-pointer" wire:click="open_chat_contact({{$contact}})">
                                        <div class="flex">
                                            <figure class="flex-shrink-0" >
                                                <img class="h-12 w-12 object-cover object-center rounded-full " src="{{$contact->user->profile_photo_url}}" alt="{{$contact->name}}">
                                            </figure>
                                            <div class="flex-1 ml-2">
                                                <p class="text-gray-600 text-ld mt-2">
                                                    {{$contact->name}}
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                @empty
                                @endforelse

                            </ul>
                            
                        </div>
                    @else
                        @foreach($this->chats as $chatItem)
                        <div wie:key="chats-{{ $chatItem->id}}" wire:click="open_chat({{$chatItem}})">
                            <div class="flex text-gray-800 items-center justify-between {{$chat && $chat->id == $chatItem->id ? 'bg-gray-100' : 'bg-white'}} cursor-pointer px-3 hover:bg-gray-100">
                                <figure>
                                    <img class="h-12 w-12 object-cover object-center rounded-full" src="{{$chatItem->image}}" alt="{{$chatItem->name}}">
                                </figure>

                                <div class="w-[calc(100%-4rem)] py-4 border-b border-gray-100">
                                    <div>
                                    
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <div class="w-1/2">
                                            <p>
                                                {{$chatItem->name}}
                                            </p>

                                        </div>
                                        <div class="w-1/2 text-right">
                                            <p class="text-xs mt-1">
                                              
                                                {{$chatItem->last_message_at->format('d-m-y h:i')}}
                                                
                                            </p>
                                        </div>

                                    </div>

                                    <p class="text-sm text-gray-700 mt-1 truncate">
                                                {{$chatItem->messages->last()->body}}
                                    </p>

                                    <div class="text-right">
                                        @if($chatItem->unread_messages)
                                            <span class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-gray-100 bg-green-600 rounded-full">
                                                {{$chatItem->unread_messages}}
                                            </span>
                                        @endif
                                    </div>

                                </div>
                            </div>

                        </div>
                        @endforeach
                    @endif
                </div>


            </div>
            <div class="col-span-2">

             
                @if($contactChat || $chat)

                <div class="bg-gray-100 h-16 flex items-center px-3">
             
                    <figure>
                        @if($chat)
                            <img class="w-10 h-10 rounded-full object-cover object-center" src="{{$chat->image}}" alt="{{$chat->name}}">
                        @else
                            <img class="w-10 h-10 rounded-full object-cover object-center" src="{{$contactChat ->user->profile_photo_url}}" alt="{{$contactChat->name}}">
                        @endif
                    </figure>

                    <div class="ml-4">
                        <p class="text-gray-800">
                        @if($chat)
                            {{$chat->name}}
                        @else
                            {{$contactChat->name}}
                        @endif
                        <!-- <p class="text-gray-600 text-xs" x-show="chat_id == typingChatId" id="online">
                            Escribiendo ...
                        </p> -->
                        </p>
                        @if($this->active)
                            <p class="text-green-500  text-xs" x-show="chat_id != typingChatId" id="online">
                                Online
                            </p>
                        @else
                            <p class="text-red-600 text-xs" x-show="chat_id != typingChatId" id="offline">
                                Offline
                            </p>
                        @endif

                    </div>

                </div>
                

                <div class="h-[calc(88vh-11rem)] px-3 py-2 overflow-auto">
                    {{-- Mensajes --}}
                    @foreach($this->messages as $message)
                        <div class="flex {{ $message->user_id == auth()->id() ? 'justify-end' : '' }} mb-2">
                            <div class="rounded px-3 py-2 {{ $message->user_id == auth()->id() ? ' bg-green-100' : ' bg-gray-200' }}">
                                <p class="text-sm text-gray-800 ">{{$message->body}}</p>
                                <p class="{{ $message->user_id == auth()->id() ? 'text-right' : '' }} text-xs text-gray-600 mt-1">
                                    {{$message->created_at->format('d-m-y h:i A')}}

                                    @if( $message->user_id == auth()->id())
                                        <i class="fas fa-check-double ml-2 {{$message->is_read ? 'text-blue-500' : 'text-gray-600'}}"></i>
                                    @endif

                                
                                </p>

                            </div>

                        </div>

                    @endforeach

                

                    <span id="final"></span>

                    

                </div>

           
                

                <form class="bg-gray-100 h-16 flex items-center px-4 " wire:submit.prevent="sendMessage()">
                    <x-input wire:model="bodyMessage" type="text" class="flex-1 text-gray-700" placeholder="Escriba un mensaje aquí">

                    </x-input>
                    <button class="flex-shrink-0 ml-4 text-2xl text-gray-600">
                        <i class="fas fa-share"></i>
                    </button>

                    
                </form>

              
                @else

              
                    <div class="w-full h-full flex justify-center items-center">
                        <div>
                            <div class="WM0_u" style="transform: scale(1); opacity: 1;">
                                <span data-testid="intro-md-beta-logo-light" data-icon="intro-md-beta-logo-light" class="IVxyB">
                                    <svg aria-label="" width="360" class="x1lliihq x1n2onr6 x5n08af" fill="currentColor" height="96" role="img" viewBox="0 0 96 96" width="96"><title></title><path d="M48 0C21.532 0 0 21.533 0 48s21.532 48 48 48 48-21.532 48-48S74.468 0 48 0Zm0 94C22.636 94 2 73.364 2 48S22.636 2 48 2s46 20.636 46 46-20.636 46-46 46Zm12.227-53.284-7.257 5.507c-.49.37-1.166.375-1.661.005l-5.373-4.031a3.453 3.453 0 0 0-4.989.921l-6.756 10.718c-.653 1.027.615 2.189 1.582 1.453l7.257-5.507a1.382 1.382 0 0 1 1.661-.005l5.373 4.031a3.453 3.453 0 0 0 4.989-.92l6.756-10.719c.653-1.027-.615-2.189-1.582-1.453ZM48 25c-12.958 0-23 9.492-23 22.31 0 6.706 2.749 12.5 7.224 16.503.375.338.602.806.62 1.31l.125 4.091a1.845 1.845 0 0 0 2.582 1.629l4.563-2.013a1.844 1.844 0 0 1 1.227-.093c2.096.579 4.331.884 6.659.884 12.958 0 23-9.491 23-22.31S60.958 25 48 25Zm0 42.621c-2.114 0-4.175-.273-6.133-.813a3.834 3.834 0 0 0-2.56.192l-4.346 1.917-.118-3.867a3.833 3.833 0 0 0-1.286-2.727C29.33 58.54 27 53.209 27 47.31 27 35.73 36.028 27 48 27s21 8.73 21 20.31-9.028 20.31-21 20.31Z"></path></svg>


                            
                                </span>
                            </div>
                            <h1 class="text-center text-gray-500 text-xl mt-4">Envía mensajes privados a tus contactos.</h1>

                            <div class="flex justify-center">
                                @livewire('chat.add-contact',['accion'=>'inferior'])

                            </div>
                        </div>
                    </div>
                @endif

                

                
            </div>

            
        </div>
    </div>



    @push('script')
    <script>
        function data(){
            return{
                chat_id : @entangle('chat_id'),
                typingChatId: null,
                
                init(){
                    Echo.private('App.Models.User.'+ {{auth()->id()}})
                    .notification((notification) => {
                        if(notification.type == 'App\\Notifications\\UserTyping'){
                            this.typingChatId = notification.chat_id;

                            setTimeout(() => {
                                this.typingChatId = null;
                     
                            },3000);

                        }

                    });

      
                }
            }
        }


        Livewire.on('scrollIntoView', function(){
            document.getElementById('final').scrollIntoView(true);        

        })
    </script>
@endpush
</div>