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
use App\Http\Controllers\Admin\FormController;
use App\Http\Controllers\Admin\FounderController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\WorkshopController;
use App\Http\Controllers\Admin\CoursemediaController;
use App\Http\Controllers\payment\PaymentController;



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
    Route::post('course/dates', [CourseController::class, 'dates'])->name('course.dates');
    Route::post('course/media', [CourseController::class, 'media'])->name('course.media');
    Route::post('course/delete', [CourseController::class, 'media_delete'])->name('course.media.destroy');
    Route::get('course/media_edit/{id}', [CourseController::class, 'media_edit'])->name('course.media.edit');
    Route::post('course/updatemedia', [CourseController::class, 'media_update'])->name('course.media.updatemedia');
    
    Route::get('accountsetting', [AdminController::class, 'accountsetting'])->name('accountsetting');
    Route::resource('forms', FormController::class);
    Route::resource('founders', FounderController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('enquiry', EnquiryController::class);
    Route::resource('workshop', WorkshopController::class);
   

    Route::post('passwordupdate',[AdminController::class, 'passwordupdate'])->name('passwordupdate');
});

 /*Route::group(['middleware' => ['auth', 'isUser'], 'prefix' => 'user'], function(){
   Route::resource('blog', BlogController::class)->except('destroy');
    Route::post('blog/ajax',[BlogController::class, 'ajaxrequest'])->name('blog.ajax');
    Route::post('blog/faqs', [BlogController::class, 'faqs'])->name('blog.faq');
    Route::resource('product', ProductController::class)->except('destroy');
    Route::post('product/ajax',[ProductController::class, 'ajaxrequest'])->name('product.ajax');
    Route::post('product/faqs',[ProductController::class, 'faqs'])->name('product.faq');
});*/
Route::get('razorpay-payment', [PaymentController::class, 'index']);
Route::post('razorpay-payment', [PaymentController::class, 'store'])->name('razorpay.payment.store');

Route::get('paypal', [PayPalController::class, 'index'])->name('paypal');
Route::get('paypal/payment', [PayPalController::class, 'payment'])->name('paypal.payment');
Route::get('paypal/payment/success', [PayPalController::class, 'paymentSuccess'])->name('paypal.payment.success');
Route::get('paypal/payment/cancel', [PayPalController::class, 'paymentCancel'])->name('paypal.payment/cancel');

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/testimonial', [FrontController::class, 'testimonial'])->name('testimonial');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/gallery',[FrontController::class,'gallery'])->name('gallery');
Route::get('/gallery',[FrontController::class,'gallery'])->name('gallery');
Route::get('/booking',[FrontController::class,'booking'])->name('booking');
Route::get('sitemap.xml',[FrontController::class,'sitemap'])->name('sitemap');
Route::get('/blog/{slug}', [FrontController::class, 'blogdetail'])->name('blogdetail');
Route::get('/{slug}/booking',[FrontController::class,'bookingform'])->name('bookingform');
Route::get('{slug}',[FrontController::class, 'coursedetails'])->name('coursedetails');

Route::post('contactsubmit',[FrontController::class,'contactsubmit'])->name('contactsubmit');
Route::post('enquiry', [FrontController::class, 'enquiry'])->name('enquiry');
Route::post('bookconsultation', [FrontController::class, 'consultation']);
Route::post('searchbar', [FrontController::class, 'search']);