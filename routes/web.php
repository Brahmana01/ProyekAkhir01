<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController; // Tambahkan baris ini
use App\Http\Controllers\Admin\VideoController; // Tambahkan baris ini

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
    'course-single.html'=>'course-single',
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
    'terms' => 'terms',
    'testimonials' => 'testimonials',
    'tuitioin-fee' => 'tuition-fee',
];

foreach ($staticPages as $url => $view) {
    Route::get($url, function () use ($view) {
        return view($view);
    });
}

// Rute untuk Admin
Route::prefix('admin')->group(function () {
    // Rute untuk menampilkan form login
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');

    // Rute untuk memproses login
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.postLogin'); // Ganti nama route agar lebih deskriptif

    // Rute untuk logout
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    // Rute yang hanya bisa diakses setelah login (menggunakan middleware 'auth:admin')
    Route::middleware(['auth:admin'])->group(function () {
        // Rute untuk dashboard admin
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

        // **Route untuk CRUD Videos**

        // Daftar Video
        Route::get('/videos', [VideoController::class, 'index'])->name('admin.videos.index');

        // Form Tambah Video
        Route::get('/videos/create', [VideoController::class, 'create'])->name('admin.videos.create');

        // Simpan Video Baru
        Route::post('/videos', [VideoController::class, 'store'])->name('admin.videos.store');

        // Detail Video
        Route::get('/videos/{video}', [VideoController::class, 'show'])->name('admin.videos.show');

        // Form Edit Video
        Route::get('/videos/{video}/edit', [VideoController::class, 'edit'])->name('admin.videos.edit');

        // Update Video
        Route::put('/videos/{video}', [VideoController::class, 'update'])->name('admin.videos.update');
        Route::patch('/videos/{video}', [VideoController::class, 'update']); // Tambahkan ini jika Anda ingin mendukung PATCH

        // Hapus Video
        Route::delete('/videos/{video}', [VideoController::class, 'destroy'])->name('admin.videos.destroy');
    });

});