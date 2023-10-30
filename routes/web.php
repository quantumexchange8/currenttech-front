<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\SubscribeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::post('/subscribe', [SubscribeController::class, 'post'])->name('subscribe');
Route::post('/resume', [HomeController::class, 'resume'])->name('resume');
Route::post('/subscribe/{hash}', [SubscribeController::class, 'show']);
Route::post('contact_mail', [HomeController::class,'contact_mail_send']);
Route::get('/', function () {
    return view('master.home');
});

Route::get('/login', [LoginController::class, 'loginview'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/support', [HomeController::class, 'support'])->name('support');
Route::get('/POS-System', [ProductController::class, 'pos'])->name('possystem');
Route::get('/web-app', [ProductController::class, 'webapp'])->name('webapp');
Route::get('/see-all', [ProductController::class, 'seeall'])->name('seeall');
Route::get('/product-details', [ProductController::class, 'productDetails'])->name('productdetail');

Route::get('/broker', [ProductController::class, 'broker'])->name('brokerage');
Route::get('/expert-advisor', [ProductController::class, 'expert'])->name('expert');
Route::get('/web3', [ProductController::class, 'web3'])->name('web3');

Route::get('/performance', [FeatureController::class, 'performance'])->name('performance');
Route::get('/reward-program', [FeatureController::class, 'reward'])->name('reward');
Route::get('/develop&learn', [FeatureController::class, 'develop'])->name('develop');
Route::get('/hr_management', [FeatureController::class, 'hrmanage'])->name('hrmanage');
Route::get('/reporting&Analytics', [FeatureController::class, 'report'])->name('report');

Route::get('/sectors', [SectorController::class, 'sector'])->name('sector');

Route::get('/career', [CareerController::class, 'career'])->name('career');

