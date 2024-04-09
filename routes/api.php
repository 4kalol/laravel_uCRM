<?php

use App\Models\Customer;
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

Route::middleware('auth:sanctum')
->get('/searchCustomers', function (Request $request) {
    return Customer::searchCustomers($request->search)
    ->select('id', 'name', 'kana', 'tel')->paginate(50);
});

Route::middleware('auth:sanctum')
->get('/insertMessage', function (Request $request) {
    $sql='insert into chat_messages (chat_user_id, chat_room_id, message) values (?,?,?)';
    try{
        DB::select($sql,[$request->query('userId'),$request->query('roomId'),$request->query('message')]);
        return 'true';
    }catch(Exception $e){
        dd($e);
    }
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
