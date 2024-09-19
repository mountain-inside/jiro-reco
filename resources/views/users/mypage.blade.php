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
        <h1 class="title">
            マイページ
        </h1>
        <div>
            <img src="{{ $user->icon_id }}" alt="画像が読み込めません。" width="60px">
        </div>
        <h1 class="name">
            ユーザー名
            {{ $user->name }}
        </h1>
        <h1 class="email">
            Eメール
            {{ $user->email }}
        </h1>
        <h1 class="soup">
            スープの好み
            {{ $user->soup->soup}}
        </h1>
        <h1 class="noodle">
            麺の太さ
            {{ $user->noodle->noodle}}
        </h1>
        <h1 class="home">
            ホーム
            {{ $user->store->name}}
        </h1>
        
        <div class="edit">
            <a href="/users/{{ $user->id }}/edit">編集</a>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>