<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Login as AdminLogin;
use App\Livewire\Admin\MediaCreate;
use App\Livewire\Admin\MediaView;
use App\Livewire\Admin\Product;
use App\Livewire\Admin\ProductCreate;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');

Route::prefix('admin')->group(function () {
  Route::get('/login', AdminLogin::class)->name('adminlogin');

  Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', Dashboard::class)->name('Dashboard');
    Route::get('/products', Product::class)->name('Products');
    Route::get('/products-create', ProductCreate::class)->name('Create Products');
    Route::get('/media', MediaView::class)->name('Media');
    Route::get('/media-create', MediaCreate::class)->name('Media');
  });
});