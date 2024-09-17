<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>ジロリアン.COM</title>
    </head>
    <body>
        <h1>レビュー作成</h1>
        <form action="/reviews" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="foods">
                <h2>食べたラーメン</h2>
                <input type="text" name="review[foods]" placeholder="ラーメン名"/>
                <p class="foods__error" style="color:red">{{ $errors->first('review.foods') }}</p>
            </div>
            <div class="comment">
                <h2>レビュー</h2>
                <textarea name="review[comment]" placeholder="食べたラーメンの感想を自由に書こう"></textarea>
                <p class="comment__error" style="color:red">{{ $errors->first('review.comment') }}</p>
            </div>
            <div class="rating">
                <h2>評価(100点満点)</h2>
                <input type="text" name="review[rating]" placeholder="100"/>
                <p class="rating__error" style="color:red">{{ $errors->first('review.rating') }}</p>
            </div>
            <div class="image">
                <input type="file" name="image">
            </div>
            <div class="store">
                <p>store</p>
                <select name="review[store_id]">
                    @foreach($stores as $store)
                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>