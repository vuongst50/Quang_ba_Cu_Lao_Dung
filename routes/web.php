<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class,'homepage'])->name('home.homepage');

Route::get('/welcome', [HomeController::class,'welcome']);

Route::get('/gioithieu', function(){
    return view('home.gioithieu');
});

Route::get('/vanhoa&lichsu', function(){
    return view('home.vanhoa&lichsu');
});

Route::get('/tintuc&sukien', [HomeController::class,'tintuc_sukien']);

Route::get('/amthuc', [HomeController::class,'amthuc']);

Route::get('/diemden', [HomeController::class,'diemden']);

Route::get('/dulichsinhthai', [HomeController::class,'dulichsinhthai']);

Route::get('/dulichvanhoa', [HomeController::class,'dulichvanhoa']);

Route::get('/nghiduong', [HomeController::class,'nghiduong']);

Route::get('/khachsan', [HomeController::class,'khachsan']);

Route::get('/homestay', [HomeController::class,'homestay']);

Route::get('post_details/{id}', [HomeController::class,'post_details']);

Route::get('location_details/{id}', [HomeController::class,'post_details']);

Route::get('searching_page', [HomeController::class,'search']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

route::get('/home', [HomeController::class,'index'])->
    middleware('auth')->name('home');

Route::get('/view_post/{id}', [AdminController::class,'view_post']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/post_page', [AdminController::class,'post_page']);

    Route::get('/add_location_page', [AdminController::class,'add_location_page']);

    Route::post('/add_post', [AdminController::class,'add_post']);

    Route::get('/show_post', [AdminController::class,'show_post']);

    Route::get('/show_food_post', [AdminController::class,'show_food_post']);

    Route::get('/show_new_post', [AdminController::class,'show_new_post']);

    Route::get('/show_resort_post', [AdminController::class,'show_resort_post']);

    Route::get('/show_destination_post', [AdminController::class,'show_destination_post']);

    Route::get('/other', [AdminController::class,'other'])->name('other');

    Route::get('/delete_post/{id}', [AdminController::class,'delete_post']);

    Route::get('/edit_page/{id}', [AdminController::class,'edit_page']);

    Route::get('/edit_location_page/{id}', [AdminController::class,'edit_location_page']);

    Route::post('/update_post/{id}', [AdminController::class,'update_post']);

    Route::get('/manage_user', [AdminController::class,'manage_user']);

    Route::get('/add_user_page', [AdminController::class,'add_user_page']);

    Route::post('/add_user', [AdminController::class,'add_user']);

    Route::get('/delete_user/{id}', [AdminController::class,'delete_user']);

    Route::get('/edit_user_page/{id}', [AdminController::class,'edit_user_page']);

    Route::post('/edit_user/{id}', [AdminController::class,'edit_user']);

    Route::get('/pending_post', [AdminController::class,'pending_post']);

    Route::get('/accept_post/{id}', [AdminController::class,'accept_post']);

    Route::get('/accepted_posts', [AdminController::class,'accepted_posts']);

    Route::get('/reject_post/{id}', [AdminController::class,'reject_post']);

    Route::get('/rejected_posts', [AdminController::class,'rejected_posts']);
});

require __DIR__.'/auth.php';



