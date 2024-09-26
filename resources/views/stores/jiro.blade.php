<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>店舗情報</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <x-slot name="header">
        　店舗詳細
        </x-slot>
        <body>
            <h1 class="name">
                {{ $store->name }}
            </h1>
            <div class="store">
                <div class="store__info">
                    <h2 class="rating">評価平均　{{ $store->rating_total/ ($store->rating_count - 1)}}</h2>
                    <h3 class="adress">住所 {{ $store->adress}}</h3>
                    <p class="opening_hours">営業時間 {{ $store->opening_hours }}</p>
                    <p class="closed">定休日 {{ $store->closed}}</p>
                    <p class="soup">スープの傾向 {{ $store->soup->soup}}</p>
                    <p class="noodle">麺の太さ {{ $store->noodle->noodle}}</p>
                    <p class="comment">{{ $store->comment}}</p>
                </div>
            </div>
            <div class="footer">
                <a href="/stores">戻る</a>
            </div>
        </body>
    </x-app-layout>
</html>