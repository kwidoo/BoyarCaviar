<?php

Route::group(['middleware' => ['web']], function() {
	Route::get('/', [ 
		'uses' => 'Kwidoo\BoyarCaviar\Controllers\FrontendController@index', 
		'as' => 'index']);

	Route::post('/buy', [ 
		'uses' => 'Kwidoo\BoyarCaviar\Controllers\FrontendController@buy', 
		'as' => 'buy']);

	Route::post('/delete', [ 
		'uses' => 'Kwidoo\BoyarCaviar\Controllers\FrontendController@delete', 
		'as' => 'delete']);

	Route::post('/update', [ 
		'uses' => 'Kwidoo\BoyarCaviar\Controllers\FrontendController@update', 
		'as' => 'update']);

	Route::get('/my-cart', [ 
		'uses' => 'Kwidoo\BoyarCaviar\Controllers\FrontendController@showCart', 
		'as' => 'my-cart']);

	Route::get('/checkout', [ 
		'uses' => 'Kwidoo\BoyarCaviar\Controllers\FrontendController@checkout', 
		'as' => 'checkout']);

	Route::post('/checkout', [ 
		'uses' => 'Kwidoo\BoyarCaviar\Controllers\FrontendController@checkoutSave', 
		'as' => 'checkout']);

	Route::get('/empty', [ 
		'uses' => 'Kwidoo\BoyarCaviar\Controllers\FrontendController@empty', 
		'as' => 'empty']);

	Route::get('sturgeon',[ 
		'uses' => 'Kwidoo\BoyarCaviar\Controllers\FrontendController@sturgeon', 
		'as' => 'sturgeon']);
	Route::get('oscietra-classic',[ 
		'uses' => 'Kwidoo\BoyarCaviar\Controllers\FrontendController@classic', 
		'as' => 'oscietra.classic']);
	Route::get('oscietra-royal',[ 
		'uses' => 'Kwidoo\BoyarCaviar\Controllers\FrontendController@royal', 
		'as' => 'oscietra.royal']);
	Route::get('sevruga',[ 
		'uses' => 'Kwidoo\BoyarCaviar\Controllers\FrontendController@sevruga', 
		'as' => 'sevruga']);
	Route::get('beluga',[ 
		'uses' => 'Kwidoo\BoyarCaviar\Controllers\FrontendController@beluga', 
		'as' => 'beluga']);

	Route::get('invoice',[ 
		'uses' => 'Kwidoo\BoyarCaviar\Controllers\FrontendController@invoice', 
		'as' => 'invoice']);








	Route::get('email-verification/error', app()->getNamespace().'Http\Controllers\Auth\RegisterController@getVerificationError')
        ->name('email-verification.error');

    Route::get('email-verification/check/{token}', app()->getNamespace().'Http\Controllers\Auth\RegisterController@getVerification')
        ->name('email-verification.check');

	Route::group(['middleware' => ['isVerified']], function() {
		 Route::get('/my-account', [ 
		'uses' => 'Kwidoo\BoyarCaviar\Controllers\FrontendController@index', 
		'as' => 'my-account']);
		 Route::get('/my-whishlist', [ 
		'uses' => 'Kwidoo\BoyarCaviar\Controllers\FrontendController@index', 
		'as' => 'my-whishlist']);
	});



});
