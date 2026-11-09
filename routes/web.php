
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;

// Halaman utama
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Halaman projects & detail
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('/projects/{id}', [ProjectsController::class, 'show'])->name('projects.show');

// Halaman about
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

// Halaman contact
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Proses form contact
Route::post('/contact', function () {
    return redirect()->route('contact')->with('success', 'Pesan berhasil dikirim!');
})->name('contact.submit');

// Login admin
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Halaman admin (harus login)
Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function () {

    // Dashboard admin
    Route::get('/', function () {
        return view('admin.home');
    })->name('dashboard');

    // Cetak laporan PDF
    Route::get('/projects/pdf', [AdminProjectController::class, 'cetakPdf'])
        ->name('projects.pdf');

    // CRUD projects
    Route::resource('projects', AdminProjectController::class);

});
