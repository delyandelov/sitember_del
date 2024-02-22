<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\PostCategory;
use Livewire\Component;
use Livewire\WithPagination;

class BlogComponent extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        $posts = Post::where('active', 1)
            //->where('title', 'like', '%'.$this->search.'%')
            ->latest()
            ->paginate(6);

        $recentPosts = Post::where('active', 1)
            ->latest()
            ->take(6)
            ->get();

        $categories = PostCategory::all();

        return view('livewire.blog-component', [
            'posts' => $posts,
            'recentPosts' => $recentPosts,
            'categories' => $categories,
        ]);
    }
}
