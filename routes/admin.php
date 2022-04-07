<?php

use App\Http\Livewire\Admin\Views\Dashboard;
use App\Http\Livewire\Admin\Views\Profile\AdminProfile;
use App\Http\Livewire\Admin\Views\Profile\ChangePassword;
use App\Http\Livewire\Admin\Views\Seo\SeoPage;
use App\Http\Livewire\Admin\Views\UserManagment\ContactForms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// prefix => admin
Route::group([], function()
{
    Route::get('dashboard' , Dashboard::class)->name('admin.dashboard');

    //Admin-profile
    Route::get('profile' , AdminProfile::class)->name('admin.profile');
    Route::get('password-change' , ChangePassword::class)->name('admin.password.change');

    // SEO
    Route::get('seo' , SeoPage::class)->name('admin.settings.seo');


    //use-managment
    Route::get('contacts' , ContactForms::class)->name('admin.usermanagment.forms');

});
