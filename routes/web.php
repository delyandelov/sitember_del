<?php

use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Home;
use App\Livewire\Plans;
use App\Livewire\Project;
use App\Livewire\Projects;
use App\Livewire\Service;
use App\Livewire\Services;
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

Route::get('/', Home::class);
Route::get('/about', About::class)->name('about');
Route::get('/services', Services::class)->name('services');
Route::get('/service/{service}', Service::class)->name('service');
Route::get('/prices', Plans::class)->name('plans');
Route::get('/projects', Projects::class)->name('projects');
Route::get('/project/{project}', Project::class)->name('project');
Route::get('/contact', Contact::class)->name('contact');
