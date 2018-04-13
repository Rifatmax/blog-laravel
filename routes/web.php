<?php
Route:: resource('register','RegisterController');

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register.register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/users', function () {
    return view('user_list');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/dashboard', function () {
    return view('Admin.dashboard');
});

Route::get('/adminlogin', function () {
    return view('Admin.admin_login');
});


Route::get('/userinsert', function () {
    return view('user_insert');
});
Route::get('/makepost', function () {
    return view('post.make_post');
});

Route::get('/posts', function () {
    return view('post.post_list');
});
Route::get('/postinsert', function () {
    return view('post.post_insert');
});

Route::get('/postdetails', function () {
    return view('post.post_details');
});

Route::get('/allpost', function () {
    return view('post.allpost');
});




Route::post('/post_action','PostController@store');
Route::get('/posts','PostController@show_posts');
Route::get('/allpost','PostController@all_posts');
Route::get('/edit_post&{id}','PostController@edit');
Route::post('/update_post&{id}','PostController@updatepost');
Route::get('/delete_post&{id}','PostController@delete_post');
Route::post('/admin_post_insert','PostCOntroller@admin_inset_post');
Route::get('/postdetails&{id}','PostController@show_post_details');


Route::get('/admin_check','RegisterController@admin_profile');
Route::post('/register_action','RegisterController@store');
Route::post('/admin_insert','RegisterController@admin_inset_user');


Route::post('/login_check','RegisterController@login');
Route::get('/users','RegisterController@show_users');



Route::get('/edit_user&{id}','RegisterController@edit');
Route::post('/update&{id}','RegisterController@update');
Route::get('/details&{id}','RegisterController@show_details');

Route::get('/edit_profile&{id}','RegisterController@edit_profile');
Route::post('/update_profile&{id}','RegisterController@update_profile');
Route::get('/delete_user&{id}','RegisterController@delete_user');


Route::get('/logout',function(){
	Auth:: logout();
	return Redirect:: to('');
})->middleware("auth");
	
	
