<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\OPACController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\eBookController;
use App\Http\Controllers\IndexAdminController;
use App\Http\Controllers\BlogAdminController;
use App\Http\Controllers\GaleriAdminController;
Use App\Http\Controllers\profilAdminController;
Use App\Http\Controllers\userAdminController;
Use App\Http\Controllers\visimisiAdminController;
Use App\Http\Controllers\bukuTamuAdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/information', [InformationController::class, 'index'])->name('information');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/opac', [OPACController::class, 'index'])->name('opac');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/download', [DownloadController::class, 'index'])->name('download');
Route::get('/ebook', [eBookController::class, 'index'])->name('ebook');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [IndexAdminController::class, 'index'])->name('index');
    Route::get('/blog', [BlogAdminController::class, 'index'])->name('blog');
    Route::get('/create-blog', [BlogAdminController::class, 'create'])->name('create-blog');
    Route::post('/store-blog', [BlogAdminController::class, 'store'])->name('store-blog');
    Route::get('/edit-blog/{id}', [BlogAdminController::class, 'edit'])->name('edit-blog');
    Route::get('/show-blog/{id}', [BlogAdminController::class, 'show'])->name('show-blog'); 
    Route::put('/update-blog/{id}', [BlogAdminController::class, 'update'])->name('update-blog');
    Route::delete('/delete-blog/{id}', [BlogAdminController::class, 'destroy'])->name('delete-blog');

    Route::get('/galeri', [GaleriAdminController::class, 'index'])->name('galeri');
    Route::get('/create-galeri', [GaleriAdminController::class, 'create'])->name('create-galeri');
    Route::post('/store-galeri', [GaleriAdminController::class, 'store'])->name('store-galeri');
    Route::get('/edit-galeri/{id}', [GaleriAdminController::class, 'edit'])->name('edit-galeri');
    Route::put('/update-galeri/{id}', [GaleriAdminController::class, 'update'])->name('update-galeri');
    Route::delete('/delete-galeri/{id}', [GaleriAdminController::class, 'destroy'])->name('delete-galeri');

    Route::get('/profil', [ProfilAdminController::class, 'index'])->name('profil');
    Route::get('/create-profil', [ProfilAdminController::class, 'create'])->name('create-profil');
    Route::post('/store-profil', [ProfilAdminController::class, 'store'])->name('store-profil');
    Route::get('/edit-profil/{id}', [ProfilAdminController::class, 'edit'])->name('edit-profil');
    Route::put('/update-profil/{id}', [ProfilAdminController::class, 'update'])->name('update-profil');
    Route::delete('/delete-profil/{id}', [ProfilAdminController::class, 'destroy'])->name('delete-profil');

    Route::get('/user', [userAdminController::class, 'index'])->name('user');
    Route::get('/create-user', [userAdminController::class, 'create'])->name('create-user');
    Route::post('/store-user', [userAdminController::class, 'store'])->name('store-user');
    Route::get('/edit-user/{id}', [userAdminController::class, 'edit'])->name('edit-user');
    Route::put('/update-user/{id}', [userAdminController::class, 'update'])->name('update-user');
    Route::delete('/delete-user/{id}', [userAdminController::class, 'destroy'])->name('delete-user');

    Route::get('/visimisi', [visimisiAdminController::class, 'index'])->name('visimisi');
    Route::get('/create-visimisi', [visimisiAdminController::class, 'create'])->name('create-visimisi');
    Route::post('/store-visimisi', [visimisiAdminController::class, 'store'])->name('store-visimisi');
    Route::get('/edit-visimisi/{id}', [visimisiAdminController::class, 'edit'])->name('edit-visimisi');
    Route::put('/update-visimisi/{id}', [visimisiAdminController::class, 'update'])->name('update-visimisi');
    Route::delete('/delete-visimisi/{id}', [visimisiAdminController::class, 'destroy'])->name('delete-visimisi');

    Route::get('/bukutamu', [bukuTamuAdminController::class, 'index'])->name('bukutamu');
    Route::get('/create-bukutamu', [bukuTamuAdminController::class, 'create'])->name('create-bukutamu');
    Route::post('/store-bukutamu', [bukuTamuAdminController::class, 'store'])->name('store-bukutamu');
    Route::get('/edit-bukutamu/{id}', [bukuTamuAdminController::class, 'edit'])->name('edit-bukutamu');
    Route::put('/update-bukutamu/{id}', [bukuTamuAdminController::class, 'update'])->name('update-bukutamu');
    Route::delete('/delete-bukutamu/{id}', [bukuTamuAdminController::class, 'destroy'])->name('delete-bukutamu');
});
Route::get('/login', function () {
    return view('login');
});
