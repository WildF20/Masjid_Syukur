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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/admin', 'AdminController@index');

    Route::get('/admin/setting', 'AdminController@setting');
    Route::get('/admin/setting/edit', 'AdminController@settingedit');
    Route::put('/admin/setting/update', 'AdminController@settingupdate');
    
    Route::get('/admin/about', 'AdminController@about');
    
    Route::get('/admin/visimisi', 'AdminController@visimisi');
    Route::get('/admin/visimisi/edit/{id}', 'AdminController@visimisiedit');
    Route::put('/admin/visimisi/update/{id}', 'AdminController@visimisiupdate');
    
    Route::get('/admin/profil', 'AdminController@profil');
    Route::get('/admin/profil/edit/{key}', 'AdminController@profiledit');
    Route::put('/admin/profil/update/{key}', 'AdminController@profilupdate');
    
    Route::get('/admin/bidang', 'AdminController@bidang');
    
    Route::get('/admin/struktural', 'AdminController@struktural');
    Route::get('/admin/struktural/tambah', 'AdminController@strukturaltambah');
    Route::post('/admin/struktural/edit', 'AdminController@strukturaledit');
    Route::post('/admin/struktural/add', 'AdminController@strukturaladd');
    Route::put('/admin/struktural/update/{id}', 'AdminController@strukturalupdate');
    Route::post('/admin/struktural/delete', 'AdminController@strukturaldelete');
    
    Route::get('/admin/program', 'AdminController@program');
    Route::get('/admin/program/tambah', 'AdminController@programtambah');
    Route::post('/admin/program/add', 'AdminController@programadd');
    Route::post('/admin/program/edit', 'AdminController@programedit');
    Route::put('/admin/program/update/{id}', 'AdminController@programupdate');
    Route::post('/admin/program/delete', 'AdminController@programdelete');
    
    Route::get('/admin/news', 'AdminController@news');
    Route::post('/admin/news/detail/{id}', 'AdminController@newsview')->name('lihat');
    Route::get('/admin/news/tambah', 'AdminController@newstambah');
    Route::post('/admin/news/add', 'AdminController@newsadd');
    Route::post('/admin/news/edit/{key}', 'AdminController@newsedit');
    Route::put('/admin/news/update/{key}/{id}', 'AdminController@newsupdate');
    Route::post('/admin/news/delete', 'AdminController@newsdelete');
    
    Route::get('/admin/kajian', 'AdminController@kajian');
    Route::get('/admin/kajian/tambah', 'AdminController@kajiantambah');
    Route::post('/admin/kajian/add', 'AdminController@kajianadd');
    Route::post('/admin/kajian/edit', 'AdminController@kajianedit');
    Route::put('/admin/kajian/update/{id}', 'AdminController@kajianupdate');
    Route::post('/admin/kajian/delete', 'AdminController@kajiandelete');
    
    Route::get('/admin/donatur', 'AdminController@donatur');
    
    Route::get('/admin/keuangan', 'AdminController@keuangan');
});






Route::get('/Masuk', 'MasukController@index');


Route::get('/', 'Front\HomeController@index')->name("home");
Route::get('/read/{judul}', 'Front\ReadController@index')->name("read");
Route::get('/visi-dan-misi', 'Front\VisiController@index')->name("visi");
Route::get('/struktur-organisasi', 'Front\StrukturController@index')->name("organisasi");
Route::get('/donatur', 'Front\DonaturController@index')->name("donatur");
Route::get('/kajian', 'Front\KajianController@index')->name("kajian");
Route::get('/program/{key}', 'Front\ProgUnggulanController@index')->name("program");
Route::get('/laporan-keuangan', 'Front\LapKeuanganController@index')->name("lapkeu");



Route::get('logout', function() {
    Auth::logout();
    return redirect('auth/login');
});
Route::group(['prefix' => 'auth'],function(){
    Route::get('register', 'Auth\RegisterControllerKP@index');
    Route::post('register', 'Auth\RegisterControllerKP@processRegister');
    

    Route::get('login', 'Auth\LoginController@index');
    Route::post('login', 'Auth\LoginController@processLogin');
});