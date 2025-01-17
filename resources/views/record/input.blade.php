<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('食事入力') }}
        </h2>
        <script src="https://cdn.tailwindcss.com"></script>
    </x-slot>

    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-bladewind::tab-group name="pills-blue-tab" style="pills" class="ml-8">
                <x-slot:headings>
                    <x-bladewind::tab-heading name="morning" active="true" label="朝" />
                    <x-bladewind::tab-heading name="lunch" label="昼" />
                    <x-bladewind::tab-heading name="night" label="夕" />
                </x-slot:headings>

                <x-bladewind::tab-body>
                    <x-bladewind::tab-content name="morning" active="true">
                        <x-bladewind::card class="cursor-pointer hover:shadow-gray-300" style="height: auto; padding: 20px;">
                               <!--朝の内容を入力-->
                               <!DOCTYPE html>
                            <html lang="ja">
                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>画像アップロード</title>
                                <style>
                                    .upload-container {
                                        display: grid;
                                        grid-template-columns: repeat(3, 1fr); /* 3列に設定 */
                                        gap: 20px; /* 要素間のスペース */
                                        margin: 20px 0;
                                    }
                                    .upload-box {
                                        text-align: center;
                                    }
                                    .upload-box input[type="file"] {
                                        display: block;
                                        margin: 10px auto;
                                    }
                                    .upload-box img {
                                        max-width: 100%;
                                        max-height: 150px;
                                        margin-top: 10px;
                                    }
                                    .file-name {
                                        margin-top: 5px;
                                        font-size: 14px;
                                        color: #555;
                                    }
                                </style>
                            </head>
                            <body>
                                <h1>画像をアップロードしてください</h1>
                                <div class="upload-container">
                                    <div class="upload-box">
                                        <input type="file" name="carbohydrate-morning" accept="image/*" onchange="handleFileUpload(this)">
                                        <label>炭水化物</label>
                                        <img id="carbohydrate-morning-preview" alt="炭水化物プレビュー" style="display:none;">
                                        <div class="file-name" id="carbohydrate-morning-filename"></div>
                                    </div>
                                    <div class="upload-box">
                                        <input type="file" name="protein-morning" accept="image/*" onchange="handleFileUpload(this)">
                                        <label>タンパク質</label>
                                        <img id="protein-morning-preview" alt="タンパク質プレビュー" style="display:none;">
                                        <div class="file-name" id="protein-morning-filename"></div>
                                    </div>
                                    <div class="upload-box">
                                        <input type="file" name="vegetable-morning" accept="image/*" onchange="handleFileUpload(this)">
                                        <label>野菜</label>
                                        <img id="vegetable-morning-preview" alt="野菜プレビュー" style="display:none;">
                                        <div class="file-name" id="vegetable-morning-filename"></div>
                                    </div>
                                    
                                </div>

                                
                            </body>
                            </html>


                        </x-bladewind::card>
                        
                    </x-bladewind::tab-content>
                    <x-bladewind::tab-content name="lunch">
                        <x-bladewind::card class="cursor-pointer hover:shadow-gray-300" style="height: auto; padding: 20px;">
                               <!-- 昼の内容を入力-->
                               <!DOCTYPE html>
                            <html lang="ja">
                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>画像アップロード</title>
                                <style>
                                    .upload-container {
                                        display: flex;
                                        justify-content: space-between;
                                        gap: 20px;
                                        margin: 20px 0;
                                    }
                                    .upload-box {
                                        text-align: center;
                                        width: 30%;
                                    }
                                    .upload-box input[type="file"] {
                                        display: block;
                                        margin: 10px auto;
                                    }
                                    .upload-box img {
                                        max-width: 100%;
                                        max-height: 150px;
                                        margin-top: 10px;
                                    }
                                    .file-name {
                                        margin-top: 5px;
                                        font-size: 14px;
                                        color: #555;
                                    }
                                </style>
                            </head>
                            <body>
                                <h1>画像をアップロードしてください</h1>
                                <div class="upload-container">
                                <div class="upload-box">
                                    <input type="file" name="carbohydrate-lunch" accept="image/*" onchange="handleFileUpload(this)">
                                    <label>炭水化物</label>
                                    <img id="carbohydrate-lunch-preview" alt="炭水化物プレビュー" style="display:none;">
                                    <div class="file-name" id="carbohydrate-lunch-filename"></div>
                                </div>
                                <div class="upload-box">
                                    <input type="file" name="protein-lunch" accept="image/*" onchange="handleFileUpload(this)">
                                    <label>タンパク質</label>
                                    <img id="protein-lunch-preview" alt="タンパク質プレビュー" style="display:none;">
                                    <div class="file-name" id="protein-lunch-filename"></div>
                                </div>
                                <div class="upload-box">
                                    <input type="file" name="vegetable-lunch" accept="image/*" onchange="handleFileUpload(this)">
                                    <label>野菜</label>
                                    <img id="vegetable-lunch-preview" alt="野菜プレビュー" style="display:none;">
                                    <div class="file-name" id="vegetable-lunch-filename"></div>
                                </div>

                                </div>

                                
                            </body>
                            </html>
                        </x-bladewind::card>
                        
                    </x-bladewind::tab-content>
                    <x-bladewind::tab-content name="night">
                        <x-bladewind::card class="cursor-pointer hover:shadow-gray-300" style="height: auto; padding: 20px;">
                                <!--夜の内容を入力-->
                                <!DOCTYPE html>
                            <html lang="ja">
                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>画像アップロード</title>
                                <style>
                                    .upload-container {
                                        display: flex;
                                        justify-content: space-between;
                                        gap: 20px;
                                        margin: 20px 0;
                                    }
                                    .upload-box {
                                        text-align: center;
                                        width: 30%;
                                    }
                                    .upload-box input[type="file"] {
                                        display: block;
                                        margin: 10px auto;
                                    }
                                    .upload-box img {
                                        max-width: 100%;
                                        max-height: 150px;
                                        margin-top: 10px;
                                    }
                                    .file-name {
                                        margin-top: 5px;
                                        font-size: 14px;
                                        color: #555;
                                    }
                                </style>
                            </head>
                            <body>
                                <h1>画像をアップロードしてください</h1>
                                <div class="upload-container">
                                <div class="upload-box">
                                    <input type="file" name="carbohydrate-night" accept="image/*" onchange="handleFileUpload(this)">
                                    <label>炭水化物</label>
                                    <img id="carbohydrate-night-preview" alt="炭水化物プレビュー" style="display:none;">
                                    <div class="file-name" id="carbohydrate-night-filename"></div>
                                </div>
                                <div class="upload-box">
                                    <input type="file" name="protein-night" accept="image/*" onchange="handleFileUpload(this)">
                                    <label>タンパク質</label>
                                    <img id="protein-night-preview" alt="タンパク質プレビュー" style="display:none;">
                                    <div class="file-name" id="protein-night-filename"></div>
                                </div>
                                <div class="upload-box">
                                    <input type="file" name="vegetable-night" accept="image/*" onchange="handleFileUpload(this)">
                                    <label>野菜</label>
                                    <img id="vegetable-night-preview" alt="野菜プレビュー" style="display:none;">
                                    <div class="file-name" id="vegetable-night-filename"></div>
                                </div>

                                </div>

                                
                            </body>
                            </html>
                        </x-bladewind::card>
                        
                    </x-bladewind::tab-content>
                </x-bladewind::tab-body>
            </x-bladewind::tab-group>
            <!DOCTYPE html>
                <html lang="ja">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>目標設定</title>
                    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- 必要ならアセットを読み込み -->
                </head>
                <body class="bg-gray-100 p-6">
                    <div class="flex items-center gap-4">
                        <!-- テキスト入力欄 -->
                        <input type="text" 
                            id="goal-input"
                            class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" 
                            placeholder="目標を入力">

                        <!-- トグルスイッチ（直接HTMLで実装） -->
                        <div class="flex items-center gap-2">
                            <span class="text-gray-700">目標達成</span>
                            <input type="checkbox" 
                                id="goal-toggle" 
                                class="form-checkbox text-blue-500" />
                        </div>
                    </div>

                    <script>
                        // DOMが完全に読み込まれた後に実行
                        document.addEventListener('DOMContentLoaded', function() {
                            // 入力欄のテキストをローカルストレージから取得してセット
                            const savedGoal = localStorage.getItem('goal');
                            if (savedGoal) {
                                document.getElementById('goal-input').value = savedGoal;
                            }

                            // トグルの状態をローカルストレージから取得してセット
                            const goalToggle = document.getElementById('goal-toggle');
                            if (goalToggle) { // goal-toggleが存在する場合のみ処理を行う
                                const savedToggleState = localStorage.getItem('goal_toggle_state');
                                if (savedToggleState === 'true') {
                                    goalToggle.checked = true;
                                } else {
                                    goalToggle.checked = false;
                                }

                                // トグルの状態が変更されたときにローカルストレージに保存
                                goalToggle.addEventListener('change', function() {
                                    const toggleState = this.checked;
                                    localStorage.setItem('goal_toggle_state', toggleState);
                                });
                            }

                            // テキスト入力の変更を監視してローカルストレージに保存
                            document.getElementById('goal-input').addEventListener('input', function() {
                                const goalText = this.value;
                                localStorage.setItem('goal', goalText);
                            });
                        });
                    </script>
                </body>

                </html>


            
        </div>
        <!DOCTYPE html>
            <html lang="ja">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>フッターデザイン</title>
                <style>
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


                    <button onclick="navigateTo('/items/index')">ホームに戻る</button>
                    <button onclick="navigateTo('/record/cook')">過去の食事記録</button>



                </div>
            </body>
    
    <script>
            window.addEventListener('DOMContentLoaded', () => {
    const inputs = document.querySelectorAll('.upload-box input[type="file"]');
    const today = new Date();
    const year = today.getFullYear();
    const month = today.getMonth() + 1;
    const date = today.getDate();
    const formattedDate = `${year}-${month}-${date}`;

    inputs.forEach(input => {
        const previewId = `${input.name}-preview`;
        const filenameId = `${input.name}-filename`;
        const keyWithDate = `${input.name}-image-${formattedDate}`;

        const preview = document.getElementById(previewId);
        const filenameDiv = document.getElementById(filenameId);

        const storedImage = localStorage.getItem(keyWithDate);
        const storedFilename = localStorage.getItem(`${input.name}-filename`);

        if (storedImage && storedFilename && preview && filenameDiv) {
            preview.src = storedImage;
            preview.style.display = 'block';
            filenameDiv.textContent = storedFilename;
        }
    });
});
    </script>
    <script>
            function handleFileUpload(input) {
        const file = input.files[0]; // 選択されたファイル
        const previewId = input.name + '-preview'; // プレビュー画像のID
        const filenameId = input.name + '-filename'; // ファイル名表示用のID
        const preview = document.getElementById(previewId);
        const filenameDiv = document.getElementById(filenameId);

        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';

                // ファイル名を表示
                filenameDiv.textContent = file.name;
                const today = new Date();
                // 年・月・日・曜日を取得
                const year = today.getFullYear();
                const month = today.getMonth() + 1;
                const date = today.getDate();
                const formattedDate = `${year}-${month}-${date}`;

                // ファイル名に日付を追加
                const keyWithDate = `${input.name}-image-${formattedDate}`;
                // ローカルストレージに保存
                localStorage.setItem(keyWithDate, e.target.result);
                localStorage.setItem(input.name + '-filename', file.name); // キーに日付を含めて保存
            };
            reader.readAsDataURL(file); // ファイルをデータURLとして読み込む
        }
    }
    </script>
    
    <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>送信ボタン</title>
    <style>
        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 5vh;
            margin: 0;
            margin-bottom: 50px; /* 下に50pxの余白を追加 */
        }


        button {
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
    </style>
</head>
<body>
    <div class="button-container">
        <form id="resultForm" action="/submit" method="POST">
            <button type="submit" id="saveButton">今日の結果を送信する</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            
            const submitButton = document.getElementById('saveButton');
            const form = document.getElementById('resultForm');
            const storageKey = 'dailySubmission';

            // 現在の日付を取得
            const today = new Date().toISOString().split('T')[0];

            // ローカルストレージの確認
            const lastSubmissionDate = localStorage.getItem(storageKey);

            if (lastSubmissionDate === today) {
                // 送信済みの場合
                submitButton.textContent = 'きょうの結果は送信済みです';
                submitButton.disabled = true;
            }

            // フォーム送信時
            form.addEventListener('submit', (event) => {
                event.preventDefault();

                // ダミー送信処理
                setTimeout(() => {
                    console.log('送信成功');

                    // ローカルストレージに保存
                    localStorage.setItem(storageKey, today);
                    submitButton.textContent = 'きょうの結果は送信済みです';
                    submitButton.disabled = true;
                }, 500); // サーバー通信を模擬
            });
        });
    </script>
    <script>
            document.addEventListener('DOMContentLoaded', () => {
                document.getElementById('saveButton').addEventListener('click', () => {
                    const today = new Date();
                    // 年・月・日・曜日を取得
                    const year = today.getFullYear();
                    const month = today.getMonth() + 1;
                    const date = today.getDate();
                    const formattedDate = `${year}-${month}-${date}`;
                    const nutrientKeys = ['carbohydrate-night-image', 'protein-night-image', 'vegetable-night-image'
                        ,'carbohydrate-morning-image', 'protein-morning-image', 'vegetable-morning-image','carbohydrate-lunch-image', 'protein-lunch-image', 'vegetable-lunch-image'
                    ];
                    // 日付をキーに追加した新しい配列を作成
                    const nutrientKeysWithDate = nutrientKeys.map(key => `${key}-${formattedDate}`);

                    console.log(nutrientKeysWithDate);

                    const allSaved = nutrientKeysWithDate.every(key => localStorage.getItem(key));
                    const goalToggleState = localStorage.getItem('goal_toggle_state');
                    const randomName = (() => {
                        const names = [
                            'チョコレート',
                            'アイス',
                            'クッキー',
                            'ケーキ',
                            'キャンディ',
                            'ドーナツ',
                            'プリン',
                            'タルト',
                            'マカロン',
                            'パフェ'
                        ];
                        return names[Math.floor(Math.random() * names.length)];
                    })();

                    

                   if (allSaved && goalToggleState === 'true') {
    // アイテム名とcollection_idのマッピングを定義
    const itemCollectionMap = {
        'チョコレート': 1,
        'アイス': 2,
        'クッキー': 3,
        'ケーキ': 4,
        'ドーナツ': 5,
        'キャンディ': 6,
        'プリン': 7,
        'タルト': 8,
        'マカロン': 9,
        'パフェ': 10
    };

    // ランダムなアイテム名を選択
    const randomName = (() => {
        const names = Object.keys(itemCollectionMap);
        return names[Math.floor(Math.random() * names.length)];
    })();

    // 選択されたアイテム名に対応するcollection_idを取得
    const collectionId = itemCollectionMap[randomName];

    // サーバーに保存リクエストを送信
    fetch('/save-item', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        },
        body: JSON.stringify({
            name: randomName, // アイテム名
            collection_id: collectionId, // マッピングされたcollection_id
            owner_id: 1, // 所有者ID (適切な値を設定)
        }),
    })
    .then(response => response.json())
    .then(data => {
        console.log('保存成功:', data);
    })
    .catch(error => {
        console.error('保存エラー:', error);
    });
}

else {
                        // 保存されていない場合、ゲージテーブルをリセット
                        fetch('/reset-gauge', {
                            method: 'DELETE',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            },
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log('ゲージリセット成功:', data);
                        })
                        .catch(error => {
                            console.error('ゲージリセットエラー:', error);
                        });
                    }
                });
    });
    

    </script>

</body>
</html>

    
</x-app-layout>






   
