<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('user.beranda');
// });

// Route::get('/detail', function () {
//     return view('admin.dashboard');
// });

// User interface
Route::get('/', [BeritaController::class, 'index']);
Route::resource('news', BeritaController::class);
Route::get('/berita-{id}', [BeritaController::class, 'showSingle']);
Route::get('/berita', [BeritaController::class, 'showAll']);
Route::get('/berita/{id}', [BeritaController::class, 'showSingle']);

Route::resource('buku', BukuController::class);
Route::get('/cari', [BukuController::class, 'cari']);
Route::get('/pinjam', [BukuController::class, 'pinjam']);
Route::get('/kembali', [BukuController::class, 'kembali']);
Route::get('/carapinjam', [BukuController::class, 'carapinjam']);
Route::get('/create', function () {
    return view('user.create');
});



//ABOUT
Route::get('/profile', [AboutController::class, 'profile']);
Route::get('/visimisi', [AboutController::class, 'visimisi']);
Route::get('/jamlayanan', [AboutController::class, 'jamlayanan']);
Route::get('/fasilitas', [AboutController::class, 'fasilitas']);
Route::get('/jeniskoleksi', [AboutController::class, 'jeniskoleksi']);
Route::get('/faq', [AboutController::class, 'faq']);


// Dashboard interface
Route::get('/dashboard', [BeritaController::class, 'showToDashboard'])->middleware('auth');
Route::get('/dashboard/berita', [BeritaController::class, 'showToAdminBerita'])->middleware('auth');
Route::get('/dashboard/berita/tambah-berita', [BeritaController::class, 'create'])->middleware('auth');
Route::get('/dashboard/berita/edit-berita-{id}', [BeritaController::class, 'edit'])->middleware('auth');

//BUKU
Route::get('/dashboard/buku', [BukuController::class, 'buku'])->middleware('auth');
Route::get('/dashboard/buku/addbuku', [BukuController::class, 'addbuku'])->middleware('auth');
Route::get('/dashboard/buku/editbuku/{id}', [BukuController::class, 'editbuku'])->middleware('auth');
Route::get('/dashboard/buku/deletebuku/{id}', [BukuController::class, 'delete'])->middleware('auth');
Route::post('/dashboard/buku/editbuku/edit_process/{id}', [BukuController::class, 'update'])->middleware('auth');

//LOGIN and Register
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('auth');
Route::post('/register', [RegisterController::class, 'store'])->middleware('auth');