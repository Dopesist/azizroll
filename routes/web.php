<?php

use App\Http\Controllers\PlaylistsController;
use App\Http\Controllers\ShowPlaylists;
use Illuminate\Support\Facades\Route;



Route::GET('/', function () { return view('home'); })->name('home');

Route::GET('/playlists',[ShowPlaylists::class, 'AllPlaylists'])->name('playlists');
Route::GET('/dashboard',[PlaylistsController::class, 'Dashboard'])->name('dashboard');
Route::GET('/playlists/AddPL',[PlaylistsController::class, 'AddPLPage'])->name('add.playlist');
Route::GET('/playlists/edit/{id}', [PlaylistsController::class, 'Edit']);
Route::GET('/playlists/delete/{id}', [PlaylistsController::class, 'Delete']);

Route::POST('/playlists/update/{id}', [PlaylistsController::class, 'Update']);
Route::POST('/playlists/add', [PlaylistsController::class, 'AddPL'])->name('save.Playlists');