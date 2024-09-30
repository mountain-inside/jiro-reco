<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ジロリアン.COM</title>
        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <x-slot name="header">
            <div class="bg-yellow-500 text-black py-4 text-center text-2xl font-bold">
                レビュー編集
            </div>
        </x-slot>
        <body class="bg-yellow-100">
            <div class="container mx-auto my-8 p-6 bg-white shadow-lg rounded-lg max-w-lg">
                <h1 class="title text-2xl font-bold text-gray-700 text-center mb-6">編集画面</h1>
                <div class="content">
                    <form action="/reviews/{{ $review->id }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <!-- ラーメン名 -->
                        <div class='foods'>
                            <h2 class="text-lg font-semibold text-gray-700">ラーメン名</h2>
                            <input type='text' name='review[foods]' value="{{ $review->foods }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500">
                            <p class="foods__error text-red-500 text-sm mt-2">{{ $errors->first('review.foods') }}</p>
                        </div>

                        <!-- レビューコメント -->
                        <div class='comment'>
                            <h2 class="text-lg font-semibold text-gray-700">レビュー</h2>
                            <textarea name="review[comment]" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500">{{ $review->comment }}</textarea>
                            <p class="comment__error text-red-500 text-sm mt-2">{{ $errors->first('review.comment') }}</p>
                        </div>

                        <!-- 評価 -->
                        <div class='rating'>
                            <h2 class="text-lg font-semibold text-gray-700">評価</h2>
                            <input type='text' name='review[rating]' value="{{ $review->rating }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500">
                            <p class="rating__error text-red-500 text-sm mt-2">{{ $errors->first('review.rating') }}</p>
                        </div>

                        <!-- 訪れた店舗 -->
                        <div class="store">
                            <h2 class="text-lg font-semibold text-gray-700">訪れた店舗</h2>
                            <select name="review[store_id]" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500">
                                <option value="{{ $review->store_id }}">{{ $review->store->name }}</option>
                                @foreach($stores as $store)
                                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- 写真 -->
                        <div class="image">
                            <h2 class="text-lg font-semibold text-gray-700">写真を変更</h2>
                            <input type="file" name="image" class="mt-2 block w-full text-gray-700" value="{{ $review->photo_id }}">
                            <p class="rating__error text-red-500 text-sm mt-2">{{ $errors->first('review.photo_id') }}</p>
                        </div>

                        <!-- 保存ボタン -->
                        <div class="text-center">
                            <input type="submit" value="保存" class="w-full bg-yellow-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-yellow-600 transition duration-300 cursor-pointer">
                        </div>
                    </form>
                </div>

                <!-- 戻るボタン -->
                <div class="footer text-center mt-6">
                    <a href="/reviews/{{ $review->id }}" class="text-yellow-500 hover:text-yellow-600 transition duration-300">戻る</a>
                </div>
            </div>
        </body>
    </x-app-layout>
</html>
