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
                アカウント情報編集
            </div>
        </x-slot>
        <body class="bg-yellow-100">
            <div class="container mx-auto my-8 p-6 bg-white shadow-lg rounded-lg max-w-lg">
                <h1 class="title text-2xl font-bold text-gray-700 text-center mb-6">編集画面</h1>
                <div class="profile">
                    <form action="/users/{{ $user->id }}" method="POST" class="space-y-6" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="image">
                            <h2 class="text-lg font-semibold text-gray-700">アイコンを変更する</h2>
                            <img id="prev-img" src="{{ $user->icon_id }}" alt="画像" style="max-width: 100%; height: auto;">
                            <img id="new-img-preview" src="" alt="新しい画像プレビュー" style="max-width: 100%; height: auto; display: none;">
                            <input id="new-img" type="file" name="image" class="mt-2 block w-full text-gray-700">
                            <input type="hidden" name="existing_image" value="{{ $user->icon_id }}">
                        </div>

                        <!-- 名前 -->
                        <div class='profile__name'>
                            <h2 class="text-lg font-semibold text-gray-700">名前</h2>
                            <input type='text' name='user[name]' value="{{ $user->name }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500">
                        </div>

                        <!-- Eメール -->
                        <div class='profile__email'>
                            <h2 class="text-lg font-semibold text-gray-700">Eメール</h2>
                            <input type='text' name='user[email]' value="{{ $user->email }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500">
                        </div>

                        <!-- スープの好み -->
                        <div class="profile__soup">
                            <h2 class="text-lg font-semibold text-gray-700">スープの好み</h2>
                            <select name="user[soup_id]" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500">
                                <option value="{{ $user->soup_id}}">現在の設定:{{ $user->soup->soup}}</option>
                                @foreach($soups as $soup)
                                    <option value="{{ $soup->id }}">{{ $soup->soup }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- 麺の太さの好み -->
                        <div class="profile__noodle">
                            <h2 class="text-lg font-semibold text-gray-700">麺の太さの好み</h2>
                            <select name="user[noodle_id]" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500">
                                <option value="{{ $user->noodle_id }}">現在の設定:{{ $user->noodle->noodle}}</option>
                                @foreach($noodles as $noodle)
                                    <option value="{{ $noodle->id }}">{{ $noodle->noodle }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- ホーム -->
                        <div class="profile__home">
                            <h2 class="text-lg font-semibold text-gray-700">ホーム</h2>
                            <select name="user[store_id]" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500">
                                <option value="{{ $user->store_id }}">現在の設定:{{ $user->store->name}}</option>
                                @foreach($stores as $store)
                                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- 保存ボタン -->
                        <div class="text-center">
                            <input type="submit" value="保存" class="w-full bg-yellow-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-yellow-600 transition duration-300 cursor-pointer">
                        </div>
                    </form>
                </div>
                <!-- 戻るボタン -->
                <div class="footer text-center mt-6">
                    <a href="/users/{{ $user->id }}" class="text-yellow-500 hover:text-yellow-600 transition duration-300">戻る</a>
                </div>
            </div>
        </body>
        <script>
            const prevImg = document.getElementById("prev-img");
            const newImg = document.getElementById("new-img");
            const newImgPreview = document.getElementById('new-img-preview');

            
            newImg.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        // プレビュー用のimgタグに読み込んだ画像を表示
                        newImgPreview.src = e.target.result;
                        newImgPreview.style.display = 'block'; // プレビューを表示
                        prevImg.style.display = 'none'; // 元の画像を非表示
                    }
                    reader.readAsDataURL(file);
                }
            });
        </script>
    </x-app-layout>
</html>
