<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

//Laravel-9.test => welcome
Route::view('', 'welcome' )->name('home');

//Laravel-9.test/contacto => contact
Route::view('/contacto', 'contact' )->name('contact');

//Laravel-9.test/blog => blog
// Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
// Route::get('/blog/create', [PostController::class, 'create']) ->name('posts.create');
// Route::post('/blog',[PostController::class, 'store'])->name('posts.store');

// Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
// Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update');

// Route::delete('/blog/{post}', [PostController::class, 'destroy'])->name('posts.destroy');


Route::resource('blog', PostController::class,[
    'names' => 'posts',
    'parameters'=> ['blog' => 'post']
]);


//Laravel-9.test/ =>about
Route::view('/about', 'about' )->name('about');


