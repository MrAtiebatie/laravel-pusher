<?php

use App\Events\SendMessage;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/broadcast', function (Request $request) {
    // Fire the SendMessage event
    event(new SendMessage($request->message));

    return redirect()->back();
})->name('broadcast');
