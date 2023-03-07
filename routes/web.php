<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Manager\BikeshareController;
use App\Http\Controllers\Manager\DashboardController;
use App\Http\Controllers\Manager\ContactAdminController;
use App\Http\Controllers\Manager\BikeshareGalleryController;

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

Route::get('/', HomeController::class)->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::group(['prefix'=>'main', 'middleware'=>['auth']], function(){
    Route::get('/', DashboardController::class)->name('dashboard');

    // Bike Share
    Route::group(['prefix'=>'bikeshare'], function(){
        Route::get('/', [BikeshareController::class, 'index'])->name('manager.bikeshare.index');
        Route::get('/create', [BikeshareController::class, 'create'])->name('manager.bikeshare.create');
        Route::get('/{bikeshare}', [BikeshareController::class, 'show'])->name('manager.bikeshare.show');
        Route::post('/create', [BikeshareController::class, 'store'])->name('manager.bikeshare.store');
        Route::get('/{bikeshare}/edit', [BikeshareController::class, 'edit'])->name('manager.bikeshare.edit');
        Route::patch('/{bikeshare}', [BikeshareController::class, 'update'])->name('manager.bikeshare.update');
        Route::delete('/{bikeshare}', [BikeshareController::class, 'destroy'])->name('manager.bikeshare.destroy');
    });
    
    // Bike Share Gallery
    Route::group(['prefix'=>'bikeshare/gallery'], function(){
        Route::get('/{bikeshare}', [BikeshareGalleryController::class, 'index'])->name('manager.bikeshare.gallery.index');
        Route::post('/new', [BikeshareGalleryController::class, 'store'])->name('manager.bikeshare.gallery.store');
        Route::delete('/{gallery}', [BikeshareGalleryController::class, 'destroy'])->name('manager.bikeshare.gallery.destroy');
    });

    // Contact messages
    Route::group(['prefix'=>'contact'], function(){
        Route::get('/', [ContactAdminController::class, 'index'])->name('manager.contact.index');
        Route::get('/{contact}', [ContactAdminController::class, 'show'])->name('manager.contact.show');
        Route::delete('/{contact}', [ContactAdminController::class, 'destroy'])->name('manager.contact.destroy');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
