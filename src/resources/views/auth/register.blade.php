@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection

@section('title')
会員登録画面
@endsection

@section('content')
<div class="register__content">
    <div class="register__heading">
        <h2>会員登録</h2>
    </div>

    <form class="register__form" action="/register" method="post">
        @csrf

        <div class="form__group">
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="name" placeholder="名前" value="" />
                    <!-- <input type="text" name="name" placeholder="名前" value="{{ old('name') }}" /> -->
                </div>
            </div>
        </div>
        <div class="form__error">
            @error('name')
            <!-- {{ $message }} -->
            @enderror
        </div>

        <div class="form__group">
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="email" placeholder="メールアドレス" value="" />
                    <!-- <input type="text" name="email" placeholder="メールアドレス" value="{{ old('name') }}" /> -->
                </div>
            </div>
        </div>
        <div class="form__error">
            @error('name')
            <!-- {{ $message }} -->
            @enderror
        </div>

        <div class="form__group">
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="password" placeholder="パスワード" value="" />
                    <!-- <input type="text" name="password" placeholder="パスワード" value="{{ old('name') }}" /> -->
                </div>
            </div>
        </div>
        <div class="form__error">
            @error('name')
            <!-- {{ $message }} -->
            @enderror
        </div>

        <div class="form__group">
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="password" placeholder="確認用パスワード" value="" />
                    <!-- <input type="text" name="password" placeholder="確認用パスワード" value="{{ old('name') }}" /> -->
                </div>
            </div>
        </div>
        <div class="form__error">
            @error('name')
            <!-- {{ $message }} -->
            @enderror
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">ログイン</button>
        </div>

    </form>
    <p>アカウントをお持ちの方はこちらから</p>
    <a href="/login">ログイン</a>

</div>
@endsection