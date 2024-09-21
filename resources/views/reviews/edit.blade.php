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
                <form action="/reviews/{{ $review->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class='content__title'>
                        <h2>ラーメン名</h2>
                        <input type='text' name='review[foods]' value="{{ $review->foods }}">
                    </div>
                    <div class='content__body'>
                        <h2>レビュー</h2>
                        <input type='text' name='review[comment]' value="{{ $review->comment }}">
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