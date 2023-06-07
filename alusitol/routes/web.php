<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BeritaCategoryController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\LayananCategoryController;
use App\Http\Controllers\Admin\TentangDesaController;
use App\Http\Controllers\Admin\SejarahDesaController;
use App\Http\Controllers\Admin\PerangkatDesaController;
use App\Http\Controllers\Admin\VisiMisiController;
use App\Http\Controllers\Admin\GeografisController;
use App\Http\Controllers\Admin\AluAluController;

use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\UserTentangDesaController;
use App\Http\Controllers\User\UserLayananController;
use App\Http\Controllers\User\UserBeritaController;
use App\Http\Controllers\User\UserGaleriController;
use App\Http\Controllers\User\UserAlualuController;
use App\Http\Controllers\AdminController;





/*Route User untuk Dashboard*/

Route::controller(UserDashboardController::class)->group(function () {
    Route::get('/', 'Dashboard')->name('home.user');
});

/*Route User untuk TentangDesa*/
Route::controller(UserTentangDesaController::class)->group(function () {
    Route::get('/tentang/desa', 'TentangDesa')->name('tentangdesa.user');
    Route::get('/sejarah/desa', 'SejarahDesa')->name('sejarahdesa.user');
    Route::get('/visi/misi/desa', 'VisiMisiDesa')->name('visimisi.user');
    Route::get('/geografis/desa', 'GeografisDesa')->name('geografis.user');
    Route::get('/perangkat/desa', 'PerangkatDesa')->name('perangkatdesa.user');
});

/*Route User untuk Layanan*/
Route::controller(UserLayananController::class)->group(function () {
    Route::get('/layanan/desa', 'Layanan')->name('layanan.user');
    Route::get('/all/categoryL/{id}', 'AllCategory')->name('all.categoryL');
});

/*Route User untuk Berita*/
Route::controller(UserBeritaController::class)->group(function () {
    Route::get('/berita/desa', 'Berita')->name('berita.user');
    Route::get('/single/berita/{id}', 'SingleBerita')->name('single.berita');
    Route::get('/all/category/{id}', 'AllCategory')->name('all.category');
    Route::get('/berita/search/', 'Search')->name('search.berita');
});

/*Route User untuk Galeri*/
Route::controller(UserGaleriController::class)->group(function () {
    Route::get('/galeri/desa', 'Galeri')->name('galeri.user');
});

/*Route User untuk Alu Alu*/
Route::controller(UserAlualuController::class)->group(function () {
    Route::get('/alualu', 'Alualu')->name('alualu.user');
    Route::post('/store/alualuu', 'StoreAluAluu')->name('store.alualuu')->middleware(['auth', 'alu.alu.usage']);
    Route::get('/alualu/search/', 'SearchAluAlu')->name('search.alualu');
    Route::get('alualu/filter', 'filter')->name('alualu.filter');
});



/**Authentication */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/dashboard', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



Route::prefix('admin')->group(function () {

    Route::get('/login', [AdminController::class, 'Index'])->name('login_from');
    Route::post('/login/admin', [AdminController::class, 'Login'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout')->middleware('admin');


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


    //Route Admin untuk Alu - Alu
    Route::controller(AluAluController::class)->group(function () {
        Route::get('/all/alu/alu', 'Index')->name('all.alualu');
        Route::get('/delete/alu/alu/{id}', 'Delete')->name('delete.alualu');
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

    //Route Admin untuk Sejarah Desa
    Route::controller(SejarahDesaController::class)->group(function () {
        Route::get('/all/sejarahdesa', 'AllSejarahDesa')->name('all.sejarah.desa');
        Route::get('/add/sejarahdesa', 'AddSejarahDesa')->name('add.sejarah.desa');
        Route::post('/store/sejarahdesa', 'StoreSejarahDesa')->name('store.sejarah.desa');
        Route::get('/edit/sejarahdesa/{id}', 'EditSejarahDesa')->name('edit.sejarah.desa');
        Route::get('/delete/sejarahdesa/{id}', 'DeleteSejarahDesa')->name('delete.sejarah.desa');
        Route::post('/update/sejarahdesa', 'UpdateSejarahDesa')->name('update.sejarah.desa');
    });
    //Route Admin untuk VisiMisi Desa
    Route::controller(VisiMisiController::class)->group(function () {
        Route::get('/all/visimisi', 'AllVisiMisi')->name('all.visimisi.desa');
        Route::get('/add/visimisi', 'AddVisiMisi')->name('add.visimisi.desa');
        Route::post('/store/visimisi', 'StoreVisiMisi')->name('store.visimisi.desa');
        Route::get('/edit/visimisi/{id}', 'EditVisiMisi')->name('edit.visimisi.desa');
        Route::get('/delete/visimisi/{id}', 'DeleteVisiMisi')->name('delete.visimisi.desa');
        Route::post('/update/visimisi', 'UpdateVisiMisi')->name('update.visimisi.desa');
    });
    //Route Admin untuk Geografis Desa
    Route::controller(GeografisController::class)->group(function () {
        Route::get('/all/Geografis', 'AllGeografis')->name('all.geografis.desa');
        Route::get('/add/Geografis', 'AddGeografis')->name('add.geografis.desa');
        Route::post('/store/Geografis', 'StoreGeografis')->name('store.geografis.desa');
        Route::get('/edit/Geografis/{id}', 'EditGeografis')->name('edit.geografis.desa');
        Route::get('/delete/Geografis/{id}', 'DeleteGeografis')->name('delete.geografis.desa');
        Route::post('/update/Geografis', 'UpdateGeografis')->name('update.geografis.desa');
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
});
