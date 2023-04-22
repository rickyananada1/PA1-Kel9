<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\GaleriController;
use App\Http\Controllers\Home\BeritaCategoryController;
use App\Http\Controllers\Home\BeritaController;
use App\Http\Controllers\Home\FooterController;
use App\Http\Controllers\Home\AluAluController;
use App\Http\Controllers\HomeController;




//Route untuk Admin
Route::middleware(['auth'])->group(function () {
    // ...

    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/logout', 'destroy')->name('admin.logout');
        Route::get('/admin/profile', 'Profile')->name('admin.profile');
        Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
        Route::post('/store/profile', 'StoreProfile')->name('store.profile');

        Route::get('/change/password', 'ChangePassword')->name('change.password');
        Route::post('/update/password', 'UpdatePassword')->name('update.password');
    });
});
//Route untuk Home
Route::controller(HomeSliderController::class)->group(function () {
    Route::get('/home/slide', 'HomeSlider')->name('home.slide');
    Route::post('/update/slide', 'UpdateSlider')->name('update.slider');
});
//Route untuk About
Route::controller(AboutController::class)->group(function () {
    Route::get('/about/page', 'AboutPage')->name('about.page');
    Route::post('/update/about', 'UpdateAbout')->name('update.about');
    Route::get('/home/about', 'HomeAbout')->name('home.about');

    Route::get('/about/multi/image', 'AboutMultiImage')->name('about.multi.image');
    Route::post('/store/multi/image', 'StoreMultiImage')->name('store.multi.image');
    Route::get('/all/multi/image', 'AllMultiImage')->name('all.multi.image');
    Route::get('/edit/multi/image{id}', 'EditMultiImage')->name('edit.multi.image');

    Route::post('/update/multi/image', 'UpdateMultiImage')->name('update.multi.image');
    Route::get('/delete/multi/image{id}', 'DeleteMultiImage')->name('delete.multi.image');
});

//Galeri Route
Route::controller(GaleriController::class)->group(function () {
    Route::get('/all/galeri', 'AllGaleri')->name('all.galeri');
    Route::get('/add/galeri', 'AddGaleri')->name('add.galeri');
    Route::post('/store/galeri', 'StoreGaleri')->name('store.galeri');
    Route::get('/edit/galeri{id}', 'EditGaleri')->name('edit.galeri');
    Route::post('/update/galeri', 'UpdateGaleri')->name('update.galeri');
    Route::get('/delete/galeri{id}', 'DeleteGaleri')->name('delete.galeri');
    Route::get('/home/galeri', 'HomeGaleri')->name('home.galeri');

    Route::get('/galeri/details{id}', 'GaleriDetails')->name('galeri.details');
});

//Route untuk  Category Berita
Route::controller(BeritaCategoryController::class)->group(function () {
    Route::get('/all/berita/category', 'AllBeritaCategory')->name('all.berita.category');
    Route::get('/add/berita/category', 'AddBeritaCategory')->name('add.berita.category');
    Route::post('/store/berita/category', 'StoreBeritaCategory')->name('store.berita.category');
    Route::get('/edit/berita/category/{id}', 'EditBeritaCategory')->name('edit.berita.category');
    Route::post('/update/berita/category/{id}', 'UpdateBeritaCategory')->name('update.berita.category');
    Route::get('/delete/berita/category/{id}', 'DeleteBeritaCategory')->name('delete.berita.category');
});
//Route untuk Berita
Route::controller(BeritaController::class)->group(function () {
    Route::get('/all/berita', 'AllBerita')->name('all.berita');
    Route::get('/add/berita', 'AddBerita')->name('add.berita');
    Route::get('/edit/berita/{id}', 'EditBerita')->name('edit.berita');
    Route::get('/delete/berita/{id}', 'DeleteBerita')->name('delete.berita');
    Route::post('/store/berita', 'StoreBerita')->name('store.berita');
    Route::post('/update/berita', 'UpdateBerita')->name('update.berita');

    Route::get('/berita/details/{id}', 'BeritaDetails')->name('berita.details');
    Route::get('/category/berita/{id}', 'CategoryBerita')->name('category.berita');
    Route::get('/berita', 'HomeBerita')->name('home.berita');
});

//Route untuk Footer
Route::controller(FooterController::class)->group(function () {
    Route::get('/footer/setup', 'FooterSetup')->name('footer.setup');
    Route::post('/update/footer', 'UpdateFooter')->name('update.footer');
});

//Route untuk Alu-Alu
Route::controller(AluAluController::class)->group(function () {
    Route::get('/alualu', 'AluAlu')->name('alualu.me');
    Route::post('/store/alualu', 'StoreAluAlu')->name('store.alualu');
    Route::get('/alualu/message', 'AluAluMessage')->name('alualu.message');
    Route::get('/delete/alualu/{id}', 'DeleteAluAlu')->name('delete.alualu');
});

//Home
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'HomeMain')->name('home');
});



// Route::get('/', function () {
//     return view('frontend.index');
// });



Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
