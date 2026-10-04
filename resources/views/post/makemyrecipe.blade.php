<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>自炊記録アプリ🍙</title>

    @vite(['resources/css/index.css', 'resources/js/makemyrecipe.js'])
  </head>
<body>
  <div class="w-full max-w-md mx-auto px-4">
    <div class="flex items-center justify-between mb-4">
      <a href="/myrecipe" class="return   bg-[#D9D9D9] w-15 h-15 "></a>
      <div class="font-bold w-25 h-5 text-xl">新規作成</div>
    </div>

    <form action="/makemyrecipe" method="POST" class="w-full">
      @csrf

      <!-- 料理名 -->
      <div>
        <label for="dish_name" class="block mt-10 text-left">タイトル</label>
        <input id="dish_name" name="dish_name" type="text" placeholder="料理名を入力してください" class="w-full h-12 border border-gray-300 p-5 my-2 rounded-md" required>
      </div>

      <!-- カテゴリ選択 -->
      <div>
        <label class="block mt-10 text-left">カテゴリ</label>
        <div id="category-list" class="flex flex-wrap gap-4 my-2">
          @foreach($categories as $category)
            <button type="button" class="w-fit h-12 px-3 border border-gray-300 rounded-md shrink-0" data-category-id="{{ $category->id }}">{{ $category->category_name }}</button>
          @endforeach
        <input id="category-input" type="text" placeholder="+ 追加" class="w-22 h-12 border border-dashed border-gray-300 p-5 rounded-md">
        </div>
      </div>

      <!-- 材料・分量 -->
      <div>
        <label class="block mt-10 mb-1">材料　　　　　　　　　　　　分量</label>
        <div id="material-list">
          <div class="flex items-center gap-2 mb-2 material-row">
            <input name="materials[]" type="text" class="flex-1 min-w-0 h-12 border border-gray-300 px-4 rounded-md">
            <input name="quantities[]" type="text" class="w-24 shrink-0 h-12 border border-gray-300 px-4 rounded-md">
            <button type="button" class="w-8 shrink-0 h-10 text-3xl text-gray-500">×</button>
          </div>
        </div>
        <button type="button" id="add-material" class="px-5 underline underline-offset-3 text-gray-500">＋ 材料を追加</button>
      </div>

      <!-- 手順 -->
      <div>
        <label class="block mb-3 mt-10">作り方</label>
        <div id="procedure-list">
          <div class="flex items-center gap-2 mb-2 procedure-row">
            <div class="shrink-0 step-number">1️⃣</div>
            <textarea name="procedures[]" class="flex-1 min-w-0 h-12 border border-gray-300 px-4 rounded-md"></textarea>
            <button type="button" class="delete-procedure w-8 shrink-0 h-10 text-3xl text-gray-500">×</button>
          </div>
        </div>
        <button type="button" id="add-procedure" class="px-5 underline underline-offset-3 text-gray-500 mt-2 ml-5">＋ 手順を追加</button>
      </div>

      <!-- メモ -->
      <div>
        <label class="block mt-10 mb-3">メモ</label>
        <textarea name="memo" type="text" class="w-full border border-gray-300 px-5 rounded-md"></textarea>
      </div>

      <!-- 保存ボタン -->
      <button type="submit" id="serve_btn" class="w-full h-20 bg-amber-700 text-amber-50 rounded-2xl my-16 text-xl text-center justify-text-center">保存する</button>
    </form>
  </div>
</body> 
</html>
