<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


/**
* Show api to store, check, retrieve, and remove a session instance
*
**/

Route::get('/store', function(){

	Session::put('keyName', 'valueName');
	return 'Data is stored';
	
	
});

Route::get('/check', function(){
	
	if(Session::has('keyName')){
		return 'Session data is stored';
	}
	else{
		return 'Session data is NOT stored';	
	}

});

Route::get('/retrieve', function(){
	
	$sessionQuery = Session::get('keyName');

	dd($sessionQuery);

});

Route::get('/remove', function(){

	$sessionRemoveQuery = Session::pull('keyName');

	return 'This data has been removed: ' . $sessionRemoveQuery;

});
