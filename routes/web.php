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

Route::get('/data/sasaran', 'DataController@sasaran');

Route::get('/data/sasaran/input', 'DataController@inputSasaran');

Route::get('/data/indikator', 'DataController@indikator');

Route::get('/data/indikator/input', 'DataController@inputIndikator');

Route::get('/data/unit', 'DataController@unit');

Route::get('/data/unit/input', 'DataController@inputUnit');

Route::get('/data/periode', 'DataController@periode');

Route::get('/data/periode/input', 'DataController@inputPeriode');

Route::get('/setting', 'SettingController@index');

Route::get('/setting/tahun','SettingController@settingTahun');