<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Locaticontroller;
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

Route::get('/dang-nhap', [LoginController::class,'indexLogin'])->name('indexLogin');
Route::post('/dang-nhap', [LoginController::class,'login'])->name('login');


Route::post('/dang-xuat', [LoginController::class,'logout'])->name('logout');

Route::get('/thong-tin-ca-nhan', [ProfileController::class,'getProfile'])->name('getProfile');

Route::get('/dang-ki', [RegisterController::class,'indexClient'])->name('indexClient');
Route::post('/dang-ki', [RegisterController::class,'registerClient'])->name('registerClient');

// Route::post('/dang-ki', [RegisterController::class,'register'])->name('register');


Route::get('/dang-ki-doanh-nghiep', [RegisterController::class,'indexCompany'])->name('indexCompany');
Route::post('/dang-ki-doanh-nghiep', [RegisterController::class,'registerCompany'])->name('registerCompany');


Route::get('/tin-tuc', [NewsController::class,'index'])->name('tin-tuc');


Route::group(['prefix' => 'admin', 'middleware' => 'auth.admin','check.role'], function () {
    // Các route của trang quản trị
    Route::get('/',[DashController::class,'index'])->name('admin-home');

    Route::get('/cong-viec-doanh-nghiep',[AdminJobController::class,'getAllMyJob'])->name('getAllMyJob');
    Route::get('/dang-bai-tuyen-dung',[AdminJobController::class,'addJob'])->name('addJob');
    Route::post('/dang-bai-tuyen-dung',[AdminJobController::class,'addJobPost'])->name('addJobPost');
    Route::get('/cap-nhat-bai-dang/{job_id}',[AdminJobController::class,'updateJob'])->name('updateJob');
    Route::put('/cap-nhat-bai-dang/{job_id}',[AdminJobController::class,'updateJobPost'])->name('updateJobPost');
    Route::post('/xoa-bai-dang/{job_id}',[AdminJobController::class,'deleteJob'])->name('deleteJob');



    Route::get('/tat-ca-ung-vien',[MemberController::class,'getAllMember'])->name('show-all-member');
    Route::get('/tat-ca-ung-vien-cong-ty',[MemberController::class,'getAllMyMember'])->name('show-all-my-member');
    Route::post('/xoa-ung-vien/{member_id}',[MemberController::class,'deleteMember'])->name('deleteMember');

    Route::prefix('vi-tri')->group(function () {
        Route::get('/',[PositionController::class,'getAllPositon'])->name('getAllPositon');
        Route::get('/them-moi-vi-tri',[PositionController::class,'addPosition'])->name('addPosition');
        Route::post('/them-moi-vi-tri',[PositionController::class,'addPositionPost'])->name('addPositionPost');
        Route::get('/chinh-sua-vi-tri/{position_id}',[PositionController::class,'updatePosition'])->name('updatePosition');
        Route::put('/chinh-sua-vi-tri/{position_id}',[PositionController::class,'updatePositionPost'])->name('updatePositionPost');
        Route::post('/xoa-vi-tri/{position_id}',[PositionController::class,'deletePosition'])->name('deletePosition');
    });

    Route::prefix('trinh-do')->group(function () {
        Route::get('/',[LevelController::class,'getAllLevel'])->name('getAllLevel');
        Route::get('/them-moi-trinh-do',[LevelController::class,'addLevel'])->name('addLevel');
        Route::post('/them-moi-trinh-do',[LevelController::class,'addLevelPost'])->name('addLevelPost');
        Route::get('/chinh-sua-trinh-do/{level_id}',[LevelController::class,'updateLevel'])->name('updateLevel');
        Route::put('/chinh-sua-trinh-do/{level_id}',[LevelController::class,'updateLevelPost'])->name('updateLevelPost');
        Route::post('/xoa-trinh-do/{level_id}',[LevelController::class,'deleteLevel'])->name('deleteLevel');
    });

    Route::prefix('the-loai')->group(function () {
        Route::get('/',[CategoryController::class,'getAllCategory'])->name('getAllCategory');
        Route::get('/them-moi-the-loai',[CategoryController::class,'addCategory'])->name('addCategory');
        Route::post('/them-moi-the-loai',[CategoryController::class,'addCategoryPost'])->name('addCategoryPost');
        Route::get('/chinh-sua-the-loai/{category_id}',[CategoryController::class,'updateCategory'])->name('updateCategory');
        Route::put('/chinh-sua-the-loai/{category_id}',[CategoryController::class,'updateCategoryPost'])->name('updateCategoryPost');
        Route::post('/xoa-the-loai/{category_id}',[CategoryController::class,'deleteCategory'])->name('deleteCategory');
    });

    Route::prefix('tin-tuc')->group(function () {
        Route::get('/',[ADNewsController::class,'getAllMyNews'])->name('getAllMyNews');
        Route::get('/dang-tin-tuc',[ADNewsController::class,'addNews'])->name('addNews');
        Route::post('/dang-tin-tuc',[ADNewsController::class,'addNewsPost'])->name('addNewsPost');
        Route::get('/cap-nhat-tin-tuc/{news_id}',[ADNewsController::class,'updateNews'])->name('updateNews');
        Route::put('/cap-nhat-tin-tuc/{news_id}',[ADNewsController::class,'updateNewsPost'])->name('updateNewsPost');
        Route::post('/xoa-tin-tuc/{news_id}',[ADNewsController::class,'deleteNews'])->name('deleteNews');
    });
});

Route::get('/location',[Locaticontroller::class ,'indexLocation']);
Route::get('get-districts/{province_id}', [Locaticontroller::class ,'getDistricts']);
Route::get('get-wards/{district_id}', [Locaticontroller::class ,'getWards']);


