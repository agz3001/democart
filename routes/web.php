<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Shop;
use App\Cart;
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
/*
Route::get('/', function () {
    return view('welcome');
});*/



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("/question", function(){
  return view("/question");});
Route::get("/service_charge", function(){
  return view("/service_charge");});
Route::get("/company", function(){
  return view("/company");});

Route::get("/", "ShopController@index");
Route::get("/select", "ShopController@select");
Route::get("/select/store", "ShopController@select_store");
Route::get("/select/category", "ShopController@select_category");
Route::get("/select/store/goods", "ShopController@select_store_goods");
Route::get("/select/category/goods", "ShopController@select_category_goods");
Route::get("/select/bargain", "ShopController@select_bargain");
Route::get("/goods/detail/{id}", "ShopController@goods_detail");
Route::get("/search","ShopController@search");

Route::group(["middleware"=>["auth"]], function(){
  Route::get("/home", function(){
    return view("/select");}); # ‘/home’というパスにアクセスすると、‘/select’にリダイレクトされる
  Route::get("/cart", "ShopController@show")->name("cart");
  Route::get("/history", "ShopController@orderhistory");
  Route::post("/cart", "ShopController@store");
  Route::post("/destroy", "ShopController@destroy");
  Route::post("/checkout", "ShopController@checkout");
});


//管理側ログイン
Route::get('/admin/login', 'admin\AdminLoginController@showLoginform');
Route::post('/admin/login', 'admin\AdminLoginController@login');
//管理側
Route::group(['middleware' => ['auth.admin']], function () {
	//管理側トップ
	Route::get('/admin', 'admin\AdminTopController@show');
	//ログアウト実行
	Route::post('/admin/logout', 'admin\AdminLogoutController@logout');
	//ユーザー一覧
	Route::get('/admin/user_list', 'admin\ManageUserController@showUserList');
	//ユーザー詳細
	Route::get('/admin/user/{id}', 'admin\ManageUserController@showUserDetail');
  //発注記録一覧
  Route::get('/admin/accepted_orders', 'admin\ManageUserController@accepted_orders');
  //発注記録csv・検索
  Route::get('/admin/accepted_orders/export{keyword?}', 'admin\ManageUserController@export')->name("export.sample");

});
