<?php

use App\Http\Controllers\LangController;
use App\Http\Controllers\User\Details\DetailsController;
use App\Http\Controllers\User\Home\HomePageController;
use App\Http\Livewire\Home;
use App\Http\Livewire\User\Home\HomePage;
use App\Http\Livewire\User\Views\ArticleDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomePage::class )->name('home');
Route::get('/details' , ArticleDetails::class )->name('article.details');
Route::get('/lang/{lang}' , [LangController::class , 'ChangeLang'])->name('lang.change');

