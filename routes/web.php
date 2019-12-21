<?php
use Illuminate\Support\Facades\Route;

Route::get('/localstorage', 'App\Http\Controllers\LocalStorageController@select');
