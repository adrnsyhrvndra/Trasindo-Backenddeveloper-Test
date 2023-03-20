<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PemesananController;

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


Route::get('/', [PemesananController::class, 'index'])->name('index');
Route::get('/pendaftaran/invoice', [PemesananController::class, 'HalamanPemesananDaftar'])->name('invoice');
Route::get('/logout', [PemesananController::class, 'logout'])->name('user.logout');

Route::get('/admin/datapemesanan', [PemesananController::class, 'HalamanDataPemesanan'])->name('data.pemesanan');

Route::get('/admin/formpengecekannoid', [PemesananController::class, 'HalamanFormPengecekanId'])->name('data.formpengecekannoid');

Route::get('/admin/datapenonton', [PemesananController::class, 'HalamanPenonton'])->name('data.penonton');

Route::post('/admin/formpengecekannoid/search', [PemesananController::class, 'SearchNoId'])->name('pencarian.noid');

Route::get('/admin/active/penonton/{id}', [PemesananController::class, 'ActivatedPenonton'])->name('activated.penonton');



Route::get('/edit/datapemesanan/{id}', [PemesananController::class, 'EditDataPemesanan'])->name('editdata.pemesanan');
Route::get('/delete/datapemesanan/{id}', [PemesananController::class, 'DeleteDataPemesanan'])->name('deletedata.pemesanan');

Route::post('/update/pemesanan', [PemesananController::class, 'UpdatePemesanan'])->name('update.pemesanan');

// AUTH PAGE ROUTE

Route::get('/dashboard', function () {

    return view('dashboard');

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin Controller

    Route::controller(AdminController::class)->group(function () {


    });

    // Pemesanan Controller

    Route::controller(PemesananController::class)->group(function () {


    });

});

require __DIR__.'/auth.php';
