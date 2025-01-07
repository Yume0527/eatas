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
        .btn { position: relative; z-index: 10; }
    </style>
</head>
<body>
    <!-- アイテムを与えるフォーム -->
    <div class="modal">
        <p>今日の評価が<span>良</span>だったので<br>チョコレートをゲットしました！</p>
        <img src="{{ asset('images/Chocolate.png') }}" alt="チョコレート" class="item-img">

        <!-- アイテムをあげるフォーム -->
        <form action="{{ route('items.give') }}" method="POST">
            
            @csrf
            <!-- 必要に応じてアイテムIDなどを追加 -->
          
            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
            <button type="submit" class="btn">これをあげる</button>
            
        </form>
    </div>
</body>
</html>
