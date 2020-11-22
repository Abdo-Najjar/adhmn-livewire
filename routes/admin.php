<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth'], function () {

    Route::get('dashboard/home', 'HomeController@index')->name('home');
    
    // cruds
    
    /** Countries */
    Route::resource('countries', 'CountryController');
    Route::get('api-countries', 'CountryController@datatable')->name('api.countries.datatable');
    
    /** Cities */
    Route::resource('cities' , 'CityController');
    Route::get('api-cities', 'CityController@datatable')->name('api.cities.datatable');

    
    /** Admins */
    Route::resource('admins' ,'AdminController');

    /** Roles */
    Route::resource('roles' , 'RoleController');


    // Route::get('smart-decisions', 'ServiceProviderController@smartDetactions')->name('smartDetactions');
    // Route::get('admins', 'AdminController@index')->name('admins.index');
});
