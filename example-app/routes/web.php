<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\MainController;


    Route::get('/', [MainController::class, 'index'])->name('home');

    Route::get('/search', [MainController::class, 'search'])->name('search');






    Route::get('/about', function () {
        return ('About');
    });

    //Route::get('/', function () {
    //    $test ="Hi Jack";
    //    //C:\Users\38063\Desktop\hillel\laracroftt\example-app\resources\views\home.blade.php
    //    return view('home', compact('test'));  //'home' => home.blade.php
    //});
