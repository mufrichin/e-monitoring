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

Route::get('/', 'MonitoringController@index');

Route::get('/data', 'DataController@index');

Route::get('/setting', 'SettingController@index');

Route::get('/data/sasaran', 'DataController@sasaran');

Route::get('/data/sasaran/input', 'DataController@inputSasaran');
