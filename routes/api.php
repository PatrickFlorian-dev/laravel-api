<?php

use App\Http\Controllers\PostsApiController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Only return 100 records, quickview
Route::get('/posts', [PostsApiController::class, 'index']);

// Insert a new post record
Route::post('/posts', [PostsApiController::class, 'insert']);

// Update a post record
Route::put('/posts/{post}', [PostsApiController::class, 'update']);

// Delete a post record
Route::delete('/posts/{post}', [PostsApiController::class, 'delete']);
