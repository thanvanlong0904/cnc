<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\CategoryProcuctController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SecviceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StrengthsController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [WelcomeController::class, 'show'])->name('welcome.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
route::middleware('auth')->group(function () {
//    phần users
route::get('quan-tri-vien', [UserController::class, 'index'])->name('user.index');
route::post('them-quan-tri-vien', [UserController::class, 'create'])->name('user.create');
route::get('sua-thong-tin-admin/{id}', [UserController::class, 'edit'])->name('user.edit');
route::post('update/thanh-vien/{id}', [UserController::class, 'update'])->name('user.update');
route::get('delete/thanh-vien/{id}', [UserController::class, 'delete'])->name('user.delete');

// banner
route::get('banner', [BannerController::class, 'index'])->name('banner.index');
route::post('them-banner', [BannerController::class, 'create'])->name('banner.create');
route::get('sua-thong-tin-banner/{id}', [BannerController::class, 'edit'])->name('banner.edit');
route::post('update/banner/{id}', [BannerController::class, 'update'])->name('banner.update');
route::get('delete/banner/{id}', [BannerController::class, 'delete'])->name('banner.delete');
route::get('test/banner/{id}', [BannerController::class, 'test'])->name('banner.test');

// contact
route::get('contact', [ContactController::class, 'index'])->name('contact.index');
route::post('update/contact', [ContactController::class, 'update'])->name('contact.update');
// đối tác
route::get('partner', [PartnerController::class, 'index'])->name('partner.index');
route::post('them-partner', [PartnerController::class, 'create'])->name('partner.create');
route::get('sua-thong-tin-partner/{id}', [PartnerController::class, 'edit'])->name('partner.edit');
route::post('update/partner/{id}', [PartnerController::class, 'update'])->name('partner.update');
route::get('delete/partner/{id}', [PartnerController::class, 'delete'])->name('partner.delete');
// danh mục sp
route::get('category-product', [CategoryProcuctController::class, 'index'])->name('category.index');
route::post('them-category', [CategoryProcuctController::class, 'create'])->name('category.create');
route::get('sua-thong-tin-category/{id}', [CategoryProcuctController::class, 'edit'])->name('category.edit');
route::post('update/category/{id}', [CategoryProcuctController::class, 'update'])->name('category.update');
route::get('delete/category/{id}', [CategoryProcuctController::class, 'delete'])->name('category.delete');

// sản phẩm
route::get('product', [ProductController::class, 'index'])->name('product.index');
route::post('them-san-pham', [ProductController::class, 'create'])->name('product.create');
route::get('sua-thong-tin-san-pham/{id}', [ProductController::class, 'edit'])->name('product.edit');
route::post('update/san-pham/{id}', [ProductController::class, 'update'])->name('product.update');
route::get('delete/san-pham/{id}', [ProductController::class, 'delete'])->name('product.delete');
// dịch vụ
route::get('scvice', [SecviceController::class, 'index'])->name('secvice.index');
route::post('them-dich-vu', [SecviceController::class, 'create'])->name('secvice.create');
route::get('sua-thong-tin-dich-vu/{id}', [SecviceController::class, 'edit'])->name('secvice.edit');
route::post('update/Secvice/{id}', [SecviceController::class, 'update'])->name('secvice.update');
route::get('delete/Secvice/{id}', [SecviceController::class, 'delete'])->name('secvice.delete');
// giới thiệu
route::get('about', [AboutController::class, 'index'])->name('about.index');
route::post('them-gioi-thieu', [AboutController::class, 'create'])->name('about.create');
route::get('sua-thong-tin-gioi-thieu/{id}', [AboutController::class, 'edit'])->name('about.edit');
route::post('update/about/{id}', [AboutController::class, 'update'])->name('about.update');
route::get('delete/about/{id}', [AboutController::class, 'delete'])->name('about.delete');

// thế mạnh
route::get('index', [StrengthsController::class, 'index'])->name('strengths.index');
route::post('update/{id}', [StrengthsController::class, 'update'])->name('strengths.update');
});
Route::group(['middleware' => 'locale'], function() {
    Route::get('change-language/{language}', [App\Http\Controllers\LanguageController::class, 'changeLanguage'] )
        ->name('user.change-language');
        Route::get('/', [WelcomeController::class, 'show'])->name('welcome.show');
        route::get('danh-sach-san-pham/{slug}/{id}', [ProductController::class, 'list'])->name('product.list');
        route::get('chi-tiet-san-pham/{slug}/{id}', [ProductController::class, 'detail'])->name('product.detail');
        route::get('dich-vu/{slug}/{id}', [SecviceController::class, 'detail'])->name('secvice.detail');
        route::get('gioi-thieu', [AboutController::class, 'detail'])->name('about.detail');
        route::get('chi-tiet-banner/{slug}/{id}', [BannerController::class, 'detail'])->name('banner.detail');
});

// mail
route::post('sendmail', [MailController::class, 'sendMail'])->name('mail.send');

// danh sách sp




