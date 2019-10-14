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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//KATEGORI_ARTIKEL
Route::resource('kategori_artikel','KategoriArtikelController');

//KATEGORI_GALERI
Route::resource('kategori_galeri','KategoriGaleriController');

//KATEGORI_BERITA
Route::resource('kategori_berita','KategoriBeritaController');

//KATEGORI_PENGUMUMAN
Route::resource('kategori_pengumuman','KategoriPengumumanController');

//ARTIKEL
Route::resource('artikel','ArtikelController');

//BERITA
Route::resource('berita','BeritaController');

//GALERI
Route::resource('galeri','GaleriController');

//PENGUMUMAN
Route::resource('pengumuman','PengumumanController');






/*Route::get('/kategori_artikel', 'KategoriArtikelController@index')->name('kategori_artikel.index');
Route::get('/kategori_artikel/create', 'KategoriArtikelController@create')->name('kategori_artikel.create');
Route::post('/kategori_artikel', 'KategoriArtikelController@store')->name('kategori_artikel.store');
Route::get('/kategori_artikel/{id}', 'KategoriArtikelController@show')->name('kategori_artikel.show');
Route::get('/kategori_artikel/{id}/edit', 'KategoriArtikelController@edit')->name('kategori_artikel.edit');
Route::patch('/kategori_artikel/{id}', 'KategoriArtikelController@update')->name('kategori_artikel.update');
Route::delete('/kategori_artikel/{id}', 'KategoriArtikelController@destroy')->name('kategori_artikel.destroy');*/

/*Route::get('/kategori_galeri', 'KategoriGaleriController@index')->name('kategori_galeri.index');
Route::get('/kategori_galeri/create', 'KategoriGaleriController@create')->name('kategori_galeri.create');
Route::post('/kategori_galeri', 'KategoriGaleriController@store')->name('kategori_galeri.store');
Route::get('/kategori_galeri/{id}','KategoriGaleriController@show')->name('kategori_galeri.show');
Route::get('/kategori_galeri/{id}/edit', 'KategoriGaleriController@edit')->name('kategori_galeri.edit');
Route::patch('/kategori_galeri/{id}', 'KategoriGaleriController@update')->name('kategori_galeri.update');
Route::delete('/kategori_galeri/{id}', 'KategoriGaleriController@destroy')->name('kategori_galeri.destroy');*/

/*Route::get('/kategori_berita', 'KategoriBeritaController@index')->name('kategori_berita.index');
Route::get('/kategori_berita/create', 'KategoriBeritaController@create')->name('kategori_berita.create');
Route::post('/kategori_berita', 'KategoriBeritaController@store')->name('kategori_berita.store');
Route::get('/kategori_berita/{id}','KategoriBeritaController@show')->name('kategori_berita.show');
Route::get('/kategori_berita/{id}/edit', 'KategoriBeritaController@edit')->name('kategori_berita.edit');
Route::patch('/kategori_berita/{id}', 'KategoriBeritaController@update')->name('kategori_berita.update');
Route::delete('/kategori_berita/{id}', 'KategoriBeritaController@destroy')->name('kategori_berita.destroy');*/

/*Route::get('/kategori_pengumuman', 'KategoriPengumumanController@index')->name('kategori_pengumuman.index');
Route::get('/kategori_pengumuman/create', 'KategoriPengumumanController@create')->name('kategori_pengumuman.create');
Route::post('/kategori_pengumuman', 'KategoriPengumumanController@store')->name('kategori_pengumuman.store');
Route::get('/kategori_pengumuman/{id}','KategoriPengumumanController@show')->name('kategori_pengumuman.show');
Route::get('/kategori_pengumuman/{id}/edit', 'KategoriPengumumanController@edit')->name('kategori_pengumuman.edit');
Route::patch('/kategori_pengumuman/{id}', 'KategoriPengumumanController@update')->name('kategori_pengumuman.update');
Route::delete('/kategori_pengumuman/{id}', 'KategoriPengumumanController@destroy')->name('kategori_pengumuman.destroy');*/

/*Route::get('/artikel', 'ArtikelController@index')->name('artikel.index');
Route::get('/artikel/create', 'ArtikelController@create')->name('artikel.create');
Route::post('/artikel', 'ArtikelController@store')->name('artikel.store');
Route::get('/artikel/{id}', 'ArtikelController@show')->name('artikel.show');
Route::get('/artikel/{id}/edit', 'ArtikelController@edit')->name('artikel.edit');
Route::patch('/artikel/{id}', 'ArtikelController@update')->name('artikel.update');
Route::delete('/artikel/{id}', 'ArtikelController@destroy')->name('artikel.destroy');*/

/*Route::get('/berita', 'BeritaController@index')->name('berita.index');
Route::get('/berita/create', 'BeritaController@create')->name('berita.create');
Route::post('/berita', 'BeritaController@store')->name('berita.store');
Route::get('/berita/{id}', 'BeritaController@show')->name('berita.show');
Route::get('/berita/{id}/edit', 'BeritaController@edit')->name('berita.edit');
Route::patch('/berita/{id}', 'BeritaController@update')->name('berita.update');
Route::delete('/berita/{id}', 'BeritaController@destroy')->name('berita.destroy');*/

/*Route::get('/galeri', 'GaleriController@index')->name('galeri.index');
Route::get('/galeri/create', 'GaleriController@create')->name('galeri.create');
Route::post('/galeri', 'GaleriController@store')->name('galeri.store');
Route::get('/galeri/{id}', 'GaleriController@show')->name('galeri.show');
Route::get('/galeri/{id}/edit', 'GaleriController@edit')->name('galeri.edit');
Route::patch('/galeri/{id}', 'GaleriController@update')->name('galeri.update');
Route::delete('/galeri/{id}', 'GaleriController@destroy')->name('galeri.destroy');*/

/*Route::get('/pengumuman', 'PengumumanController@index')->name('pengumuman.index');
Route::get('/pengumuman/create', 'PengumumanController@create')->name('pengumuman.create');
Route::post('/pengumuman', 'PengumumanController@store')->name('pengumuman.store');
Route::get('/pengumuman/{id}', 'PengumumanController@show')->name('pengumuman.show');
Route::get('/pengumuman/{id}/edit', 'PengumumanController@edit')->name('pengumuman.edit');
Route::patch('/pengumuman/{id}', 'PengumumanController@update')->name('pengumuman.update');
Route::delete('/pengumuman/{id}', 'PengumumanController@destroy')->name('pengumuman.destroy');*/