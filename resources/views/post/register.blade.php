<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>自炊記録アプリ🍙</title>

        @vite('resources/css/index.css')
    </head>

<body class="overflow-hidden">
  <div class="flex flex-col items-center">
    <div class="z-20 text-4xl font-bold mt-20">Hello!!</div>
    <div class="absolute -top-32 -right-40 w-100 h-80 bg-[#FFDD94] rounded-[50px] rotate-25"></div>
    <div class="absolute -bottom-35 -left-40 w-100 h-100 bg-[#CCABD8] rounded-full -z-10"></div>
    <div class="text-xl font-bold mt-20">新規登録</div>
    <input type="text" placeholder="IDまたはメールアドレスを入力" class="font-bold w-92.5 h-15 border border-[#717171] rounded-[10px] mt-20 pl-5">
    <input type="password" placeholder="パスワードを入力" class="font-bold w-92.5 h-15 border border-[#717171] rounded-[10px] mt-[56.5px] pl-5">
    <a href="/register2" class="flex items-center justify-center w-50 h-12.5 text-[#8C8C8C] bg-[#86E3CE] rounded-[30px] text-xl mt-22.25 font-bold">続ける</a>
    <p class="text-base text-[#8C8C8C] underline mt-16.5">ログインはこちら</p>
  </div>
</body>
</html>