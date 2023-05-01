<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GaleriCategoryController;
use App\Http\Controllers\Admin\BeritaCategoryController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\LayananCategoryController;
use App\Http\Controllers\Admin\TentangDesaController;
use App\Http\Controllers\Admin\PerangkatDesaController;
use App\Http\Controllers\User\HomeUserController;
use App\Http\Controllers\User\TentangDesaControllerU;
use App\Http\Controllers\User\BeritaControllerU;
use App\Http\Controllers\User\LayananControllerU;
use App\Http\Controllers\User\GaleriControllerU;
use App\Http\Controllers\User\AluAluControllerU;;

use App\Http\Controllers\Admin\AdminDashboardController;


use App\Http\Controllers\ProfileController;




/**Route Authentication */

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

/**End */




/**START ROUTE FOR FRONTEND */


//Route  untuk Home User
Route::controller(HomeUserController::class)->group(function () {
    Route::get('/', 'HomeIndex')->name('home.index');
});

//Route  untuk Tentang Desa User
Route::controller(TentangDesaControllerU::class)->group(function () {
    Route::get('/tentang/desa/', 'TentangDesa')->name('tentang.desa');
});

//Route  untuk Berita Desa User
Route::controller(BeritaControllerU::class)->group(function () {
    Route::get('/berita', 'Berita')->name('berita');
    Route::get('/single/berita', 'SingleBerita')->name('single.berita');
    Route::get('/all/category/{id}', 'AllCategory')->name('all.category');
});
//Route  untuk Layanan Desa User
Route::controller(LayananControllerU::class)->group(function () {
    Route::get('/layanan', 'Layanan')->name('layanan');
});

//Route  untuk Galeri Desa User
Route::controller(GaleriControllerU::class)->group(function () {
    Route::get('/galeri', 'Galeri')->name('galeri');
});
//Route  untuk AluAlu Desa User
Route::controller(AluAluControllerU::class)->group(function () {
    Route::get('/alualu', 'AluAlu')->name('alualu');
});



/**END ROUTE FOR FRONTEND */




/** START ROUTE FOR ADMIN **/

//Route Admin untu Dashboard
Route::controller(AdminDashboardController::class)->group(function () {
    Route::get('/dashboard/admin', 'Dashboard')->name('home.admin');
});

//Route Admin untuk Category Berita
Route::controller(BeritaCategoryController::class)->group(function () {
    Route::get('/all/berita/category', 'AllBeritaCategory')->name('all.berita.category');
    Route::get('/add/berita/category', 'AddBeritaCategory')->name('add.berita.category');
    Route::post('/store/berita/category', 'StoreBeritaCategory')->name('store.berita.category');
    Route::get('/edit/berita/category/{id}', 'EditBeritaCategory')->name('edit.berita.category');
    Route::post('/update/berita/category/{id}', 'UpdateBeritaCategory')->name('update.berita.category');
    Route::get('/delete/berita/category/{id}', 'DeleteBeritaCategory')->name('delete.berita.category');
});

//Route Admin untuk Berita
Route::controller(BeritaController::class)->group(function () {
    Route::get('/all/berita', 'AllBerita')->name('all.berita');
    Route::get('/add/berita', 'AddBerita')->name('add.berita');
    Route::get('/edit/berita/{id}', 'EditBerita')->name('edit.berita');
    Route::get('/delete/berita/{id}', 'DeleteBerita')->name('delete.berita');
    Route::post('/store/berita', 'StoreBerita')->name('store.berita');
    Route::post('/update/berita', 'UpdateBerita')->name('update.berita');
});



