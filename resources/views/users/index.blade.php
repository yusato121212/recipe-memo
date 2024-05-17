{{-- 投稿一覧を表示する --}}

@extends('layouts.app')

@section('content')
    <div class="w-full">
        @include('users.navtabs')    
    </div>
    
    <div class="prose ml-4">
        <h2>本日のオススメレシピ</h2>        
    </div>

    {{-- ランダムなレシピを表示させる --}}
    @if(isset($randRecipe))
        <img src="{{ asset('storage/' . $randRecipe->image) }}" alt="No Image" style="margin-right: 10px; width: 100%; height: 500px; object-fit: cover;">
        <span style="font-weight: bold; font-size: 18pt;">{{ $randRecipe->title }}</span>
    @endif
    <hr style="border-top: 1px solid #ccc; margin: 10px 0;">
    
    <div class="prose ml-4">
        <h2>新着レシピ</h2>
        @if(isset($recipes))
            @foreach ($recipes as $recipe)
                <div style="display:flex; align-items: center;">
                    <img src="{{ asset('storage/' . $recipe->image) }}" alt="No Image" style="margin-right: 10px; width: 200px; height: 150px; object-fit: cover;">
                    <div>
                        <span style="font-weight: bold;">{{ $recipe->title }}</span>
                        <span>by {{ $recipe->user->name }}</span>
                        <p>{{ $recipe->comment }}</p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection