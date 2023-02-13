<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


// Pages 
use App\Http\Controllers\Home\HomeSetupController;
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
/*
--------------- Start Admin Cotroller -----------------------
*/
Route::prefix('admin')->group(function (){

Route::get('/login', [AdminController::class,'Index'])->name('login_form');

Route::post('/login/owner', [AdminController::class,'Login'])->name('admin.login');

Route::get('/dashbord', [AdminController::class,'Dashbord'])->name('admin.dashbord')->middleware('admin');

Route::get('/logout', [AdminController::class,'Logout'])->name('admin.logout');

Route::get('/register', [AdminController::class,'AdminRegister'])->name('admin.register');

Route::post('/register/create', [AdminController::class,'AdminRegisterCreate'])->name('admin.register.create');


Route::get('/dashbord/profile', [AdminController::class,'profile'])->name('admin.profile');



} );

/*
---------------End Admin Cotroller -----------------------
*/



//----------------------------------------------------------------------------------------------------

/*
--------------- Start Admin Authentication -----------------------
*/


Route::middleware(['admin'])->group(function () {

    Route::prefix('admin')->group(function (){
        // Get Url
        Route::get('/dashbord/homesetup', [HomeSetupController::class,'index'])->name('admin.home.setup');
        //Post a data
        Route::post('/dashbord/homesetup/update', [HomeSetupController::class,'update'])->name('admin.home.setup.update');







    });

    
});






/*
--------------- Start Admin Authentication -----------------------
*/


Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/profile/info', [ProfileController::class, 'EditInfo'])->name('profile.edit.info');
});


// user Routes


require __DIR__.'/auth.php';
