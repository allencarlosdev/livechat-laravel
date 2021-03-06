<?php

use Illuminate\Support\Facades\Route;

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

Route::get( '/', function () {
    return view( 'welcome' );
} );
Route::get( 'chat', [App\Http\Controllers\ChatController::class, 'chat'] )->name( 'chat' );

Route::get( 'send', [App\Http\Controllers\ChatController::class, 'send'] )->name( 'send' );

Auth::routes();

Route::get( '/home', [App\Http\Controllers\HomeController::class, 'index'] )->name( 'home' );
