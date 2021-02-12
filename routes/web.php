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

Route::get('/public-event', function(){
    broadcast(new \App\Events\PublicEvent(array("laravel-echo-test-messages")));
    return 'public-eventttt';
});
Route::get('/message-test', function(){
    broadcast(new \App\Events\MessagePush(array("laravel-echo-test-messages-push")));
    return 'message-push';
});

Route::get('/debug', 'MessageController@push')->name('message_test');

Route::get('/userA', 'MessageController@userA')->name('message_user_a');
Route::get('/userB', 'MessageController@userB')->name('message_user_b');
Route::post('/message-push', 'MessageController@push')->name('message_push');
