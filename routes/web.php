<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Administrador;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/products', function() {
    return view('products');
})->name('products');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware([Administrador::class])->group(function () {
    Route::get('/dash/menu', function() {
        return view('dashmenu');
    })->name('dashmenu');
    
    Route::get('/dash/inventario', function() {
        return view('inventario');
    })->name('inventario');

    Route::get('/dash/opiniones', function() {
        return view('opiniones');
    })->name('opiniones');

    Route::get('/dash/gestor/ordenes', function() {
        return view('gesordenes');
    })->name('gesordenes');

    Route::get('/dash/gestor/historial', function() {
        return view('historial');
    })->name('historial');

    Route::get('/dash/agregar/producto', function() {
        return view('formularioproducto');
    })->name('agregar.producto');

    Route::get('/dash/agregar/orden', function() {
        return view('formularioorden');
    })->name('agregar.orden');
});

Route::get('prueba', function() {
    return view('productsAdmin');
})->name('agregar.orden');

Route::get('/pdf', function () {
    return view('./pdf/pdfcompra');
})->name('pdf.compra');

require __DIR__.'/auth.php';
