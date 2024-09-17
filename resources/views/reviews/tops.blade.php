<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>ジロリアン.COM</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <x-slot name="header">
        　Tops
        </x-slot>
        <body>
            <h1>ラーメンレビュー</h1>
            <a href='/reviews/create'>レビューを作成する</a>
            <div class='reviews'>
                @foreach ($reviews as $review)
                <div class='review'>
                    <h2 class='foods'>
                        <a href="/reviews/{{ $review->id }}">{{ $review->foods }}</a>
                    </h2>
                    <p class='rating'>{{ $review->rating }}</p>
                    <p class='comment'>{{ $review->comment}}</p>
                    <a href="/stores/{{ $review->store->id }}">{{ $review->store->name }}</a>
                </div>
                <form action="/reviews/{{ $review->id }}" id="form_{{ $review->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deleteReview({{ $review->id }})">delete</button>
                </form>
                @endforeach
            </div>
            <div class='paginate'>
            {{ $reviews->links() }}
            </div>
            <script>
                function deletePost(id) {
                    'use strict'
                    if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                        document.getElementById(`form_${id}`).submit();
                    }
                }
            </script>
        </body>
    </x-app-layout>
</html>