<?php  



Route::group(['middleware'=>['web']], function(){
	Route::get('/', function(){
	return view('welcome');
	});		

	Route::post('/signup',[
		'users'=>'UserController@postSignUp',
		'as'=>'signup'
		
		]);
});