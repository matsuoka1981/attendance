@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css') }}" />
@endsection

@section('title')
日付一覧画面
@endsection

@section('content')



<div class="attendance-table">
    <table class="attendance-table__inner">
        <tr class="attendance-table__row">
            <th class="attendance-table__header">名前</th>
            <th class="attendance-table__header">勤務開始</th>
            <th class="attendance-table__header">勤務終了</th>
            <th class="attendance-table__header">休憩時間</th>
            <th class="attendance-table__header">勤務時間</th>
        </tr>
        <tr class="attendance-table__row">
            <th class="attendance-table__text">テスト太郎</th>
            <th class="attendance-table__text">10:00:00</th>
            <th class="attendance-table__text">20:00:00</th>
            <th class="attendance-table__text">00:30:00</th>
            <th class="attendance-table__text">09:30:00</th>
        </tr>
        <tr class="attendance-table__row">
            <th class="attendance-table__text">テスト次郎</th>
            <th class="attendance-table__text">10:00:10</th>
            <th class="attendance-table__text">20:00:00</th>
            <th class="attendance-table__text">00:30:00</th>
            <th class="attendance-table__text">09:29:50</th>
        </tr>
        <tr class="attendance-table__row">
            <th class="attendance-table__text">テスト三郎</th>
            <th class="attendance-table__text">10:00:10</th>
            <th class="attendance-table__text">20:00:00</th>
            <th class="attendance-table__text">00:30:00</th>
            <th class="attendance-table__text">09:29:50</th>
        </tr>
        <tr class="attendance-table__row">
            <th class="attendance-table__text">テスト四郎</th>
            <th class="attendance-table__text">10:00:20</th>
            <th class="attendance-table__text">20:00:00</th>
            <th class="attendance-table__text">00:30:00</th>
            <th class="attendance-table__text">09:29:40</th>
        </tr>
        <tr class="attendance-table__row">
            <th class="attendance-table__text">テスト五郎</th>
            <th class="attendance-table__text">10:00:20</th>
            <th class="attendance-table__text">20:00:00</th>
            <th class="attendance-table__text">00:30:00</th>
            <th class="attendance-table__text">09:29:40</th>
        </tr>
    </table>
</div>

@endsection