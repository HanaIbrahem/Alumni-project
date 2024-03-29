<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// websites components
use App\Http\Controllers\component\NewsController;
use App\Http\Controllers\component\EventController;
use App\Http\Controllers\component\CareerController;
use App\Http\Controllers\component\GallaryController;
use App\Http\Controllers\component\alluserscontroller;

// admi reset passwordlik

use App\Http\Controllers\AuthAdmin\PasswordResetLinkControllerAdmin;
use App\Http\Controllers\AuthAdmin\NewPasswordController;
// Pages 
use App\Http\Controllers\Home\HomeSetupController;


// frontend controllers
use App\Http\Controllers\frontendController;

//comment controller
use App\Http\Controllers\CommentController;
// frontend search controller
use App\Http\Controllers\SearchController;
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

// Route::get('/register', [AdminController::class,'AdminRegister'])->name('admin.register');


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

// Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'superadmin']);
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
        Route::get('/dashbord/news/pin/{id}', [NewsController::class,'pin'])->name('news.pin');

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
        Route::get('/dashbord/event/pin/{id}', [EventController::class,'pin'])->name('event.pin');

        //Gallary controllers
        Route::get('/dashbord/gallary', [GallaryController::class,'index'])->name('gallary.get');
        Route::get('/dashbord/gallary/create', [GallaryController::class,'create'])->name('gallary.create');
        Route::post('/dashbord/gallary/store', [GallaryController::class,'store'])->name('gallary.store');
        Route::get('/dashbord/gallary/edit/{id}', [GallaryController::class,'edit'])->name('gallary.edit');
        Route::put('/dashbord/gallary/update', [GallaryController::class,'update'])->name('gallary.update');
        Route::get('/dashbord/gallary/destroy/{id}', [GallaryController::class,'destroy'])->name('gallary.destroy');
  

        // list all users 
        Route::get('/dashbord/users', [alluserscontroller::class,'index'])->name('allusers.get');
        Route::get('/dashbord/users/destroy/{id}', [alluserscontroller::class,'destroy'])->name('allusers.destroy');

        Route::get('/dashbord/users/post/', [alluserscontroller::class,'Postlist'])->name('posts.get');
        Route::get('/dashbord/users/post/{id}', [alluserscontroller::class,'Postshow'])->name('postsshow.get');

        
        Route::get('/dashbord/contact', [alluserscontroller::class,'ContactList'])->name('contact.get');
        Route::get('/dashbord/contact/{id}', [alluserscontroller::class,'ContacRemove'])->name('contactremove.get');


        Route::get('/dashbord/admins', [alluserscontroller::class,'AdminList'])->name('adminlist.get');
        Route::get('/dashbord/admin/register', [alluserscontroller::class,'AdminRegister'])->name('adminregister.get');

        Route::post('/dashbord/admin/create', [AdminController::class,'AdminRegisterCreate'])->name('admin.register.create');
        // to dlete admin
        Route::get('/dashbord/admins/{id}', [alluserscontroller::class,'AdminDestroy'])->name('adminlist.destroy')->middleware(['admin', 'superadmin']);

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


// Route::get('/', function () {
//     return view('frontend.index');
// })->name('/');


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
    Route::get('profile/update/email', [ProfileController::class, 'EmailUpdate'])->name('updateemail.get');
    Route::post('profile/update/email/stor', [ProfileController::class, 'EmailUpdateStor'])->name('updateemail.stor');

    //users contact list
    Route::get('profile/contactlink', [ProfileController::class, 'ContactLinks'])->name('contactlinks.form');
    Route::post('profile/contactlinkupdate', [ProfileController::class, 'updateemail'])->name('contactlinks.update');
    Route::get('profile/contactliste', [ProfileController::class, 'contactlist'])->name('usercontacts.get');
    Route::get('profile/contactliste/{id}', [ProfileController::class, 'contactremov'])->name('usercontactdestraoy');


    // post 
    //get all posts
    Route::get('posts', [ProfileController::class, 'ListPost'])->name('postlist.get');
    // get post page 
    Route::get('post', [ProfileController::class, 'MakePost'])->name('post.get');
    Route::post('post/stor', [ProfileController::class, 'PostStor'])->name('post.stor');
    Route::get('post/dele/{id}', [ProfileController::class, 'PostDelet'])->name('post.delet');
    Route::get('post/edit/{id}', [ProfileController::class, 'PostEdit'])->name('post.edit');
    Route::put('post/update', [ProfileController::class, 'PostUdate'])->name('post.update');





});


// foront end controller
Route::get('/',[frontendController::class,'index'])->name('/');

Route::prefix('/alumni/')->group(function (){
    
    
    // news routes 
    Route::get('news',[frontendController::class,'NewsPage'])->name('news.page');
    Route::get('news/{id}',[frontendController::class,'NewsShow'])->name('news.show');
    Route::get('news/catygory/{id}',[frontendController::class,'NewsShowGroutBy'])->name('news.groupby');

    Route::get('all/news',[frontendController::class,'LatestNews'])->name('recent.news');
    Route::get('important/news',[frontendController::class,'ImportantNews'])->name('important.news');

    
    // Career Roues
    Route::get('career',[frontendController::class,'CareerPpage'])->name('career.page');
    Route::post('career/catygory/',[frontendController::class,'CareerShowGroutBy'])->name('career.groupby');
    Route::get('career/{id}',[frontendController::class,'CareerShow'])->name('career.show');

    // Gallary routes
    Route::get('gallary',[frontendController::class,'GallaryPpage'])->name('gallary.page');
    Route::get('gallary/{type}',[frontendController::class,'GallaryGroupBY'])->name('gallary.groupby');

    // events routes
    Route::get('events',[frontendController::class,'EventsPage'])->name('event.page');
    Route::get('events/{id}',[frontendController::class,'EventsShow'])->name('event.show');

    // Alumni routes
    Route::get('AlumniStudents',[frontendController::class,'Alumni'])->name('alumni.page');
    Route::get('AlumniStudents/{type}',[frontendController::class,'AlumniGroupBy'])->name('alumnigroupby.page');
    Route::get('AlumniStudents/department/{dep}',[frontendController::class,'AlumniGroupByDep'])->name('alumnigroupbydep.page');

    // Alumni Contact page 
    Route::post('AlumniStudent/contact',[frontendController::class,'AlumniContact'])->name('alumnicontact.page');

    // show individual alumnis 
    Route::get('AlumniStudent/{id}',[frontendController::class,'AlumniShow'])->name('alumnishow.page');

    Route::get('Alumniposts',[frontendController::class,'AlumniPosts'])->name('alumnipost.page');
    Route::get('Alumniposts/{id}',[frontendController::class,'AlumniPostsshow'])->name('alumnipostshow.page');

    // about page 
    Route::get('about',[frontendController::class,'About'])->name('about.page');
    Route::get('cantact',[frontendController::class,'Contact'])->name('contact.page');
    Route::post('cantact/us',[frontendController::class,'ContactPost'])->name('contactpost.page');

    //coment routes 
    Route::post('comment',[CommentController::class,'store'])->name('comment.stor');
    Route::get('comment/{id}',[CommentController::class,'destroy'])->name('comment.destroy');

    // Search controller 
    Route::post('news/search',[SearchController::class,'NewsSearch'])->name('news.search');
    Route::post('event/search',[SearchController::class,'EventSearch'])->name('event.search');
    Route::post('career/search',[SearchController::class,'CareerSearch'])->name('career.search');
    Route::post('AlumniStudents/search',[SearchController::class,'AlumniSearch'])->name('alumni.search');

});


// user Routes


require __DIR__.'/auth.php';
