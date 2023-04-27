<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\AluAluController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaCategory;
use App\Http\Controllers\GaleriCategoryController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LayananCategoryController;
use App\Http\Controllers\TentangDesaController;
use App\Http\Controllers\PerangkatDesaController;




Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

    //Admin ALL Routes
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
        Route::get('/delete/alu/{id}', [AluAluController::class, 'DeleteAlu'])->name('delete.alu');
        Route::get('/all/berita/admin', [BeritaController::class, 'AllBeritaAdmin'])->name('all.berita.admin');
        Route::get('/add/berita', [BeritaController::class, 'AddBerita'])->name('add.berita');
        Route::get('/edit/berita/{id}', [BeritaController::class, 'EditBerita'])->name('edit.berita');
        Route::get('/delete/berita/{id}', [BeritaController::class, 'DeleteBerita'])->name('delete.berita');
        Route::post('/updated/berita', [BeritaController::class, 'UpdatedBerita'])->name('updated.berita');
        Route::get('/all/galeri/admin', [GaleriController::class, 'AllGaleriAdmin'])->name('all.galeri.admin');
        Route::get('/add/galeri', [GaleriController::class, 'AddGaleri'])->name('add.galeri');
        Route::get('/edit/galeri/{id}', [GaleriController::class, 'EditGaleri'])->name('edit.galeri');
        Route::get('/all/layanan/admin', [LayananController::class, 'AllLayananAdmin'])->name('all.layanan.admin');
        Route::get('/add/layanan', [LayananController::class, 'AddLayanan'])->name('add.layanan');
        Route::post('/store/layanan', [LayananController::class, 'StoreLayanan'])->name('store.layanan');
        Route::get('/edit/layanan/{id}', [LayananController::class, 'EditLayanan'])->name('edit.layanan');
        Route::get('/delete/layanan/{id}', [LayananController::class, 'DeleteLayanan'])->name('delete.layanan');
        Route::post('/updated/layanan', [LayananController::class, 'UpdatedLayanan'])->name('updated.layanan');
        Route::get('/all/tentang/desa', [TentangDesaController::class, 'AllTentangDesa'])->name('all.tentang.desa');
        Route::get('/add/tentang/desa', [TentangDesaController::class, 'AddTentangDesa'])->name('add.tentang.desa');
        Route::post('/store/tentang/desa', [TentangDesaController::class, 'StoreTentangDesa'])->name('store.tentangdesa');
        Route::get('/edit/tentangdesa/{id}', [TentangDesaController::class, 'EditTentangDesa'])->name('edit.tentangdesa');
        Route::get('/delete/tentangdesa/{id}', [TentangDesaController::class, 'DeleteTentangDesa'])->name('delete.tentangdesa');
        Route::post('/updated/tentangdesa', [TentangDesaController::class, 'UpdatedTentangDesa'])->name('updated.tentangdesa');
        Route::get('/all/perangkat/desa', [PerangkatDesaController::class, 'AllPerangkatDesa'])->name('all.perangkat.desa');
        Route::get('/add/perangkat/desa', [PerangkatDesaController::class, 'AddPerangkatDesa'])->name('add.perangkat.desa');
        Route::post('/store/perangkat/desa', [PerangkatDesaController::class, 'StorePerangkatDesa'])->name('store.perangkatdesa');
        Route::get('/edit/perangkat/{id}', [PerangkatDesaController::class, 'EditPerangkatDesa'])->name('edit.perangkatdesa');
        Route::get('/delete/perangkat/{id}', [PerangkatDesaController::class, 'DeletePerangkatDesa'])->name('delete.perangkatdesa');
        Route::post('/updated/perangkat', [PerangkatDesaController::class, 'UpdatedPerangkatDesa'])->name('updated.perangkatdesa');
    });
});

