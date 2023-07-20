<?php

use App\Http\Resources\TopicMessageResource;
use App\Http\Resources\TopicResource;
use App\Models\Topic;
use App\Models\TopicMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

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

Route::get('/calculator/add/{arg1}/{arg2}', function (Request $request, $arg1, $arg2){
    $result = $arg1 + $arg2;
    return response()->json([
        'arg1' => $arg1,
        'arg2' => $arg2,
        'result' => $result
    ]);

});

Route::get('/calculator/sub/{arg1}/{arg2}', function (Request $request, $arg1, $arg2){
    $result = $arg1 - $arg2;
    return response()->json([
        'arg1' => $arg1,
        'arg2' => $arg2,
        'result' => $result
    ]);
});

Route::get('/topic-message/{id}', function($id){
    return new TopicMessageResource(TopicMessage::findOrFail($id));
});

Route::get('/topic-messages', function(){
    return TopicMessageResource::collection(TopicMessage::paginate());
});

Route::get('/topic/{id}', function($id){
    return new TopicResource(Topic::findOrFail($id));
});
