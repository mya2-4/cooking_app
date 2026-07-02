# 自炊記録アプリ　 cooking_app

自炊した料理や自分専用のレシピを記録できる Web アプリを作成中です。

---

## 機能

-   ログイン
-   アカウント新規作成
-   料理の投稿（画像・料理名）
-   レシピの投稿（画像・料理名・作り方）
-   投稿の一覧表示
-   投稿の編集・削除

## 使用技術

-   Laravel 13
-   PHP 8
-   MySQL
-   HTML
-   Tailwind

---

## セットアップ

### 1. Composer パッケージのインストール

composer install

### 2. 環境変数ファイルの作成

`.env.example` をコピーして `.env` を作成します。
cp .env.example .env

### 3. アプリケーションキーの生成

php artisan key:generate

### 4. データベースの作成

`.env` に設定したデータベースを作成します。

### 5. マイグレーションの実行

php artisan migrate

### 6. API サーバーの起動

php artisan serve
