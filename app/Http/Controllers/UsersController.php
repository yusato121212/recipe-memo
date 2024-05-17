<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;    // 追加
use App\Models\User;                    // 追加
use App\Models\Recipe;                  // 追加

class UsersController extends Controller
{
    // トップページ（HOME）表示
    public function index()
    {
        // 投稿一覧をidの降順で取得
        $recipes = Recipe::orderBy('id', 'desc')->paginate(10);
        
        // 投稿一覧からランダムにデータを取得
        $randRecipe = Recipe::inRandomOrder()->first();
        
        // 投稿一覧を表示
        return view('users.index', [    
            'recipes' => $recipes,       
            'randRecipe' => $randRecipe,       
        ]);                             
    }
    
    // レシピ投稿ページ表示
    public function create()
    {
        // 認証済みか確認
        if (\Auth::check())
        {
            // レシピ投稿画面を表示
            return view('users.create');
        }
        else
        {
            // ログインページを表示
            return redirect('/login');
        }

    }
    
    // レシピ投稿実行
    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'title' => 'required|max:50',
            'material1' => 'required|max:50',
            'quantity1' => 'required|max:50',
            'step1' => 'required|max:255',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif,bmp|max:2048',
            'comment' => 'required|max:255',
        ]);
        
        // 認証済みユーザを取得
        $user = \Auth::user();
        
        // 画像をサーバー上に保存する（storage/app/public/任意のフォルダ名）
        $path = $request->file('image')->store('img', 'public');
        
        // レシピを作成
        $recipe = new Recipe;
        $recipe -> title = $request->title;
        $recipe -> user_id = $user->id;
        $recipe -> image = $path;
        $recipe -> comment = $request->comment;
        $recipe -> save();
        
        // トップページへリダイレクトさせる
        return redirect('/')->with('success', 'レシピを投稿しました。');
    }
    
    public function mypage()
    {
        // 認証済みか確認
        if (\Auth::check())
        {
            // マイページを表示
            return view('users.mypage');
        }
        else
        {
            // ログインページを表示
            return redirect('/login');
        }
    }
}
