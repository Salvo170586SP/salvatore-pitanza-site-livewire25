<?php

namespace App\Livewire\Guest\Pages\Blog;

 
use Livewire\Component;

class Blog extends Component
{
    public function render()
    {
     
        return view('livewire.guest.pages.blog.blog')->layout('layouts.guest');
    }
}
