<?php

use App\Http\Controllers\AnnController;
use App\Http\Controllers\NotifController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

//Main Page Routes
Route::get('/', [PageController::class, 'analytics'])->name('home');
Route::get('/analytics', [PageController::class, 'analytics'])->name('analytics');
Route::get('/announcements', [PageController::class, 'announcements'])->name('announcements');
Route::get('/notifications', [PageController::class, 'notifications'])->name('notifications');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/logs', [PageController::class, 'logs'])->name('logs');
Route::get('/login', [PageController::class, 'login'])->name('login');

//Announcement Routes
Route::get('/announcements/create-ann', [AnnController::class, 'createAnn'])->name('create-ann');
Route::post('/announcements/store-ann', [AnnController::class, 'storeAnn'], function () {})->name('store-ann');

Route::get('/announcements/show-ann/{id}', [AnnController::class, 'showAnn'])->name('show-ann');

Route::get('/announcements/edit-ann', [AnnController::class, 'editAnn'])->name('edit-ann');
Route::post('/announcements/update-ann', [AnnController::class, 'updateAnn'], function () {})->name('update-ann');

Route::post('/announcements/destroy-ann', [AnnController::class, 'destroyAnn'], function () {})->name('destroy-ann');

//Push Notification Routes
Route::get('/notifications/create-notif', [NotifController::class, 'createNotif'])->name('create-notif');
Route::post('/notifications/store-notif', [NotifController::class, 'storeNotif'], function () {})->name('store-notif');

Route::get('/notifications/show-notif/{id}', [NotifController::class, 'showNotif'])->name('show-ann');

Route::get('/notifications/edit-notif', [NotifController::class, 'editNotif'])->name('edit-ann');
Route::post('/notifications/update-notif', [NotifController::class, 'updateNotif'], function () {})->name('update-notif');

Route::post('/notifications/destroy-notif', [NotifController::class, 'destroyNotif'], function () {})->name('destroy-notif');