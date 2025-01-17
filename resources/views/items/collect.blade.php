<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アイテム収集</title>
    <style>
        .items-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
        }

        .item-box {
            text-align: center;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .item-box img {
            max-width: 150px;
            margin-bottom: 10px;
        }

        .item-box p {
            font-weight: bold;
        }

        .collect-button {
            background-color: #ffcc33;
            color: #333;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .collect-button:hover {
            background-color: #ffb400;
        }

        /* フッターのスタイル */
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #fff9e6; /* 優しいクリーム色 */
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px 0;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }

        .footer button {
            background-color: #ffcc33; /* 明るい黄色 */
            color: #333; /* 濃い文字色で視認性を確保 */
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .footer button:hover {
            background-color: #ffb400; /* ホバー時に少し濃い黄色 */
        }
    </style>
    <script>
        function navigateTo(page) {
            window.location.href = page;
        }
    </script>
</head>
<body>
    <div class="items-grid">
    @foreach ($collections as $collection)
        <div class="item-box">
            <p>{{ $collection->name }}</p>
            <img src="{{ asset(ltrim($collection['image'], '/')) }}" alt="{{ $collection['name'] }}" class="item-img">

            @if (in_array($collection->id, $ownedItemIds))
                <p style="color: green;">〇</p>
            @else
                <p style="color: red;">×</p>
            @endif
        </div>
    @endforeach
</div>


    <div class="footer">
        <button onclick="navigateTo('/items')">ホームに戻る</button>
    </div>
</body>
</html>
