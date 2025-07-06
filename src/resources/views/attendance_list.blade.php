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
            <h1>勤怠一覧</h1>
            <div class="main-contents-title">
                <a href="">←前月</a>
                <p>2023/06</p>
                <a href="">翌月→</a>
            </div>
            <div>
                <table>
                    <tr>
                        <th>日付</th>
                        <th>出勤</th>
                        <th>退勤</th>
                        <th>休憩</th>
                        <th>合計</th>
                        <th>詳細</th>
                    </tr>
                    @foreach($attendances as $attendance)
                    <tr>
                        <td>{{ $attendance->formatted_date }}</td>
                        <td>{{ $attendance->formatted_at_work }}</td>
                        <td>{{ $attendance->formatted_leaving_work }}</td>
                        <td>{{ $attendance->formatted_rest }}</td>
                        <td>{{ $attendance->formatted_total }}</td>
                        <td>
                            <a href="/attendance/{{ $attendance->id }}">詳細</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <!-- </form> -->
            <!-- <a href="/register">会員登録はこちら</a> -->
            <!-- ルート処理をしてから解除 -->
        </div>    
    </div>
</body>