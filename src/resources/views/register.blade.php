<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>coachtech 勤怠管理アプリ</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>

<body>
    <div class="all-contents">
        <div class="header-contents">
            <img src="storage/logo.svg" alt="ロゴ">
        </div>
        <div class="main-contents">
            <h1>会員登録</h1>
            <form action="/register" method="post">
                @csrf
                <div class="form-group">
                    <label class="label">名前</label><br>
                    <input type="text" name="name" class="resigter_contents" value="{{ old('name')}}" /> 
                </div>
                <div class="form-group">
                    <label class="label">メールアドレス</label><br>
                    <input type="email" name="email" class="resigter_contents" value="{{ old('email') }}" />
                </div>
                <div class="form-group">
                    <label class="label">パスワード</label><br>
                    <input type="password" name="password" class="resigter_contents" />
                </div>
                <div class="form-group">
                    <label class="label">確認用パスワード</label><br>
                    <input type="password" name="password_confirmation" class="resigter_contents" />
                </div>
                <button type="submit" class="button-register">登録する</button>
            </form>
            <a href="/login" class="href">ログインはこちら</a>
        </div>    
    </div>
</body>