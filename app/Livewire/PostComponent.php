<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\PostCategory;
use Livewire\Component;

class PostComponent extends Component
{
    public $post;

    public function mount($slug)
    {
        $this->post = Post::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        $categories = PostCategory::all();

	    $relatedPosts = Post::inRandomOrder()
            ->where('id', '!=', $this->post->id)
            ->take(3)
            ->get();

        $prevPost = Post::where('id', $this->post->id - 1)
            ->first();

        $nextPost = Post::where('id', $this->post->id + 1)
            ->first();

        return view('livewire.post-component', [
            'post' => $this->post,
            'categories' => $categories,
            'relatedPosts' => $relatedPosts,
            'prevPost' => $prevPost,
            'nextPost' => $nextPost,
        ]);
    }
}
