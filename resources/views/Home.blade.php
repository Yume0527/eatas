<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('育成画面') }}
        </h2>
    </x-slot>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ホーム画面</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .header, .footer { background-color: #f8e7a2; padding: 10px; }
        .content { text-align: center; padding: 20px; }
        .progress-bar { background: #ccc; height: 20px; width: 80%; margin: 10px auto; position: relative; }
        .progress { background: #a4d792; height: 100%; width: 50%; } 
        .btn { background: #f8e7a2; border: none; padding: 10px 20px; cursor: pointer; }
        .btn-circle { background: red; color: white; border-radius: 50%; padding: 10px; }
    </style>
</head>
<body>
    <div class="header">
        <span>{{ now()->format('Y年m月d日') }}</span>
        <button>お知らせ</button>
    </div>

    <div class="content">
        <p>チートデイまであと</p>
        <div class="progress-bar">
            <div class="progress"></div>
        </div>
        <img src="{{ asset('images/emoji.png') }}" alt="キャラクター" width="150">
        <div>
            <p>メッセージがここに表示されます</p>
        </div>
        <form action="{{ route('item.show') }}" method="GET">
        <button class="btn">アイテムをあげる</button>
        </form>
    </div>

    <div class="footer">
        <button>ホーム</button>
        <button>発言入力</button>
        <button>発言評価</button>
        <button>記録</button>
    </div>
</body>
</html>


</x-app-layout>
