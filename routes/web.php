<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $data = [
        'title' => 'Hi Student I hope you like the course',
        'content' => 'This laravel course was created with a lot of love and dedication for you'
    ];

    Mail::send('mail.test', $data, function($message) {
        $message->to('lukegibson101@gmail.com', 'Luke')->subject('Testing Laravel email');
    });


});
