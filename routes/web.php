<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/personal', function () {
    return view('personal');
});

Route::get('blogs', 'BlogController@index');
Route::get('blog/{index}', 'BlogController@showBlog');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/support', function () {
    return view('support.support');
});

Route::get('/legal/GDPR', function () {
    return view('legal.GDPRPolicy');
});
Route::get('/legal/AML', function () {
    return view('legal.AMLPolicy');
});
Route::get('/legal/KYC', function () {
    return view('legal.KYC');
});

// Route::get('/developers', function () {
//     return view('developers.developers');
// });
Route::get('/developers', 'testController@index');


Auth::routes();
Route::view('/partner', 'home');
Route::view('/user', 'home');



//admin -> userControl
Route::get('admin/login', 'Auth\LoginController@showAdminLoginForm');
Route::get('admin/register', 'Auth\RegisterController@showAdminRegisterForm');
Route::post('admin/register', 'Auth\RegisterController@createAdminRegister');
Route::post('generaluser/register', 'Auth\RegisterController@createGeneralUser');

Route::view('/partner/register', 'auth.PartnerRegister')->name('partner.register');
Route::view('/partner/login', 'auth.PartnerLogin')->name('partner.login');
Route::post('/businessuser/register', 'Auth\RegisterController@createBusinessUser');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'admin', 'middleware' => ['role:Admin']], function () {
    Route::get('/', 'AdminController@index');
    Route::resource('/users', 'users\UserController');
    
});

Route::group(['prefix' => 'business', 'as' => 'business.', 'namespace' => 'business', 'middleware' => ['role:Business']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/integrate', 'IntegrateController@index')->name('integrate');
    Route::get('/customer', 'CustomerController@index')->name('customers');
    Route::get('/transaction', 'TransactiorController@index')->name('transaction');
    Route::get('/payment', 'PaymentController@index')->name('payment');
    Route::post('/payment/sendTransaction', 'PaymentController@sendTransaction')->name('payment.sendTransaction');
    Route::get('/financial', 'PaymentController@financial')->name('financial');
    Route::post('/financial/buyCrypto', 'PaymentController@buyCrypto')->name('financial.buyCrypto');
    Route::get('/financial/getUserInformation', 'PaymentController@getUserInformation')->name('financial.getUserInformation');
    Route::get('/setting', 'SettingController@index')->name('setting');
    Route::get('/setting/profile', 'SettingController@profilePage')->name('setting.profile');
    Route::get('/setting/identity', 'SettingController@identityPage')->name('setting.identity');
    Route::post('/setting/identity', 'SettingController@verifyIdentity')->name('setting.identity');
    Route::post('/setting/profile/create', 'SettingController@createProfile')->name('setting.profile.create');
    Route::get('/setting/payment', 'SettingController@paymentPage')->name('setting.payment');
    Route::post('/setting/payment', 'SettingController@verifyPayment')->name('setting.payment');
    
});

Route::group(['prefix' => 'personal', 'as' => 'personal.', 'namespace' => 'personal', 'middleware' => ['role:User']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/payment', 'PaymentController@index')->name('payment');
    Route::get('/setting', 'SettingController@index')->name('setting');
    
});



