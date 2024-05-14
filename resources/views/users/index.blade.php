{{-- 投稿一覧を表示する --}}

@extends('layouts.app')

@section('content')
    <div class="w-full">
        @include('users.navtabs')    
    </div>
    
    {{-- 投稿一覧 --}}
    投稿一覧です
    
    <div class="prose mx-auto text-center">
        <h2>本日のオススメレシピ</h2>
    </div>
@endsection