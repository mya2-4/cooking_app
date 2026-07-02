<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>自炊記録アプリ🍙</title>

    @vite('resources/css/index.css')
</head>

<body class="bg-yellow-100 min-h-screen">

    <h1 class="text-7xl font-bold text-center mt-12">
        rogo
    </h1>

    <div class="flex flex-col items-center gap-6 mt-16">

        <button
            class="w-72 rounded-2xl bg-white shadow-lg p-6 hover:shadow-xl transition">
            <p class="text-2xl font-bold">マイレシピ</p>
            <p class="text-gray-500">recipes</p>
        </button>

        <button
            class="w-72 rounded-2xl bg-white shadow-lg p-6 hover:shadow-xl transition">
            <p class="text-2xl font-bold">マイログ</p>
            <p class="text-gray-500">logs</p>
        </button>

    </div>

</body>
</html>