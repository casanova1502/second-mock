@php
    $attendance = App\Models\Attendance::where('user_id', Auth::id())->latest()->first();
@endphp

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
            <form action="/logout" method="post">
                @csrf
                <button type="submit">ログアウト</button>
            </form>
        </div>
        <div class="main-contents">
            <form class="form" action="/attendance" method="post">
                @csrf
                <div class="main-contents-title">
                    <p >勤務外</p>
                </div>
                <div class="main-contents-date">
                    <p>{{ $date }}</p>
                </div>
                <div class="main-contents-time">
                    <p>時間</p>
                </div>
                <button type="submit" class="button-black">出勤</button>
            </form>

            <!-- <div class="main-contents-title">
                <p>出勤中</p>
            </div>
            <div class="main-contents-date">
                <p></p>
            </div>
            <div class="main-contents-time">
                <p></p>
            </div>
            <button type="submit" class="button-black">退勤</button>
            <button type="submit" class="button-white">休憩入</button>
               
            <div class="main-contents-title">
                <p>休憩中</p>
            </div>
            <div class="main-contents-date">
                <p></p>
            </div>
            <div class="main-contents-time">
                <p></p>
            </div>
            <button type="submit" class="button-white">休憩戻</button>

            <div class="main-contents-title">
                <p>出勤中</p>
            </div>
            <div class="main-contents-date">
                <p></p>
            </div>
            <div class="main-contents-time">
                <p></p>
            </div>
            <div class="main-contents-message">
                <p>お疲れ様でした。</p>
            </div>

        </div>    
    </div>
</body>