<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アイテム獲得</title>
    <style>
        body { font-family: Arial, sans-serif; background: rgba(0, 0, 0, 0.5); }
        .modal { background: white; padding: 20px; text-align: center; margin: 50px auto; width: 80%; border-radius: 10px; }
        .btn { background: #f8e7a2; border: none; padding: 10px 20px; cursor: pointer; }
        .item-img { width: 100px; margin: 20px 0; }
    </style>
</head>
<body>
    <h1>{{ $item['name'] }}</h1>
    <img src="{{ asset($item['image']) }}" alt="アイテム画像">
    <p>{{ $item['message'] }}</p>
</body>
</html>
