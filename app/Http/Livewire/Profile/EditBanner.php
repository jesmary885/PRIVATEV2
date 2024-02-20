<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;

class EditBanner extends Component
{
    public $open = false;

    public function render()
    {
        return view('livewire.profile.edit-banner');
    }



    public function close(){

        $this->open = false;

    }
}
