<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

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
    $nombre="joshue";
    return view('home', compact('nombre')); //->with('nombre',$nombre)
})->name('home');

Route::view('/about', 'about')->name('about');
/* Route::view('/portfolio', 'portfolio', compact('portfolio'))->name('portfolio'); */

/* Route::resource('user', ::class); */

//*************Sin route resourse************

/* Route::get('/portafolio', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/portafolio/crear', [ProjectController::class, 'create'])->name('projects.create');
Route::get('/portafolio/{project}/editar', [ProjectController::class, 'edit'])->name('projects.edit');
Route::patch('/portafolio/{project}', [ProjectController::class, 'update'])->name('projects.update');
Route::post('/portafolio', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/portafolio/{project}', [ProjectController::class, 'show'])->name('projects.show');
Route::delete('/portafolio/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy'); */

//***********COn resourse**************

//se usa el metodo parameters porque el parametro de algunas rutas se llaman project, pero en la ruta resource estan como portafolio. Deben tener el mismo nombre

Route::resource('portafolio', ProjectController::class)->parameters(['portafolio' => 'project'])->names('projects');



Route::view('/contact', 'contact')->name('contact');

Route::post('contact', [MessageController::class, 'store'])->name('messages.store');

/* Route::view('/', 'home'); */ //usado para paginas de politicas de privacidad, politicas etc,










//pagina principal

/* Route::get('/', function () {
    return "Bienvenido a mi aplicacion";
}); */

//funciona asi: pagprincipal/contacto

Route::get('contacto', function () {
    return "Contacto";
});


//funciona asi: pagprincipal/servicios

Route::get('servicios', function () {
    return "servicios";
});


//mandar por parametro variable a la ruta (obligatorio)

Route::get('saludo/{nombre}', function ($nombre) {
    return "Saludos ".$nombre;
});

//mandar por parametro variable a la ruta (opcional)

Route::get('saludo1/{nombre?}', function ($nombre="invitado") {
    return "Saludossss ".$nombre;
});


//------RUTAS CON NOMBRE------------

/* name() ---es de mucha ayuda cuando si el cliente desea cambia el nombre de la ruta
ya no hay que hacerlo manualmente, solo cambiamos el nombre de la url pero
el nombre de la ruta seguirá igual en todos los archivos que se esté usando
dicha ruta */

Route::get('contactenos', function ($id) {
    return "Seccion de contactos";
})->name('contactos');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
