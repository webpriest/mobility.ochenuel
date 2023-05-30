<?php

namespace App\Http\Livewire\Front\Page\News;

use Livewire\Component;
use App\Models\NewsPost;

class Posts extends Component
{
    public $posts;

    public function mount()
    {
        $this->posts = NewsPost::latest()->get();
    }

    public function render()
    {
        return view('livewire.front.page.news.posts');
    }
}
