<?php

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

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeComponent::class);
Route::get('/about', AboutComponent::class)->name('about');
Route::get('/services', ServicesComponent::class)->name('services');
Route::get('/service/{service}', ServiceComponent::class)->name('service');
Route::get('/prices', PlansComponent::class)->name('plans');
Route::get('/projects', ProjectsComponent::class)->name('projects');
Route::get('/project/{project}', ProjectComponent::class)->name('project');
Route::get('/contact', ContactComponent::class)->name('contact');
Route::get('/FAQ', FAQComponent::class)->name('faq');
Route::get('/blog', BlogComponent::class)->name('blog');
