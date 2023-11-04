<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('login', 'AuthController@login')->name('login');
Route::get('/logout', 'AuthController@logout');

// Route::get('/form/tanah', 'HomeController@tanah');
// Route::get('/form/mesin', 'HomeController@mesin');
// Route::get('/form/gedung', 'HomeController@gedung');
// Route::get('/form/jaringan', 'HomeController@jaringan');
// Route::get('/form/atetap', 'HomeController@atetap');
// Route::get('/form/kontruksi', 'HomeController@kontruksi');
// Route::get('/form/alain', 'HomeController@alain');
// Route::get('/data/formTanah', 'FormController@formTanah');
// Route::get('/data/formAlain', 'FormController@formAlain');
// Route::get('/data/formAtetap', 'FormController@formAtetap');
// Route::get('/data/formGedung', 'FormController@formGedung');
// Route::get('/data/formJaringan', 'FormController@formJaringan');
// Route::get('/data/formKontruksi', 'FormController@formKontruksi');
// Route::get('/data/formMesin', 'FormController@formMesin');
// Route::post('/form/alain', 'FormController@createAlain');
// Route::post('/form/atetap', 'FormController@createAtetap');
// Route::post('/form/gedung', 'FormController@createGedung');
// Route::post('/form/jaringan', 'FormController@createJaringan');
// Route::post('/form/kontruksi', 'FormController@createKontruksi');
// Route::post('/form/mesin', 'FormController@createMesin');
// Route::post('/form/tanah', 'FormController@createTanah');

Route::get('/form/mesin', 'MesinController@mesin');
Route::get('/data/formMesin', 'MesinController@formMesin');
Route::post('/form/mesin', 'MesinController@store');
Route::resource('mesin', 'MesinController');
Route::get('/update/editMesin/{id}', 'MesinController@editMesin');
Route::post('/form/mesin/{id}', 'MesinController@update');
Route::get('/exportmesin', 'MesinController@mesinexport')->name('exportmesin');

Route::get('/form/tanah', 'TanahController@tanah');
Route::get('/data/formTanah', 'TanahController@formTanah');
Route::post('/form/tanah', 'TanahController@store');
Route::resource('tanah', 'TanahController');
Route::get('/update/editTanah/{id}', 'TanahController@editTanah');
Route::post('/form/tanah/{id}', 'TanahController@update');
Route::get('/exporttanah', 'TanahController@tanahexport')->name('exporttanah');

Route::get('/form/alain', 'AlainController@alain');
Route::get('/data/formAlain', 'AlainController@formAlain');
Route::post('/form/alain', 'AlainController@store');
Route::resource('asetLain', 'AlainController');
Route::get('/update/editAlain/{id}', 'AlainController@editAlain');
Route::post('/form/alain/{id}', 'AlainController@update');
Route::get('/exportalain', 'AlainController@alainexport')->name('exportalain');

Route::get('/form/atetap', 'AtetapController@atetap');
Route::get('/data/formAtetap', 'AtetapController@formAtetap');
Route::post('/form/atetap', 'AtetapController@store');
Route::resource('asetTtpLain', 'AtetapController');
Route::get('/update/editAtetap/{id}', 'AtetapController@editAtetap');
Route::post('/form/atetap/{id}', 'AtetapController@update');
Route::get('/exportatetap', 'AtetapController@atetapexport')->name('exportatetap');

Route::get('/form/gedung', 'GedungController@gedung');
Route::get('/data/formGedung', 'GedungController@formGedung');
Route::post('/form/gedung', 'GedungController@store');
Route::resource('gedungBgn', 'GedungController');
Route::get('/update/editGedung/{id}', 'GedungController@editGedung');
Route::post('/form/gedung/{id}', 'GedungController@update');
Route::get('/exportgedung', 'GedungController@gedungexport')->name('exportgedung');

Route::get('/form/jaringan', 'JaringanController@jaringan');
Route::get('/data/formJaringan', 'JaringanController@formJaringan');
Route::post('/form/jaringan', 'JaringanController@store');
Route::resource('jrgnIrigasi', 'JaringanController');
Route::get('/update/editJaringan/{id}', 'JaringanController@editJaringan');
Route::post('/form/jaringan/{id}', 'JaringanController@update');
Route::get('/exportjaringan', 'JaringanController@jaringanexport')->name('exportjaringan');

Route::get('/form/kontruksi', 'KontruksiController@kontruksi');
Route::get('/data/formKontruksi', 'KontruksiController@formKontruksi');
Route::post('/form/kontruksi', 'KontruksiController@store');
Route::resource('kontruksi', 'KontruksiController');
Route::get('/update/editKontruksi/{id}', 'KontruksiController@editKontruksi');
Route::post('/form/kontruksi/{id}', 'KontruksiController@update');
Route::get('/exportkontruksi', 'KontruksiController@kontruksiexport')->name('exportkontruksi');
