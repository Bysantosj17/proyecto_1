<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Http\Middleware\AuthenticateSession;

/*Route::get('/', function () {
    return view('welcome');
});*/

//Laravel-9.test => welcome
Route::view('/', 'welcome')->name('home');

Route::resource('blog', PostController::class, [
    'names' => 'posts',
    'parameters' => ['blog' => 'post']
]);

// Route::resource('cita', PostController::class, [
//     'names' => 'tatoos',
//     'parameters' => ['cita' => 'tatoo']
// ]);


//Laravel-9.test/contacto => contact
Route::view('/contacto', 'contact')->name('contact');

// Route::view('/cita', [CitaController::class, 'index_t'])->name('citas.index');

Route::get('/cita', [CitaController::class, 'index_t'])->name('citas.citas');
Route::get('/cita/crear_cita', [CitaController::class, 'crear_cita'])->name('cita.crear_cita');
Route::post('/cita', [CitaController::class, 'store'])->name('citas.store');

Route::get('/cita/show/{cita}', [CitaController::class, 'show_t'])->name('cita.show_t');
Route::get('/cita/{cita}/edit_t', [CitaController::class, 'edit_t'])->name('cita.edit_t');
Route::patch('/cita/{cita}', [CitaController::class, 'update_t'])->name('cita.update_t');
Route::delete('/cita/{cita}', [CitaController::class, 'destroy_t'])->name('cita.destroy_t');

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

Route::get('/perfil/{users}', [AuthenticatedSessionController::class, 'perfil'])->name('auth.perfil');

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);
