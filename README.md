# 模擬案件_coachtech 勤怠管理アプリ
## 環境構築
### Dockerビルド
1.  cd 保存先のディレクトリ
2.  git clone git@github.com:casanova1502/second-mock.git
3.  cd ./second-mock
4.  docker-compose up -d --build
※MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせてdocker-compose.ymlファイルを編集してください。
### Laravel環境構築
1.  docker-compose exec php bash
2.  composer install
3.  .env.exampleファイルから.envを作成環境変数を変更
        docker-compose exec php bash
            cp .env.example .env
4.  .envの環境変数を変更
        DB_HOST=mysql
        DB_DATABASE=laravel_db
        DB_USERNAME=laravel_user
        DB_PASSWORD=laravel_pass
5.  Laravelアプリケーションキーの設定
        docker-compose exec php bash
            php artisan key:generate
6.  Laravelマイグレーションの実行
        docker-compose exec php bash
            php artisan migrate
7.  Laravelシーディングの実行
        docker-compose exec php bash
            php artisan db:seed
## 使用技術
・PHP 8.4.2
・Laravel 8.83.8
・MySQL 8.0.26
## URL
・開発環境:http://localhost/products
・phpMyAdmin:http://localhost:8080
## 実装内容
・新規ユーザー登録、及びログイン機能
・出退勤、休憩開始終了時間の打刻機能
・ユーザーごとの勤務情報一覧表示
・1日当たりの勤務情報詳細閲覧