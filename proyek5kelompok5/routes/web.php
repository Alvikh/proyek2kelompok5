<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/informasi', function () {
    return view('informasi');
})->name('informasi');

Route::get('/hubungikami', function () {
    return view('hubungikami');
})->name('hubungikami');

Route::get('/paketkebutuhan', function () {
    return view('paketkebutuhan');
})->name('paketkebutuhan');

Route::get('/pasang', function () {
    return view('pasang');
})->name('pasang');

Route::get('/iot', function () {
    return view('iot');
})->name('iot');

Auth::routes();
Route::group(['middleware' => 'user'], function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/home', [HomeController::class, 'index'])->name('home');

});

Route::group(['middleware' => 'admin'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::group(['middleware' => ['web', 'auth', 'roles']],function(){
    Route::group(['roles'=>'Tamu'],function(){
     Route::resource('site', 'SiteController');
    });
    
    Route::group(['roles'=>'Admin'],function(){
     Route::resource('user', 'UserController');
    });
   });

use App\Http\Controllers\FormController;

Route::post('/submitted', [FormController::class, 'submitted'])->name('submitted');



//admin route


Route::get('/users', function () {
    return view('users');
})->name('users');

use App\Http\Controllers\PegawaiController;

Route::get('/admin/pegawai', [PegawaiController::class, 'index'])->name('admin.pegawai.index');
Route::get('/admin/pegawai/create', [PegawaiController::class, 'create'])->name('admin.pegawai.create');
Route::post('/admin/pegawai', [PegawaiController::class, 'store'])->name('admin.pegawai.store');
Route::get('/admin/pegawai/{id}/edit', [PegawaiController::class, 'edit'])->name('admin.pegawai.edit');
Route::put('/admin/pegawai/{id}', [PegawaiController::class, 'update'])->name('admin.pegawai.update');
Route::delete('/admin/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('admin.pegawai.destroy');


//konfirmasi form

use App\Http\Controllers\PaketOrderController;

Route::get('/admin/confirmations', [PaketOrderController::class, 'index'])->name('admin.confirmations.index');
Route::put('/admin/confirmations/{id}', [PaketOrderController::class, 'update'])->name('admin.confirmations.konfirmasi');

use App\Http\Controllers\AdminConfirmationController;

Route::get('/admin/confirmed-paket-orders', [AdminConfirmationController::class, 'showConfirmedPaketOrders'])
    ->name('admin.confirmed-paket-orders');

use App\Http\Controllers\UserController;

Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');

use App\Http\Controllers\PemasukkanController;

Route::get('/pemasukkan', [PemasukkanController::class, 'index'])->name('pemasukkan.index');
Route::get('/pemasukkan/create', [PemasukkanController::class, 'create'])->name('pemasukkan.create');
Route::post('/pemasukkan', [PemasukkanController::class, 'store'])->name('pemasukkan.store');
Route::get('/pemasukkan/{id}/edit', [PemasukkanController::class, 'edit'])->name('pemasukkan.edit');
Route::put('/pemasukkan/{id}', [PemasukkanController::class, 'update'])->name('pemasukkan.update');
Route::delete('/pemasukkan/{id}', [PemasukkanController::class, 'destroy'])->name('pemasukkan.destroy');

use App\Http\Controllers\BlogController;

Route::get('/blogs', [BlogController::class, 'index'])->name('admin.blog.index');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('admin.blog.create');
Route::post('/blogs', [BlogController::class, 'store'])->name('admin.blog.store');
Route::get('/blogs/edit/{id}', [BlogController::class, 'edit'])->name('admin.blog.edit');
Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
Route::delete('/blogs/delete/{id}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');

Route::get('/user-blogs', [BlogController::class, 'userView'])->name('user.blogs');

use App\Http\Controllers\SolarPanelCapacityController;

Route::get('/admin/capacities', [SolarPanelCapacityController::class, 'index'])->name('admin.capacities.index');
Route::get('/admin/capacities/create', [SolarPanelCapacityController::class, 'create'])->name('admin.capacities.create');
Route::post('/admin/capacities', [SolarPanelCapacityController::class, 'store'])->name('admin.capacities.store');
Route::get('/admin/capacities/{capacity}/edit', [SolarPanelCapacityController::class, 'edit'])->name('admin.capacities.edit');
Route::put('/admin/capacities/{capacity}', [SolarPanelCapacityController::class, 'update'])->name('admin.capacities.update');
Route::delete('/admin/capacities/{capacity}', [SolarPanelCapacityController::class, 'destroy'])->name('admin.capacities.destroy');

use App\Http\Controllers\StorageController;

Route::get('/admin/storage', [StorageController::class, 'index'])->name('admin.storage.index');
Route::get('/admin/storage/create', [StorageController::class, 'create'])->name('admin.storage.create');
Route::post('/admin/storage', [StorageController::class, 'store'])->name('admin.storage.store');
Route::get('/admin/storage/{storage}/edit', [StorageController::class, 'edit'])->name('admin.storage.edit');
Route::put('/admin/storage/{storage}', [StorageController::class, 'update'])->name('admin.storage.update');
Route::delete('/admin/storage/{storage}', [StorageController::class, 'destroy'])->name('admin.storage.destroy');

Route::get('/produk', [BlogController::class, 'produk'])->name('produk');
Route::get('/pasang/{blogId}', [BlogController::class, 'showInstallationForm'])->name('pasang');

use App\Http\Controllers\BarController;
Route::get('/bar', [BarController::class, 'barChart']);


