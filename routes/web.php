<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Login;
use App\Livewire\Dashboard;
use App\Livewire\Profile;
use App\Livewire\User;
use App\Livewire\Equipments;
use App\Livewire\Maintenance;

Route::get('/', Login::class)->name('login');
Route::get('/dashboard/logout', [Login::class, 'logout'])->name('logout');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/dashboard/profile', Profile::class)->name('profile');
Route::get('/dashboard/users', User::class)->name('users');
Route::get('/dashboard/equipments', Equipments::class)->name('equipments');
Route::get('/dashboard/maintenances', Maintenance::class)->name('maintenances');


Route::prefix('dashboard')->middleware('auth')->group(function () {
    
});
