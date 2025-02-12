<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    broadcast(new \App\Events\WelcomeNotification());

    return view('welcome');
});
