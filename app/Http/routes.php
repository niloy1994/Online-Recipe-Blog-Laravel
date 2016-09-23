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
//Admin panel routelist
Route::group(array('prefix'=>'admin'),function(){
    //login
    Route::get('/','Admin\LoginController@login');

    Route::post('/check_login','Admin\loginController@check_login');

    //dashboard
    Route::get('/dashboard','Admin\LoginController@dashboard');
    Route::get('/logout','Admin\LoginController@logout');


    //admin
    Route::get('/admin/add','Admin\AdminController@add');
    Route::post('/save','Admin\AdminController@save');
    Route::get('/admins','Admin\AdminController@admins');
    Route::get('/admin/edit/{id}','Admin\AdminController@edit');
    Route::post('/admin/update','Admin\AdminController@update');
    Route::get('/admin/delete/{id}','Admin\AdminController@delete');


    //category
    Route::get('/category/add','Admin\CategoryController@add');
    Route::post('/category/save','Admin\CategoryController@save');
    Route::get('/categories','Admin\CategoryController@categories');
    Route::get('/category/edit/{id}','Admin\CategoryController@edit');
    Route::post('/category/update','Admin\CategoryController@update');
    Route::get('/category/delete/{id}','Admin\CategoryController@delete');

    //country
    Route::get('/country/add','Admin\CountryController@add');
    Route::post('/country/save','Admin\CountryController@save');
    Route::get('/countries','Admin\CountryController@countries');
    Route::get('/country/edit/{id}','Admin\CountryController@edit');
    Route::post('/country/update','Admin\CountryController@update');
    Route::get('/country/delete/{id}','Admin\CountryController@delete');

    //city
    Route::get('/city/add','Admin\CityController@add');
    Route::post('/city/save','Admin\CityController@save');
    Route::get('/cities','Admin\CityController@cities');
    Route::get('/city/edit/{id}','Admin\CityController@edit');
    Route::post('/city/update','Admin\CityController@update');
    Route::get('/city/delete/{id}','Admin\CityController@delete');


    //recipes
    Route::get('/recipe/add','Admin\RecipeController@add');
    Route::post('/recipe/save','Admin\RecipeController@save');
    Route::get('/recipes','Admin\RecipeController@recipes');
    Route::get('/recipe_select','Admin\RecipeController@recipe_select');
    Route::post('/recipe/recipe_of_the_day','Admin\RecipeController@recipe_of_the_day');
    Route::get('/recipe/edit/{id}','Admin\RecipeController@edit');
    Route::post('/recipe/update','Admin\RecipeController@update');
    Route::get('/recipe/delete/{id}','Admin\RecipeController@delete');

    //user
    Route::get('/user_select','Admin\UserController@user_select');
    Route::post('/user/user_of_the_day','Admin\UserController@user_of_the_day');

    //blogs
    Route::get('/blogs','Admin\BlogController@blogs');
    Route::get('/blogs/{id}','Admin\BlogController@change_blog');
    Route::get('/blog/{id}','Admin\BlogController@view_blog');
    Route::post('/blog/change_status','Admin\BlogController@change_status');






});
// FRontend

Route::get('/','Frontend\HomeController@index');
Route::get('/login','Frontend\LoginController@login');
Route::post('/check_login','Frontend\loginController@check_login');
Route::get('/logout','Frontend\LoginController@logout');
Route::get('/home','Frontend\UserController@my_account');

/////user registration
Route::get('/sign_up','Frontend\LoginController@sign_up');
Route::post('/user/save','Frontend\LoginController@save');



/////recipes
Route::get('/recipes','Frontend\RecipeController@recipes');
Route::get('/recipes/{id}','Frontend\RecipeController@view_recipe');
Route::get('/submit_recipe','Frontend\RecipeController@submit_recipe');
Route::post('/recipe/save','Frontend\RecipeController@save');
Route::post('/recipe/post_comment','Frontend\RecipeController@post_comment');
Route::post('/recipe/post_like','Frontend\RecipeController@post_like');
Route::get('/search_recipe','Frontend\RecipeController@search_recipe');

/////blogs
Route::get('/blogs','Frontend\BlogController@blogs');
Route::get('/blogs/{id}','Frontend\BlogController@view_blog');
Route::get('/submit_blog','Frontend\BlogController@submit_blog');
Route::post('/blog/save','Frontend\BlogController@save');

/////contact

Route::get('/contact','Frontend\ContactController@contact');
Route::post('/send_message','Frontend\ContactController@send_message');

