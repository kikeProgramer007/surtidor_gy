<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TipoVehiculoController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\AlmacenController;
use App\Http\Controllers\CombustibleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return redirect('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(ClienteController::class)->group(function (){
        Route::get('/cliente','index')->name('cliente.index');
        Route::get('/cliente/create/','create')->name('cliente.create');
        Route::post('/cliente/store/','store')->name('cliente.store');
        Route::get('/cliente/edit/{cliente}','edit')->name('cliente.edit');
        Route::post('/cliente/update/{cliente}','update')->name('cliente.update');
        Route::get('/cliente/destroy/{cliente}','destroy')->name('cliente.destroy');
    });
    
    Route::controller(TipoVehiculoController::class)->group(function (){
        Route::get('/tipovehiculo','index')->name('tipo.vehiculo.index');
        Route::get('/tipovehiculo/create/','create')->name('tipo.vehiculo.create');
        Route::post('/tipovehiculo/store/','store')->name('tipo.vehiculo.store');
        Route::get('/tipovehiculo/edit/{tipovehiculo}','edit')->name('tipo.vehiculo.edit');
        Route::post('/tipovehiculo/update/{tipovehiculo}','update')->name('tipo.vehiculo.update');
        Route::get('/tipovehiculo/destroy/{tipovehiculo}','destroy')->name('tipo.vehiculo.destroy');
    });
    
    Route::controller(VehiculoController::class)->group(function (){
        Route::get('/vehiculo','index')->name('vehiculo.index');
        Route::get('/vehiculo/create/','create')->name('vehiculo.create');
        Route::post('/vehiculo/store/','store')->name('vehiculo.store');
        Route::get('/vehiculo/edit/{vehiculo}','edit')->name('vehiculo.edit');
        Route::post('/vehiculo/update/{vehiculo}','update')->name('vehiculo.update');
        Route::get('/vehiculo/destroy/{vehiculo}','destroy')->name('vehiculo.destroy');
    });

    // Rutas para Almacen
    Route::controller(AlmacenController::class)->group(function () {
        Route::get('/almacen', 'index')->name('almacen.index');
        Route::get('/almacen/create', 'create')->name('almacen.create');
        Route::post('/almacen/store', 'store')->name('almacen.store');
        Route::get('/almacen/edit/{almacen}', 'edit')->name('almacen.edit');
        Route::post('/almacen/update/{almacen}', 'update')->name('almacen.update');
        Route::get('/almacen/destroy/{almacen}', 'destroy')->name('almacen.destroy');
    });

    Route::controller(CombustibleController::class)->group(function () {
        Route::get('/combustible', 'index')->name('combustible.index');
        Route::get('/combustible/create', 'create')->name('combustible.create');
        Route::post('/combustible/store', 'store')->name('combustible.store');
        Route::get('/combustible/edit/{combustible}', 'edit')->name('combustible.edit');
        Route::post('/combustible/update/{combustible}', 'update')->name('combustible.update');
        Route::delete('/combustible/destroy/{combustible}', 'destroy')->name('combustible.destroy');
    });

    
});





require __DIR__.'/auth.php';
