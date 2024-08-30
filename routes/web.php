<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'analytics'])->name('home');
Route::get('/analytics', [PageController::class, 'analytics'])->name('analytics');
Route::get('/announcements', [PageController::class, 'announcements'])->name('announcements');
Route::get('/notifications', [PageController::class, 'notifications'])->name('notifications');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/logs', [PageController::class, 'logs'])->name('logs');
Route::get('/createann', [PageController::class, 'createann'])->name('createann');
Route::get('/login', [PageController::class, 'login'])->name('login');
