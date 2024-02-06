<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public $title ='Titulo Post....';


    public function render()
    {
        return view('livewire.create-post');
    }
}
