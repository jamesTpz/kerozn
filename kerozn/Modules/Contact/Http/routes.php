<?php

Route::group(['middleware' => 'web', 'prefix' => 'contact', 'namespace' => 'Kerozn\\Modules\Contact\Http\Controllers'], function()
{
	Route::get('/', [
		'as' => 'kerozn.public.contact.show',
		'uses' => 'Front\ContactController@create',
	]);
	Route::post('/', [
		'as' => 'kerozn.public.contact.submit',
		'uses' => 'Front\ContactController@store',
	]);
});
