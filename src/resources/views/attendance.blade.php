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
            @if(is_null($attendance))
            <form class="form" action="/attendance/at-work" method="post">
                @csrf
                <div class="main-contents-title">
                    <p>勤務外</p>
                </div>
                <div class="main-contents-date">
                    <p>{{ $date }}</p>
                </div>
                <div class="main-contents-time">
                    <p>{{ $time }}</p>
                </div>
                <button type="submit" class="button-black">出勤</button>
            </form>
        
            @elseif($attendance && is_null($attendance->at_work))
            <form class="form" action="/attendance/at-work" method="post">
                @csrf
                <div class="main-contents-title">
                    <p>勤務外</p>
                </div>
                <div class="main-contents-date">
                    <p>{{ $date }}</p>
                </div>
                <div class="main-contents-time">
                    <p>{{ $time }}</p>
                </div>
                <button type="submit" class="button-black">出勤</button>
            </form>
            
            @elseif(isset($attendance) && !is_null($attendance->at_work) && is_null($attendance->leaving_work) && is_null($attendance->start_rest))
            <div class="main-contents-title">
                <p>出勤中</p>
            </div>
            <div class="main-contents-date">
                <p>{{ $date }}</p>
            </div>
            <div class="main-contents-time">
                <p>{{ $time }}</p>
            </div>
            <form class="form" action="/attendance/leaving-work" method="post">
                @csrf    
                <button type="submit" class="button-black">退勤</button>
            </form>
            <form class="form" action="/attendance/start-rest" method="post">
                @csrf
                <button type="submit" class="button-white">休憩入</button>
            </form>
            
            @elseif(isset($attendance) && !is_null($attendance->at_work) && !is_null($attendance->start_rest) && is_null($attendance->leaving_work) && is_null($attendance->finish_rest)) 
            <form class="form" action="/attendance/finish-rest" method="post">
                @csrf
                <div class="main-contents-title">
                    <p>休憩中</p>
                </div>
                <div class="main-contents-date">
                    <p>{{ $date }}</p>
                </div>
                <div class="main-contents-time">
                    <p>{{ $time }}</p>
                </div>
                <button type="submit" class="button-white">休憩戻</button>
            </form>

            @elseif(isset($attendance) && !is_null($attendance->at_work) && is_null($attendance->leaving_work) && !is_null($attendance->start_rest) && !is_null($attendance->finish_rest))
            <div class="main-contents-title">
                <p>出勤中</p>
            </div>
            <div class="main-contents-date">
                <p>{{ $date }}</p>
            </div>
            <div class="main-contents-time">
                <p>{{ $time }}</p>
            </div>
            <form class="form" action="/attendance/leaving-work" method="post">
                @csrf    
                <button type="submit" class="button-black">退勤</button>
            </form>
            <form class="form" action="/attendance/start-rest" method="post">
                @csrf
                <button type="submit" class="button-white">休憩入</button>
            </form>

            @else(isset($attendance) && !is_null($attendance->at_work, $attendance->leaving_work))
                <div class="main-contents-title">
                    <p>退勤済み</p>
                </div>
                <div class="main-contents-date">
                    <p>{{ $date }}</p>
                </div>
                <div class="main-contents-time">
                    <p>{{ $time }}</p>
                </div>
                <div class="main-contents-message">
                    <p>お疲れ様でした。</p>
                </div>
            @endif
        </div>    
    </div>
</body>