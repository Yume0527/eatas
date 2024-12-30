<x-app-layout>
    
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ホーム画面</title>
    <style>
        /* 基本的なCSS */
        body { font-family: Arial, sans-serif; }
        .header, .footer { background-color: #f8e7a2; padding: 10px; }
        .content { text-align: center; padding: 20px; }
        .progress-bar { background: #ccc; height: 20px; width: 80%; margin: 10px auto; position: relative; }
        .progress { background: #a4d792; height: 100%; width: 50%; } /* 例: 50% */
        .btn { background: #f8e7a2; border: none; padding: 10px 20px; cursor: pointer; }
        .btn-circle { background: red; color: white; border-radius: 50%; padding: 10px; }
        .character-container { text-align: center;
    margin-top: 20px;
    position: relative;
    display: flex;
    justify-content: center; 
    align-items: center; 
    flex-direction: column; }
        .message-container { margin-top: 20px; }
        
        /* 吹き出しのスタイル */
        .speech-bubble {
            position: absolute;
            top: -5px; /* 吹き出しの位置 */
            left: 80%;
            transform: translateX(-50%);
            background: #f8e7a2;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 200px;
            font-size: 14px;
        }

        /* 吹き出しの三角形 */
        .speech-bubble::after {
            content: '';
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -30px;
            border-width: 10px;
            border-style: solid;
            border-color: #f8e7a2 transparent transparent transparent;
        }
    </style>
</head>
<body>
    <div class="header">
        <span>{{ now()->format('Y年m月d日') }}</span>
    </div>

    <div class="content">
        <p>チートデイまであと</p>
        <div class="progress-bar">
            <div class="progress"></div>
        </div>

        <!-- キャラクター画像を囲むコンテナ -->
        <div class="character-container">
            <!-- 吹き出し -->
            <div class="speech-bubble">
                こんにちは！！
            </div>
            
            <img src="{{ asset('images/Character.png') }}" alt="キャラクター" width="150">
            <button class="btn" onclick="location.href='{{ route('items.give') }}'">アイテムをあげる</button>
        </div>

    </div>

    <div class="footer">
        
    </div>
</body>
</html>
    </x-app-layout>
