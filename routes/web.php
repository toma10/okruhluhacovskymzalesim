
<?php

Route::get('/', 'PagesController@home');
Route::get('/registrace', 'PagesController@register');
Route::get('/propozice', 'PagesController@proposition');
Route::get('/trasy', 'PagesController@routes');
Route::get('/vysledky', 'PagesController@results');

Route::get('/galerie', 'GalleriesController@index')->name('galleries.index');
Route::get('/galerie/vytvorit', 'GalleriesController@create')->name('galleries.create');
Route::post('/galerie', 'GalleriesController@store')->name('galleries.store');
Route::get('/galerie/{gallery}', 'GalleriesController@show')->name('galleries.show');
Route::delete('/galerie/{gallery}', 'GalleriesController@destroy')->name('galleries.destroy');

Route::post('/galerie/{gallery}/photos', 'PhotosController@store')->name('photos.store');
Route::delete('/galerie/{gallery}/photos/{photo}', 'PhotosController@destroy')->name('photos.destroy');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/program', function() {
    session(['show-program' => false]);
   return redirect('propozice#program');
});
