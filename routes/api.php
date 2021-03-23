<?php

use App\Http\Resources\UserResource;
use App\Http\Resources\RoleResource;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

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

Route::get('users', function () {
    return UserResource::collection(User::all());
});

Route::get('roles', function () {
    return RoleResource::collection(Role::all());
});