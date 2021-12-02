<?php

use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FileManagerController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\SectorController;
use App\Http\Controllers\Admin\SectorControllerController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\SettingController;
use App\Http\Controllers\User\UserController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
Route::group(['middleware' => 'visitor'], function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/sector/{id}/{slug}', [HomeController::class, 'sector'])->name('home.sector');
    Route::get('/companies', [HomeController::class, 'company'])->name('home.company');
    Route::get('/news', [HomeController::class, 'news'])->name('home.news');

    Route::get('/news/{id}/{slug}', [HomeController::class, 'newsinner'])->name('home.newsinner');
    Route::get('/about-us', [HomeController::class, 'about'])->name('home.about');

    Route::get('/chairman', [HomeController::class, 'chairman'])->name('home.chairman');
    Route::get('/contact-us', [HomeController::class, 'contact'])->name('home.contact');
    Route::post('/contact-us', [HomeController::class, 'contactsend'])->name('home.contact.post');
        // Uses Auth Middleware
    });




Auth::routes();


Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {

Route::resource('dashboard',  UserDashboardController::class, ['names' => 'user.dashboard']);
//
Route::get('change-password',[SettingController::class,'changepassword'])->name('setting.change_password');
Route::post('update-password',[SettingController::class,'update_password'])->name('setting.update_password');

Route::resource('products', UserController::class, ['names' => 'user.products']);

});
// admin protected routes
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {

    Route::post('export',[DashboardController::class, 'get_student_data'])->name('data.export');

    Route::resource('dashboard',  DashboardController::class, ['names' => 'admin.dashboard']);
    Route::resource('users', AdminUserController::class,['names' => 'admin.user']);




    Route::get('download/{date}',[DashboardController::class, 'downloads'])->name('data.export_download');



    Route::resource('sliders', SliderController::class,['names' => 'admin.slider']);
    Route::resource('sectors', SectorController::class,['names' => 'admin.sector']);
    Route::resource('company', CompanyController::class,['names' => 'admin.company']);
    Route::resource('news', NewsController::class,['names' => 'admin.news']);
    Route::resource('pages', PageController::class,['names' => 'admin.page']);


   // Route::get('filemanager', [FileManagerController::class, 'index']);


});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
