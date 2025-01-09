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
            @if($items->isEmpty())
                <p>渡せるアイテムがありません。</p>
                <button class="btn" disabled>アイテムをあげる</button>
            @else
                <button class="btn" onclick="location.href='{{ route('items.give') }}'">アイテムをあげる</button>
            @endif
    <div class="todo-list">
        <h3>Todoリスト</h3>
        <ul id="todo-items">

        </ul>
        <input type="text" id="new-todo" placeholder="新しいタスクを入力" />
        <button id="add-todo">追加</button>
    </div>
           
        </div>

    </div>

 <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フッターデザイン</title>
    <style>
         .todo-list {
            position: absolute;
            top: 50%;
            left: 30;
            transform: translate(-100%, 50%);
            background-color: #fff9e6;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 250px;
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #fff9e6; /* 優しいクリーム色 */
            display: flex;
            justify-content: space-around;
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
    <div class="footer">
       
        <button onclick="navigateTo('/record/input')">食事入力</button>
    </div>
     <script>
        // ここにJavaScriptを記述
        document.getElementById('add-todo').addEventListener('click', function() {
            const todoInput = document.getElementById('new-todo');
            const todoText = todoInput.value.trim();

            if (todoText) {
                const todoList = document.getElementById('todo-items');
                const newTodo = document.createElement('li');
                newTodo.textContent = todoText;

                // 削除ボタンを作成
                const deleteButton = document.createElement('button');
                deleteButton.textContent = '削除';
                deleteButton.style.marginLeft = '10px';
                deleteButton.style.background = '#ff6b6b';
                deleteButton.style.border = 'none';
                deleteButton.style.borderRadius = '5px';
                deleteButton.style.color = 'white';
                deleteButton.style.cursor = 'pointer';

                deleteButton.addEventListener('click', function() {
                    todoList.removeChild(newTodo);
                });

                newTodo.appendChild(deleteButton);
                todoList.appendChild(newTodo);
                todoInput.value = ''; // 入力フィールドをリセット
            }
        });
    </script>
</body>
</html>


</body>
</html>
    </x-app-layout>
