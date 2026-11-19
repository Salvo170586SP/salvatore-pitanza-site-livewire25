<?php

namespace App\Livewire\Guest\Pages\Blog;

 
use Livewire\Component;

class BlogArticle extends Component
{
    public function render()
    {
     
        return view('livewire.guest.pages.blog.blog-article')->layout('layouts.guest');
    }
}
