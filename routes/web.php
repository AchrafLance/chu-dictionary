<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostsController;
use App\Models\Flight;
use App\Models\User;
use App\Models\Post;


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

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'signup']); 

Route::get('/login', [LoginController::class, 'index'])->name('login'); 
Route::post('/login', [LoginController::class, 'signin']); 

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout'); 



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/', [DashboardController::class, 'index']);

/**
 * Posts Routes
 */

Route::get('/dictionnaire', [PostsController::class, 'index'])->name('dictionnaire');
Route::post('/dictionnaire', [PostsController::class, 'addPost']);
Route::get('/allposts', [PostsController::class, 'showall'])->name('posts.all');
Route::get('/posts/{id}', [PostsController::class, 'viewPost'])->name('posts.viewPost'); 
Route::put('/posts/{id}', [PostsController::class, 'editPost'])->name('posts.editPost'); 
Route::delete('/posts/{id}', [PostsController::class, 'deletePost'])->name('posts.deletePost'); 
Route::post('/posts/{id}', [PostsController::class, 'likePost'])->name('posts.likePost'); 

Route::get('/manuel-de-procedure', function(){
    


    
    
    return dd("hello from the other side");
})->name('manuel-de-procedure');

Route::get('/fiche-de-poste', function(){
    return view('main.pages.fiche-de-poste');
})->name('fiche-de-poste'); 

Route::get('/textes-reglementaires', function(){
    return view('main.pages.textes-reglementaires');
})->name('textes-reglementaires'); 

