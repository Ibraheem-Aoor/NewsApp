<?php

use App\Http\Livewire\Admin\Views\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// prefix => admin
Route::group([], function()
{
    Route::get('dashboard' , Dashboard::class);
});
