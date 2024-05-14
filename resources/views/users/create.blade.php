{{-- レシピ投稿画面を表示する --}}

@extends('layouts.app')

@section('content')
    <div class="w-full">
        @include('users.navtabs')    
    </div>
    
    <form>
        {{-- レシピタイトル --}}
        <div class="form-control w-full my-4">
            <label for="title" class="label">
                <span class="label-text w-1/6">レシピタイトル</span>
                <input type="text" name="title" placeholder="タイトルを入力してください" class="input input-bordered w-5/6">
            </label>
        </div>
        
        {{-- 材料 --}}
        <div class="form-control w-full my-4">
            <label for="material1" class="label">
                <span class="label-text w-1/6">材料</span>
                <input type="text" name="material1" placeholder="材料名を入力してください" class="input input-bordered w-4/6">
                <input type="text" name="quantity1" placeholder="分量を入力してください" class="input input-bordered w-1/6">
            </label>
            <label for="material2" class="label">
                <span class="label-text w-1/6"></span>
                <input type="text" name="material2" placeholder="材料名を入力してください" class="input input-bordered w-4/6">
                <input type="text" name="quantity2" placeholder="分量を入力してください" class="input input-bordered w-1/6">
            </label>
            <label for="material3" class="label">
                <span class="label-text w-1/6"></span>
                <input type="text" name="material3" placeholder="材料名を入力してください" class="input input-bordered w-4/6">
                <input type="text" name="quantity3" placeholder="分量を入力してください" class="input input-bordered w-1/6">
            </label>
            <label for="material4" class="label">
                <span class="label-text w-1/6"></span>
                <input type="text" name="material4" placeholder="材料名を入力してください" class="input input-bordered w-4/6">
                <input type="text" name="quantity4" placeholder="分量を入力してください" class="input input-bordered w-1/6">
            </label>
            <label for="material5" class="label">
                <span class="label-text w-1/6"></span>
                <input type="text" name="material5" placeholder="材料名を入力してください" class="input input-bordered w-4/6">
                <input type="text" name="quantity5" placeholder="分量を入力してください" class="input input-bordered w-1/6">
            </label>
        </div>
        
        {{-- 手順 ★アップロード処理別途追加 --}}
        <div class="form-control w-full my-4">
            <label for="step1" class="label">
                <span class="label-text w-1/6">手順1</span>
                <textarea name="material5" placeholder="手順を入力してください" class="input input-bordered w-4/6"></textarea>
                <div class='w-1/6'>
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image">
                    </form>
                </div>
            </label>
            <label for="step2" class="label">
                <span class="label-text w-1/6">手順2</span>
                <textarea name="material5" placeholder="手順を入力してください" class="input input-bordered w-4/6"></textarea>
                <div class='w-1/6'>
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image">
                    </form>
                </div>
            </label>
            <label for="step3" class="label">
                <span class="label-text w-1/6">手順3</span>
                <textarea name="material5" placeholder="手順を入力してください" class="input input-bordered w-4/6"></textarea>
                <div class='w-1/6'>
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image">
                    </form>
                </div>
            </label>
            <label for="step4" class="label">
                <span class="label-text w-1/6">手順4</span>
                <textarea name="material5" placeholder="手順を入力してください" class="input input-bordered w-4/6"></textarea>
                <div class='w-1/6'>
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image">
                    </form>
                </div>
            </label>
            <label for="step5" class="label">
                <span class="label-text w-1/6">手順5</span>
                <textarea name="material5" placeholder="手順を入力してください" class="input input-bordered w-4/6"></textarea>
                <div class='w-1/6'>
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image">
                    </form>
                </div>
            </label>
        </div>
        {{-- 手順 ★アップロード処理別途追加 --}}
        <div class="form-control w-full my-4">
            <label for="title" class="label">
                <span class="label-text w-1/6">完成画像</span>
                <div class='w-5/6'>
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image">
                    </form>
                </div>
            </label>
        </div>

        <div class="form-control w-full my-4">
            <div>
                <button class="btn btn-primary">投稿する</button>
            </div>
        </div>
    </form>
@endsection