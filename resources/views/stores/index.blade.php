<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>ジロリアン.com</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>ジロリアン.com</h1>
        <h1>店舗一覧</h1>
        <div class="search">
            <form action="/stores" method="POST">
                @csrf
                <div class="form-group">
                    <div>
                        <label for="">スープの傾向
                        <div>
                            <select name="soup">
                                <option value="">全て</option>
                                @foreach ($soups as $soup)
                                    <option value="{{ $soup->id }}">{{ $soup->soup }}</option>
                                @endforeach
                            </select>
                        </div>
                        </label>
                    </div>

                    <div>
                        <label for="">麺の太さ
                        <div>
                            <select name="noodle">
                                <option value="">全て</option>
                                @foreach ($noodles as $noodle)
                                    <option value="{{ $noodle->id }}">{{ $noodle->noodle }}</option>
                                @endforeach
                            </select>
                        </div>
                        </label>
                    </div>

                    <div>
                        <input type="submit" class="btn" value="検索">
                    </div>
                </div>
            </form>
        </div>
        <div class='stores'>
            @foreach ($stores as $store)
                <div class='store'>
                    <h2 class='name'>
                        <a href="/stores/{{ $store->id }}">{{ $store->name }}</a>
                    </h2>
                    <p class='adress'>住所 {{ $store->adress}}</p>
                    <p class='opening_hours'>営業時間 {{ $store->opening_hours }}</p>
                    <p class='closed'>定休日{{ $store->closed }}</p>
                    <p class='comment'>{{ $store->comment }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $stores->links() }}
        </div>
    </body>
</html>