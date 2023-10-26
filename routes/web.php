<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login'); // trả về giao diện
});

//xu ly submit form login
Route::post('/login', function (Request $req) {    //Request cái thứ 3
    // lay data tu request
    $email = $req->request->get('email');
    $password = $req->request->get('password');
    
    if ($email == "nguyenthaotran35@gmail.com" && $password == "12345") {
        echo " Xin chao Thao Nguyen";
    } else {
        echo " Tai khoan khong chinh xac";
    }
}); 


