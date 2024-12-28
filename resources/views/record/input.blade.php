<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('食事入力') }}
        </h2>
        <script src="https://cdn.tailwindcss.com"></script>
    </x-slot>
    <h3>一日のカロリー摂取目標</h3>
    <h3>今日の摂取カロリー</h3>
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
                                    <img src="path-to-your-image1.jpg" alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('食パン')">食パン</x-bladewind::button>
                                </div>

                                <!-- セット2 -->
                                
                                        <div class="flex flex-col items-center space-y-2">
                                            <img src="path-to-your-image2.jpg" alt="写真2" class="w-16 h-16 rounded-full">
                                            <x-bladewind::button ring_width="4" onclick="document.getElementById('morning').submit();">
                                                ご飯</x-bladewind::button>
                                        </div>
                                

                                <!-- セット3 -->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="path-to-your-image3.jpg" alt="写真3" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('卵料理（一個）')">卵料理（一個）</x-bladewind::button>
                                </div>

                                <!-- セット4 -->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="path-to-your-image4.jpg" alt="写真4" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('牛乳')">牛乳</x-bladewind::button>
                                </div>
                                <!--セット5-->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="path-to-your-image1.jpg" alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('お味噌汁')">お味噌汁</x-bladewind::button>
                                </div>
                                <!--セット6-->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="path-to-your-image1.jpg" alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('お味噌汁')">お味噌汁</x-bladewind::button>
                                </div>
                                <!--セット7-->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="path-to-your-image1.jpg" alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('お味噌汁')">お味噌汁</x-bladewind::button>
                                </div>
                                <!--セット8-->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="path-to-your-image1.jpg" alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('お味噌汁')">お味噌汁</x-bladewind::button>
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
                                    <img src="path-to-your-image1.jpg" alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('食パン')">食パン</x-bladewind::button>
                                </div>

                                <!-- セット2 -->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="path-to-your-image2.jpg" alt="写真2" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('ご飯')">ご飯</x-bladewind::button>
                                </div>

                                <!-- セット3 -->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="path-to-your-image3.jpg" alt="写真3" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('卵料理（一個）')">卵料理（一個）</x-bladewind::button>
                                </div>

                                <!-- セット4 -->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="path-to-your-image4.jpg" alt="写真4" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('牛乳')">牛乳</x-bladewind::button>
                                </div>
                                <!--セット5-->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="path-to-your-image1.jpg" alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('お味噌汁')">お味噌汁</x-bladewind::button>
                                </div>
                                <!--セット6-->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="path-to-your-image1.jpg" alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('お味噌汁')">お味噌汁</x-bladewind::button>
                                </div>
                                <!--セット7-->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="path-to-your-image1.jpg" alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('お味噌汁')">お味噌汁</x-bladewind::button>
                                </div>
                                <!--セット8-->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="path-to-your-image1.jpg" alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('お味噌汁')">お味噌汁</x-bladewind::button>
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
                                    <img src="path-to-your-image1.jpg" alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('食パン')">食パン</x-bladewind::button>
                                </div>

                                <!-- セット2 -->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="path-to-your-image2.jpg" alt="写真2" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('ご飯')">ご飯</x-bladewind::button>
                                </div>

                                <!-- セット3 -->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="path-to-your-image3.jpg" alt="写真3" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('卵料理（一個）')">卵料理（一個）</x-bladewind::button>
                                </div>

                                <!-- セット4 -->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="path-to-your-image4.jpg" alt="写真4" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('牛乳')">牛乳</x-bladewind::button>
                                </div>
                                <!--セット5-->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="path-to-your-image1.jpg" alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('お味噌汁')">お味噌汁</x-bladewind::button>
                                </div>
                                <!--セット6-->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="path-to-your-image1.jpg" alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('お味噌汁')">お味噌汁</x-bladewind::button>
                                </div>
                                <!--セット7-->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="path-to-your-image1.jpg" alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('お味噌汁')">お味噌汁</x-bladewind::button>
                                </div>
                                <!--セット8-->
                                <div class="flex flex-col items-center space-y-2">
                                    <img src="path-to-your-image1.jpg" alt="写真1" class="w-16 h-16 rounded-full">
                                    <x-bladewind::button ring_width="4" onclick="saveRecipe('お味噌汁')">お味噌汁</x-bladewind::button>
                                </div>
                            </div>
                        </x-bladewind::card>
                        
                    </x-bladewind::tab-content>
                </x-bladewind::tab-body>
            </x-bladewind::tab-group>
            <div class="mt-6">
                <h3 class="text-xl font-semibold">食べた朝食:</h3>
                <ul id="morning-list">
                <!-- 選択された料理名をここに表示 -->
                </ul>
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
</x-app-layout>
