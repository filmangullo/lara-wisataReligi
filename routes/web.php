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


Route::resource('/', 'WelcomeController');

Auth::routes();

Route::post('/login/custom', [
    'uses' => 'LoginController@login',
    'as' =>'login.custom'
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/wisata', 'WisataController@index')->name('wisata');
Route::get('cari', 'WisataController@cari')->name('wisata.cari');
Route::get('/wisata/{wisata}', 'WisataController@show')->name('wisataDetail');

Route::post('/wisata/{wisata}/bookmark', 'PostBookmarkController@store')->name('post.bookmark.store')->middleware(['auth']);
Route::get('/bookmark', 'PostBookmarkController@index')->name('bookmark')->middleware(['auth']);
Route::delete('/bookmark/{id}/destroy', 'PostBookmarkController@destroy')->name('bookmark.delete')->middleware(['auth']);

Route::get('/wisata/{wisata}/gallery', 'WisataController@gallery')->name('gallery');
Route::get('/wisata/{wisata}/gallery/upload', 'WisataController@galleryUpload')->name('galleryUpload')->middleware(['auth']);
Route::post('/wisata/{wisata}/gallery', 'WisataController@galleryAdd')->name('galleryStore')->middleware(['auth']);

Route::get('/wisata/{wisata}/event', 'WisataController@event')->name('event');


Route::resource('kontak', 'KontakController');

Route::resource('tentang', 'TentangController');

Route::resource('/kalender', 'KalenderController');
Route::get('/kelender', 'KalenderController@index')->name('kalender');
Route::get('/januari', 'KalenderController@jan')->name('bulanjanuari');
Route::get('/februari', 'KalenderController@feb')->name('bulanfebruari');
Route::get('/maret', 'KalenderController@mar')->name('bulanmaret');
Route::get('/april', 'KalenderController@apr')->name('bulanapril');
Route::get('/mei', 'KalenderController@mei')->name('bulanmei');
Route::get('/juni', 'KalenderController@jun')->name('bulanjuni');
Route::get('/juli', 'KalenderController@jul')->name('bulanjuli');
Route::get('/agustus', 'KalenderController@agu')->name('bulanagustus');
Route::get('/september', 'KalenderController@sep')->name('bulanseptember');
Route::get('/oktober', 'KalenderController@okt')->name('bulanoktober');
Route::get('/november', 'KalenderController@nov')->name('bulannovember');
Route::get('/desember', 'KalenderController@des')->name('bulandesember');


Route::resource('/artikel', 'ArtikelController');
Route::get('/artikel/{artikel}', 'ArtikelController@show')->name('artikelDetail');

Route::resource( 'profil', 'ProfilController');
Route::get( 'profil/{id}/edit', 'ProfilController@edit')->name('profil.edit');
Route::patch( 'profil/{id}/update', 'ProfilController@update')->name('profil.update');



Route::middleware(['role', 'auth'])->group(function () {
    Route::get('/dashboards', function (){
        return view('admin.dashboard');
    })->name('dashboard');
    // Route::view('/dashboard', 'admin.dashboard')
    // ->name('dashboard');
    Route::resource('dashboards/artikel', 'AdminArtikelController');
    Route::delete( 'dashboard/artikel/{id}/destroy', 'AdminArtikelController@destroy')->name('artikel.destroy');
    Route::get('dashboard/artikel/{id}/edit', 'AdminArtikelController@edit')->name('artikel.edit');
    Route::patch('dashboard/artikel/{id}/edit', 'AdminArtikelController@update')->name('artikel.update');
    Route::resource('dashboards/artikelPost', 'PostArtikelController');
    Route::post('dashboards/artikelPost', 'PostArtikelController@store')->name('artikel.store');

    Route::resource('dashboards/event', 'AdminEventController');
    Route::delete( 'dashboard/event/{id}/destroy', 'AdminEventController@destroy')->name('event.destroy');
    Route::get('dashboard/event/{id}/edit', 'AdminEventController@edit')->name('event.edit');
    Route::patch('dashboard/event/{id}/edit', 'AdminEventController@update')->name('event.update');

    Route::resource('dashboards/wisata', 'AdminWisataController');
    Route::delete('dashboard/wisata/{id}/destroy', "AdminWisataController@destroy")->name('wisata.destroy');
    Route::get('dashboard/wisata/{id}/edit', 'AdminWisataController@edit')->name('wisata.edit');
    Route::patch('dashboard/wisata/{id}/edit', 'AdminWisataController@update')->name('wisata.update');
    Route::resource('dashboards/wisataPost', 'PostWisataController');
    Route::post('dashboards/wisataPost', 'PostWisataController@store')->name('wisata.store');

    Route::resource('dashboards/galeri', 'AdminGalleriController');
    Route::patch('dashboard/galeri/{id}', 'AdminGalleriController@update')->name('galleri.update');
    Route::delete('dashboard/galeri/{id}/destroy', "AdminGalleriController@destroy")->name('galleri.destroy');

    Route::resource('dashboards/kalender', 'AdminKalenderController');
    Route::resource('dashboards/kalenderPost', 'PostKalenderController');
    Route::post('dashboards/kalenderPost', 'PostKalenderController@store')->name('kalender.store');
    Route::delete( 'dashboard/kalender/{id}/destroy', "AdminKalenderController@destroy")->name('peristiwa.destroy');

    Route::resource('dashboards/eventPost', 'PostEventController');
    Route::post('dashboards/eventPost', 'PostEventController@store')->name('event.store');

    Route::resource('dashboards/inbox', 'AdminInboxController');
    Route::delete('dashboards/inbox/{id}/destroy', 'AdminInboxController@destroy')->name('kontak.destroy');

    Route::resource('dashboards/user', 'AdminUserController');
    Route::delete( 'dashboard/user/{id}/destroy', "AdminUserController@destroy")->name('user.destroy');
});