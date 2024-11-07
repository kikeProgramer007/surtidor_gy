<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TipoVehiculoController;
use App\Http\Controllers\VehiculoController;
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
    
});





require __DIR__.'/auth.php';
