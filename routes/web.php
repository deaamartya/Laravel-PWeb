<?php

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

//http://localhost/project_laravel/public/check_db

/*Route::get('check_db', function () {
   try {
        DB::connection()->getPdo();
        return 'DB Connected';
    } catch (\Exception $e) {
        return 'DB Failed';
    }
    */
    // route::get('/', 'homeController@index');    
        // Route::get('/', function () {
        //     return view('/getstart'); // Edit
        // });
        Route::get('/', function () {
            return view('/auth.login'); // Edit
        });
        route::get('/about', function(){
            return view('/about');
        });
        route::get('/home', function(){
            return view('/home');
        });

// Route::get('/home', 'DashboardController@home');
        
// ======================Auth================================       
route::get('/login', 'AuthController@login')->name('login');
route::post('/postlogin', 'AuthController@postlogin');
route::get('/logout', 'AuthController@logout');
route::get('/register', 'AuthController@register')->name('register');
route::post('/postregister', 'AuthController@postregister');

// ======================middleware===========================
// Route::group(['middleware' => 'auth'], function () {
Route::group(['middleware' => ['auth', 'checkrole:admin,customer']], function () {

// ======================categorie===========================

route::get('/categorie/create', 'CategorieController@create');
route::post('/categorie/display', 'CategorieController@store');
route::get('/categorie/edit/{category_id}', 'CategorieController@edit');
route::post('/categorie/update/{category_id}', 'CategorieController@update');
route::get('/categorie/hapus/{category_id}', 'CategorieController@destroy');
route::get('/categorie/status/{category_id}', 'CategorieController@status');
// route::get('/categorie/display/{category_id}', 'CategorieController@show');

// ======================customer============================
route::get('/customer/display', 'CustomerController@index');
route::get('/customer/create', 'CustomerController@create');
route::post('/customer/display', 'CustomerController@store');
route::get('/customer/edit/{customer_id}', 'CustomerController@edit');
route::post('/customer/update/{customer_id}', 'CustomerController@update');
route::get('/customer/hapus/{customer_id}', 'CustomerController@destroy');
// route::get('/customer/display/{customer_id}', 'CustomerController@show');

// ======================user================================
route::get('/user/display', 'UserController@index');
route::get('/user/create', 'UserController@create');
route::post('/user/display', 'UserController@store');
route::get('/user/edit/{id}', 'UserController@edit');
route::post('/user/update/{id}', 'UserController@update');
route::get('/user/hapus/{id}', 'UserController@destroy');
// route::get('/user/display/{user_id}', 'UserController@show');

// ======================sales===============================

// route::get('/sales/create', 'SalesController@index');
// route::post('/sales/display', 'SalesController@store');
// route::get('/sales/edit/{sales_id}', 'SalesController@edit');
// route::post('/sales/update/{sales_id}', 'SalesController@update');
route::get('/sales/hapus/{sales_id}', 'SalesController@destroy');


// ======================product=============================

route::get('/product/create', 'ProductController@create');
route::post('/product/display', 'ProductController@store');
route::get('/product/edit/{product_id}', 'ProductController@edit');
route::post('/product/update/{product_id}', 'ProductController@update');
route::get('/product/hapus/{product_id}', 'ProductController@destroy');
// route::get('/product/display/{product_id}', 'ProductController@show');

// ======================sales===============================
// route::get('/sales_detail/display', 'Sales_DetailController@index');
// route::get('/sales_detail/create', 'Sales_DetailController@create');
// route::post('/sales_detail/display', 'Sales_DetailController@store');
// route::get('/sales_detail/edit/{sales_id}', 'Sales_DetailController@edit');
// route::post('/sales_detail/update/{sales_id}', 'Sales_DetailController@update');
// route::get('/sales_detail/hapus/{sales_id}', 'Sales_DetailController@destroy');
// route::get('/sales_detail/display/{sales_id}', 'Sales_DetailController@show');

// ======================Post_JS=============================
route::get('/sales/index', 'C_ajax@index');
route::post('/sales/index/getProduct', 'C_ajax@getProduct');

});

Route::group(['middleware' => ['auth', 'checkrole:admin,customer']], function () {
    
route::get('/categorie/display', 'CategorieController@index');
route::get('/product/display', 'ProductController@index');
route::get('/sales/display', 'SalesController@index');

route::get('/sales/show/{sales_id}', 'SalesController@show');
route::post('/salespost', 'SalesController@savepost');
route::get('/exportpdf/{nota_id}', 'SalesController@exportpdf');
    
});