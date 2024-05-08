<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\DashController;
use App\Http\Controllers\Admin\AdminJobController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Controllers\Admin\LevelController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ADNewsController;



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

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/cong-viec', [JobController::class,'index'])->name('cong-viec');
Route::get('/cong-ty', [CompanyController::class,'index'])->name('cong-ty');
Route::get('/lien-he', [ContactController::class,'index'])->name('lien-he');

Route::get('/dang-nhap', [LoginController::class,'index'])->name('dang-nhap');
Route::get('/thong-tin-ca-nhan', [ProfileController::class,'index'])->name('thong-tin-ca-nhan');

Route::get('/dang-ki', [RegisterController::class,'indexClient'])->name('dang-ki');

Route::get('/dang-ki-doanh-nghiep', [RegisterController::class,'indexCompany'])->name('indexCompany');
Route::post('/dang-ki-doanh-nghiep', [RegisterController::class,'registerCompany'])->name('registerCompany');


Route::get('/tin-tuc', [NewsController::class,'index'])->name('tin-tuc');


Route::prefix('admin')->group(function () {
    Route::get('/',[DashController::class,'index'])->name('admin-home');

    Route::get('/cong-viec-doanh-nghiep',[AdminJobController::class,'getAllMyJob'])->name('admin-myJob-all');
    Route::get('/dang-bai-tuyen-dung',[AdminJobController::class,'addJob'])->name('show-form-add-job');


    Route::get('/tat-ca-ung-vien',[MemberController::class,'getAllMember'])->name('show-all-member');
    Route::get('/tat-ca-ung-vien-cong-ty',[MemberController::class,'getAllMyMember'])->name('show-all-my-member');

    Route::get('/vi-tri-cong-viec',[PositionController::class,'getAllPositon'])->name('show-all-position');
    Route::get('/them-moi-vi-tri',[PositionController::class,'addPosition'])->name('add-position');

    Route::get('/trinh-do',[LevelController::class,'getAllLevel'])->name('show-all-level');
    Route::get('/them-moi-trinh-do',[LevelController::class,'addLevel'])->name('add-level');

    Route::get('/the-loai',[CategoryController::class,'getAllCategory'])->name('show-all-category');
    Route::get('/them-moi-the-loai',[CategoryController::class,'addCategory'])->name('add-category');

    Route::get('/tin-tuc',[ADNewsController::class,'getAllMyPost'])->name('show-all-myPost');
    Route::get('/them-moi-tin-tuc',[ADNewsController::class,'addPost'])->name('add-post');
});
