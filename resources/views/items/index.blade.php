<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ホーム画面</title>
    <link rel="stylesheet" href="{{ asset('css/index.blade.css') }}">
</head>

<body>
    <div class="header">
            <p class="date">{{ now()->format('Y年m月d日') }}</p>
        </div>

    <div class="content">

        <div class="count-box">
            <p>ごほうびデイまであと {{ 10 - $position }} 日</p>
        </div>

        <div class="todo-list">
            <p>Todoリスト</p>
            <ul id="todo-items">
            </ul>
            <input type="text" id="new-todo" placeholder="新しいタスクを入力" />
            <button id="add-todo">追加</button>
        </div>

        <div id="scroll-container" class="image-wrapper">
            @foreach(range(1, 10) as $index)
            <div class="scroll-item" style="position: relative; display: inline-block;">
                <img id="field" src="{{ asset('images/field.png') }}" alt="Field" />
                <img id="route" src="{{ asset('images/route.png') }}" alt="Route" />
                @if($index === $position + 1)
                <div class="character-container target-item">
                    <img id="yarukichi" src="{{ asset('images/Yarukichi_normal.png') }}" alt="Yarukichi Normal" class="overlay" />
                    <div class="speech-bubble">
                        @if($randomComment)
                        <p>{{ $randomComment->text }}</p>
                        @else
                        <p>コメントがありません。</p>
                        @endif
                    </div>
                </div>
                @endif
            </div>
            @endforeach
        </div>

        <div class="button">
            @if($items->isEmpty())
            <button class="btn" disabled>渡せるアイテムがありません</button>
            @else
            <button class="btn" onclick="location.href='{{ route('items.give') }}'">アイテムをあげる</button>
            @endif
            <button class="btn" onclick="navigateTo('/record/input')">今日の記録を入力する</button>
            <button class="btn" onclick="navigateTo('/items/collect')">コレクション</button>
        </div>

        <!-- <div class="footer">
            <button onclick="navigateTo('/record/input')">食事入力</button>
            <button onclick="navigateTo('/items/collect')">アイテム一覧</button>
        </div> -->
    </div>

    <script>
        function navigateTo(page) {
            window.location.href = page;
        }

        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('scroll-container');
            const yarukichi = document.getElementById('yarukichi');
            if (container && yarukichi) {
                const moveToCenter = () => {
                    const yarukichiRect = yarukichi.getBoundingClientRect(); // Yarukichi の位置を取得
                    const containerRect = container.getBoundingClientRect(); // コンテナの位置を取得
                    // Yarukichi の中央にスクロールさせる
                    const scrollOffset =
                        container.scrollLeft + yarukichiRect.left - containerRect.left - (containerRect.width / 2) + (yarukichiRect.width / 2);
                    container.scrollTo({
                        left: scrollOffset,
                        behavior: 'smooth' // スムーズに戻す
                    });
                };
                // 初期ロード時に中央に配置
                moveToCenter();
                // ユーザーがスクロールしたときに中央に戻す
                let isScrolling;
                container.addEventListener('scroll', function() {
                    window.clearTimeout(isScrolling); // 前のタイマーをクリア
                    isScrolling = setTimeout(moveToCenter, 100); // スクロール終了後に実行
                });
            }
        });

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