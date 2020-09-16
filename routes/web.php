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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/up', 'user.updated');

Route::get('/choose', 'ChooseRole@index');

Route::get('/reg', function () {
    return view('auth.registerType');
})->name('reg');

Route::get('/school_login', function () {
    return view('auth.school_login');
})->name('school_login');

Route::get('/admin_login', function () {
    return view('auth.admin_login');
})->name('admin_login');

Route::get('/alluser', function () {

	$users = \App\User::all();

	return view('welcome',[
		'users' => $users
	]);

	
});

Route::get('/registerPartners', function () {
    return view('auth.registerPartners');
})->name('registerPartners');

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');

Route::get('/userPaySuccess', 'PaymentController@justpaid')->name('userPaySuccess');

Route::post('regPartnersPay', 'RegPartnerController@index')->name('regPartnersPay');


Auth::routes(['verify' => true]);

Route::get('/home', 'ChooseRole@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function(){

    Route::get('/', 'AdminPageController@home')->name('admin');
	Route::get('/accounts', 'AdminPageController@manage_accounts')->name('admin.accounts');
	Route::get('/accounts/details/{id}', 'AdminPageController@accounts_details')->name('account.details');
	Route::get('/partners', 'AdminPageController@partners_account')->name('admin.partners');
	Route::get('/gurantors', 'AdminPageController@gurantors_account')->name('admin.gurantors');
	Route::get('/users', 'AdminPageController@users_account')->name('admin.users');
	Route::get('/loan_applications', 'AdminPageController@loan_applications')->name('admin.loan_applications');
	Route::get('/application_details/{id}', 'AdminPageController@application_details')->name('admin.application_details');
	Route::get('/reports', 'AdminPageController@reports')->name('admin.reports');
	Route::get('/settings', 'AdminPageController@settings')->name('admin.settings');
	Route::get('/singprofile/{id}', 'AdminPageController@singprofile')->name('admin.singprofile');
	Route::get('/singpartner/{id}', 'AdminPageController@singpartner')->name('admin.singpartner');
	Route::post('/regUser', 'AdminPageController@regUser')->name('admin.regUser');
	Route::post('/regPartner', 'AdminPageController@regPartner')->name('admin.regPartner');
    
});



Route::group(['middleware' => ['auth','partner', 'verified'], 'prefix' => 'partners'], function(){

    Route::get('/', 'PartnersPageController@home')->name('partner');
	Route::get('/profile', 'PartnersPageController@profile')->name('partners.profile');
	Route::get('/portfolio', 'PartnersPageController@portfolio')->name('partners.portfolio');
	Route::get('/notifications', 'PartnersPageController@notifications')->name('partners.notifications');
	Route::get('/reports', 'PartnersPageController@reports')->name('partners.reports');
	Route::get('/investments', 'PartnersPageController@investments')->name('partners.investments');
	Route::post('/regCompanyProfile', 'PRegCompanyProfileController@store')->name('partners.regCompanyProfile');
	Route::post('/finReport', 'PRegCompanyProfileController@finReport')->name('partners.finReport');
	Route::get('/invest_subscribe', 'InvestmentSubscriptionController@index')->name('partners.invest_subscribe');
	
	

    
});

Route::group(['middleware' => ['auth','user', 'verified'], 'prefix' => 'user'], function(){

    Route::get('/', 'UserPageController@home')->name('user');
	Route::get('/profile', 'UserPageController@profile')->name('user.profile');
	Route::get('/loan', 'UserPageController@loans')->name('user.loans');
	Route::get('/notifications', 'UserPageController@notifications')->name('user.notifications');
	Route::get('/wallet', 'UserPageController@wallet')->name('user.wallet');
	Route::post('/regPinfo', 'UPersonalDataController@store')->name('user.regPinfo');
	Route::post('/regOffData', 'UOfficialDataController@store')->name('user.regOffData');
   
});

Route::group(['middleware' => ['auth','gurantor'], 'prefix' => 'gurantor'], function(){

    Route::get('/', function () { return view('gurantor.home'); })->name('gurantor');
	Route::get('/profile', function () { return view('gurantor.profile'); })->name('gurantor.profile');
	Route::get('/loan', function () { return view('gurantor.loans'); })->name('gurantor.loans');
	Route::get('/notifications', function () { return view('gurantor.notifications'); })->name('gurantor.notifications');
	Route::get('/wallet', function () { return view('gurantor.wallet'); })->name('gurantor.wallet');

    
});







