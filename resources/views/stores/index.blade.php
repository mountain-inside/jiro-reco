<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ジロリアン.com</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <x-app-layout>
        <x-slot name="header">
            <div class="bg-yellow-500 text-black py-4 text-center text-2xl font-bold">
                二郎店舗一覧
            </div>
        </x-slot>
        <body class="bg-yellow-100">
            <div class="text-center my-8">
                <h1 class="text-5xl font-bold text-black mb-4">ジロリアン.com</h1>
                <h1 class="text-3xl font-semibold text-yellow-600">好みから二郎を選ぶ</h1>
            </div>

            <div class="search max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg mb-8">
                <form action="/search" method="POST">
                    @csrf
                    <div class="form-group grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xl font-semibold text-yellow-600">スープの傾向</label>
                            <select name="soup" class="w-full mt-2 p-2 border border-yellow-400 rounded">
                                <option value="">全て</option>
                                @foreach ($soups as $soup)
                                    <option value="{{ $soup->id }}">{{ $soup->soup }}</option>
                                @endforeach
                            </select>
                        </div>
    
                        <div>
                            <label class="block text-xl font-semibold text-yellow-600">麺の太さ</label>
                            <select name="noodle" class="w-full mt-2 p-2 border border-yellow-400 rounded">
                                <option value="">全て</option>
                                @foreach ($noodles as $noodle)
                                    <option value="{{ $noodle->id }}">{{ $noodle->noodle }}</option>
                                @endforeach
                            </select>
                        </div>
    
                        <div class="col-span-full">
                            <input type="submit" class="bg-yellow-500 text-black w-full py-2 mt-4 rounded font-bold hover:bg-yellow-600 cursor-pointer" value="検索">
                        </div>
                    </div>
                </form>
            </div>

            <div class='stores max-w-4xl mx-auto space-y-6'>
                @foreach ($stores as $store)
                    <div class='store bg-white p-6 rounded-lg shadow-lg'>
                        <h2 class='name text-2xl font-bold text-yellow-600'>
                            <a href="/stores/{{ $store->id }}" class="hover:underline">{{ $store->name }}</a>
                        </h2>
                        <p class='adress text-lg text-gray-700 mt-2'>住所: {{ $store->adress }}</p>
                        <p class='opening_hours text-lg text-gray-700'>営業時間: {{ $store->opening_hours }}</p>
                        <p class='closed text-lg text-gray-700'>定休日: {{ $store->closed }}</p>
                        <p class='comment text-gray-700 mt-2'>{{ $store->comment }}</p>
                    </div>
                @endforeach
            </div>

            <div class='paginate max-w-4xl mx-auto mt-8'>
                {{ $stores->links() }}
            </div>
        </body>
    </x-app-layout>
</html>
