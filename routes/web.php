<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

//Laravel-9.test => welcome
Route::view('/', 'welcome')->name('home');

Route::resource('blog', PostController::class, [
    'names' => 'posts',
    'parameters' => ['blog' => 'post']
]);

Route::resource('cita', CitaController::class, [
    'names' => 'citas',
    'parameters' => ['cita' => 'citas']
]);


//Laravel-9.test/contacto => contact
Route::view('/contacto', 'contact')->name('contact');
Route::view('/citas', 'citas')->name('citas');


//Laravel-9.test/blog => blog
// Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
// Route::get('/blog/cita', [PostController::class, 'cita'])->name('posts.cita');
// Route::post('/blog',[PostController::class, 'store'])->name('posts.store');

// Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
// Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update');

// Route::delete('/blog/{post}', [PostController::class, 'destroy'])->name('posts.destroy');


//Laravel-9.test/ =>about
Route::view('/about', 'about')->name('about');

Route::get('/login', function () {
    return 'Login page';
})->name('login');

Route::view('/login', 'auth.login')->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);
