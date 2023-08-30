<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Login;
use App\Livewire\Dashboard;

Route::get('/', Login::class);
Route::get('/dashboard', Dashboard::class);
