<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\PageController;


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


    Route::get('locale/{locale}', function ($locale) {
        Session::put('locale', $locale);
        return redirect()->back();
    })->name('locale');

    //Main
    Route::get('/', [MainController::class, 'home']);
    Route::get('about', [MainController::class, 'about']);
    Route::get('feedback', [MainController::class, 'feedback']);
    Route::get('document', [MainController::class, 'document']);

    //Page
    Route::get('allpage', [PageController::class, 'allpage']);
    Route::get('page/{slug}', [PageController::class, 'page']);

    //News
    Route::get('post', [MainController::class, 'post']);
    Route::get('postsingle/{slug}', [MainController::class, 'postsingle']);

    //Product
    Route::get('ribbon', [MainController::class, 'ribbon']);
    Route::get('roll', [MainController::class, 'roll']);
    Route::get('flange', [MainController::class, 'flange']);

    //Site Map
    Route::get('/sitemap', [SitemapController::class, 'index'])->name('index');

    //Admin Panel
    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
    });
