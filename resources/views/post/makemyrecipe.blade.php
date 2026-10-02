<!DOCTYPE html>
<html lang="ja">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>自炊記録アプリ🍙</title>

      @vite('resources/css/index.css')
    </head>
<body>
  <div class="flex flex-col">
    <div class="fixed bg-white pb-5 w-full flex flex-col items-center">
      <div class="flex items-center gap-50 mb-4">
        <a href="/myrecipe" class="return   bg-[#D9D9D9] w-15 h-15 "></a>
        <div class="font-bold w-25 h-5 text-xl">新規作成</div>
      </div>
      <div class="w-75 h-40 border border-[#bcbcbc] rounded-xl"></div>
      <label for="dish_name" class="block mt-10 text-left self-start ml-5">タイトル</label>
      <input id="dish_name" name="dish_name" type="text" placeholder="料理名を入力してください" class="w-90 h-12 border border-gray-300 p-5 my-2 rounded-md">
      <label class="block mt-10 text-left self-start ml-5">タイトル</label>
      @foreach($categories as $category)
        <div>
          <button type="button" class="w-auto h-12 px-5 border border-gray-300 rounded-md">
            {{ $category->name }}
          </button>
        </div>
      @endforeach
        <input name="category_name" type="text" placeholder="+ 追加" class="w-90 h-12 border border-gray-300 p-5 my-2 rounded-md">
    </div>
  </div>
</body>
</html>
