<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// websites components
use App\Http\Controllers\component\NewsController;
use App\Http\Controllers\component\EventController;
use App\Http\Controllers\component\CareerController;
use App\Http\Controllers\component\GallaryController;

// admi reset passwordlik

use App\Http\Controllers\AuthAdmin\PasswordResetLinkControllerAdmin;
use App\Http\Controllers\AuthAdmin\NewPasswordController;
// Pages 
use App\Http\Controllers\Home\HomeSetupController;


// frontend controllers
use App\Http\Controllers\frontendController;

/*


|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| github puch link https://github.com/HanaIbrahem/Alumni-project.git
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

// forget password Link
Route::get('forgot-password', [PasswordResetLinkControllerAdmin::class, 'create'])
->name('admin.password.request');

Route::post('forgot-password', [PasswordResetLinkControllerAdmin::class, 'store'])
->name('admin.password.email');

// Reset Password form
Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
->name('admin.password.reset');

Route::post('reset-password', [NewPasswordController::class, 'store'])
->name('admin.password.store');

Route::get('/dashbord/profile', [AdminController::class,'profile'])->name('admin.profile')->middleware('admin');



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

        // update admin informaiton

        Route::get('/dashbord/profile/edit', [AdminController::class,'ProfileEdit'])->name('admin.profile.edit');

        Route::put('/dashbord/profile/store', [AdminController::class,'ProfileUpdate'])->name('admin.profile.update');

        //update admins password 
        Route::get('/dashbord/profile/change-password', [AdminController::class,'ProfileChangePassword'])->name('admin.changepasswor');

        Route::put('/dashbord/profile/change-password/update', [AdminController::class,'ProfileChangePasswordUpdate'])->name('admin.changepassword.update');


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



        // componenet routes 

        //news controllers
        Route::get('/dashbord/news', [NewsController::class,'index'])->name('news.get');
        Route::get('/dashbord/news/create', [NewsController::class,'create'])->name('news.create');
        Route::post('/dashbord/news/store', [NewsController::class,'store'])->name('news.store');
        Route::get('/dashbord/news/edit/{id}', [NewsController::class,'edit'])->name('news.edit');
        Route::put('/dashbord/news/update', [NewsController::class,'update'])->name('news.update');
        Route::get('/dashbord/news/destroy/{id}', [NewsController::class,'destroy'])->name('news.destroy');


        //career controllers
        Route::get('/dashbord/career', [CareerController::class,'index'])->name('career.get');
        Route::get('/dashbord/career/create', [CareerController::class,'create'])->name('career.create');
        Route::post('/dashbord/career/store', [CareerController::class,'store'])->name('career.store');
        Route::get('/dashbord/career/edit/{id}', [CareerController::class,'edit'])->name('career.edit');
        Route::put('/dashbord/career/update', [CareerController::class,'update'])->name('career.update');
        Route::get('/dashbord/career/destroy/{id}', [CareerController::class,'destroy'])->name('career.destroy');


        //event controllers
        Route::get('/dashbord/event', [EventController::class,'index'])->name('event.get');
        Route::get('/dashbord/event/create', [EventController::class,'create'])->name('event.create');
        Route::post('/dashbord/event/store', [EventController::class,'store'])->name('event.store');
        Route::get('/dashbord/event/edit/{id}', [EventController::class,'edit'])->name('event.edit');
        Route::put('/dashbord/event/update', [EventController::class,'update'])->name('event.update');
        Route::get('/dashbord/event/destroy/{id}', [EventController::class,'destroy'])->name('event.destroy');

        //Gallary controllers
        Route::get('/dashbord/gallary', [GallaryController::class,'index'])->name('gallary.get');
        Route::get('/dashbord/gallary/create', [GallaryController::class,'create'])->name('gallary.create');
        Route::post('/dashbord/gallary/store', [GallaryController::class,'store'])->name('gallary.store');
        Route::get('/dashbord/gallary/edit/{id}', [GallaryController::class,'edit'])->name('gallary.edit');
        Route::put('/dashbord/gallary/update', [GallaryController::class,'update'])->name('gallary.update');
        Route::get('/dashbord/gallary/destroy/{id}', [GallaryController::class,'destroy'])->name('gallary.destroy');
    });

    
});






/*
--------------- Start Admin Authentication -----------------------
*/

Route::get('/r', function () {
    return view('d.h');
});
Route::get('/r/upload', function () {
    return view('d.h');
})->name('upload');


Route::post('/test', [HomeSetupController::class,'test'])->name('test');

//get department for json


Route::get('/', function () {
    return view('frontend.index');
})->name('/');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile/change-password', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/change-password', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/delete', [ProfileController::class, 'getdestroy'])->name('profile.destroy.get');
    Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // user information
    Route::get('/profile/info', [ProfileController::class, 'EditInfo'])->name('profile.edit.info');
    Route::put('/profile/update/info', [ProfileController::class, 'UpdateInfo'])->name('profile.update.info');

    // User second email

    Route::get('profile/second-email', [ProfileController::class, 'showForm'])->name('second-email.form');
    Route::post('profile/second-email', [ProfileController::class, 'updateemail'])->name('second-email.update');
    

    


});


// foront end controller

Route::prefix('soran.edu.iq/alumni/')->group(function (){

    Route::get('news',[frontendController::class,'NewsPage'])->name('news.page');
    Route::get('news/{id}',[frontendController::class,'NewsShow'])->name('news.show');

});


// user Routes


require __DIR__.'/auth.php';
