<!DOCTYPE html>
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
            <div class="bg-yellow-500 text-black py-4 text-center text-3xl font-bold">
                Tops
            </div>
        </x-slot>
        <body class="bg-yellow-400">
            <h1 class="text-5xl font-extrabold text-center text-black my-8">ジロリアン.COM</h1>

            <div class="max-w-4xl mx-auto p-4 bg-yellow-300 shadow-lg rounded-lg">
                @if(Auth::user() != null)
                <h2 class='mypage text-2xl text-black font-semibold'>
                    <a href="/users/{{ Auth::user()->id }}" class="hover:underline">マイページ</a>
                </h2>
                @endif
                <h2 class='jiro text-2xl text-black font-semibold my-4'>
                    <a href="/stores" class="hover:underline">二郎の店舗を好みから検索する</a>
                </h2>
                <a href='/reviews/create' class="bg-black text-yellow-400 px-4 py-2 rounded shadow hover:bg-gray-800">レビューを作成する</a>

                <div class='reviews my-8'>
                    @foreach ($reviews as $review)
                    <div class='review p-4 bg-yellow-200 rounded shadow my-4'>
                        <h3 class='foods text-3xl font-bold text-black'>
                            <a href="/reviews/{{ $review->id }}" class="hover:underline">{{ $review->foods }}</a>
                        </h3>
                        <p class='rating text-xl text-black'>評価: {{ $review->rating }}</p>
                        <p class='comment text-lg text-black my-2'>{{ $review->comment}}</p>
                        <a href="/reviews/stores/{{ $review->store->id }}" class="text-black hover:underline">{{ $review->store->name }}</a>
                    </div>

                    @if (Auth::user() != null && $review->user_id == Auth::user()->id)
                    <form action="/reviews/{{ $review->id }}" id="form_{{ $review->id }}" method="post" class="my-4">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deleteReview({{ $review->id }})" class="bg-black text-yellow-400 px-4 py-2 rounded hover:bg-gray-800">delete</button>
                    </form>
                    @endif
                    @endforeach
                </div>

                <div class='paginate my-8'>
                    {{ $reviews->links() }}
                </div>
            </div>

            <script>
                function deleteReview(id) {
                    'use strict'
                    if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                        document.getElementById(`form_${id}`).submit();
                    }
                }
            </script>
        </body>
    </x-app-layout>
</html>
