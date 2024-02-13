<?php

use App\Http\Controllers\SitemapController;
use App\Livewire\AboutComponent;
use App\Livewire\BlogComponent;
use App\Livewire\ContactComponent;
use App\Livewire\FAQComponent;
use App\Livewire\HomeComponent;
use App\Livewire\PlansComponent;
use App\Livewire\ProjectComponent;
use App\Livewire\ProjectsComponent;
use App\Livewire\ServiceComponent;
use App\Livewire\ServicesComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeComponent::class);

Route::get('/about', AboutComponent::class)->name('about');
Route::get('/services', ServicesComponent::class)->name('services');
Route::get('/services/{service}', ServiceComponent::class)->name('service');
Route::get('/prices', PlansComponent::class)->name('plans');
Route::get('/projects', ProjectsComponent::class)->name('projects');
Route::get('/projects/{project}', ProjectComponent::class)->name('project');
Route::get('/contact', ContactComponent::class)->name('contact');
Route::get('/FAQ', FAQComponent::class)->name('faq');
Route::get('/blog', BlogComponent::class)->name('blog');

//Sitemaps
Route::get('/sitemap.xml', [SitemapController::class, 'index']);
Route::get('/sitemap.xml/projects', [SitemapController::class, 'projects']);
Route::get('/sitemap.xml/services', [SitemapController::class, 'services']);
Route::get('/sitemap.xml/categories', [SitemapController::class, 'categories']);
Route::get('/sitemap.xml/posts', [SitemapController::class, 'posts']);

// Route::get('/google90fa045294f42581.html', function () {
//     return view('google90fa045294f42581');
// });
