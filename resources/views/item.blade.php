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
    <p>今日条件を達成したので<br><span id="reward-item">チョコレート</span>をゲットしました！</p>

    <img id="reward-image" src="" alt="アイテム" class="item-img">
    

        <!-- アイテムをあげるフォーム -->
        <form action="{{ route('gauge.store') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
            <button type="submit" class="btn">これをあげる</button>
        </form>
    </div>
</body>

</html>
<script>
    document.addEventListener('DOMContentLoaded', () => {
    // APIからデータを取得
    fetch('/get-item')
        .then(response => response.json())
        .then(data => {
            if (data && data.name) {
                // アイテム名をHTMLに反映
                document.getElementById('reward-item').textContent = data.name;
            } else {
                console.error('データが見つかりません');
            }
        })
        .catch(error => console.error('エラー:', error));
});


document.addEventListener('DOMContentLoaded', () => {
    // APIからデータを取得
    fetch('/get-item')
        .then(response => response.json())
        .then(data => {
            if (data && data.name) {
                const itemName = data.name; // アイテム名を取得
                const rewardImage = document.getElementById('reward-image');

                // アイテム名に応じて画像を設定
                if (itemName === 'チョコレート') {
                    rewardImage.src = '/images/Chocolate.png';
                } else if (itemName === 'アイス') {
                    rewardImage.src = '/images/Ice.png';
                } else if (itemName === 'クッキー') {
                    rewardImage.src = '/images/Cookie.png';
                } else if (itemName === 'ケーキ') {
                    rewardImage.src = '/images/Cake.png';
                } else if (itemName === 'キャンディ') {
                    rewardImage.src = '/images/Candy.png';
                } else if (itemName === 'ドーナツ') {
                    rewardImage.src = '/images/Donut.png';
                } else if (itemName === 'プリン') {
                    rewardImage.src = '/images/Pudding.png';
                } else if (itemName === 'タルト') {
                    rewardImage.src = '/images/Tart.png';
                } else if (itemName === 'マカロン') {
                    rewardImage.src = '/images/Macaron.png';
                } else if (itemName === 'パフェ') {
                    rewardImage.src = '/images/Parfait.png';
                } else {
                    // デフォルト画像を設定
                    rewardImage.src = '/images/default.png';
                }

                // 画像のalt属性を設定
                rewardImage.alt = itemName;
            } else {
                console.error('データが見つかりません');
            }
        })
        .catch(error => console.error('エラー:', error));
});

</script>