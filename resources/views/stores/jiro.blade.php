<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>店舗情報</title>
        <style>
        /* Google Mapの表示サイズを指定 */
        #map {
            height: 400px;
            width: 100%;
        }
        </style>
        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <x-slot name="header">
            <div class="bg-yellow-500 text-black py-4 text-center text-2xl font-bold">
                店舗詳細
            </div>
        </x-slot>
        <body class="bg-yellow-100">
            <div class="container mx-auto my-8">
                <h1 class="name text-4xl font-bold text-center text-yellow-600 mb-6">
                    {{ $store->name }}
                </h1>
                <div class="store__info bg-white p-6 rounded-lg shadow-lg max-w-4xl mx-auto">
                    <div class="rating text-xl font-semibold text-yellow-600">
                        @if($store->rating_count == 0)
                        評価平均: {{ $store->rating_total }}
                        @else
                        評価平均: {{ $store->rating_total / $store->rating_count }}
                        @endif
                    </div>

                    <div class="text-lg text-gray-700 mt-4">
                        <p class="adress mb-2">住所: {{ $store->adress }}</p>
                        <p class="opening_hours mb-2">営業時間: {{ $store->opening_hours }}</p>
                        <p class="closed mb-2">定休日: {{ $store->closed }}</p>
                        <p class="soup mb-2">スープの傾向: {{ $store->soup->soup }}</p>
                        <p class="noodle mb-2">麺の太さ: {{ $store->noodle->noodle }}</p>
                        <p class="comment text-gray-600 mt-4">{{ $store->comment }}</p>
                    </div>

                    <!-- Google Map -->
                    <div id="map" class="mt-6 rounded-lg shadow-lg"></div>

                    <script>
                        let storeLatitude = {{ $store->latitude }};
                        let storeLongitude = {{ $store->longitude }};
                        
                        console.log(storeLatitude);
                        console.log(storeLongitude);
                        
                        function initMap() {
                            // 地図の中心を店舗の位置に設定
                            const storeLocation = { lat: storeLatitude, lng: storeLongitude };
                            console.log(storeLocation);

                            // 地図を作成して表示
                            const map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 15,  // ズームレベル
                                center: storeLocation  // 店舗の位置を地図の中心に
                            });

                            // 店舗の位置にマーカーを追加
                            const marker = new google.maps.Marker({
                                position: storeLocation,
                                map: map,
                                title: '{{ $store['name'] }}'
                            });
                        }
                    </script>
                    <script async src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.key') }}&callback=initMap"></script>
                </div>
                <div class="footer text-center mt-8">
                    <a href="/stores" class="text-yellow-600 hover:underline text-xl">戻る</a>
                </div>
            </div>
        </body>
    </x-app-layout>
</html>
