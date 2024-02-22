<?php

namespace App\Livewire\Practicas;

use Livewire\Component;

class CreatePost extends Component
{
    public $title ='Contador';


    public function render()
    {
        return view('livewire.create-post');
    }
}
