<?php

use App\Http\Controllers\blogController;
use App\Models\blog;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "tittle" => "Home"
    ]);
});

Route::get('/abot', function () {
    return view('abot',[
        "tittle" => "Abot",
        "name" => "Reviandi & Adi 3 N",
        "email" => "cok@yahoo.com",
        "image" => "6.png"
    ]);
});



Route::get('/oke', [blogController::class, 'index']);
Route::get('oke/{Blog:slug}', [blogController::class, 'show']);

Route::get('/categories', function () {
    return view('categories',[
        'tittle' => 'Blog Categories',
        'categories' => Category::all()
        
    ]);
    
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category',[
        'tittle' => $category->name,
        'oke' => $category->oke,
        'category' => $category->name
    ]);
});


 