<div class="tabs">
    {{-- HOMEタブ --}}
    {{-- ユーザ詳細タブ --}}
    <a href="{{ route('users.index') }}" class="tab tab-lifted grow">
        HOME
    </a>
    {{-- レシピ投稿タブ --}}
    <a href="{{ route('users.create') }}" class="tab tab-lifted grow">
        レシピ投稿
    </a>
    {{-- マイページタブ --}}
    <a href="{{ route('users.mypage') }}" class="tab tab-lifted grow">
        マイページ
    </a>
</div>