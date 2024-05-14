<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;    // 追加
use App\Models\User;                    // 追加

class UsersController extends Controller
{
    public function index()
    {
       // 投稿一覧を表示
        return view('users.index');
    }
    
    public function create()
    {
        // レシピ投稿画面を表示
        return view('users.create');
    }
    
    public function mypage()
    {
        // マイページを表示
        return view('users.mypage');
    }
}
