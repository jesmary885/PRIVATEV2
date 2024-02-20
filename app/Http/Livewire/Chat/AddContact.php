<?php

namespace App\Http\Livewire\Chat;

use App\Models\Chat;
use App\Models\Contact;
use App\Models\User;
use Livewire\Component;

class AddContact extends Component
{

    protected $listeners = ['render' => 'render'];

    public $accion, $open = false, $search, $usuario_select, $select, $mensaje, $name_select;

    public function mount($accion){
        $this->select=0;

        $this->accion = $accion;
    }

    public function close(){
        $this->open = false;

      
    }

    public function render()
    {

        if ($this->search) {

            $users = User::where('name', 'LIKE' ,'%' . $this->search . '%')
                ->take(20)
                ->get();
         
        }
         else {
            $users = [];
        }

        return view('livewire.chat.add-contact',compact('users'));
    }

    public function selec($usuario_id){

        //  dd('s');
  
          $this->usuario_select = $usuario_id;
          $this->name_select = User::where('id',$usuario_id)->first()->username;
          $this->select=1;
          $this->reset(['search']);
  
          $this->emit('render');
  
      }
  
      public function save(){
  
  
          $contc = Contact::where('user_id',auth()->id())
              ->where('contact_id',$this->usuario_select )
              ->first();
          
          if(!$contc){
  
              $name_contact = User::where('id',$this->usuario_select )->first()->username;
  
              $contact = new Contact();
              $contact->name = $name_contact;
              $contact->user_id = auth()->id();
              $contact->contact_id = $this->usuario_select ;
              $contact->save();
  
              $chat = Chat::create();
            //  $chat_id = $this->chat->id;
              $chat->users()->attach([auth()->user()->id,$this->usuario_select]);
  
              $chat->messages()->create([
                  'body' => $this->mensaje,
                  'user_id' => auth()->user()->id
              ]);
  
          //  Notification::send($this->users_notifications, new \App\Notifications\NewMessage());
  
              $this->reset(['open']);
  
              return redirect()->to('/chat-conver/'.$contact);
  
          }
  
          else{
  
              
                  $chat= auth()->user()->chats()
                  ->whereHas('users',function($query) use ($contc){
                      $query->where('user_id', $contc->contact_id);
                  })
                  ->has('users',2)
                  ->first();
  
                  if($chat){
                      $chat->messages()->create([
                          'body' => $this->mensaje,
                          'user_id' => auth()->user()->id
                      ]);
                  }
                  else{
                      $chat = Chat::create();
                      //$chat_id = $this->chat->id;
                      $chat->users()->attach([auth()->user()->id,$this->usuario_select]);
  
                      $chat->messages()->create([
                          'body' => $this->mensaje,
                          'user_id' => auth()->user()->id
                      ]);
                  }
              
  
  
             
  
              
  
          //  Notification::send($this->users_notifications, new \App\Notifications\NewMessage());
  
              $this->reset(['open']);

              $this->emit('volver');
  
              //$this->dispatch('chat.open_chat',$contc);
  
             // return redirect()->to('/chat-conver/'.$contc->id);
          }
  
          
  
  
  
  
          
      }
}
