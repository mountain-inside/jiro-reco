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
        　アカウント情報編集
        </x-slot>
        <body>
            <h1 class="title">編集画面</h1>
            <div class="profile">
                <form action="/users/{{ $user->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class='profile__name'>
                        <h2>名前</h2>
                        <input type='text' name='user[name]' value="{{ $user->name }}">
                    </div>
                    <div class='profile__email'>
                        <h2>Eメール</h2>
                        <input type='text' name='user[email]' value="{{ $user->email }}">
                    </div>
                    <div class="profile__soup">
                        <h2>スープの好み</h2>
                        <select name="user[soup_id]">
                            @foreach($soups as $soup)
                            <option value="{{ $soup->id }}">{{ $soup->soup }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="profile__noodle">
                        <h2>麺の太さの好み</h2>
                        <select name="user[noodle_id]">
                            @foreach($noodles as $noodle)
                            <option value="{{ $noodle->id }}">{{ $noodle->noodle }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="profile__home">
                        <h2>ホーム</h2>
                        <select name="user[store_id]">
                            @foreach($stores as $store)
                            <option value="{{ $store->id }}">{{ $store->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="submit" value="保存">
                </form>
            </div>
        </body>
    </x-app-layout>
</html>