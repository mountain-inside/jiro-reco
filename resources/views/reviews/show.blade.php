<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ジロリアン.COM</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <x-app-layout>
        <x-slot name="header">
            <div class="bg-yellow-500 text-black py-4 text-center text-2xl font-bold">
                ラーメンレビュー
            </div>
        </x-slot>
        <body class="bg-yellow-100">
            <h1 class="text-5xl font-bold text-center text-black my-8">
                {{ $review->foods }}
            </h1>

            <div class="content max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
                <div class="content__post mb-8">
                    <h3 class="text-3xl text-yellow-500 font-bold">{{ $review->rating }}</h3>
                    <h4 class="text-2xl font-semibold text-yellow-600 mt-4">レビュー</h4>
                    <p class="text-lg text-gray-700 mt-2">{{ $review->comment }}</p>  
                    <a href="/stores/{{ $review->store->id }}" class="text-yellow-500 hover:underline block mt-4">{{ $review->store->name }}</a>
                </div>

                <div class="image">
                    <img src="{{ $review->photo_id }}" alt="画像が読み込めません。" class="max-w-full h-auto rounded shadow-lg">
                </div>
            </div>

            @if (Auth::user() != null && $review->user_id == Auth::user()->id)
            <div class="edit text-center mt-8">
                <a href="/reviews/{{ $review->id }}/edit" class="bg-yellow-500 text-black px-4 py-2 rounded shadow hover:bg-yellow-600">編集</a>
            </div>
            @endif

            <div class="footer text-center mt-4">
                <a href="/" class="text-yellow-500 hover:underline">戻る</a>
            </div>
        </body>
    </x-app-layout>
</html>
