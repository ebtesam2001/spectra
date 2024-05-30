<?php

// use App\Http\Controllers\dashboard\ProjectController;

use App\Http\Controllers\dashboard\AboutController;
use App\Http\Controllers\dashboard\CategoryController;
use App\Http\Controllers\dashboard\clientController;
use App\Http\Controllers\dashboard\ContentmangmentController;
use App\Http\Controllers\dashboard\HeroSectionController;
use App\Http\Controllers\dashboard\NewsController;
use App\Http\Controllers\dashboard\ProductController;
use App\Http\Controllers\dashboard\TeamController;
use App\Http\Controllers\dashboard\ProjectController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Models\About;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class,'home']);
Route::get('/about', [PageController::class,'about']);
// Route::get('/home', [PageController::class,'home']);
Route::get('/contact', [PageController::class,'contact']);
Route::get('/news', [PageController::class,'news']);
Route::get('/business', [PageController::class,'business']);
Route::get('/client', [PageController::class,'client']);
Route::get('/project', [PageController::class,'project']);




Route::middleware(['auth', 'verified'])->group(function () {
    // Route::resource('/projects', ProjectController::class);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/clients', clientController::class);
    Route::resource('/herosections', HeroSectionController::class);
    Route::resource('/newsManage', NewsController::class);
    Route::resource('/products', ProductController::class);
    Route::resource('/teams', TeamController::class);
    Route::resource('/aboutManage',AboutController::class);
    Route::resource('/projects', ProjectController::class);
    Route::resource('/contentmangment', ContentmangmentController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
