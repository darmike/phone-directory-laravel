<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $test ="Hi Jack";
    //C:\Users\38063\Desktop\hillel\laracroftt\example-app\resources\views\home.blade.php
    return view('home', compact('test'));  //'home' => home.blade.php
});



    Route::get('/about', function () {
        return ('About');
    });

