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
                マイページ
            </div>
        </x-slot>
        <body class="bg-yellow-100">
            <div class="container mx-auto my-8 p-6 bg-white shadow-lg rounded-lg max-w-2xl">
                <h1 class="title text-3xl font-bold text-center text-yellow-600 mb-6">
                    マイページ
                </h1>
                
                <div class="text-center mb-6">
                    <img class="inline-block rounded-full border-2 border-yellow-600" src="{{ $user->icon_id }}" alt="画像が読み込めません。" width="80px">
                </div>

                <div class="text-lg mb-4">
                    <h2 class="name font-semibold text-gray-700">ユーザー名: <span class="font-normal">{{ $user->name }}</span></h2>
                </div>

                @if(Auth::user() != null && Auth::user()->id == $user->id)
                <div class="text-lg mb-4">
                    <h2 class="email font-semibold text-gray-700">Eメール: <span class="font-normal">{{ $user->email }}</span></h2>
                </div>
                @endif

                <div class="text-lg mb-4">
                    <h2 class="soup font-semibold text-gray-700">スープの好み: <span class="font-normal">{{ $user->soup->soup }}</span></h2>
                </div>

                <div class="text-lg mb-4">
                    <h2 class="noodle font-semibold text-gray-700">麺の太さ: <span class="font-normal">{{ $user->noodle->noodle }}</span></h2>
                </div>

                <div class="text-lg mb-6">
                    <h2 class="home font-semibold text-gray-700">ホーム: <span class="font-normal">{{ $user->store->name }}</span></h2>
                </div>

                <div class="text-center mb-6">
                    <a href="/reviews/users/{{ $user->id }}" class="inline-block bg-yellow-600 text-white py-2 px-4 rounded-lg shadow-md hover:bg-yellow-700 transition duration-300">過去のレビューを見る</a>
                </div>
                
                <div class="text-center mb-6">
                    <a href="/stamp" class="inline-block bg-yellow-600 text-white py-2 px-4 rounded-lg shadow-md hover:bg-yellow-700 transition duration-300">スタンプラリー</a>
                </div>
                @if(Auth::user() != null && Auth::user()->id == $user->id)
                <div class="text-center mb-6">
                    <a href="/users/{{ $user->id }}/edit" class="inline-block bg-yellow-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-yellow-600 transition duration-300">編集</a>
                </div>
                @endif

                <div class="text-center">
                    <a href="/" class="text-yellow-600 hover:underline text-lg">戻る</a>
                </div>
                
            </div>
        </body>
    </x-app-layout>
</html>
