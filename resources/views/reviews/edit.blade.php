<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ジロリアン.COM</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <x-slot name="header">
        　レビュー編集
        </x-slot>
        <body>
            <h1 class="title">編集画面</h1>
            <div class="content">
                <form action="/reviews/{{ $review->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class='foods'>
                        <h2>ラーメン名</h2>
                        <input type='text' name='review[foods]' value="{{ $review->foods }}">
                        <p class="foods__error text-red-500">{{ $errors->first('review.foods') }}</p>
                    </div>
                    <div class='comment'>
                        <h2>レビュー</h2>
                        <textarea name="review[comment]">{{ $review->comment }}</textarea>
                        <p class="comment__error text-red-500">{{ $errors->first('review.comment') }}</p>
                    </div>
                    <div class='rating'>
                        <h2>評価</h2>
                        <input type='text' name='review[rating]' value="{{ $review->rating }}">
                        <p class="rating__error text-red-500">{{ $errors->first('review.rating') }}</p>
                    </div>
                    <div class="store">
                        <h2 class="text-2xl font-semibold text-yellow-600">訪れた店舗</h2>
                        <select name="review[store_id]" class="w-full mt-2 p-2 border border-yellow-400 rounded">
                            <option value="">{{ $review->store->name }}</option>
                            @foreach($stores as $store)
                            <option value="{{ $store->id }}">{{ $store->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="image">
                        <h2 class="text-2xl font-semibold text-yellow-600">写真を変更</h2>
                        <input type="file" name="image" class="mt-2"/>
                        <p class="rating__error text-red-500">{{ $errors->first('review.photo_id') }}</p>
                    </div>
                    
                    <input type="submit" value="保存">
                </form>
            </div>
            <div class="footer">
                <a href="/reviews/{{ $review->id }}">戻る</a>
            </div>
        </body>
    </x-app-layout>
</html>