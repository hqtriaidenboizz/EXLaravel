<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;



use App\HTTP\Controllers\userController1;
use App\HTTP\Controllers\createTable;

use App\HTTP\Controllers\signupController;
use App\HTTP\Controllers\PageController;







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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::group(['prefix' => 'MyGroup'],function(){
//     Route::get('user1',function(){
//         echo "user1";
//     });
//     Route::get('user2',function(){
//         echo "user2";
//     });
// });
// Route::get('/hello', function(){
//     return view('hello');
// });
// Route::post('/hello', [userController1::class, 'tinhtong']);

// Route::get('/signup', function(){
//     return view('signup');
// });

// Route::get('/form',function(){
//     return view('form');
// });
// Route::get('/products',function(){
//     return view('products');
// });
// Route::get('signup',[signupController::class, 'index']);
// Route::post('signup',[signupController::class, 'displayInfor']);

// // +++++++++++++++++++++++++++++++

// use App\Http\Controllers\Authentication;
// use App\Http\Controllers\AdminController;


// Route::get(
//     '/',
//     'App\Http\Controllers\UserController@getIndex'
// );

// Route::get('admin', function () {
//     return view('adminpage');
// });

// Route::get('admin',[AdminController::class,'index']);
// Route::post('admin',[AdminController::class,'addRoom']);


// Route::group(['prefix' => 'admin'], function () {
//     Route::get('user', function () {
//         echo 'Users Management';
//     });
//     Route::get('product', function () {
//         echo 'Products Management';
//     });
// });

// Route::get(
//     '/sum',function () {
//         return view('sum');
//     }
// );

//         Route::post('sum', 'App\Http\Controllers\UserController@sum');

// Route::get(
//     '/login ',function () {
//         return view('login');
//     }
// );

// Route::get('/signup',[Authentication::class,'signup']);
// Route::post('/signup',[Authentication::class,'displayInfor']);
// Route::get('',[PageController::class,'getIndex']);

// Route::get('/',[createTable::class,'ProductsTable']);

// Route::get('/', function (){
//     $data= DB::table('customer')->orderBy('name','asc')->get();
//     $data2= DB::table('customer')->find(1);
//     print_r($data);
//     print_r($data2);

// });

// Route::get('/trangchu',function(){
//     return view('page.trangchu');
// });

Route::get('/',[PageController::class, 'getIndex']);
Route::get('/about.html',[PageController::class, 'getAbout']);
Route::get('/contact.html',[PageController::class, 'getContact']);
Route::get('/type/{id}', [PageController::class , 'getLoaiSp']);



// admin
Route::get('/admin',[PageController::class, 'getAdminpage']);
Route::post('/admin',[PageController::class,'postAdminAdd'])->name('admin-add-form');

Route::get('/showadmin',[PageController::class, 'getIndexAdmin']);


Route::get('/admin-edit-form/{id}',[PageController::class,'getAdminEdit']);
Route::post('/admin-edit',[PageController::class,'postAdminEdit']);
Route::post('/admin-delete/{id}',[PageController::class,'postAdminDelete']);

