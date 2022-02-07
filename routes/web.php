<?php

use Illuminate\Support\Facades\Route;

// FrontEnd Factor
Route::get('/', 'FrontFactorController@index');
Route::get('/logo-branding', 'FrontFactorController@logoAndBranding');
Route::get('/about-us', 'FrontFactorController@aboutUs');
Route::get('/career', 'FrontFactorController@career');
Route::get('/contact', 'FrontFactorController@contact');
Route::get('/Mail-Submitted', 'FrontFactorController@mail');
Route::post('/send-mail', 'FrontFactorController@sendMailContact');
Route::post('/send-mail-for-job', 'FrontFactorController@jobApplyMail');
Route::get('/discover-more', 'FrontFactorController@discoverMore');



