{{-- レシピ投稿画面を表示する --}}

@extends('layouts.app')

@section('content')
    <div class="w-full">
        @include('users.navtabs')    
    </div>
    
    <form method="POST" action="{{route('users.store')}}" enctype="multipart/form-data">
        @csrf
        {{-- レシピタイトル --}}
        <div class="form-control w-full my-4">
            <label for="title" class="label">
                <span class="label-text w-1/6">レシピタイトル</span>
                <input type="text" name="title" placeholder="タイトルを入力してください" class="input input-bordered w-5/6">
            </label>
        </div>
        
        {{-- 材料 --}}
        <div class="form-control w-full my-4">
            @for ($i = 1; $i <= 5; $i++)
                <div class="flex items-center my-2">
                    <label for="material{{ $i }}" class="label w-1/6">
                        <span class="label-text">材料{{ $i }}</span>
                    </label>
                    <input type="text" name="material{{ $i }}" placeholder="材料名" class="input input-bordered w-4/6">
                    <input type="text" name="quantity{{ $i }}" placeholder="分量" class="input input-bordered w-1/6 ml-2">
                </div>
            @endfor
        </div>
        
        {{-- 手順 --}}
        <div class="form-control w-full my-4">
            @for ($i = 1; $i <= 5; $i++)
                <div class="flex items-start my-2">
                    <label for="step{{ $i }}" class="label w-1/6">
                        <span class="label-text">手順{{ $i }}</span>
                    </label>
                    <textarea name="step{{ $i }}" placeholder="手順を入力してください" class="input input-bordered w-4/6"></textarea>
                    <input type="file" name="step_image{{ $i }}" class="w-1/6 ml-2">
                </div>
            @endfor
        </div>
        
        {{-- 完成画像 --}}
        <div class="form-control w-full my-4">
            <label for="image" class="label">
                <span class="label-text w-1/6">完成画像</span>
                <input type="file" name="image" class="w-5/6">
            </label>
        </div>
        
        {{-- ひとこと --}}
        <div class="form-control w-full my-4">
            <label for="comment" class="label">
                <span class="label-text w-1/6">ひとこと</span>
                <textarea name="comment" placeholder="ひとことを入力してください" class="input input-bordered w-5/6"></textarea>
            </label>
        </div>

        <div class="form-control w-full my-4">
            <button type="submit" class="btn btn-primary">投稿する</button>
        </div>
    </form>
@endsection