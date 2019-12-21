<?php
use Illuminate\Support\Facades\Route;

Route::get('/local-storage', 'App\Http\Controllers\LocalStorageController@select');
