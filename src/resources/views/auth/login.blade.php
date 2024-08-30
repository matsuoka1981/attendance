@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}" />
@endsection

@section('title')
ログイン画面
@endsection

@section('content')
<div class="login__content">
    <div class="login__heading">
        <h2>ログイン</h2>
    </div>
    <form class="login__form" action="/login" method="post">
        @csrf
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

        <div class="form__button">
            <button class="form__button-submit" type="submit">ログイン</button>
        </div>

    </form>
    <p>アカウントをお持ちでない方はこちらから</p>
    <a href="/register">会員登録</a>

</div>
@endsection