<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\admin\total\TotalAmountController;
use App\Http\Controllers\frontend\admin\AdminController;
use App\Http\Controllers\frontend\admin\DonorController;
use App\Http\Controllers\frontend\admin\ImgPostController;
use App\Http\Controllers\frontend\admin\DonorListController;
use App\Http\Controllers\frontend\admin\RoleUpdateController;
use App\Http\Controllers\frontend\admin\Add_new_annualController;

// Multi Auth System Route is here start
Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('/user/dashboard',[AdminController::class,'user'])->name('admin.user');
    Route::get('/exam/fees/dashboard',[AdminController::class,'exam'])->name('admin.exam_fee');
    Route::get('/admission/fees/dashboard',[AdminController::class,'admission_fee'])->name('admin.admission_fee');
    Route::get('/student/salary/dashboard',[AdminController::class,'salary'])->name('admin.student_salary');
    Route::get('/admin/contact',[AdminController::class,'contact'])->name('admin.contact');
    Route::get('/admin/donation',[AdminController::class,'donation'])->name('admin.donation');
    Route::get('/admin/zakat',[AdminController::class,'zakat'])->name('admin.zakat');
    Route::resource('/donor', DonorController::class);
    Route::resource('/admin-image-post', ImgPostController::class);
    Route::resource('/annual/account', Add_new_annualController::class);
    Route::resource('/total', TotalAmountController::class);
    Route::put('/update-role/{id}', [RoleUpdateController::class, 'updateRole'])->name('update.role');
    Route::get('/role-edit/{id}', [RoleUpdateController::class, 'edit'])->name('role.edit');
    
 });

 Route::get('/donor-name/list',[DonorListController::class,'donor_name_list'])->name('donor-name.list');