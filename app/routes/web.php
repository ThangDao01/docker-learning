<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MailController;
use App\Models\Account;
use App\Models\Article;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/', [ArticleController::class, 'listArticle']);
Route::get('/test', [AccountController::class,'getSeed']);

Route::get('/listArticle', [ArticleController::class, 'listArticle']);

Route::get('/news/{id}',function ($id){
    return Article::find($id);
});

Route::get('/article/create',[ArticleController::class,'createArticleForm']);
Route::post('/article/create',[ArticleController::class,'createArticle']);
Route::get('/article/update/{id}', [ArticleController::class,'updateForm']);
Route::post('/article/update/{id}', [ArticleController::class,'update']);

Route::get('/export-csv',[ArticleController::class,'export_csv']);
Route::post('/import-csv', [ArticleController::class, 'import_csv']);

Route::get('/account/list', [AccountController::class, 'listAccount']);

//login
Route::get('/account/login', [AccountController::class, 'LoginForm']);
Route::post('/account/login', [AccountController::class, 'LoginPost']);
//
////register
Route::get('/account/register', [AccountController::class, 'RegisterForm']);
Route::post('/account/register', [AccountController::class, 'RegisterPost']);

//Account Action

Route::get('/enter-email', [AccountController::class, 'enter_Email_Form']);
Route::post('/enter-email', [AccountController::class, 'enter_Email']);
Route::get('/rs-pass/{email}', [AccountController::class, 'rs_Password_Form']);
Route::post('/rs-pass/{email}', [AccountController::class, 'rs_Password']);


Route::get(
    '{uri}',
    '\\' . Pallares\LaravelNuxt\Controllers\NuxtController::class
)->where('uri', '.*');

