<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/notes', function () {
//     return view('notes');
// });
// Route::get('/edit', function () {
//     return view('notes');
// });
Route::view('/login', 'auth.login')->name('login.page');
Route::view('/notes', 'notes.index')->name('notes.page');
Route::view('/notes/edit', 'notes.edit')->name('notes.edit');
