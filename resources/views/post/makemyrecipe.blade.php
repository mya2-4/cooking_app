<!DOCTYPE html>
<html lang="ja">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>自炊記録アプリ🍙</title>

      @vite('resources/css/index.css')
    </head>
<body>
  <div class="flex flex-col items-center">
    

      <div class="flex items-center gap-50 mb-4">
        <a href="/myrecipe" class="return   bg-[#D9D9D9] w-15 h-15 "></a>

        <div class="font-bold w-25 h-5 text-xl">新規作成</div>

      </div>
      <div class="w-75 h-40 border border-[#bcbcbc] rounded-xl"></div>

      <div class="self-start ml-5">
        <label for="dish_name" class="block mt-10 text-left">タイトル</label>
        <input id="dish_name" name="dish_name" type="text" placeholder="料理名を入力してください" class="w-87 h-12 border border-gray-300 p-5 my-2 rounded-md">
      </div>

      <div class="self-start ml-5">
        <label class="block mt-10 text-left">カテゴリ</label>
        <div class="w-full flex flex-wrap gap-4 px-5 my-2">
          @foreach($categories as $category)
            <button type="button" class="w-fit h-12 px-5 border border-gray-300 rounded-md">
              {{ $category->name }}
            </button>
          @endforeach
          <input id="category-id" type="text" placeholder="+ 追加" class="w-22 h-12 border border-dashed border-gray-300 p-5 rounded-md">
        </div>
      </div>

      <div class="self-start ml-5">
        <label class="block mt-10 mb-1">材料　　　　　　　　　　　分量</label>

        <div id="material-list">
            <div class="flex items-center gap-4 mb-2 material-row">
              <input name="materials[]" type="text" class="w-45 h-12 border border-gray-300 px-6 rounded-md">
              <input name="quantities[]" type="text" class="w-30 h-12 border border-gray-300 px-6 rounded-md">
              <button type="button" class="w-6 h-10 text-3xl text-gray-500">×</button>
            </div>
        </div>
      <button type="button" id="add-material" class="px-5 underline underline-offset-3 text-gray-500 self-start">＋ 材料を追加</button>
      </div>

      <div class="self-start ml-5 mt-10">
        <label class="block mb-3">作り方</label>
        <div class="flex items-center gap-3 mb-2">
          <div>1️⃣</div>
          <textarea type="text" class="w-70 h-12 border border-gray-300 px-5 rounded-md"></textarea>
          <button type="button" class="w-10 h-10 text-3xl text-gray-500">×</button>
        </div>

        <button type="button" id="add-procedure" class="px-5 underline underline-offset-3 text-gray-500 mt-2 ml-5">＋ 手順を追加</button>
      </div>

      <div class="self-start ml-5">
        <label class="block mt-10 mb-3">メモ</label>
        <textarea type="text" class="w-87 border border-gray-300 px-5 rounded-md"></textarea>
      </div>

      <button id="serve_btn" class="w-90 h-20 bg-amber-700 text-amber-50 my-20 rounded-2xl text-xl">保存する</button>
</body> 
</html>
