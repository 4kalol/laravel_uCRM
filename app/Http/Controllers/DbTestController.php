<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DbTestController extends Controller
{
    public function index(Request $request)
    {
        $sql = 'select id as room_id
        , name as room_name
        from chat_rooms';

        $rooms = DB::select($sql);
        return Inertia::render('DbTest/Index',['rooms' => $rooms]);
    }

    public function show(Request $request)
    {
        // ユーザ情報をinsert
        $inputUserName = $request->input('name');
        $roomId = $request->input('roomData')['room_id'];
        $created = Carbon::now();
        $updated = Carbon::now();
        $sql = 'insert into chat_users (name, chat_room_id, created_at, updated_at) values (?, ?, ?, ?)';
        DB::select($sql, [$inputUserName, $roomId, $created, $updated]);

        // insertした自身の情報を取得
        $sql = 'select id, name from chat_users where created_at = ?';
        $currentUserInfo = DB::select($sql, [$created]);

        // 入室ルームのメッセージ情報を取得
        $sql = 'select chat_messages.id as message_id
        , chat_messages.chat_user_id as user_id
        , chat_messages.message as message
        , chat_users.name as user_name
        from chat_messages
        join chat_users on chat_users.id = chat_messages.chat_user_id
        where chat_messages.chat_room_id = ?';
        $messageInfo = DB::select($sql, [$roomId]);

        return Inertia::render('DbTest/ChatRoom',['currentUserInfo' => $currentUserInfo, 'messagesInfo' => $messageInfo, 'roomId' => $roomId]);
    }
}
