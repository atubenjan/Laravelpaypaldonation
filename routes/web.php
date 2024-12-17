<?php

use App\Http\Controllers\DonationController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/donation', [DonationController::class, 'showDonationForm']);
Route::get('/', [DonationController::class, 'showDonationForm'])->name('donation.form');
Route::post('/donation/create-order', [DonationController::class, 'createOrder'])->name('donation.create-order');
Route::get('/donation/capture', [DonationController::class, 'captureOrder'])->name('donation.capture');
Route::get('/donation/cancel', [DonationController::class, 'cancel'])->name('donation.cancel');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware(['auth', 'is_admin']);
Route::post('/donation', [DonationController::class, 'createOrder'])->name('donation.createOrder');