//AluALU  ALL Routes
Route::controller(AluAluController::class)->group(function () {
    Route::get('/all/alu', [AluAluController::class, 'AllAlu'])->name('all.alu');
    Route::get('/add/alu', [AluAluController::class, 'AddAlu'])->name('add.alu');
    Route::post('/store/alu', [AluAluController::class, 'StoreAlu'])->name('store.alu');
});
//Berita  ALL Routes
Route::controller(BeritaController::class)->group(function () {
    Route::get('/all/berita', [BeritaController::class, 'AllBerita'])->name('all.berita');
    Route::post('/store/berita', [BeritaController::class, 'StoreBerita'])->name('store.berita');
    Route::get('/category/berita/{id}', 'CategoryBerita')->name('category.berita');
    Route::get('/berita/details/{id}', 'BeritaDetails')->name('berita.details');
});
//Galeri  ALL Routes
Route::controller(GaleriController::class)->group(function () {
    Route::get('/all/galeri', [GaleriController::class, 'AllGaleriUser'])->name('all.galeri');
    Route::post('/store/galeri', [GaleriController::class, 'StoreGaleri'])->name('store.galeri');
    Route::post('/updated/galeri', [GaleriController::class, 'UpdatedGaleri'])->name('updated.galeri');
    Route::get('/category/galeri/{id}', 'CategoryGaleri')->name('category.galeri');
    Route::get('/delete/galeri/{id}', [GaleriController::class, 'DeleteGaleri'])->name('delete.galeri');
});
//Berita Category ALL Routes
Route::controller(BeritaCategory::class)->group(function () {
    Route::get('/all/category/berita', [BeritaCategory::class, 'AllCategory'])->name('all.category.berita');
    Route::get('/add/berita/category', [BeritaCategory::class, 'AddBeritaCategory'])->name('add.berita.category');
    Route::post('/store/berita/category', [BeritaCategory::class, 'StoreBeritaCategory'])->name('store.berita.category');
    Route::get('/edit/berita/category/{id}', [BeritaCategory::class, 'EditBeritaCategory'])->name('edit.berita.category');
    Route::post('/update/berita/category/{id}', [BeritaCategory::class, 'UpdateBeritaCategory'])->name('update.berita.category');
    Route::get('/delete/berita/category/{id}', [BeritaCategory::class, 'DeleteBeritaCategory'])->name('delete.berita.category');
});


//Galeri Category ALL Routes`
Route::controller(GaleriCategoryController::class)->group(function () {
    Route::get('/all/category/galeri', [GaleriCategoryController::class, 'AllCategory'])->name('all.category.galeri');
    Route::get('/add/galeri/category', [GaleriCategoryController::class, 'AddGaleriCategory'])->name('add.galeri.category');
    Route::post('/store/galeri/category', [GaleriCategoryController::class, 'StoreGaleriCategory'])->name('store.galeri.category');
    Route::get('/edit/galeri/category/{id}', [GaleriCategoryController::class, 'EditGaleriCategory'])->name('edit.galeri.category');
    Route::post('/update/galeri/category/{id}', [GaleriCategoryController::class, 'UpdateGaleriCategory'])->name('update.galeri.category');
    Route::get('/delete/galeri/category/{id}', [GaleriCategoryController::class, 'DeleteGaleriCategory'])->name('delete.galeri.category');
});
//layanan Category
Route::controller(LayananCategoryController::class)->group(function () {
    Route::get('/all/category', [LayananCategoryController::class, 'AllCategory'])->name('all.category.layanan');
    Route::get('/add/layanan/category', [LayananCategoryController::class, 'AddLayananCategory'])->name('add.layanan.category');
    Route::post('/store/layanan/category', [LayananCategoryController::class, 'StoreLayananCategory'])->name('store.layanan.category');
    Route::get('/edit/layanan/category/{id}', [LayananCategoryController::class, 'EditLayananCategory'])->name('edit.layanan.category');
    Route::post('/update/layanan/category/{id}', [LayananCategoryController::class, 'UpdateLayananCategory'])->name('update.layanan.category');
    Route::get('/delete/layanan/category/{id}', [LayananCategoryController::class, 'DeleteLayananCategory'])->name('delete.layanan.category');
});


//Galeri Category ALL Routes`
Route::controller(GaleriCategoryController::class)->group(function () {
    Route::get('/all/category/galeri', [GaleriCategoryController::class, 'AllCategory'])->name('all.category.galeri');
    Route::get('/add/galeri/category', [GaleriCategoryController::class, 'AddGaleriCategory'])->name('add.galeri.category');
    Route::post('/store/galeri/category', [GaleriCategoryController::class, 'StoreGaleriCategory'])->name('store.galeri.category');
    Route::get('/edit/galeri/category/{id}', [GaleriCategoryController::class, 'EditGaleriCategory'])->name('edit.galeri.category');
    Route::post('/update/galeri/category/{id}', [GaleriCategoryController::class, 'UpdateGaleriCategory'])->name('update.galeri.category');
    Route::get('/delete/galeri/category/{id}', [GaleriCategoryController::class, 'DeleteGaleriCategory'])->name('delete.galeri.category');
});
//User Home
Route::controller(HomeUserController::class)->group(function () {
    Route::get('/', [HomeUserController::class, 'HomeUser'])->name('home.user');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
