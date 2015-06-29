<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get( 'auth/register', [ 'as' => 'auth.register', 'uses' => 'Auth\AuthController@register' ] );
Route::post( 'auth/register', 'Auth\AuthController@process_register' );
Route::get( 'auth/login', [ 'as' => 'auth.login', 'uses' => 'Auth\AuthController@login' ] );
Route::post( 'auth/login', 'Auth\AuthController@process_login' );
Route::get( 'auth/logout', [ 'as' => 'auth.logout', 'middleware' => 'auth', 'uses' => 'Auth\AuthController@logout' ] );

Route::get( '/', [ 'as' => '/', 'uses' => 'StoriesController@index' ] );
Route::get( 'contact', [ 'as' => 'contact', 'uses' => 'PagesController@contact' ] );

Route::post( 'contact/process', [ 'as' => 'contact.process', 'uses' => 'PageProcessController@contact' ] );

Route::get( 'timeline', [ 'as' => 'timeline.index', 'uses' => 'TimelineController@index' ] );
Route::post( 'timeline', [ 'uses' => 'TimelineController@store' ] );
Route::post( 'timeline/display', 'TimelineController@display' );
Route::post( 'comment/create', 'CommentsController@create' );
Route::post( 'comment/reply', 'CommentsController@reply' );

Route::get( 'stories', [ 'as' => 'stories', 'uses' => 'StoriesController@index' ] );

Route::get( 'user', [ 'as' => 'user', 'uses' => 'UserController@index' ] );
Route::get( 'user/profile', [ 'as' => 'user.profile', 'uses' => 'UserController@profile' ] );

/*Route::controller(
	'password', 'Auth\PasswordController',
    [
        'getEmail' => 'password.email'
    ]
);*/