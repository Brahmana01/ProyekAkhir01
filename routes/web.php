<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\PrestasiesController;
use App\Http\Controllers\BeritaController; // Import BeritaController
use App\Http\Controllers\PengumumanController; // Import PengumumanController
use App\Http\Controllers\Admin\AlumniController; // Import AlumniController
use App\Http\Controllers\Admin\KemitraanController; // Import KemitraanController  (Tambahkan ini)

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/

// Route untuk halaman utama (index)
Route::get('/', function () {
    return view('index');
});

//Route untuk menampilkan galleri ke publik
Route::get('/galleries', [GalleryController::class, 'indexPublic'])->name('galleries.index');

// Route untuk menampilkan video ke publik
Route::get('/videos', [VideoController::class, 'showPublic'])->name('videos.showPublic');

// Route untuk menampilkan prestasi ke publik
Route::get('/prestasi', [PrestasiesController::class, 'indexPublic'])->name('prestasies.indexPublic');

Route::get('beritapublic', [BeritaController::class, 'indexPublic'])->name('beritas.indexPublic');
Route::get('berita-show-public/{berita}', [BeritaController::class, 'showPublic'])->name('beritas.showPublic');


Route::get('pengumuman', [PengumumanController::class, 'indexPublic'])->name('pengumuman');
Route::get('pengumuman/{pengumuman}', [PengumumanController::class, 'showPublic'])->name('pengumuman.showPublic');

Route::get('/alumni', [AlumniController::class, 'indexPublic'])->name('alumni.index');


// Route untuk login admin
Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');

// Route untuk logout admin
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

// Route untuk dashboard admin (perlu login)
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard')
    ->middleware('auth:admin');

// CRUD ADMIN (didefinisikan secara MANUAL) - Hanya bisa diakses jika sudah login
Route::middleware(['auth:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('galleries', GalleryController::class);
    Route::resource('videos', VideoController::class);
    Route::resource('prestasi', PrestasiesController::class);

    // Route Berita (MANUAL)

    Route::get('berita', [BeritaController::class, 'index'])->name('beritas.index');
    Route::get('berita/create', [BeritaController::class, 'create'])->name('beritas.create');
    Route::post('berita', [BeritaController::class, 'store'])->name('beritas.store');
    Route::get('berita/{berita}', [BeritaController::class, 'show'])->name('beritas.show');
    Route::get('berita/{berita}/edit', [BeritaController::class, 'edit'])->name('beritas.edit');
    Route::put('berita/{berita}', [BeritaController::class, 'update'])->name('beritas.update');
    Route::delete('berita/{berita}', [BeritaController::class, 'destroy'])->name('beritas.destroy');

    // Route Pengumuman (MANUAL)
    Route::get('pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
    Route::get('pengumuman/create', [PengumumanController::class, 'create'])->name('pengumuman.create');
    Route::post('pengumuman', [PengumumanController::class, 'store'])->name('pengumuman.store');
    Route::get('pengumuman/{pengumuman}', [PengumumanController::class, 'show'])->name('pengumuman.show');
    Route::get('pengumuman/{pengumuman}/edit', [PengumumanController::class, 'edit'])->name('pengumuman.edit');
    Route::put('pengumuman/{pengumuman}', [PengumumanController::class, 'update'])->name('pengumuman.update');
    Route::delete('pengumuman/{pengumuman}', [PengumumanController::class, 'destroy'])->name('pengumuman.destroy');

    // Route Alumni (MANUAL)
    Route::get('alumni', [AlumniController::class, 'index'])->name('alumni.index');
    Route::get('alumni/create', [AlumniController::class, 'create'])->name('alumni.create');
    Route::post('alumni', [AlumniController::class, 'store'])->name('alumni.store');
    Route::get('alumni/{alumni}', [AlumniController::class, 'show'])->name('alumni.show');
    Route::get('alumni/{alumni}/edit', [AlumniController::class, 'edit'])->name('alumni.edit');
    Route::put('alumni/{alumni}', [AlumniController::class, 'update'])->name('alumni.update');
    Route::delete('alumni/{alumni}', [AlumniController::class, 'destroy'])->name('alumni.destroy');

    // Route Kemitraan (MANUAL)  (Tambahkan ini)
    Route::get('kemitraan', [KemitraanController::class, 'index'])->name('kemitraan.index');
    Route::get('kemitraan/create', [KemitraanController::class, 'create'])->name('kemitraan.create');
    Route::post('kemitraan', [KemitraanController::class, 'store'])->name('kemitraan.store');
    Route::get('kemitraan/{kemitraan}', [KemitraanController::class, 'show'])->name('kemitraan.show');
    Route::get('kemitraan/{kemitraan}/edit', [KemitraanController::class, 'edit'])->name('kemitraan.edit');
    Route::put('kemitraan/{kemitraan}', [KemitraanController::class, 'update'])->name('kemitraan.update');
    Route::delete('kemitraan/{kemitraan}', [KemitraanController::class, 'destroy'])->name('kemitraan.destroy');
});

// Route untuk halaman statis lainnya (menggunakan cara yang lebih ringkas)
$staticPages = [
    'index' => 'index',
    '404' => '404',
    'about' => 'about',
    'strategi' => 'strategi',
    'strukturorganisasi1' => 'strukturorganisasi1',
    'strukturorganisasi2' => 'strukturorganisasi2',
    'strukturorganisasi3' => 'strukturorganisasi3',
    'tujuan' => 'tujuan',
    // 'course-single.html'=>'course-single',
    'sejarah' => 'sejarah',
    'academic' => 'academic',
    // 'alumni' => 'alumni',
    'application-form' => 'application-form',
    'athletics' => 'athletics',
    // 'blog' => 'blog',
    'blog-single' => 'blog-single',
    'campus-life' => 'campus-life',
    'campus-tour' => 'campus-tour',
    'club-single' => 'club-single',
    'club' => 'club',
    'coming-soon' => 'coming-soon',
    'contact' => 'contact',
    'sosmed' => 'sosmed',
    // 'course' => 'course',
    // 'course-2' => 'course-2',
    // 'course-single-2' => 'course-single-2',
    // 'course-single' => 'course-single',
    'event-single' => 'event-single',
    'event' => 'event',
    'facility-single' => 'facility-single',
    'facility' => 'facility',
    'faculty-single' => 'faculty-single',
    'faculty' => 'faculty',
    'faq' => 'faq',
    'forgot-password' => 'forgot-password',
    'gallery' => 'gallery',
    'health-care' => 'health-care',
    'how-to-apply' => 'how-to-apply',
    'index' => 'index',
    'kurikulum' => 'kurikulum',
    'notice-board' => 'notice-board',
    'our-fund' => 'our-fund',
    'portfolio-single' => 'portfolio-single',
    'portfolio' => 'portfolio',
    'pricing' => 'pricing',
    'privacy' => 'privacy',
    'research-single' => 'research-single',
    // 'prestasi' => 'prestasi',
    'kerjasama' => 'kerjasama',
    'visimisi' => 'visimisi',
    'scholarship' => 'scholarship',
    'student-activities' => 'student-activities',
    'teacher-single' => 'teacher-single',
    'teacher-2' => 'teacher-2',
    'teacher' => 'teacher',
    'terms' => 'terms',
    'testimonials' => 'testimonials',
    'tuitioin-fee' => 'tuition-fee',
];

foreach ($staticPages as $url => $view) {
    Route::get($url, function () use ($view) {
        return view($view);
    });
}