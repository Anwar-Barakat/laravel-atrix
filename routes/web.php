<?php

use App\Http\Controllers\Pages\AboutUsController;
use App\Http\Controllers\Pages\ContactUsController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\ProjectController;
use App\Http\Controllers\Pages\TeamController;
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

Route::get('/',                 [HomeController::class, 'index'])->name('pages.home');
Route::get('/about-us',         [AboutUsController::class, 'index'])->name('pages.about-us');

Route::get('/projects',         [ProjectController::class, 'index'])->name('pages.projects.index');
Route::get('/projects/show',    [ProjectController::class, 'show'])->name('pages.projects.show');

Route::get('/teams',            [TeamController::class, 'index'])->name('pages.teams.index');
Route::get('/teams/show',       [TeamController::class, 'show'])->name('pages.teams.show');

Route::get('/contact-us',       [ContactUsController::class, 'index'])->name('pages.contact-us');
