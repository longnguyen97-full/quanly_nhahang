<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AjaxController;
use App\Models\Admin_Sidebar;

//=========================================================================
// CLIENT
Route::view('/', 'index');
Route::view('index', 'index')->name('index');
Route::view('about', 'pages/about')->name('about');
Route::view('menu', 'pages/menu')->name('menu');
Route::view('product', 'pages/product')->name('product');
Route::view('signature', 'pages/signature')->name('signature');
Route::view('contact', 'pages/contact')->name('contact');
Route::view('reservation', 'pages/reservation')->name('reservation');
Route::view('event', 'pages/event')->name('event');
Route::view('blog', 'pages/blog')->name('blog');
Route::view('career', 'pages/career')->name('career');
Route::view('gallery', 'pages/gallery')->name('gallery');
Route::view('cart', 'pages/cart')->name('cart');
Route::view('checkout', 'pages/checkout')->name('checkout');
Route::post('complete', [CartController::class, 'complete'])->name('complete');
Route::view('sign-in', 'pages/sign-in')->name('sign-in');
Route::view('sign-up', 'pages/sign-up')->name('sign-up');
Route::post('handle-signin', [UserController::class, 'signin'])->name('handle-Signin');
Route::post('handle-signup', [UserController::class, 'signup'])->name('handle-Signup');
Route::post('handle-logout', [UserController::class, 'logout'])->name('handle-Logout');

// SHOPPING CART
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart']);
Route::patch('update-cart', [CartController::class, 'update']);
Route::delete('remove-from-cart', [CartController::class, 'remove']);

// AJAX
Route::group(['prefix'=>'ajax'], function() {
	Route::get('discount/{idGiftcode}', [AjaxController::class, 'getDiscount']);
	Route::get('init_total/{init_total}', [AjaxController::class, 'getInitTotal']);
	Route::get('total/{total}', [AjaxController::class, 'getTotal']);
});

//=========================================================================
// ADMIN
Route::group(['prefix'=>'admin'], function(){

    Route::view('login', 'admin/login');
    Route::view('register', 'admin/register');

    Route::post('login', [AuthController::class, 'handleLogin'])->name('handleLogin');
    Route::post('register', [AuthController::class, 'handleRegister'])->name('handleRegister');
    Route::get('logout/{button}', [AuthController::class, 'handleLogout'])->name('handleLogout');

    Route::group(['middleware'=>'CheckLogin'], function(){
        Route::view('/', 'admin/index');
        Route::view('/index', 'admin/index')->name('admin_index');
        
        Route::group(['prefix'=>'sidebar-components'], function(){
            $path = "admin/sidebar-components/";
            Route::view('sidebar-settings', $path.'sidebar-settings')->name('sidebar-settings');
            $sidebar_components = Admin_SideBar::select('title','link')->where('parent_id',0)->get();
            foreach($sidebar_components as $sidebar_component) {
                    $stripped = preg_replace('/\s/', '', $sidebar_component->title); $title = strtolower($stripped);
                    Route::view($title,$path.$title)->name($sidebar_component->link);
            }

            Route::group(['prefix'=>'interface'], function(){
                $path = "admin/sidebar-components/interface/";
                $components = Admin_SideBar::select('title','link')->where('parent_id','!=',0)->where('parent_id',8)->get();
                foreach($components as $component) {
                    $stripped = preg_replace('/\s/', '', $component->title); $title = strtolower($stripped);
                    Route::view($title,$path.$title)->name($component->link);
                }
            });

            Route::group(['prefix'=>'setting'], function(){
                $path = "admin/sidebar-components/setting/";
                $components = Admin_SideBar::select('title','link')->where('parent_id','!=',0)->where('parent_id',11)->get();
                foreach($components as $component) {
                    $stripped = preg_replace('/\s/', '', $component->title); $title = strtolower($stripped);
                    Route::view($title,$path.$title)->name($component->link);
                }
            });

            Route::group(['prefix'=>'member'], function(){
                $path = "admin/sidebar-components/member/";
                $components = Admin_SideBar::select('title','link')->where('parent_id','!=',0)->where('parent_id',12)->get();
                foreach($components as $component) {
                    $stripped = preg_replace('/\s/', '', $component->title); $title = strtolower($stripped);
                    Route::view($title,$path.$title)->name($component->link);
                }
            });

            Route::group(['prefix'=>'administrator'], function(){
                $path = "admin/sidebar-components/administrator/";
                $components = Admin_SideBar::select('title','link')->where('parent_id','!=',0)->where('parent_id',13)->get();
                foreach($components as $component) {
                    $stripped = preg_replace('/\s/', '', $component->title); $title = strtolower($stripped);
                    Route::view($title,$path.$title)->name($component->link);
                }    
            });

            Route::post('handle-sidebar/{id_sidebar}', [AdminController::class, 'actionButton'])->name('handle-Sidebar');
            Route::post('handle-widget/{id_widget}', [AdminController::class, 'actionButton'])->name('handle-Widget');
            Route::post('handle-menu/{id_menu}', [AdminController::class, 'actionButton'])->name('handle-Menu');
            Route::post('handle-product/{id_product}', [AdminController::class, 'actionButton'])->name('handle-Product');
            Route::post('handle-category/{id_blog_category}', [AdminController::class, 'actionButton'])->name('handle-Category');
            Route::post('handle-blog/{id_blog}', [AdminController::class, 'actionButton'])->name('handle-Blog');
            Route::post('handle-gallery/{id_gallery}', [AdminController::class, 'actionButton'])->name('handle-Gallery');
            Route::post('handle-order/{id_order}', [AdminController::class, 'actionButton'])->name('handle-Order');
        });    
    });
});

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
