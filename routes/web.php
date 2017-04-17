<?php

Route::get('/', ['as' => 'home', function () {
    return view('home.home');
}]);

Route::resource('player', 'PlayerController');

Route::resource('articles', 'ArticleController');

Route::resource('passwords', 'PasswordController');

Route::resource('sellers', 'SellerController');

Route::resource('places', 'PlaceController');

Route::resource('worker', 'WorkerController');