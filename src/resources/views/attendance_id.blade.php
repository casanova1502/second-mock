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
            <img src="storage/logo.svg" alt="ロゴ">
            <a href="">勤怠</a>
            <a href="">勤怠一覧</a>
            <a href="">申請</a>
            <a href="">ログアウト</a>
        </div>
        <div class="main-contents">
            <!-- <form class="form" action="/login" method="post"> -->
                <!-- @csrf -->
            <h1>勤怠詳細</h1>
            <div class="main-contents-title">
            </div>
            <div>
                <table>
                    <tr>
                        <td>名前</td>
                        <td>西 伶奈</td>
                    </tr>
                    <tr>
                        <td>日付</td>
                        <td>2023年</td>
                        <td></td>
                        <td>6月1日</td>
                    </tr>
                    <tr>
                        <td>出勤・退勤</td>
                        <td>
                            <input type="text" placeholder="9:00">
                        </td>
                        <td>～</td>
                        <td>
                            <input type="text" placeholder="18:00">
                        </td>
                    </tr>
                    <tr>
                        <td>休憩</td>
                        <td>
                            <input type="text" placeholder="12:00">
                        </td>
                        <td>～</td>
                        <td>
                            <input type="text" placeholder="13:00">
                        </td>
                    </tr>
                    <tr>
                        <td>休憩2</td>
                        <td>
                            <input type="text">
                        </td>
                        <td>～</td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>備考</td>
                        <td>
                            <input type="text" placeholder="電車遅延のため">
                        </td>
                    </tr>
                </table>
                <button type="submit">修正</button>
            </div>
            <!-- </form> -->
            <!-- <a href="/register">会員登録はこちら</a> -->
            <!-- ルート処理をしてから解除 -->
        </div>    
    </div>
</body>