<?php

use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\ParcelController;
use App\Http\Controllers\Api\ProgramController;
use App\Http\Controllers\Api\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\User\UserController;

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

Route::group([

    'middleware' => 'api',   
    'prefix' => 'auth'

], function () {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class,'logout']);
    Route::post('refresh', [AuthController::class,'refresh']);
    Route::post('me', [AuthController::class, 'me']);
    // Route::post('register', [AuthController::class, 'register']);

});


Route::group(['prefix' => 'parcels'], function () {
    
    Route::get('', [ParcelController::class,'index']);
    Route::get('biker/my-parcels', [ParcelController::class,'bikerParcels']);
});

// Route::get('/parcels', [CourseController::class,'index']);

// Route::group(['middleware' => 'auth'], function () {

    // Route::group(['middleware' => 'role:Admin' ], function () {
    //     Route::apiResource('/parcel', CourseController::class);
    // });

    // Route::group(['middleware' => 'role:Biker'], function () {
        
    // });
    
    // Route::group(['middleware' => 'role:Sender'], function () {
        
    // });
    
    // Route::apiResource('/parcel', CourseController::class);
    // Route::apiResource('/student', StudentController::class);
    // Route::apiResource('/course', CourseController::class);

    Route::post('/student/addCourse', [StudentController::class, 'addCourse'])->name('student.addCourse');
    Route::apiResource('/program', ProgramController::class);
    Route::apiResource('/level', LevelController::class);




// });