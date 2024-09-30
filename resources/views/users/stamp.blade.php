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
                スタンプラリー
            </div>
        </x-slot>
        <body class="bg-yellow-100">
            <div class="container mx-auto my-8 p-6 bg-white shadow-lg rounded-lg max-w-4xl">
                <div class="user_name text-center mb-6">
                    <h1 class="text-2xl font-bold text-yellow-600">{{ $user->name }}</h1>
                </div>

                <div class="stamp_register mb-8">
                    <h2 class="text-xl font-semibold text-gray-700 mb-4">スタンプを押す</h2>
                    <form action="/stamp" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="visit_store" class="block text-gray-700">訪れた店舗</label>
                            <select name="visit_store" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500">
                                <option value="">全て</option>
                                @foreach ($stores as $store)
                                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="text-center">
                            <input type="submit" class="btn bg-yellow-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-yellow-600 transition duration-300 cursor-pointer" value="スタンプを押す">
                        </div>
                    </form>
                </div>

                <div class="stamp_rally mb-8">
                    <h1 class="text-2xl font-semibold text-gray-700 mb-4">直系二郎スタンプラリー</h1>
                    <table class="border-collapse w-full text-center table-auto">
                        <tbody class="bg-white divide-y divide-gray-300">
                            <!-- First Row -->
                            <tr class="divide-x divide-gray-300">
                                <td id="store1" class="p-2">札幌</td>
                                <td id="store2" class="p-2">仙台</td>
                                <td id="store3" class="p-2">会津若松</td>
                                <td id="store4" class="p-2">新潟</td>
                                <td id="store5" class="p-2">ひたちなか</td>
                                <td id="store6" class="p-2">栃木街道</td>
                                <td id="store7" class="p-2">前橋千代田</td>
                                <td id="store8" class="p-2">千葉</td>
                                <td id="store9" class="p-2">松戸</td>
                                <td id="store10" class="p-2">京成大久保</td>
                            </tr>
                            <!-- Second Row -->
                            <tr class="divide-x divide-gray-300">
                                <td id="store11" class="p-2">柏</td>
                                <td id="store12" class="p-2">横浜関内</td>
                                <td id="store13" class="p-2">中山</td>
                                <td id="store14" class="p-2">京急川崎</td>
                                <td id="store15" class="p-2">相模大野</td>
                                <td id="store16" class="p-2">湘南藤沢</td>
                                <td id="store17" class="p-2">生田</td>
                                <td id="store18" class="p-2">三田</td>
                                <td id="store19" class="p-2">神田神保町</td>
                                <td id="store20" class="p-2">池袋</td>
                            </tr>
                            <!-- Third Row -->
                            <tr class="divide-x divide-gray-300">
                                <td id="store21" class="p-2">歌舞伎町</td>
                                <td id="store22" class="p-2">小滝橋</td>
                                <td id="store23" class="p-2">上野毛</td>
                                <td id="store24" class="p-2">環七新代田</td>
                                <td id="store25" class="p-2">目黒</td>
                                <td id="store26" class="p-2">品川</td>
                                <td id="store27" class="p-2">西台</td>
                                <td id="store28" class="p-2">桜台</td>
                                <td id="store29" class="p-2">ひばりヶ丘</td>
                                <td id="store30" class="p-2">千住大橋</td>
                            </tr>
                            <!-- Fourth Row -->
                            <tr class="divide-x divide-gray-300">
                                <td id="store31" class="p-2">亀戸</td>
                                <td id="store32" class="p-2">小岩</td>
                                <td id="store33" class="p-2">環七一之江</td>
                                <td id="store34" class="p-2">荻窪</td>
                                <td id="store35" class="p-2">仙川</td>
                                <td id="store36" class="p-2">府中</td>
                                <td id="store37" class="p-2">立川</td>
                                <td id="store38" class="p-2">野猿街道</td>
                                <td id="store39" class="p-2">めじろ台</td>
                                <td id="store40" class="p-2">一橋学園</td>
                            </tr>
                            <!-- Fifth Row -->
                            <tr class="divide-x divide-gray-300">
                                <td id="store41" class="p-2">大宮公園</td>
                                <td id="store42" class="p-2">川越</td>
                                <td id="store43" class="p-2">越谷</td>
                                <td id="store44" class="p-2">京都</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- 戻るボタン -->
                <div class="footer text-center mt-6">
                    <a href="/users/{{ $user->id }}" class="text-yellow-500 hover:text-yellow-600 transition duration-300">戻る</a>
                </div>
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
