<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get("/", [SiteController::class, "home"])->name("home");
Route::get("/medicines", [SiteController::class, "medicines"])->name("medicines.index");
Route::get("/medicines/{med:slug}", [SiteController::class, "medicineDetails"])->name("medicines.show");











// ===============================================
// ===============================================
// DASHBOARD ROUTES   ============================
// ===============================================
// ===============================================
Route::middleware(['auth', 'verified'])->prefix("admin")->group(function () {
    // Dashboard
    Route::get('/', [AdminController::class, "dashboard"])->name('dashboard');
    // Medicines
    Route::get("/medicines", [AdminController::class, "medicine"])->name('dashboard.medicines');
    Route::get("/medicines/create", [AdminController::class, "createMedicine"])->name('dashboard.medicines.create');
    Route::post("/medicines/store", [AdminController::class, "storeMedicine"])->name('dashboard.medicines.store');
    Route::get("/medicines/{medicine}/show", [AdminController::class, "showMedicine"])->name('dashboard.medicines.show');
});














Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
