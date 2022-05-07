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

$prefixAdmin = Config::get('zvn.url.prefix_admin', 'admin');
$prefixNews = Config::get('zvn.url.prefix_news', 'news');

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('category/{id}', function ($id) {
    return 'Category '.$id;
})->where('id', '[0-9]+');

Route::get('category/{name?}', function ($name = 'John') {
    return $name;
});

Route::group(['prefix'=> $prefixAdmin], function () {
    Route::get('user', function () {
        return "/admin/user";
    });
    Route::get('slider', function () {
        return "/admin/slider";
    });
    Route::get('category', function () {
        return "/admin/category";
    });
});

*/

Route::group(['prefix' => $prefixAdmin, 'namespace' => 'Admin'], function () {
    // =========================== DASHBOARD ==============================
    $prefix = 'dashboard';
    $controllerName = 'dashboard';
    Route::group(['prefix' => $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName) . 'Controller@';
        Route::get('/', ['as' => $controllerName, 'uses' => $controller . 'index']);
    });

    // =========================== SLIDER ==============================
    $prefix = 'slider';
    $controllerName = 'slider';
    Route::prefix($prefix)->group(function () use ($controllerName) {
        $controller = ucfirst($controllerName) . 'Controller@';
        Route::get('/', ['as' => $controllerName, 'uses' => $controller . 'index']);
        Route::get('form/{id?}', ['as' => $controllerName . '/form','uses' => $controller . 'form'])->where('id', '[0-9]+');
        Route::post('save', ['as' => $controllerName . '/save','uses' => $controller . 'save']);
        Route::get('delete/{id}', ['as' => $controllerName . '/delete','uses' => $controller . 'delete'])->where('id', '[0-9]+');
        Route::get('change-status-{status}/{id}', ['as' => $controllerName . '/status','uses' => $controller . 'status']);
    });

    // =========================== CATEGORY ==============================
    $prefix = 'category';
    $controllerName = 'category';
    Route::prefix($prefix)->group(function () use ($controllerName) {
        $controller = ucfirst($controllerName) . 'Controller@';
        Route::get('/', ['as' => $controllerName, 'uses' => $controller . 'index']);
        Route::get('form/{id?}', ['as' => $controllerName . '/form','uses' => $controller . 'form'])->where('id', '[0-9]+');
        Route::post('save', ['as' => $controllerName . '/save','uses' => $controller . 'save']);
        Route::get('delete/{id}', ['as' => $controllerName . '/delete','uses' => $controller . 'delete'])->where('id', '[0-9]+');
        Route::get('change-status-{status}/{id}', ['as' => $controllerName . '/status','uses' => $controller . 'status']);
        Route::get('change-is-home-{is_home}/{id}', ['as' => $controllerName . '/isHome','uses' => $controller . 'isHome']);
        Route::get('change-display-{display}/{id}', ['as' => $controllerName . '/display','uses' => $controller . 'display']);
    });

    // =========================== ARTICLE ==============================
    $prefix = 'article';
    $controllerName = 'article';
    Route::prefix($prefix)->group(function () use ($controllerName) {
        $controller = ucfirst($controllerName) . 'Controller@';
        Route::get('/', ['as' => $controllerName, 'uses' => $controller . 'index']);
        Route::get('form/{id?}', ['as' => $controllerName . '/form','uses' => $controller . 'form'])->where('id', '[0-9]+');
        Route::post('save', ['as' => $controllerName . '/save','uses' => $controller . 'save']);
        Route::get('delete/{id}', ['as' => $controllerName . '/delete','uses' => $controller . 'delete'])->where('id', '[0-9]+');
        Route::get('change-status-{status}/{id}', ['as' => $controllerName . '/status','uses' => $controller . 'status']);
        Route::get('change-type-{type}/{id}', ['as' => $controllerName . '/type','uses' => $controller . 'type']);
    });

    // =========================== USER ==============================
    $prefix = 'user';
    $controllerName = 'user';
    Route::group(['prefix' => $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName) . 'Controller@';
        Route::get('/', ['as' => $controllerName, 'uses' => $controller . 'index']);
        Route::get('form/{id?}', ['as' => $controllerName . '/form','uses' => $controller . 'form'])->where('id', '[0-9]+');
        Route::post('save', ['as' => $controllerName . '/save','uses' => $controller . 'save']);
        Route::post('change-password', ['as' => $controllerName . '/change-password','uses' => $controller . 'changePassword']);
        Route::post('change-level', ['as' => $controllerName . '/change-level','uses' => $controller . 'changeLevel']);
        Route::get('delete/{id}', ['as' => $controllerName . '/delete','uses' => $controller . 'delete'])->where('id', '[0-9]+');
        Route::get('change-status-{status}/{id}', ['as' => $controllerName . '/status','uses' => $controller . 'status']);
        Route::get('change-level-{level}/{id}', ['as' => $controllerName . '/level','uses' => $controller . 'level']);
    });
});

// News
Route::group(['prefix' => $prefixNews, 'namespace' => 'News'], function () {
    // =========================== HOMEPAGE ==============================
    // config để homepage có url là /news
    $prefix = '';
    $controllerName = 'home';
    Route::group(['prefix' => $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName) . 'Controller@';
        Route::get('/', ['as' => $controllerName, 'uses' => $controller . 'index']);
    });

    // =========================== CATEGORY ==============================
    // config để homepage có url là /news68
    $prefix = 'chuyen-muc';
    $controllerName = 'category';
    Route::group(['prefix' => $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName) . 'Controller@';
        Route::get('/{category_name}-{category_id}.html', ['as' => $controllerName . '/index', 'uses' => $controller . 'index'])
                ->where('category_name', '[0-9a-zA-Z_-]+')
                ->where('category_id', '[0-9]+');
    });

    // =========================== ARTICLE ==============================
    $prefix = 'bai-viet';
    $controllerName = 'article';
    Route::group(['prefix' => $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName) . 'Controller@';
        Route::get('/{article_name}-{article_id}.html', ['as' => $controllerName . '/index', 'uses' => $controller . 'index'])
                ->where('article_name', '[0-9a-zA-Z_-]+')
                ->where('article_id', '[0-9]+');
    });

    // =========================== LOGIN ==============================
    $prefix = '';
    $controllerName = 'auth';
    Route::group(['prefix' => $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName) . 'Controller@';
        Route::get('/login', ['as' => $controllerName . '/login', 'uses' => $controller . 'login']);
        Route::post('/postLogin', ['as' => $controllerName . '/postLogin', 'uses' => $controller . 'postLogin']);

        // =========================== LOGOUT ==============================
        Route::get('/logout', ['as' => $controllerName . '/logout', 'uses' => $controller . 'logout']);
    });
});
