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
                    <x-bladewind::tab-heading name="night" label="夜" />
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
                                        <input type="file" name="carbohydrate" accept="image/*" onchange="handleFileUpload(this)">
                                        <label>炭水化物</label>
                                        <img id="carbohydrate-preview" alt="炭水化物プレビュー" style="display:none;">
                                        <div class="file-name" id="carbohydrate-filename"></div>
                                    </div>
                                    <div class="upload-box">
                                        <input type="file" name="protein" accept="image/*" onchange="handleFileUpload(this)">
                                        <label>タンパク質</label>
                                        <img id="protein-preview" alt="タンパク質プレビュー" style="display:none;">
                                        <div class="file-name" id="protein-filename"></div>
                                    </div>
                                    <div class="upload-box">
                                        <input type="file" name="vegetable" accept="image/*" onchange="handleFileUpload(this)">
                                        <label>野菜</label>
                                        <img id="vegetable-preview" alt="野菜プレビュー" style="display:none;">
                                        <div class="file-name" id="vegetable-filename"></div>
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
                    <button onclick="navigateTo('/index')">ホームに戻る</button>
                </div>
            </body>
    
    <script>
            document.addEventListener('DOMContentLoaded', () => {
        const fileInputs = document.querySelectorAll('input[type="file"]');

        // ページロード時にローカルストレージから画像を復元
        fileInputs.forEach(input => {
            const previewId = input.name + '-preview';
            const filenameId = input.name + '-filename';
            const preview = document.getElementById(previewId);
            const filenameDiv = document.getElementById(filenameId);

            const storedImage = localStorage.getItem(input.name + '-image');
            const storedFilename = localStorage.getItem(input.name + '-filename');

            if (storedImage && storedFilename) {
                preview.src = storedImage;
                preview.style.display = 'block';
                filenameDiv.textContent = storedFilename;
            }

            // ファイル選択時のイベントを設定
            input.addEventListener('change', () => handleFileUpload(input));
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

                // ローカルストレージに保存
                localStorage.setItem(input.name + '-image', e.target.result);
                localStorage.setItem(input.name + '-filename', file.name);
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
            <button type="submit" id="submitButton">今日の結果を送信する</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const submitButton = document.getElementById('submitButton');
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
</body>
</html>

    
</x-app-layout>






   
