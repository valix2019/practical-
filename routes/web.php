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

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('home', function () {
    return view('home', [
        'some_param' => 'This param for home page',
        'talks' => [
            'first',
            'second',
            'third',
            'fadsfads'
        ]
    ]);
});

//Route::middleware('auth')->group(function(){
    Route::get('/hello', function () {
        return view('hello');
    });
    Route::get('/about', function () {
        return view('about');
    });
//});

Route::get('/users/{id}/{body}', function ($id, $body) {
    return "Yor want to get user by id: {$id} from {$body}";
})->where('id', '[0-9]+')->name('users.show');

Route::get('/api/{subject}/{id}/{body}', function ($subject, $id, $body) {
    return "Yor want to get {$subject} by id: {$id} from {$body}";
});
