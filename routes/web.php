<?php
//DB::listen(function ($query){var_dump($query->sql, $query->bindings);});
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TweetsController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\FollowsController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\TweetLikesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/tweets', [TweetsController::class, 'index'])->name('home');
    Route::post('/tweets', [TweetsController::class, 'store']);

    Route::post('/tweets/{tweet}/like',[TweetLikesController::class, 'store']);
    Route::delete('/tweets/{tweet}/like',[TweetLikesController::class, 'destory']);

    Route::post(
        '/profiles/{user:username}/follow',
        [FollowsController::class, 'store']);

    Route::get(
        '/profiles/{user:username}/edit',
        [ProfilesController::class, 'edit'])
        ->middleware('can:edit,user');

    Route::patch(
        '/profiles/{user:username}',
        [ProfilesController::class, 'update'])
        ->middleware('can:edit,user');


    Route::get('/explore', ExploreController::class)->name('explore');

});

Route::get('/profiles/{user:username}', [ProfilesController::class, 'show'])->name('profile');
Auth::routes();

