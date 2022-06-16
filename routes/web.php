<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\userController1;
use App\HTTP\Controllers\signupController;

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

Route::group(['prefix' => 'MyGroup'],function(){
    Route::get('user1',function(){
        echo "user1";
    });
    Route::get('user2',function(){
        echo "user2";
    });
});
Route::get('/hello', function(){
    return view('hello');
});
Route::post('/hello', [userController1::class, 'tinhtong']);

// Route::get('/signup', function(){
//     return view('signup');
// });

Route::get('/form',function(){
    return view('form');
});
Route::get('/products',function(){
    return view('products');
});
Route::get('signup',[signupController::class, 'index']);
Route::post('signup',[signupController::class, 'displayInfor']);

// +++++++++++++++++++++++++++++++

use App\Http\Controllers\Authentication;
use App\Http\Controllers\AdminController;


Route::get(
    '/',
    'App\Http\Controllers\UserController@getIndex'
);

Route::get('admin', function () {
    return view('adminpage');
});

Route::get('admin',[AdminController::class,'index']);
Route::post('admin',[AdminController::class,'addRoom']);


Route::group(['prefix' => 'admin'], function () {
    Route::get('user', function () {
        echo 'Users Management';
    });
    Route::get('product', function () {
        echo 'Products Management';
    });
});

Route::get(
    '/sum',function () {
        return view('sum');
    }
);

        Route::post('sum', 'App\Http\Controllers\UserController@sum');

Route::get(
    '/login ',function () {
        return view('login');
    }
);

Route::get('/signup',[Authentication::class,'signup']);
Route::post('/signup',[Authentication::class,'displayInfor']);
