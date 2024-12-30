<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('食事入力') }}
        </h2>
        <script src="https://cdn.tailwindcss.com"></script>
    </x-slot>

    <div class="max-w-4xl mx-auto mt-8 p-6 bg-white shadow-md rounded-lg">
        <!-- 一日のカロリー摂取目標 -->
        <div class="mb-6">
            <h3 class="text-lg font-bold text-gray-700">一日のカロリー摂取目標</h3>
            <div class="flex items-center mt-2">
                <span class="text-2xl font-semibold text-blue-600">2000</span>
                <span class="text-gray-600 ml-2">kcal</span>
            </div>
        </div>

        <!-- 今日の摂取カロリー -->
        <div class="mb-6">
            <h3 class="text-lg font-bold text-gray-700">今日の摂取カロリー</h3>
            <div class="flex items-center mt-2">
                <span class="text-2xl font-semibold text-green-600">{{ $totalCalories }}</span>
                <span class="text-gray-600 ml-2">kcal</span>
            </div>
        </div>

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
                            <!-- グリッドレイアウト -->
                            <div class="grid grid-cols-4 gap-6">
                                <!-- セット1 -->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="{{ asset('images/rice.png') }}"
                                     alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('ご飯')">ご飯</x-bladewind::button>
                                </div>

                                <!-- セット2 -->
                                
                                        <div class="flex flex-col items-center space-y-2">
                                            <img src="{{ asset('images/miso.png') }}"
                                             alt="写真2" class="w-16 h-16 rounded-full">
                                            <x-bladewind::button ring_width="4" onclick="saveRecipe('お味噌汁')">お味噌汁</x-bladewind::button>
                                        </div>
                                

                                <!-- セット3 -->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="{{ asset('images/egg.png') }}"
                                     alt="写真3" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('卵料理')">卵料理</x-bladewind::button>
                                </div>

                                <!-- セット4 -->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="{{ asset('images/curry.png') }}"
                                     alt="写真4" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('カレー')">カレー</x-bladewind::button>
                                </div>
                                <!--セット5-->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="{{ asset('images/pasta.png') }}"
                                     alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('パスタ')">パスタ</x-bladewind::button>
                                </div>
                                <!--セット6-->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="{{ asset('images/salad.png') }}"
                                     alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('サラダ')">サラダ</x-bladewind::button>
                                </div>
                                <!--セット7-->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="{{ asset('images/karaage.png') }}"
                                     alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('唐揚げ')">唐揚げ</x-bladewind::button>
                                </div>
                                <!--セット8-->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="{{ asset('images/ramen.png') }}"
                                     alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('ラーメン')">ラーメン</x-bladewind::button>
                                </div>
                            </div>
                        </x-bladewind::card>
                        
                    </x-bladewind::tab-content>
                    <x-bladewind::tab-content name="lunch">
                    <x-bladewind::card class="cursor-pointer hover:shadow-gray-300" style="height: auto; padding: 20px;">
                            <!-- グリッドレイアウト -->
                            <div class="grid grid-cols-4 gap-6">
                                <!-- セット1 -->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="{{ asset('images/rice.png') }}"
                                     alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('ご飯')">ご飯</x-bladewind::button>
                                </div>

                                <!-- セット2 -->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="{{ asset('images/miso.png') }}"
                                     alt="写真2" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('お味噌汁')">お味噌汁</x-bladewind::button>
                                </div>

                                <!-- セット3 -->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="{{ asset('images/egg.png') }}"
                                     alt="写真3" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('卵料理')">卵料理</x-bladewind::button>
                                </div>

                                <!-- セット4 -->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="{{ asset('images/curry.png') }}"
                                     alt="写真4" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('カレー')">カレー</x-bladewind::button>
                                </div>
                                <!--セット5-->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="{{ asset('images/pasta.png') }}"
                                     alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('パスタ')">パスタ</x-bladewind::button>
                                </div>
                                <!--セット6-->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="{{ asset('images/salad.png') }}"
                                     alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('サラダ')">サラダ</x-bladewind::button>
                                </div>
                                <!--セット7-->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="{{ asset('images/karaage.png') }}"
                                     alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('唐揚げ')">唐揚げ</x-bladewind::button>
                                </div>
                                <!--セット8-->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="{{ asset('images/ramen.png') }}"
                                     alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('ラーメン')">ラーメン</x-bladewind::button>
                                </div>
                            </div>
                        </x-bladewind::card>
                        
                    </x-bladewind::tab-content>
                    <x-bladewind::tab-content name="night">
                    <x-bladewind::card class="cursor-pointer hover:shadow-gray-300" style="height: auto; padding: 20px;">
                            <!-- グリッドレイアウト -->
                            <div class="grid grid-cols-4 gap-6">
                                <!-- セット1 -->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="{{ asset('images/rice.png') }}"
                                     alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('ご飯')">ご飯</x-bladewind::button>
                                </div>

                                <!-- セット2 -->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="{{ asset('images/miso.png') }}"
                                     alt="写真2" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('お味噌汁')">お味噌汁</x-bladewind::button>
                                </div>

                                <!-- セット3 -->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="{{ asset('images/egg.png') }}"
                                     alt="写真3" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('卵料理')">卵料理</x-bladewind::button>
                                </div>

                                <!-- セット4 -->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="{{ asset('images/curry.png') }}"
                                     alt="写真4" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('カレー')">カレー</x-bladewind::button>
                                </div>
                                <!--セット5-->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="{{ asset('images/pasta.png') }}"
                                     alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('パスタ')">パスタ</x-bladewind::button>
                                </div>
                                <!--セット6-->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="{{ asset('images/salad.png') }}"
                                     alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('サラダ')">サラダ</x-bladewind::button>
                                </div>
                                <!--セット7-->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="{{ asset('images/karaage.png') }}"
                                     alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('唐揚げ')">唐揚げ</x-bladewind::button>
                                </div>
                                <!--セット8-->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="{{ asset('images/ramen.png') }}"
                                     alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('ラーメン')">ラーメン</x-bladewind::button>
                                </div>
                            </div>
                        </x-bladewind::card>
                        
                    </x-bladewind::tab-content>
                </x-bladewind::tab-body>
            </x-bladewind::tab-group>
            <div class="mt-6">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">今日の食事</h3>
                <div class="flex flex-wrap gap-4">
                    @foreach ($recipes as $recipe)
                        <div class="px-4 py-2 bg-blue-100 text-blue-700 font-medium rounded-lg shadow-md">
                            {{ $recipe->name }}
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

    <script>
        const csrfToken = document
            .querySelector("[name='csrf-token']")
            .getAttribute("content");
        async function saveRecipe(recipeName) {
            try {
                // サーバーに料理名を送信
                await fetch(' {{route("recipe.store")}}',{
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    
                    body: JSON.stringify( {  name: recipeName })
                });

                
            } catch (error) {
                console.error('料理名の保存に失敗しました:', error);
            }
        }
    </script>
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
</html>

</x-app-layout>
