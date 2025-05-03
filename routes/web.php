<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\Admin\PrestasiController; // Import PrestasiController di namespace yang benar
use App\Http\Controllers\PrestasiController as PublicPrestasiController;

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
Route::get('/prestasi', [PublicPrestasiController::class, 'index'])->name('prestasies.indexPublic');

// Route untuk login admin
Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');

// Route untuk logout admin
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

// Route untuk dashboard admin (perlu login)
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard')
    ->middleware('auth:admin');

// CRUD ADMIN (didefinisikan secara RESOURCE) - Hanya bisa diakses jika sudah login
Route::middleware(['auth:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('galleries', GalleryController::class);
    Route::resource('videos', VideoController::class);
    Route::resource('prestasi', PrestasiController::class);
});

// Route untuk halaman statis lainnya (menggunakan cara yang lebih ringkas)
$staticPages = [
    'index' => 'index',
    '404' => '404',
    'about' => 'about',
    'strategi' => 'strategi',
    'strukturorganisasi' => 'strukturorganisasi',
    'tujuan' => 'tujuan',
    'sejarah' => 'sejarah',
    'academic' => 'academic',
    'alumni' => 'alumni',
    'application-form' => 'application-form',
    'athletics' => 'athletics',
    'blog' => 'blog',
    'blog-single' => 'blog-single',
    'campus-life' => 'campus-life',
    'campus-tour' => 'campus-tour',
    'club-single' => 'club-single',
    'club' => 'club',
    'coming-soon' => 'coming-soon',
    'contact' => 'contact',
    'sosmed' => 'sosmed',
    'course' => 'course',
    'course-2' => 'course-2',
    'course-single-2' => 'course-single-2',
    'course-single' => 'course-single',
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
    'prestasi' => 'prestasi',
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