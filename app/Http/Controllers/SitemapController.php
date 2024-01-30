<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Project;
use App\Models\Service;

class SitemapController extends Controller
{
    public function index()
    {
        $projects = Project::all()->first();
        $services = Service::all()->first();
        $categories = PostCategory::all()->first();
        $posts = Post::all()->first();

        return response()->view('sitemap.index', [
            'projects' => $projects,
            'services' => $services,
            'categories' => $categories,
            'posts' => $posts,
        ])->header('Content-Type', 'text/xml');
    }

    public function projects()
    {
        $projects = Project::latest()->get();

        return response()->view('sitemap.projects', [
            'projects' => $projects,
        ])->header('Content-Type', 'text/xml');
    }

    public function services()
    {
        $services = Service::latest()->get();

        return response()->view('sitemap.services', [
            'services' => $services,
        ])->header('Content-Type', 'text/xml');
    }

    public function posts()
    {
        $posts = Post::latest()->get();

        return response()->view('sitemap.posts', [
            'posts' => $posts,
        ])->header('Content-Type', 'text/xml');
    }

    public function categories()
    {
        $categories = PostCategory::all();

        return response()->view('sitemap.categories', [
            'categories' => $categories,
        ])->header('Content-Type', 'text/xml');
    }
}
