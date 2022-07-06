<?php

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
use App\Http\Controllers\Admin\{AuthController,ProfileController,UserController,ServiceController,NewsController,OurclientController};
use App\Http\Controllers\Frontend\{PageController};

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about-us', [PageController::class, 'aboutus'])->name('aboutus');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/services/{id}', [PageController::class, 'servicedetails'])->name('servicedetails');

Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/carrer', [PageController::class, 'carrer'])->name('carrer');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Route::get('/contact', function () {
//     return view('public/pages/contact');
// });

//===================Admin Panel====================//
Route::get('/admin/login', [AuthController::class, 'getLogin'])->name('getLogin');
Route::post('/admin/login', [AuthController::class, 'postLogin'])->name('postLogin');

Route::group(['middleware'=>['admin_auth']],function(){
    Route::group(['prefix' => '/admin'], function(){
        Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');
        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::get('/logout', [ProfileController::class, 'logout'])->name('logout');
    
        //==============service==============
        Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
        Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
        Route::post('/service/store', [ServiceController::class, 'store'])->name('service.store');
        Route::get('/service/edit/{id}', [ServiceController::class, 'edit'])->name('admin.service.edit');
        Route::put('/service/update/{id}', [ServiceController::class, 'update'])->name('admin.service.update');
        Route::post('/service/delete/{id}', [ServiceController::class, 'delete'])->name('admin.service.delete'); 
        
         //==============news==============
         Route::get('/news', [NewsController::class, 'index'])->name('news.index');
         Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
         Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');
         Route::get('/news/edit/{id}', [NewsController::class, 'edit'])->name('admin.news.edit');
         Route::put('/news/update/{id}', [NewsController::class, 'update'])->name('admin.news.update');
         Route::post('/news/delete/{id}', [NewsController::class, 'delete'])->name('admin.news.delete'); 
        
         //==============Ourclient==============
        Route::get('/ourclient', [OurclientController::class, 'index'])->name('ourclient.index');
        Route::get('/ourclient/create', [OurclientController::class, 'create'])->name('ourclient.create');
        Route::post('/ourclient/store', [OurclientController::class, 'store'])->name('ourclient.store');
        Route::get('/ourclient/edit/{id}', [OurclientController::class, 'edit'])->name('admin.ourclient.edit');
        Route::put('/ourclient/update/{id}', [OurclientController::class, 'update'])->name('admin.ourclient.update');
        Route::post('/ourclient/delete/{id}', [OurclientController::class, 'delete'])->name('admin.ourclient.delete'); 

    });   
});


//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
