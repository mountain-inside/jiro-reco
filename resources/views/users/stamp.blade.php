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
        　スタンプラリー
        </x-slot>
        <body>
            <div class="user_name">
                <h1>{{ $user->name }}</h1>
            </div>
            <div class="stamp_register">
                <h2>スタンプを押す</h2>
                <form action="/stamp" method="POST">
                    @csrf
                    <div>
                        <label for="">訪れた店舗
                        <div>
                            <select name="visit_store">
                                <option value="">全て</option>
                                @foreach ($stores as $store)
                                <option value="{{ $store->id }}">{{ $store->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        </label>
                    </div>
                    <div>
                        <input type="submit" class="btn" value="スタンプを押す">
                    </div>
                </form>
            </div>
            
            <div class="stamp_rally">
                <h1>直系二郎スタンプラリー</h1>
                <table class="border border-black table-auto">
                    <tr>
                        <td id="store1" class="bg-white">札幌</td>
                        <td id="store2" class="bg-white">仙台</td>
                        <td id="store3" class="bg-white">会津若松</td>
                        <td id="store4" class="bg-white">新潟</td>
                        <td id="store5" class="bg-white">ひたちなか</td>
                        <td id="store6" class="bg-white">栃木街道</td>
                        <td id="store7" class="bg-white">前橋千代田</td>
                        <td id="store8" class="bg-white">千葉</td>
                        <td id="store9" class="bg-white">松戸</td>
                        <td id="store10" class="bg-white">京成大久保</td>
                    </tr>
                    <tr>
                        <td id="store11" class="bg-white">柏</td>
                        <td id="store12" class="bg-white">横浜関内</td>
                        <td id="store13" class="bg-white">中山</td>
                        <td id="store14" class="bg-white">京急川崎</td>
                        <td id="store15" class="bg-white">相模大野</td>
                        <td id="store16" class="bg-white">湘南藤沢</td>
                        <td id="store17" class="bg-white">生田</td>
                        <td id="store18" class="bg-white">三田</td>
                        <td id="store19" class="bg-white">神田神保町</td>
                        <td id="store20" class="bg-white">池袋</td>
                    </tr>
                    <tr>
                        <td id="store21" class="bg-white">歌舞伎町</td>
                        <td id="store22" class="bg-white">小滝橋</td>
                        <td id="store23" class="bg-white">上野毛</td>
                        <td id="store24" class="bg-white">環七新代田</td>
                        <td id="store25" class="bg-white">目黒</td>
                        <td id="store26" class="bg-white">品川</td>
                        <td id="store27" class="bg-white">西台</td>
                        <td id="store28" class="bg-white">桜台</td>
                        <td id="store29" class="bg-white">ひばりヶ丘</td>
                        <td id="store30" class="bg-white">千住大橋</td>
                    </tr>
                    <tr>
                        <td id="store31" class="bg-white">亀戸</td>
                        <td id="store32" class="bg-white">小岩</td>
                        <td id="store33" class="bg-white">環七一之江</td>
                        <td id="store34" class="bg-white">荻窪</td>
                        <td id="store35" class="bg-white">仙川</td>
                        <td id="store36" class="bg-white">府中</td>
                        <td id="store37" class="bg-white">立川</td>
                        <td id="store38" class="bg-white">野猿街道</td>
                        <td id="store39" class="bg-white">めじろ台</td>
                        <td id="store40" class="bg-white">一橋学園</td>
                    </tr>
                    <tr>
                        <td id="store41" class="bg-white">大宮公園</td>
                        <td id="store42" class="bg-white">川越</td>
                        <td id="store43" class="bg-white">越谷</td>
                        <td id="store44" class="bg-white">京都</td>
                    </tr>
                </table>
            </div>
            <script>
                const num = 44;
                const count = {};
                let index = 0;
                const s = @json($stamps);
                console.log(s);
                @foreach($stamps as $stamp)
                    count.store{{ $stamp->store_id }} = {{ $stamp->stamp_count }};
                    index++;
                @endforeach
                console.log(index);
                console.log(count);
                
                const countCellIds = Array.from({ length: num }, (_, i) => `store${i + 1}`);
                
                let a = 0;
                let key = Object.keys(count);
                let value = Object.values(count);
                
                const stamp = [];
                console.log(key[0]);
                console.log(value);
                for (let i = 0;i < num;i++)
                {
                    if (a < index){
                        if(countCellIds[i] == key[a]){
                            stamp[i] = value[a]
                            a++;
                        }
                        else{
                            stamp[i] = 0;
                        }
                    }
                    else{
                        stamp[i] = 0;
                    }
                    
                }
                console.log(stamp);
                stamp.forEach((value, index) => {
                    // セルの背景色を値に応じて変更 (TailwindCSS クラスを追加)
                    let countCell = document.getElementById(countCellIds[index]);
                    console.log(countCell);
                    if (stamp[index] != 0) {
                        countCell.classList.remove('bg-white'); 
                        countCell.classList.add('bg-yellow-400');
                    } 
                });

            </script>
            
        </body>
    </x-app-layout>
</html>