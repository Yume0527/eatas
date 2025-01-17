<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('過去の食事記録') }}
        </h2>
    </x-slot>
    <style>
        .date-and-tab {
            margin-bottom: 30px;
        }
        .date-display {
            text-align: center;
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: bold;
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #fff9e6;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 10px 0;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }
        .footer button {
            background-color: #ffcc33;
            color: #333;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .footer button:hover {
            background-color: #ffb400;
        }

        .meal-time {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 50px;
        }

        .meal-time img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 8px; /* 画像とラベルの間隔 */
        }

        .meal-item p {
            font-size: 14px;
            font-weight: bold;
            color: #333;
            margin: 0;
        }
    </style>

    <!-- 日付とタブのセットを繰り返す -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @for ($i = 0; $i < 10; $i++)
            
                <div class="date-and-tab">
                    <!-- 日付を表示 -->
                    <div id="date-{{ $i }}" class="date-display"></div>

                    <!-- タブを表示 -->
                    <x-bladewind::tab-group name="pills-blue-tab-{{ $i }}" style="pills" class="ml-8">
                        <x-slot:headings>
                            <x-bladewind::tab-heading name="morning-{{ $i }}" active="true" label="朝" />
                            <x-bladewind::tab-heading name="lunch-{{ $i }}" label="昼" />
                            <x-bladewind::tab-heading name="night-{{ $i }}" label="夕" />
                        </x-slot:headings>
                        <x-bladewind::tab-body>
                            <x-bladewind::tab-content name="morning-{{ $i }}" active="true">
                            <x-bladewind::card class="cursor-pointer hover:shadow-gray-300" style="height: auto; padding: 20px;">
                                <div class="meal-section">
                                    <h3>朝</h3>
                                    <div class="meal-time">
                                        <div class="meal-item">
                                            <img id="cook-{{ $i }}-carbohydrate-morning" alt="朝の炭水化物" />
                                            <p>炭水化物</p>
                                        </div>
                                        <div class="meal-item">
                                            <img id="cook-{{ $i }}-protein-morning" alt="朝のタンパク質" />
                                            <p>タンパク質</p>
                                        </div>
                                        <div class="meal-item">
                                            <img id="cook-{{ $i }}-vegetable-morning" alt="朝の野菜" />
                                            <p>野菜</p>
                                        </div>
                                    </div>
                                </div>
                            </x-bladewind::card>
                            </x-bladewind::tab-content>
                            <x-bladewind::tab-content name="lunch-{{ $i }}">
                            <x-bladewind::card class="cursor-pointer hover:shadow-gray-300" style="height: auto; padding: 20px;">
                                <div class="meal-section">
                                    <h3>昼</h3>
                                    <div class="meal-time">
                                    <div class="meal-item">
                                            <img id="cook-{{ $i }}-carbohydrate-lunch" alt="朝の炭水化物" />
                                            <p>炭水化物</p>
                                        </div>
                                        <div class="meal-item">
                                            <img id="cook-{{ $i }}-protein-lunch" alt="朝のタンパク質" />
                                            <p>タンパク質</p>
                                        </div>
                                        <div class="meal-item">
                                            <img id="cook-{{ $i }}-vegetable-lunch" alt="朝の野菜" />
                                            <p>野菜</p>
                                        </div>
                                    </div>
                                </div>
                            </x-bladewind::card>
                            </x-bladewind::tab-content>
                            <x-bladewind::tab-content name="night-{{ $i }}">
                            <x-bladewind::card class="cursor-pointer hover:shadow-gray-300" style="height: auto; padding: 20px;">
                                <div class="meal-section">
                                    <h3>夜</h3>
                                    <div class="meal-time">
                                    <div class="meal-item">
                                            <img id="cook-{{ $i }}-carbohydrate-night" alt="朝の炭水化物" />
                                            <p>炭水化物</p>
                                        </div>
                                        <div class="meal-item">
                                            <img id="cook-{{ $i }}-protein-night" alt="朝のタンパク質" />
                                            <p>タンパク質</p>
                                        </div>
                                        <div class="meal-item">
                                            <img id="cook-{{ $i }}-vegetable-night" alt="朝の野菜" />
                                            <p>野菜</p>
                                        </div>
                                    </div>
                                </div>
                            </x-bladewind::card>
                            </x-bladewind::tab-content>
                        </x-bladewind::tab-body>
                    </x-bladewind::tab-group>
                </div>
            @endfor
        </div>
    </div>

    <div class="footer">
        <button onclick="navigateTo('/record/input')">食事入力に戻る</button>
    </div>
</x-app-layout>


<script>
    function navigateTo(page) {
        window.location.href = page;
    }

    function getMealDataByDate() {
        const today = new Date();

        // 過去5日分の日付を取得
        const getLastFiveDays = () => {
            const dates = [];
            for (let i = 0; i < 10; i++) {
                const pastDate = new Date(today);
                pastDate.setDate(today.getDate() - i); // 今日からi日分減算
                const year = pastDate.getFullYear();
                const month = pastDate.getMonth() + 1
                const date = pastDate.getDate()
                dates.push(`${year}-${month}-${date}`);
            }
            return dates;
        };

        const lastFiveDays = getLastFiveDays();

        // 各日付と対応するデータを処理
        lastFiveDays.forEach((date, dateIndex) => {
            // 日付を表示する要素にセット
            const dateElement = document.getElementById(`date-${dateIndex}`);
            if (dateElement) {
                dateElement.innerHTML = `<h3>${date}</h3>`; // 日付を表示
            }

            // 食事データを取得して表示
            const mealTypes = ['morning', 'lunch', 'night'];
            const foodTypes = ['carbohydrate', 'protein', 'vegetable'];

            foodTypes.forEach(foodType => {
                mealTypes.forEach(mealTime => {
                    // ローカルストレージのキーを生成
                    const keyWithDate = `${foodType}-${mealTime}-image-${date}`;
                    const imageData = localStorage.getItem(keyWithDate);

                    // 対応する画像要素のIDを生成
                    const elementId = `cook-${dateIndex}-${foodType}-${mealTime}`;
                    
                    const imgElement = document.getElementById(elementId);

                    // 画像データが存在すれば表示
                    if (imgElement) {
                        if (imageData) {
                            imgElement.src = imageData;
                        } else {
                            imgElement.src = ''; // データがない場合は空にする
                            imgElement.alt = '画像データなし';
                        }
                    }
                    console.log(imgElement);
                });
            });
        });
    }
    
    // DOM読み込み後に実行
    document.addEventListener('DOMContentLoaded', () => {
        getMealDataByDate();
    });
</script>
