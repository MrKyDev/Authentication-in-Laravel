<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Route::get();
// Route::post();
// Route::put();
// Route::patch();
// Route::delete();
// Route::options();

//match if get or post then allow the route if true
// Route::match(['get', 'post'], '/', function(
//     return 'Post and Get is allowed';
// ));

//any request will be allowed
// Route::any('/', function(
//     return view('home');
// ));


// use this if will return view (if no promise or asych data to post)
// Route::view('/', 'welcome');


// ridirect the user when go to "/home" route to "/"
// Route::get('/', function(){
//     return 'redirect';
// });
// Route::redirect('/home', '/');
// Route::permanentRedirect('/home', '/');

// Route::get('/users', function(Request $request) {
//     dd($request);
//     return null;
// });

// Route::get('/get-text', function() {
//     return response('Hello World', 200)
//             ->header('Content-Type', 'text/plain');
// });

// Route::get('/user/{id}/{group}', function($id, $group) {
//     return response($id.' '.$group, 200);
// });

// Route::get('/request-json', function() {
//     return response()->json(['name' => 'Venn Edward Nicolas', 'bio' => 'Hello World!']);
// });

// Route::get('/request-download', function() {
//     $path = public_path().'/sample.txt';
//     $name = 'sample.txt';
//     $headers = array(
//         'Content-type : application/text-plain',
//     );
//     return response()->download($path, $name, $headers);
// });

// default route
// Route::get('/', function () {
//     return view('home');
// });

// //default controller to route class connection
// Route::get('/user', [UserController::class, 'index']);

// alias add name() method
// Route::get('/user', [UserController::class, 'index'])->name('<alias>');
// Route::get('/user/{id}', [UserController::class, 'show'])->middleware('auth');

// Route::get('/user/{id}', [UserController::class, 'show']);






// COMMON ROUTE NAMING
// index - show all data
// show - show a single data
// create - show a form for creating new user
// store - store data
// edit - show form to edit data
// update - update data
// destroy - delete data



Route::get("/", [UsersController::class, "home"])->middleware('auth');
Route::get('/students', [StudentsController::class, 'index']);
Route::get("/login", [UsersController::class, "login"])->name('login')->middleware('guest');
Route::post("/login/process", [UsersController::class, "process"]);
Route::get("/register", [UsersController::class, "register"]);
Route::post("/store", [UsersController::class, "store"]);
Route::post("/logout", [UsersController::class, "logout"]);
