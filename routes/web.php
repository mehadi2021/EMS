<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\backend\ImageController;
use App\Http\Controllers\backend\EventController;
use App\Http\Controllers\backend\ClientController;
use App\Http\Controllers\backend\MailController;
use App\Http\Controllers\backend\TeamController;
use App\Http\Controllers\backend\ShowContactUsController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\InvoiceController;
use App\Http\Controllers\backend\ReportController;


use App\Http\Controllers\frontend\ShowServiceController;
use App\Http\Controllers\frontend\PagesController;
use App\Http\Controllers\frontend\PaymentController;
use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\EventDetailsController;
use App\Http\Controllers\frontend\ContactUsController;
use App\Http\Controllers\frontend\SpeicalController;
use App\Http\Controllers\frontend\AboutUsController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\frontend\BookingController;
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


//Website Routes

Route::get('/',[PagesController::class,'home'])->name('user.home');
Route::get('/registration',[UserController::class,'create'])->name('user.registration');
Route::post('/registration',[UserController::class,'registration'])->name('user.registration.store');

Route::get('/login',[UserController::class,'page'])->name('user.login');

Route::post('/login/post',[UserController::class,'userLogin'])->name('user.do.login');
Route::get('/user/logout',[UserController::class,'userLogout'])->name('user.logout');


Route::get('/show-event',[EventDetailsController::class,'show'])->name('event.show');

