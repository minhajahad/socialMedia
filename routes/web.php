<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\StatusController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/register',[RegisterController::class, 'index']);
// Route::post('/register',[RegisterController::class, 'storeData']);
// Route::get('/user/updateProfile', [RegisterController::class, 'getcustomerview']);
// Route::get('/user/edit/{id}', [RegisterController::class, 'editCustomer']);
// Route::post('/user/update/{id}', [RegisterController::class, 'update']);
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


// Route::get('/profile', 'ProfileController@index')->name('profile')->middleware('auth');
// Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit')->middleware('auth');
// Route::patch('/profile', 'ProfileController@update')->name('profile.update')->middleware('auth');
// Route::get('/home', 'NewsfeedController@showNewsfeed')->name('newsfeed')->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function () {
    Route::get('/', function(){
        return redirect()->route('home');
    });

    Route::get('/newsfeed', [StatusController::class, 'newsfeedStatus'])->name('newsfeed');
    Route::get('/user/profile', [UserProfileController::class, 'showProfile'])->name('showProfile');
    Route::post('/post_status', [StatusController::class, 'postStatus'])->name('postStatus');

    Route::get('/profile/edit', [UserProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [UserProfileController::class, 'update'])->name('profile.update');



    Route::post('/react/{status}', [StatusController::class, 'postReact'])->name('react_status');
});

