<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ジロリアン.COM</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="foods">
            {{ $review->foods }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>{{ $review->rating }}</h3>
                <h4>レビュー</h4>
                <p>{{ $review->comment }}</p>  
                <a href="/stores/{{ $review->store->id }}">{{ $review->store->name }}</a>
            </div>
            <div>
                <img src="{{ $review->photo_id }}" alt="画像が読み込めません。">
            </div>
        </div>
        <div class="edit">
            <a href="/reviews/{{ $review->id }}/edit">編集</a>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>