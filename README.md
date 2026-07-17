# 🍙 自炊記録アプリ（cooking_app）

自炊した料理や自分専用のレシピを記録できる Web アプリを作成中です。

## 💡 学習目的

Laravel 学習の一環として作成したアプリです。

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
-   HTML・css
-   Tailwind

---

## セットアップ

### 1. Composer パッケージのインストール

```bash
composer install
```

### 2. 環境変数ファイルの作成

`.env.example` をコピーして `.env` を作成します。

```bash
cp .env.example .env
```

### 3. アプリケーションキーの生成

```bash
php artisan key:generate
```

### 4. データベースの作成

`.env` に設定したデータベースを作成します。

### 5. マイグレーションの実行

```bash
php artisan migrate
```

### 6. API サーバーの起動

```bash
php artisan serve
```

```md
-   Tailwind CSS（UI フレームワーク）
```

---

-   [自炊記録アプリ　企画書（Notion）](https://app.notion.com/p/366b3ed7a1cc801e9ce4e15d36bc5657?source=copy_link)
-   [実装ノート](https://app.notion.com/p/388b3ed7a1cc8071b1b1ce6293ea9a3b?source=copy_link)
