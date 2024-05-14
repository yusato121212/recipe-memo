@extends('layouts.app')

@section('content')
    <div class="w-full">
        @include('users.navtabs')    
    </div>
    
    @include('users.index')
    @if (Auth::Check())
        ログインしてますよ
    @else
        ログインしていないですよ
    @endif
@endsection