<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'RedirectController@redirect');

Route::get('ru', ['as' => 'ru', function () {
        return view('ru.home');
}]);


Route::get('en', ['as' => 'en', function () {
	return view('en.home');
}]);


Route::get('{lang}/{unit}', [
  'as' => 'section', 'uses' => 'PageController@root'
]);



Route::get('/survey', ['as' => 'survey', function() {
	return view('survey');
}]);



Route::get('/{lang}/{unit}/{slug}', [
  'as' => 'article', 'uses' => 'ArticlesController@show'
]);

// Contact

Route::get('/contact', ['as' => 'contacten', function () {
	return view('en.contact');
}]);
Route::post('/contact', ['as' => 'contactensend', 'uses' => 'MailController@contactEn']);


Route::get('/contact-ru', ['as' => 'contactru', function () {
	return view('ru.contact');
}]);
Route::post('/contact-ru', ['as' => 'contactrusend', 'uses' => 'MailController@contactRu']);

// Survey

Route::post('/survey', ['as' => 'surveyRu', 'uses' => 'MailController@surveyRu']);
Route::post('/survey-en', ['as' => 'surveyEn', 'uses' => 'MailController@surveyEn']);


//Admin panel 

Route::get('all', [
  'as' => 'all', 'uses' => 'ArticlesController@index'
])->middleware('auth');

Route::get('published', [
  'as' => 'published', 'uses' => 'ArticlesController@showPublished'
]);

Route::get('unpublished', [
  'as' => 'unpublished', 'uses' => 'ArticlesController@showUnpublished'
]);

Route::get('create', [
  'as' => 'add', 'uses' => 'ArticlesController@create'
]);

Route::get('edit-{id}', [
  'as' => 'edit', 'uses' => 'ArticlesController@edit'
]);

Route::post('/store', [
  'as' => 'store', 'uses' => 'ArticlesController@store'
]);

Route::delete('delete-{id}', [
  'as' => 'delete', 'uses' => 'ArticlesController@destroy'
]);
 
Route::patch('update-{id}', [
  'as' => 'update', 'uses' => 'ArticlesController@update'
]);



Route::resource('admin','ArticlesController');



//Units
/*
Route::get('About-the-problem-of-aphasia', [
  'as' => 'problem', 'uses' => 'ArticlesController@create'
]);

Route::get('For-professionals-and-students', [
  'as' => 'professionals', 'uses' => 'ArticlesController@create'
]);

Route::get('For-patient-and-their-families', [
  'as' => 'patient', 'uses' => 'ArticlesController@create'
]);

Route::get('About-the-project', [
  'as' => 'project', 'uses' => 'ArticlesController@create'
]);

*/




//Auth::routes();

 // Authentication Routes...
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    //Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    //Route::post('register', 'Auth\RegisterController@register');

    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Route::get('/home', 'HomeController@index');