Route::get('/show-image',[ImageController::class,'show'])->name('image.show');
//Event Routes
Route::get('/events',[EventDetailsController::class,'create'])->name('frontend.event');
Route::get('/events/marriage event',[PagesController::class,'marriage'])->name('frontend.marriage');
Route::get('/events/birthday event',[PagesController::class,'birthday'])->name('frontend.birthday');
Route::get('/events/office event',[PagesController::class,'office'])->name('frontend.office');
Route::get('/events/special-event',[PagesController::class,'special-event'])->name('frontend.special-event
');

Route::get('/events-wise-service/{id}',[PagesController::class,'eventWiseService'])->name('eventWiseService');
Route::get('/events-wise-service/2/worker view',[TeamController::class,'team_list'])->name('user.team.list');


//Contact Us
Route::get('/contact-us',[ContactUsController::class,'create'])->name('frontend.contact-us');
Route::post('/contact-us',[ContactUsController::class,'store'])->name('frontend.contact-us.post');

//Special Event
Route::get('/special',[SpecialController::class,'create'])->name('frontend.special-event');

//About Us
Route::get('/about-us',[AboutUsController::class,'create'])->name('frontend.about-us');

//User profile info

Route::get('/auth()-user()-name',[UserController::class,'view'])->name('frontend.profile');

//Show Service

Route::get('/showservice',[ShowServiceController::class,'view'])->name('frontend.');
Route::get('/showservice/worker view/{id}',[BookingController::class,'team'])->name('team.info');
Route::get('/showservice/booking/cbooking',[BookingController::class,'confirm_booking'])->name('booking.c_booking');
Route::get('/showservice/dgetbudget resarvation/{id}',[BookingController::class,'budget'])->name('budget.info');
Route::post('/showservice/dgetbudget resarvation',[BookingController::class,'store'])->name('budget.store');
//payment
Route::get('/payment/{id}',[PaymentController::class,'payment'])->name('website.pages.payment');
Route::post('/payment',[PaymentController::class,'store'])->name('payment.store');
Route::get('/payment list',[PaymentController::class,'view'])->name('payment.list');

Route::get('/booking list/{$di}',[BookingController::class,'booking_list'])->name('booking.list');






//**************************************************************************************/
//Admin Routes

Route::get('/admin/login', [AdminUserController::class,'login'])->name('admin.login');
Route::post('/admin/login', [AdminUserController::class,'dologin'])->name('admin.do.login');


Route::group(['prefix'=>'admin', 'middleware'=>['auth','admin']],function(){



//  Route::get('/', function () {
//         return view('admin.layout.home');
//      })->name('home')->middleware('auth');
// Route::get('/login', [AdminUserController::class,'login'])->name('admin.login');
Route::get('/logout', [AdminUserController::class,'logout'])->name('admin.logout');
Route::get('/',[HomeController::class,'home'])->name('home');

// alada kore korlew hoy kintu amra group e korbo subidhar jonno Route::get('/',[HomeController::class,'home'])->name('home')->middleware('auth');


Route::get('/event',[EventController::class,'create'])->name('event');
Route::post('/event',[EventController::class,'store'])->name('event');
Route::get('/event-list',[EventController::class,'list'])->name('event.list');

Route::get('/event-list/delete/{id}',[EventController::class,'delete'])->name('event.delete');
Route::get('/event-list/view/{id}',[EventController::class,'detail'])->name('event.detail');
Route::get('/event-list/edit/{id}',[EventController::class,'edit'])->name('event.edit');
Route::post('/event-list/edit/{id}',[EventController::class,'update'])->name('event.update');
Route::get('/event-list/submit',[EventController::class,'Search'])->name('event.search');

Route::get('/client',[ClientController::class,'client'])->name('client');

Route::get('/email',[MailController::class,'email'])->name('email');
Route::post('/email',[MailController::class,'email_store'])->name('store');
Route::get('/email',[MailController::class,'list'])->name('email.list');

Route::get('/team',[TeamController::class,'create'])->name('team');
Route::post('/team',[TeamController::class,'store'])->name('team');
Route::get('/team-view',[TeamController::class,'list'])->name('team.list');
Route::get('/team-view/delete/{id}',[TeamController::class,'delete'])->name('team.delete');
Route::get('/team-view/view/{id}',[TeamController::class,'detail'])->name('team.detail');
Route::get('/team-view/edit/{id}',[TeamController::class,'edit'])->name('team.edit');
Route::put('/team-view/update/{id}',[TeamController::class,'update'])->name('team.upadte');
//contact us route
Route::get('/message',[ShowContactUsController::class,'message_view'])->name('backend.contact.view');
Route::get('/message/delete/{id}',[ShowContactUsController::class,'delete'])->name('backend.contact.delete');
//services route

Route::get('/service',[ServiceController::class,'create'])->name('backend.service.create');
Route::post('/service',[ServiceController::class,'store'])->name('backend.service.store');
Route::get('/service list',[ServiceController::class,'list'])->name('backend.service.list');
Route::get('/team-list/view/{id}',[ServiceController::class,'view'])->name('backend.service.view');
Route::get('/team-list/delete/{id}',[ServiceController::class,'delete'])->name('backend.service.delete');
Route::get('/team-list/edit/{id}',[ServiceController::class,'edit'])->name('backend.service.edit');
Route::put('/team-list/update/{id}',[ServiceController::class,'update'])->name('backend.service.update');
});


Route::group(['middleware'=>'user'],function (){

//cart
Route::get('/cart',[CartController::class,'cart'])->name('cart');
Route::get('/delete/{id}',[CartController::class,'delete'])->name('cart.clear');
Route::get('/clear',[CartController::class,'destroy'])->name('cart.delete');
Route::get('/addToCart/{id}',[CartController::class,'addToCart'])->name('addToCart');

Route::post('/updateCart',[CartController::class,'updateCart'])->name('updateCart');
Route::get('/checkout',[CartController::class,'checkout'])->name('cart.checkout');

//order view
Route::get('/order',[OrderController::class,'OrderView'])->name('cart.order.view');
Route::get('/booking info',[OrderController::class,'BookingInfo'])->name('booking.info');
Route::get('/order/view/{id}',[InvoiceController::class,'orderDetails'])->name('order.view');

//invoice
Route::get('/invoice', [InvoiceController::class,'invoice'])->name('admin.invoice');


Route::get('/create/image',[ImageController::class,'create'])->name('admin.create-gallery');
Route::post('/image/store',[ImageController::class,'store'])->name('admin.image.store');
Route::get('/image',[ImageController::class,'image'])->name('admin.image.list');
});

//orderDetails
Route::get('/orderview/{id}',[UserController::class,'orderDetails'])->name('orderView');

//Report
Route::get('/report',[ReportController::class,'report'])->name('reportView');
Route::get('/report/search',[ReportController::class,'reportsearch'])->name('reportsearch');
