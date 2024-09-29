<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ジロリアン.COM</title>
        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <x-app-layout>
        <x-slot name="header">
            <div class="bg-yellow-500 text-black py-4 text-center text-2xl font-bold">
                レビュー作成
            </div>
        </x-slot>
        <body class="bg-yellow-100">
            <h1 class="text-4xl font-extrabold text-center text-black my-8">レビュー作成</h1>

            <div class="max-w-4xl mx-auto bg-white p-8 shadow-lg rounded-lg">
                <form action="/reviews" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <div class="foods">
                        <h2 class="text-2xl font-semibold text-yellow-600">食べたラーメン</h2>
                        <input type="text" name="review[foods]" placeholder="ラーメン名" value="{{ old('review.foods') }}" class="w-full mt-2 p-2 border border-yellow-400 rounded"/>
                        <p class="foods__error text-red-500">{{ $errors->first('review.foods') }}</p>
                    </div>

                    <div class="comment">
                        <h2 class="text-2xl font-semibold text-yellow-600">レビュー</h2>
                        <textarea name="review[comment]" placeholder="食べたラーメンの感想を自由に書こう" class="w-full mt-2 p-2 border border-yellow-400 rounded">{{ old('review.comment') }}</textarea>
                        <p class="comment__error text-red-500">{{ $errors->first('review.comment') }}</p>
                    </div>

                    <div class="rating">
                        <h2 class="text-2xl font-semibold text-yellow-600">評価(100点満点)</h2>
                        <input type="number" name="review[rating]" placeholder="100" value="{{ old('review.rating') }}" class="w-full mt-2 p-2 border border-yellow-400 rounded"/>
                        <p class="rating__error text-red-500">{{ $errors->first('review.rating') }}</p>
                    </div>

                    <div class="image">
                        <h2 class="text-2xl font-semibold text-yellow-600">写真をアップロード</h2>
                        <input type="file" name="image" class="mt-2"/>
                        <p class="rating__error text-red-500">{{ $errors->first('review.photo_id') }}</p>
                    </div>

                    <div class="store">
                        <h2 class="text-2xl font-semibold text-yellow-600">訪れた店舗</h2>
                        <select name="review[store_id]" class="w-full mt-2 p-2 border border-yellow-400 rounded">
                            @foreach($stores as $store)
                            <option value="{{ $store->id }}">{{ $store->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <input type="submit" value="保存" class="w-full bg-yellow-500 text-black py-2 rounded font-bold hover:bg-yellow-600"/>

                </form>

                <div class="footer mt-8">
                    <a href="/" class="text-yellow-500 hover:underline">戻る</a>
                </div>
            </div>
        </body>
    </x-app-layout>
</html>
