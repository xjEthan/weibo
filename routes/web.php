<?php

// 静态页面
Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

// /signup 与 signup 从使用上并无区别
Route::get('signup', 'UserController@create')->name('signup');