//Route Admin untuk Category Galeri
Route::controller(GaleriCategoryController::class)->group(function () {
    Route::get('/all/galeri/category', 'AllGaleriCategory')->name('all.galeri.category');
    Route::get('/add/galeri/category', 'AddGaleriCategory')->name('add.galeri.category');
    Route::post('/store/galeri/category', 'StoreGaleriCategory')->name('store.galeri.category');
    Route::get('/edit/galeri/category/{id}', 'EditGaleriCategory')->name('edit.galeri.category');
    Route::post('/update/galeri/category/{id}', 'UpdateGaleriCategory')->name('update.galeri.category');
    Route::get('/delete/galeri/category/{id}', 'DeleteGaleriCategory')->name('delete.galeri.category');
});


//Route Admin untuk Galeri
Route::controller(GaleriController::class)->group(function () {
    Route::get('/all/galeri', 'AllGaleri')->name('all.galeri');
    Route::get('/add/galeri', 'AddGaleri')->name('add.galeri');
    Route::get('/edit/galeri/{id}', 'EditGaleri')->name('edit.galeri');
    Route::get('/delete/galeri/{id}', 'DeleteGaleri')->name('delete.galeri');
    Route::post('/store/galeri', 'StoreGaleri')->name('store.galeri');
    Route::post('/update/galeri', 'UpdateGaleri')->name('update.galeri');
});
//Route Admin untuk Category Layanan
Route::controller(LayananCategoryController::class)->group(function () {
    Route::get('/all/layanan/category', 'AllLayananCategory')->name('all.layanan.category');
    Route::get('/add/layanan/category', 'AddLayananCategory')->name('add.layanan.category');
    Route::post('/store/layanan/category', 'StoreLayananCategory')->name('store.layanan.category');
    Route::get('/edit/layanan/category/{id}', 'EditLayananCategory')->name('edit.layanan.category');
    Route::post('/update/layanan/category/{id}', 'UpdateLayananCategory')->name('update.layanan.category');
    Route::get('/delete/layanan/category/{id}', 'DeleteLayananCategory')->name('delete.layanan.category');
});

//Route Admin untuk Layanan
Route::controller(LayananController::class)->group(function () {
    Route::get('/all/layanan', 'AllLayanan')->name('all.layanan');
    Route::get('/add/layanan', 'AddLayanan')->name('add.layanan');
    Route::get('/edit/layanan/{id}', 'EditLayanan')->name('edit.layanan');
    Route::get('/delete/layanan/{id}', 'DeleteLayanan')->name('delete.layanan');
    Route::post('/store/layanan', 'StoreLayanan')->name('store.layanan');
    Route::post('/update/layanan', 'UpdateLayanan')->name('update.layanan');
});
//Route Admin untuk Tentang Desa
Route::controller(TentangDesaController::class)->group(function () {
    Route::get('/all/tentangdesa', 'AllTentangDesa')->name('all.tentang.desa');
    Route::get('/add/tentangdesa', 'AddTentangDesa')->name('add.tentang.desa');
    Route::post('/store/tentangdesa', 'StoreTentangDesa')->name('store.tentang.desa');
    Route::get('/edit/tentangdesa/{id}', 'EditTentangDesa')->name('edit.tentang.desa');
    Route::get('/delete/tentangdesa/{id}', 'DeleteTentangDesa')->name('delete.tentang.desa');
    Route::post('/update/tentangdesa', 'UpdateTentangDesa')->name('update.tentang.desa');
});
//Route Admin untuk Perangkat Desa
Route::controller(PerangkatDesaController::class)->group(function () {
    Route::get('/all/perangkatdesa', 'AllPerangkatDesa')->name('all.perangkat.desa');
    Route::get('/add/perangkatdesa', 'AddPerangkatDesa')->name('add.perangkat.desa');
    Route::post('/store/perangkatdesa', 'StorePerangkatDesa')->name('store.perangkat.desa');
    Route::get('/edit/perangkatdesa/{id}', 'EditPerangkatDesa')->name('edit.perangkat.desa');
    Route::get('/delete/perangkatdesa/{id}', 'DeletePerangkatDesa')->name('delete.perangkat.desa');
    Route::post('/update/perangkatdesa', 'UpdatePerangkatDesa')->name('update.perangkat.desa');
});
