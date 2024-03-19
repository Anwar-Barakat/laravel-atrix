<?php

use App\Http\Controllers\Pages\AboutUsController;
use App\Http\Controllers\Pages\ContactController;
use App\Http\Controllers\Pages\ContactUsController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\ProjectController;
use App\Http\Controllers\Pages\TeamController;
use App\Models\Contact;
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

Route::get('/teams',                                [TeamController::class, 'index'])->name('pages.teams.index');
Route::get('/teams/mohammad-riad-al-merabi',        [TeamController::class, 'show1'])->name('pages.teams.mohammad-riad-al-merabi');
Route::get('/teams/basem-abu-dagga',                [TeamController::class, 'show2'])->name('pages.teams.basem-abu-dagga');
Route::get('/teams/hana-abu-samra',                 [TeamController::class, 'show3'])->name('pages.teams.hana-abu-samra');

Route::resource('contacts',                         ContactController::class);



