<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>coachtech 勤怠管理アプリ</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/attendance.css') }}" />
</head>

<body>
    <div class="all-contents">
        <div class="header-contents">
            <img src="storage/logo.svg" alt="ロゴ">
            <a href="/attendance">勤怠</a>
            <a href="/attendance/list">勤怠一覧</a>
            <a href="/stamp_correction_request/list">申請</a>
            <a href="">ログアウト</a>
        </div>
        <div class="main-contents">
            <!-- <form class="form" action="/login" method="post"> -->
                <!-- @csrf -->
            <div class="main-contents-title">
                <p>勤務外</p>
            </div>
            <div class="main-contents-date">
                <p>2023年6月1日㈭</p>
            </div>
            <div class="main-contents-time">
                <p>08:00</p>
            </div>
            <button type="submit" class="button-black">出勤</button>

            <div class="main-contents-title">
                <p>出勤中</p>
            </div>
            <div class="main-contents-date">
                <p>2023年6月1日㈭</p>
            </div>
            <div class="main-contents-time">
                <p>08:00</p>
            </div>
            <button type="submit" class="button-black">退勤</button>
            <button type="submit" class="button-white">休憩入</button>

            <div class="main-contents-title">
                <p>休憩中</p>
            </div>
            <div class="main-contents-date">
                <p>2023年6月1日㈭</p>
            </div>
            <div class="main-contents-time">
                <p>08:00</p>
            </div>
            <button type="submit" class="button-white">休憩戻</button>

            <div class="main-contents-title">
                <p>出勤中</p>
            </div>
            <div class="main-contents-date">
                <p>2023年6月1日㈭</p>
            </div>
            <div class="main-contents-time">
                <p>08:00</p>
            </div>
            <div class="main-contents-message">
                <p>お疲れ様でした。</p>
            </div>
            <!-- </form> -->
            <!-- <a href="/register">会員登録はこちら</a> -->
            <!-- ルート処理をしてから解除 -->
        </div>    
    </div>
</body>