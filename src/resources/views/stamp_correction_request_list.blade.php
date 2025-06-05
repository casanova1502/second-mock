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
            <a href="">勤怠一覧</a>
            <a href="">申請</a>
            <a href="">ログアウト</a>
        </div>
        <div class="main-contents">
            <!-- <form class="form" action="/login" method="post"> -->
                <!-- @csrf -->
            <h1>申請一覧</h1>
            <div class="main-contents-category">
                <a href="">承認待ち</a>
                <a href="">認証済み</a>
            </div>
            <div class="main-contents-index">
                <table>
                    <tr>
                        <td>状態</td>
                        <td>名前</td>
                        <td>対象日時</td>
                        <td>申請理由</td>
                        <td>申請日時</td>
                        <td>詳細</td>
                    </tr>
                    <tr>
                        <td>承認待ち</td>
                        <td>西怜奈</td>
                        <td>2023/06/01</td>
                        <td>遅延のため</td>
                        <td>2023/06/02</td>
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