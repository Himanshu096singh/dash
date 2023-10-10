<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CodeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\StaticpageController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SupportfaqController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ErrorController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\CustomcodeController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\FixissueController;
use App\Http\Controllers\Admin\CkeditorController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\CourseController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();


Route::group(['middleware' => ['auth', 'isAdmin'], 'prefix' => 'admin'], function(){
    Route::resource('dashboard',AdminController::class);
    Route::resource('category', CategoryController::class);
    Route::post('category/faqs', [CategoryController::class, 'savefaq'])->name('category.faq');
    Route::post('category/formstatus', [CategoryController::class, 'formstatus'])->name('category.formstatus');
    Route::resource('subcategory', SubcategoryController::class);
    Route::post('subcategory/faqs', [SubcategoryController::class ,'savefaq'])->name('subcategory.faq');
    Route::resource('blog', BlogController::class);
    Route::post('blog/ajax',[BlogController::class, 'ajaxrequest'])->name('blog.ajax');
    Route::post('blog/faqs', [BlogController::class, 'faqs'])->name('blog.faq');
    Route::resource('product', ProductController::class);
    Route::post('product/ajax',[ProductController::class, 'ajaxrequest'])->name('product.ajax');
    Route::post('product/faqs',[ProductController::class, 'faqs'])->name('product.faq');
    Route::resource('user', UserController::class);
    Route::resource('supportfaq', SupportfaqController::class);
    Route::resource('staticpage', StaticpageController::class);
    Route::resource('seo', SeoController::class);
    Route::get('setting', [SettingController::class, 'create'])->name('setting');
    Route::get('code', [CodeController::class, 'create'])->name('code');
    Route::post('addcode',[CodeController::class,'store'])->name('addcode');
    Route::post('addsetting', [SettingController::class, 'setting'])->name('addsetting');
    Route::resource('comment', CommentController::class);
    Route::resource('error', ErrorController::class);
    Route::post('error/deletemultiple', [ErrorController::class, 'deletemultiple'])->name('error.deletemultiple');
    Route::get('add/customcode', [CustomcodeController::class, 'create'])->name('add.customcode');
    Route::post('add/customcode', [CustomcodeController::class, 'store'])->name('add.customcode');
    Route::resource('media', MediaController::class);
    Route::post('deletemultiple', [MediaController::class, 'deletemultiple'])->name('media.deletemultiple');
    Route::get('fixissue', [FixissueController::class, 'index'])->name('fixissue');
    Route::get('fixissue/destroy/{id}', [FixissueController::class, 'destroy'])->name('fixissue.destroy');
    Route::post('deletefixissue', [FixissueController::class, 'deletefixissue'])->name('deletefixissue');
    Route::post('ckupload', [CkeditorController::class, 'uploadimage'])->name('ckupload');
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('course', CourseController::class);
    Route::post('course/faqs', [CourseController::class, 'faqs'])->name('course.faq');
    Route::post('course/curriculam', [CourseController::class, 'curriculams'])->name('course.curriculam');
    Route::post('course/testimonial', [CourseController::class, 'testimonial'])->name('course.testimonial');
    Route::post('course/inclusion', [CourseController::class, 'inclusion'])->name('course.inclusion');
    Route::post('course/schedule', [CourseController::class, 'schedule'])->name('course.schedule');
});

 /*Route::group(['middleware' => ['auth', 'isUser'], 'prefix' => 'user'], function(){
   Route::resource('blog', BlogController::class)->except('destroy');
    Route::post('blog/ajax',[BlogController::class, 'ajaxrequest'])->name('blog.ajax');
    Route::post('blog/faqs', [BlogController::class, 'faqs'])->name('blog.faq');
    Route::resource('product', ProductController::class)->except('destroy');
    Route::post('product/ajax',[ProductController::class, 'ajaxrequest'])->name('product.ajax');
    Route::post('product/faqs',[ProductController::class, 'faqs'])->name('product.faq');
});*/

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/testimonial', [FrontController::class, 'testimonial'])->name('testimonial');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('support',[FrontController::class,'support'])->name('support');
Route::get('sitemap.xml',[FrontController::class,'sitemap'])->name('sitemap');
// Route::get('driver',[FrontController::class,'driver']);
Route::get('/blog/{slug}', [FrontController::class, 'blogdetail'])->name('blogdetail');
Route::get('{slug}/errors',[FrontController::class,'brandserror'])->name('errors');
Route::get('{slug}/{slug2}', [FrontController::class, 'doublefunction'])->name('double');
Route::get('{slug}',[FrontController::class, 'singlefunction'])->name('single');

Route::post('contactsubmit',[FrontController::class,'contactsubmit'])->name('contactsubmit');
Route::post('fixissue', [FrontController::class, 'fixissue']);
Route::post('bookconsultation', [FrontController::class, 'consultation']);
Route::post('searchbar', [FrontController::class, 'search']);