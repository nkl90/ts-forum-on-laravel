<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\MessageCreateAction;
use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'index'])
    ->name('app.index')
;

Route::get('/forum', [ForumController::class, 'listTopics'])
    ->name('app.topic.list')
;

Route::get('/topic/show/{UUID}', [ForumController::class, 'showTopic'])
    ->name('app.topic.show')
    ->whereUuid('UUID')
;

Route::match(['get', 'post'], '/topic/create', [ForumController::class, 'createTopic'])
    ->name('app.topic.create')
;

Route::post('/topic-message/create', MessageCreateAction::class)
    ->name('app.topic-message.create.process')
;

Route::get('/forum/profile/{id}', [ForumController::class, 'profileUser'])
    ->name('app.profile')
;