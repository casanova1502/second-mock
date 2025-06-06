<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>coachtech 勤怠管理アプリ</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
</head>

<body>
    <div class="all-contents">
        <div class="header-contents">
            <img src="{{ asset('storage/logo.svg') }}" alt="ロゴ">
            <a href="">勤怠</a>
            <a href="">スタッフ一覧</a>
            <a href="">申請一覧</a>
            <a href="">ログアウト</a>
        </div>
        <div class="main-contents">
            <!-- <form class="form" action="/login" method="post"> -->
                <!-- @csrf -->
            <div class="main-contents-title">
                <h1>スタッフ一覧</h1>
            </div>
            <div>
                <table>
                    <tr>
                        <td>名前</td>
                        <td>メールアドレス</td>
                        <td>月次勤怠</td>
                    </tr>
                    <tr>
                        <td>西 怜奈</td>
                        <td>reina.n@coachtech.com</td>
                        <td>
                            <a href="">詳細</a>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- </form> -->
            <!-- <a href="/register">会員登録はこちら</a> -->
            <!-- ルート処理をしてから解除 -->
        </div>    
    </div>
</body>