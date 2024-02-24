<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;
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

//Basic Routing
Route::get('/hello', function () {
    return 'Hello World';
   }); //when write URL to call the route localhost/PWL_2024/public/hello the web page will appear 'Hello World'

Route::get('/world', function () {
 return 'World';
}); //when write URL to call the route localhost/PWL_2024/public/world the web page will be apperar 'World'

Route::get('/', function () {
    return 'Welcome';
}); 

Route::get('/about', function () {
    return '2241720079 Hawa Esanda';
}); 

//Route Parameters
Route::get('/user/{name}', function ($name){
    return 'My name is '.$name;
}); 
//b. The web page will appear 'My name is Hawa' because because the parameter refers to the name ($name) written in 'localhost/PWL_2024/public/user/yourname' 'yourname' is written with each name 
//c. When write URL localhost/PWL_2024/public/user/ the web page not found, because the URL not recognized that parameters or will appear default page

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});
//Just like the previous route, we have to add parameters to the URL, but in this case we can accept more than 1 parameter

Route::get('/articels/{id}', function($idId){
    return 'Article Page with ID '.$idId;
});

//Optional Parameters
Route::get('/user/{name?}', function ($name=null) {
    return 'My name is '.$name;
    });
//b. This route expects the {name} parameter which is optional due to the '?' sign in {name?}. While not naming the URL, the parameter will be null by default.
//c. the web page will appear 'My name is Hawa' because i write URL localhost/PWL_24/public/user/Hawa 

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });
//e. The web page will appear 'Nama saya John' because the parameters have value 'John'

//Creating a Controller
Route::get('/hello', [WelcomeController::class,'hello']);
//e. When open URL localhost/PWL_2024/public/hello the web page will appear will simply display 'Hello World' because the route /hello is mapped to the hello() method of the WelcomeController class, and this method returns the string 'Hello World'.

//f.
Route::get('/', [PageController::class, 'index']); 
Route::get('/about', [PageController::class, 'about']);
Route::get('/articels/{id}', [PageController::class, 'articles']);  

//g
Route::get('/', [HomeController::class, 'single']);
Route::get('/about', [AboutController::class, 'single']);
Route::get('/articles/{id}', [AboutController::class, 'single']);

//Resource Controller
Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
