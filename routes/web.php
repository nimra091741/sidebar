<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// routes/web.php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/productlisting', function () {
    return view('productlisting');
})->name('productlisting');

Route::get('/createproduct', function () {
    return view('createproduct');
})->name('createproduct');

Route::get('/import', function () {
    return view('import');
})->name('import');

Route::get('/readproduct/{id}', function () {
    return view('readproduct');
})->name('readproduct');

Route::get('/updateproduct/{id}', function () {
    return view('updateproduct');
})->name('updateproduct');

Route::get('/salelisting', function () {
    return view('salelisting');
})->name('salelisting');

Route::get('/createsale', function () {
    return view('createsale');
})->name('createsale');

Route::get('/readsales/{id}', function () {
    return view('readsales');
})->name('readsales');

Route::get('/updatesales/{id}', function () {
    return view('updatesales');
})->name('updatesales');

Route::get('/saledetaillisting', function () {
    return view('saledetaillisting');
})->name('saledetaillisting');

Route::get('/createsaledetail', function () {
    return view('createsaledetail');
})->name('createsaledetail');

Route::get('/readsaledetail/{id}', function () {
    return view('readsaledetail');
})->name('readsaledetail');

Route::get('/updatesaledetail/{id}', function () {
    return view('updatesaledetail');
})->name('updatesaledetail');

Route::get('/profitexpenselisting', function () {
    return view('profitexpenselisting');
})->name('profitexpenselisting');

Route::get('/createprofitexpense', function () {
    return view('createprofitexpense');
})->name('createprofitexpense');

Route::get('/readprofitexpense/{id}', function () {
    return view('readprofitexpense');
})->name('readprofitexpense');

Route::get('/updateprofitexpense/{id}', function () {
    return view('updateprofitexpense');
})->name('updateprofitexpense');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
