<?php

use Illuminate\Support\Facades\Route;

// Auto-generated routes for static pages
Route::view('/', 'pages.index')->name('home');
Route::view('/contacto', 'pages.contacto')->name('contacto');
Route::view('/eventos', 'pages.eventos')->name('eventos');
Route::view('/foro', 'pages.foro')->name('foro');
Route::view('/lista-destacamentos', 'pages.lista-destacamentos')->name('lista-destacamentos');
Route::view('/unirte', 'pages.unirte')->name('unirte');
