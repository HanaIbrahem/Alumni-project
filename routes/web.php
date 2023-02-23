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


        Route::get('/dashbord/faculty', [HomeSetupController::class,'Faculty'])->name('admin.home.faculty');

        Route::post('/dashbord/faculty/add', [HomeSetupController::class,'FacultyAdd'])->name('admin.faculty.add');
        Route::get('/dashbord/faculty/Edit/{id}', [HomeSetupController::class,'FacultyEdit'])->name('admin.faculty.edit');
        Route::put('/dashbord/faculty/update', [HomeSetupController::class,'FacultyUpdate'])->name('admin.faculty.update');

        Route::get('/dashbord/faculty/delet/{id}', [HomeSetupController::class,'DeletFaculty'])->name('admin.faculty.delete');

        // Department Routes 
        Route::get('/dashbord/department/add/{id}', [HomeSetupController::class,'DepartmentAdd'])->name('admin.department.add');
        Route::post('/dashbord/department/store', [HomeSetupController::class,'DepartmentStor'])->name('admin.department.store');

        Route::get('/dashbord/department/edit/{id}', [HomeSetupController::class,'DepartmentEdit'])->name('admin.department.edit');
        Route::put('/dashbord/department/update', [HomeSetupController::class,'DepartmentUpdate'])->name('admin.department.update');

        Route::get('/dashbord/department/delet/{id}', [HomeSetupController::class,'DepartmentDelet'])->name('admin.department.delete');

    });

    
});






/*
--------------- Start Admin Authentication -----------------------
*/

Route::get('/r', function () {
    return view('d.h');
});

Route::post('/test', [HomeSetupController::class,'test'])->name('test');

//get department for json


Route::get('/', function () {
    return view('frontend.index');
})->name('/');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/profile/info', [ProfileController::class, 'EditInfo'])->name('profile.edit.info');
    Route::put('/profile/update/info', [ProfileController::class, 'UpdateInfo'])->name('profile.update.info');

});


// user Routes


require __DIR__.'/auth.php';
