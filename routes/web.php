<?php

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

Route::get('/', ['uses' => 'Website\HomeController@index']);

Auth::routes();

Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
Route::group(['middleware' => 'optimizeImages'], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('videos/{slug}',         ['uses' => 'Website\VideosController@view',     'as' => 'video']);
    Route::get('info-graphics/{slug}',  ['uses' => 'Website\GalleriesController@view',  'as' => 'info-graph']);
    Route::get('search/{word}',         ['uses' => 'Website\SearchController@search',   'as' => 'search']);

    Route::get('contact-us',            ['uses' => 'Website\ContactUsController@view',  'as' => 'contact-us']);
    Route::post('contact',              ['uses' => 'Website\ContactUsController@send',  'as' => 'submit-contact-us']);

    Route::get('join-us',               ['uses' => 'Website\JoinUsController@view',     'as' => 'join-us']);
    Route::post('join',                 ['uses' => 'Website\JoinUsController@send',     'as' => 'submit-join-us']);

    Route::get('about-us',              ['uses' => 'Website\AboutUsController@view',    'as' => 'about-us']);

    Route::get('write',                 ['uses' => 'Website\WritersController@view',  'as' => 'write']);
    Route::post('publish',              ['uses' => 'Website\WritersController@send',  'as' => 'submit-write']);

    //Admin Account Routes
    Route::group(['middleware' => 'Admin', 'prefix' => '/dashboard'], function () {

        Route::get('/', 'Admin\MainController@index');

        Route::resources(['users' => 'Admin\UserController']);
        Route::get('users/destroy/{id}', 'Admin\UserController@destroy');

        Route::resources(['categories' => 'Admin\CategoryController']);
        Route::get('categories/destroy/{id}', 'Admin\CategoryController@destroy');

        Route::resources(['videos' => 'Admin\VideoController']);
        Route::get('videos/destroy/{id}', 'Admin\VideoController@destroy');

        Route::resources(['infographics' => 'Admin\InfographicController']);
        Route::get('infographics/destroy/{id}', 'Admin\InfographicController@destroy');

        Route::resources(['news' => 'Admin\NewsController']);
        Route::get('news/destroy/{id}', 'Admin\NewsController@destroy');

        Route::resources(['applicants' => 'Admin\ApplicantsController']);
        Route::get('applicants/destroy/{id}', 'Admin\ApplicantsController@destroy');

        Route::resources(['contact' => 'Admin\ContactController']);
        Route::get('contact/destroy/{id}', 'Admin\ContactController@destroy');

        Route::get('setting', 'Admin\SettingController@index');
        Route::post('setting', 'Admin\SettingController@store');

        Route::get('logs', 'Admin\LogController@index');

    });

    //DataEntry Account Routes
    Route::group(['middleware' => 'EntryMiddleware', 'prefix' => '/editors'], function () {
        Route::get('/', 'DataEntry\MainController@index');
        Route::get('/reports', 'DataEntry\MainController@index');

        Route::get('profile', 'DataEntry\UserController@edit');
        Route::PATCH('profile', 'DataEntry\UserController@update')->name('editors.update');

        Route::group(['middleware' => 'Videos'], function () {
            Route::resources(['videos' => 'DataEntry\VideoController']);
        });

        Route::group(['middleware' => 'Infograph'], function () {
        Route::resources(['infographics' => 'DataEntry\InfographicController']);
        });

        Route::resources(['news' => 'DataEntry\NewsController']);

    });

    Route::group(['prefix' => '{category}'], function () {
        Route::get('/',         ['uses' => 'Website\CategoriesController@view', 'as' => 'category']);
        Route::get('{news}',    ['uses' => 'Website\NewsController@view', 'as' => 'news-post']);
    });
});
