<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\frontend\payController;
use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\frontend\aboutController;
use App\Http\Controllers\frontend\termsController;
use App\Http\Controllers\frontend\contactController;
use App\Http\Controllers\frontend\privacyController;
use App\Http\Controllers\frontend\error404Controller;
use App\Http\Controllers\frontend\RoutineController; 
use App\Http\Controllers\frontend\ShowPostController;
use App\Http\Controllers\frontend\admissionController;
use App\Http\Controllers\frontend\pay\ZakatController;
use App\Http\Controllers\frontend\user\UserController;
use App\Http\Controllers\frontend\pay\ExamFeeController;
use App\Http\Controllers\frontend\pay\DonationController;
use App\Http\Controllers\frontend\parent\ParentController;
use App\Http\Controllers\frontend\user\UserPostController;
use App\Http\Controllers\frontend\pay\admissionFeesPayment;
use App\Http\Controllers\frontend\teacher\TeacherController;
use App\Http\Controllers\frontend\parent\ParentPostController;
use App\Http\Controllers\frontend\examControllers\OneController;
use App\Http\Controllers\frontend\examControllers\TwoController;
use App\Http\Controllers\frontend\teacher\TeacherPostController;
use App\Http\Controllers\frontend\examControllers\PlayController;
use App\Http\Controllers\frontend\examControllers\HifjoController;
use App\Http\Controllers\frontend\examControllers\ThreeController;
use App\Http\Controllers\frontend\examControllers\NajeraController;
use App\Http\Controllers\frontend\examControllers\ResultController;
use App\Http\Controllers\frontend\examControllers\NarsaryController;
use App\Http\Controllers\frontend\pay\StudentSalaryOfMonthController;
use App\Http\Controllers\frontend\etc\Annual_income_and_expenditure_accountController;
use App\Http\Controllers\frontend\HafezListController;

Route::get('/',[homeController::class,'index']);

Route::middleware(['auth','role:user', 'verified'])->group(function(){
    Route::get('dashboard',[UserController::class,'index'])->name('dashboard');
    Route::resource('/user-post', UserPostController::class);
 });


//  Route::get('/link', function(){
//     Artisan::call('storage:link');
//  });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
// Multi Auth System Route is here start

Route::middleware(['auth','role:parent'])->group(function(){
    Route::get('/parent/dashboard',[ParentController::class,'index'])->name('parent.dashboard');
    Route::resource('/parent-post', ParentPostController::class);
 });
 Route::middleware(['auth','role:teacher'])->group(function(){
    Route::get('/teacher/dashboard',[TeacherController::class,'index'])->name('teacher.dashboard');
    Route::resource('/teacher-post', TeacherPostController::class);
 });
// Multi Auth System Route is here end
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/annual-income-and-expend',[Annual_income_and_expenditure_accountController::class,'index'])->name('annul');
Route::get('/error',[error404Controller::class,'index']);
Route::get('/exam/fee',[ExamFeeController::class,'index'])->name('exam.fee');
Route::get('/donation', [DonationController::class, 'index'])->name('donation.index');
Route::get('/contact',[contactController::class,'index'])->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/about',[aboutController::class,'index']);
Route::get('/admission',[admissionController::class,'index'])->name('admission');
Route::get('/pay', [payController::class, 'index'])->name('pay');
Route::get('/privacy',[privacyController::class,'index']);
Route::get('/admission/fee',[admissionFeesPayment::class,'index'])->name('admission.fee');
Route::get('/routine',[RoutineController::class,'index'])->name('routine');
Route::get('/salary',[StudentSalaryOfMonthController::class,'index'])->name('salary_of_students');
Route::get('/show/post',[ShowPostController::class,'index'])->name('show.post');
Route::get('/terms',[termsController::class,'index']);
Route::get('/zakat',[ZakatController::class,'index'])->name('zakat');
// Payment option Route is here start 
Route::post('/admission',[admissionController::class,'store'])->name('admission.store');
Route::post('/admission/fees/store',[admissionFeesPayment::class,'store'])->name('admission_fee.store');
Route::post('/donation/store', [DonationController::class, 'store'])->name('donation.store');
Route::post('/exam/store', [ExamFeeController::class, 'store'])->name('exam_fee.store');
Route::post('/salary/store', [StudentSalaryOfMonthController::class, 'store'])->name('salary.store');
Route::post('/zakat/store',[ZakatController::class,'store'])->name('zakat.store');

// All Class Examination Result Sit Route Is Here 
Route::get('/result',[ResultController::class,'index']);
Route::get('/play',[PlayController::class,'index'])->name('play.result');
Route::get('/narsary',[NarsaryController::class,'index'])->name('narsary.result');
Route::get('/one',[OneController::class,'index'])->name('one.result');
Route::get('/two',[TwoController::class,'index'])->name('two.result');
Route::get('/three',[ThreeController::class,'index'])->name('three.result');
Route::get('/najera',[NajeraController::class,'index'])->name('najera.result');
Route::get('/hifjo',[HifjoController::class,'index'])->name('hifjo.result');
Route::get('/hafez-list',[HafezListController::class,'index'])->name('hafez.list');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/facebook_login.php';