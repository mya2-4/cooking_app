<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>自炊記録アプリ🍙</title>

        @vite('resources/css/index.css')
    </head>

    
</html>
<body class="flex flex-col items-center">
    <div class="bg-[#D7D7D7] w-15 h-15 rounded-full  absolute left-10 top-10"></div>
    <div class="logo mt-28.5 w-37.5 h-17.5 bg-[#D7D7D7]"></div>
    
    <div class="mt-20 grid gap-10 w-82.5 h-60">
        <button class="flex justify-center rounded-[20px] w-82.5 h-25 bg-[#FA897B] text-white">
            <div class="w-1/2 flex justify-center items-center">
                <span class="font-bold text-2xl">マイレシピ</span>
            </div>
            <div class="w-1/2 flex justify-center items-center">
                <span class="countrecipies font-bold text-base">fff</span>
                <span class="font-bold text-base">recipies</span>
            </div>
        </button>

        <button class="flex justify-center rounded-[20px] w-82.5 h-25 bg-[#FA897B] text-white">
            <div class="w-1/2 flex justify-center items-center">
                <span class="font-bold text-2xl">マイログ</span>
            </div>
            <div class="w-1/2 flex justify-center items-center">
                <span class="countlogs font-bold text-base">fff</span>
                <span class="font-bold text-base">logs</span>
            </div>
        </button>
    </div>

    <div class="w-95 h-92.5 mt-17 relative">
        <p class="text-[#8C8C8C] text-[30px] font-bold">今日のご飯</p>
        <div class="absolute bottom-0 left-0 right-0 overflow-x-auto">
            <div class="flex gap-10 w-max px-4">
                <div class="w-75 h-75 bg-[#D7D7D7]"></div>
                <div class="w-75 h-75 bg-[#D7D7D7]"></div>
                <div class="w-75 h-75 bg-[#D7D7D7]"></div>
            </div>
        </div>
    </div>

    <div class="w-95 h-92.5 mt-16 relative">
        <p class="text-[#8C8C8C] text-[30px] font-bold">最近</p>
        <div class="absolute bottom-0 left-0 right-0 overflow-x-auto">
            <div class="flex gap-10 w-max px-4">
                <div class="w-75 h-75 bg-[#D7D7D7]"></div>
                <div class="w-75 h-75 bg-[#D7D7D7]"></div>
                <div class="w-75 h-75 bg-[#D7D7D7]"></div>
            </div>
        </div>
    </div>

    
</body>