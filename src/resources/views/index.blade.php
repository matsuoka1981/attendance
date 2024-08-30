@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('title')
勤怠入力画面
@endsection

@section('content')
<div class="index__content">
    <div class="index__heading">
        <h2>さんお疲れ様です！</h2>
    </div>

    <form class="index__form" action="/attendance/start" method="get">
        @csrf
        勤務開始
    </form>

    <form class="index__form" action="/attendance/end" method="get">
        @csrf
        勤務終了
    </form>

    <form class="index__form" action="/break/start" method="get">
        @csrf
        休憩開始
    </form>

    <form class="index__form" action="/break/end" method="get">
        @csrf
        休憩終了
    </form>

</div>
@endsection